<?php
include _ROOT_PATH.'/top.php';
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<ul>	
    <li><a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php">Inna chroniona strona</a></li>
    <li><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="button primary">Wyloguj</a></li>
</ul>
</nav>
</header> 

<div id="main" class="wrapper style1">
    <div class="container">
    <h3>Kalkulator lokaty</h3>
    <div class="row gtr-150">
        <div class="col-4 col-12-medium">Cześć, <?php echo $role; echo($role=="admin") ? (" 😎✨") : (" 😊"); ?>! </br>Wprowadź dane do kalkulatora lokat.</div>
<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post">
    <div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
            <input id="id_cash" type="text" name="cash" value="" placeholder="Ile pieniędzy? [PLN]" />
        </div>
        <div class="col-6 col-12-xsmall">
            <input id="id_time" type="text" name="time" value="" placeholder="Na ile miesięcy?" />
        </div>    
        <div class="col-6 col-12-xsmall">
            <input id="id_percent" type="text" name="percent" value="" placeholder="Oprocentowanie w skali roku?"/>
        </div>
    <div class="col-12">
        <ul class="actions">
            <li><input type="submit" value="Oblicz" class="primary" /></li>
            <li><input type="reset" value="Wyczyść" /></li>
        </ul>
    </div>    
</form>	
    </div>    
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages) && is_array($messages)) {
	if (count ( $messages ) > 0) {
		echo '<pre><code>';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</pre></code>';
	}
}
?>

<?php if (isset($result) && isset($result_netto)){ ?>

<?php echo "<p>Zysk nominalny (brutto): ".$result." zł</p>" ;
      echo "<p><b>Zysk (netto): ".$result_netto." zł</b></p>" ;

?>
</div>   


<?php } ?>

    <?php

include _ROOT_PATH.'/bottom.php';