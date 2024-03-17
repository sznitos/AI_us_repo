<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
$cash = $_REQUEST ['cash'];
$time = $_REQUEST ['time'];
$percent = $_REQUEST ['percent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($cash) && isset($time) && isset($percent))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}
// usuniecie bialych znakow 10 000 > 10000 w celu unikniecia błędów + zignorowanie znakow [ . , ]
$cash = preg_replace('/[ ,.]/', '', $cash);
$percent = str_replace(',', '.',$percent);

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $cash == "" || $cash <= 0) {
	$messages [] = 'Nie podano prawidłowej kwoty depozytu!';
}
if ( $time == "" || $time <= 0) {
	$messages [] = 'Nie podano prawidłowej długości trwania depozytu!';
}
if ( $percent == "" || $percent <= 0) {
	$messages [] = 'Wprowadzono niepoprawną wartości oprocentowania!';
}
//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $cash i $time są liczbami całkowitymi
	if (! is_numeric( $cash )) {
		$messages [] = 'Wprowadzono <b>niepoprawnie</b> wartość depozytu!';
	}
	
	if (! is_numeric( $time )) {
		$messages [] = 'Wprowadzono <b>niepoprawnie</b> czas trawnia lokaty!';
	}
        
        if (! is_numeric( $percent )) {
		$messages [] = 'Wprowadzono <b>niepoprawnie</b> wartość oprocentowania!';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów    
        $f_time = $time / 12; // aby poprawnie wyliczyc oprocentowanie w skali roku
        $f_percent = $percent / 100; // zamiana wartości całkowitej procentów na procent (cz. ułamkowa)
        $result = $cash * $f_percent * $f_time;
//        podatek od lokat to 19%
        $result_netto = $result * (1-0.19);
//      sprawdzenie np.:
//        Zysk_nominalny = 10 000 zł × 3% × 2 lata = 10 000 zł × 0,03 × 2 = 600 zł
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$cash,$time,$percent,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';