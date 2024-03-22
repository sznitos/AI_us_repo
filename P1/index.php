<?php
require_once dirname(__FILE__).'/config.php';	// biblioteki, bez nich nie ma co
// dirname(__FILE__) -> zwraca ścieżkę katalogu na dysku
//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/calc_view.php';	//

//require / include _once >>> przed załadowaniem sprawdza, czy już go nie ma

//TEST: modified via laptop
