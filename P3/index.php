<?php

require_once dirname(__FILE__) . '/config.php';

//przekierowanie przeglądarki klienta (redirect) -to samo co include, ale zmienia adres URL
//header("Location: "._APP_URL."/app/calc.php");
//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH . '/app/calc.php';
