<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
//include _ROOT_PATH . '/app/security/check.php';

// 1. pobranie parametrów
//pobranie parametrów
function getParams(&$form) {
    $form['cash'] = isset($_REQUEST['cash']) ? $_REQUEST['cash'] : null;
    $form['time'] = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
    $form['percent'] = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
    //popraw ewentualne bledy (kropki-przecinki), biale znaki
    $form['cash'] = preg_replace('/[ ,.]/', '', $form['cash']);
    $form['percent'] = str_replace(',', '.', $form['percent']);
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form, &$infos, &$msgs, &$hide_intro) {
    // sprawdzenie, czy parametry zostały przekazane
    if ( ! (isset($form['cash']) && isset($form['time']) && isset( $form['percent']))){
        return false;
    }
    $hide_intro = true;
    
    $infos [] = 'Przekazano parametry.';
    
    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ($form['cash'] == "") $msgs [] = 'Nie podano kwoty depozytu!';
    if ($form['time'] == "") $msgs [] = 'Nie podano czasu trwania lokaty!';
    if ($form['percent'] == "") $msgs [] = 'Nie podano oprocentowania w skali roku lokaty!';

    //nie ma sensu walidować dalej gdy brak parametrów
    // sprawdzenie, czy $form['cash'] i $form['time'] są liczbami całkowitymi
    if ((!is_numeric($form['cash']) ) || ($form['cash'] <= 0)) $msgs [] = 'Podaj poprawną <b>kwotę depozytu!</b>';
    if ((!is_numeric($form['time'])) || ($form['time'] <= 0)) $msgs [] = 'Wprowadź poprawny <b>czas depozytu!</b>';
    if ((!is_numeric($form['percent'])) || ($form['percent'] <= 0.00)) $msgs [] = 'Wprowadź poprawną <b>wysokość oprocentowania</b>';
    if (count($msgs) > 0) return false;
    else return true;
}

function process(&$form, &$infos, &$msgs, &$result, &$result_netto) {
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
    //konwersja parametrów na int
    $form['cash'] = intval($form['cash']);
    $form['time'] = intval($form['time']);

    //wykonanie operacji + zaokraglij do 2 miejsc po przecinku (grosza nie połamiemy)
    $result = round(($form['cash'] * $form['time'] * $form['percent'] * 0.01), 2);
    $result_netto = round($result * (1 - 0.23), 2);
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$result_netto = null;
$hide_intro = false;

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result,$result_netto);
}
// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator lokat');
$smarty->assign('page_description','Jedyny słuszny kalkulator lokat');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('css_path',_CSS_PATH);
$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('result_netto',$result_netto);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');