<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów
//pobranie parametrów
function getParams(&$cash,&$time,&$percent){
	$cash = isset($_REQUEST['cash']) ? $_REQUEST['cash'] : null;
	$time = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
	$percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;	
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
// sprawdzenie, czy parametry zostały przekazane

//function validate(&$cash,&$time,&$percent,&$messages){
//    if ( ! (isset($cash) && isset($time) && isset($percent))) {
//    	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
//    	return false;
//    }
//    // usuniecie bialych znakow 10 000 > 10000 w celu unikniecia błędów + zignorowanie znakow [ . , ]
//    $cash = preg_replace('/[ ,.]/', '', $cash);
//    $percent = str_replace(',', '.',$percent);
//    print("TEST:".$cash.$time.$percent);
//     if ( $cash == "" || $cash <= 0) {
//    	$messages [] = 'Nie podano prawidłowej kwoty depozytu!';
//    }
//    if ( $time == "" || $time <= 0) {
//    	$messages [] = 'Nie podano prawidłowej długości trwania depozytu!';
//    }
//    if ( $percent == "" || $percent <= 0) {
//    	$messages [] = 'Wprowadzono niepoprawną wartości oprocentowania!';
//    }
//    if (empty( $messages )) {
//    	if (! is_numeric( $cash )) {
//            	$messages [] = 'Wprowadzono <b>niepoprawnie</b> wartość depozytu!';
//            }
//    	if (! is_numeric( $time )) {
//    		$messages [] = 'Wprowadzono <b>niepoprawnie</b> czas trawnia lokaty!';
//    	}
//            if (! is_numeric( $percent )) {
//    		$messages [] = 'Wprowadzono <b>niepoprawnie</b> wartość oprocentowania!';
//	}
//    }
//    //nie ma sensu walidować dalej gdy brak parametrów
//    print(count ($messages));
//
//    if (count ( $messages ) != 0) return false;
//    	else return true;
//}

// NEW

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$cash,&$time,&$percent,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($cash) && isset($time) && isset($percent))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $cash == "") {
		$messages [] = 'Nie podano kwoty depozytu';
	}
	if ( $time == "") {
		$messages [] = 'Nie podano czasu trwania lokaty';
	}
        if ( $percent == "") {
		$messages [] = 'Nie podano oprocentowania w skali roku lokaty';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $cash i $time są liczbami całkowitymi
	if (! is_numeric( $cash )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $time )) {
		$messages [] = 'Wartość czasu depozytu musi być liczbą całkowitą';
	}	
	if ( ( $percent <= 0.00 )) {
		$messages [] = 'Oprocentowanie nie może być mniejsze od 0';
	}
	if (count ( $messages ) != 0) return false;
	else return true;
}
function process(&$cash,&$time,&$percent,&$messages,&$result, &$result_netto){
	global $role;
	
	//konwersja parametrów na int
	$cash = intval($cash);
	$time = intval($time);
	
	//wykonanie operacji
        $result = $cash * $time * $percent * 0.01; 
        $result_netto = $result * (1 - 0.23);

}

//definicja zmiennych kontrolera
$cash = null;
$time = null;
$percent = null;
$result = null;
$result_netto = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($cash,$time,$percent);
if ( validate($cash,$time,$percent,$messages) ) { // gdy brak błędów
	process($cash,$time,$percent,$messages,$result,$result_netto);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$cash,$time,$percent,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';