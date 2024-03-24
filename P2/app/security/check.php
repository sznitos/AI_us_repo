<?php
require_once dirname(__FILE__).'/../../config.php';
//echo (dirname(__FILE__));
//inicjacja mechanizmu sesji
session_start();
// up - wbudowana funkcja w php | tworzy token, przedłuża
//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	include _ROOT_PATH.'/app/security/login.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}
//jeśli ok to idź dalej