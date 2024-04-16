<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
?>
<?php
include _ROOT_PATH.'/top.php';
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<ul>
    <li><a href="<?php print(_APP_ROOT); ?>/app/calc.php" class="button primary">Powrót do kalkulatora</a></li>
    <li><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a></li>
    <ul>
    </nav>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>	

<?php
include _ROOT_PATH.'/bottom.php';