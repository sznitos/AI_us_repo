<?php

require_once dirname(__FILE__) . '/init.php';

//przekierowanie przeglądarki klienta (redirect) -to samo co include, ale zmienia adres URL
//header("Location: "._APP_URL."/app/calc.php");
//header("Location: ".$conf->app_url."/app/calc.php");  bardziej wydajny
//przekazanie żądania do następnego dokumentu ("forward")

include $conf->root_path.'/ctrl.php';
