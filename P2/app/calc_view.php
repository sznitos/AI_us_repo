<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
    
    <h1>Kalkulator lokaty</h1>
<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
	<label for="id_cash">Kwota depozytu [PLN]: </label> <br />
        <input id="id_cash" type="text" name="cash" value="<?php out($cash); ?>" /><br />
        
        <label for="id_time">Czas lokaty [liczba miesięcy]: </label> <br />
        <input id="id_time" type="text" name="time" value="<?php out($time); ?>" /><br />
        
        <label for="id_percent">Oprocentowanie w skali roku [%]: </label> <br />
	<input id="id_percent" type="text" name="percent" value="<?php out($percent); ?>" /><br />
        </fieldset>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:400px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #0f0; width:300px;">
<?php echo 'Zysk nominalny (brutto): '.$result.' zł<br />' ;
//      echo '<b>Zysk (netto): '.$result_netto.' zł<b/>' ;

?>
    
</div>
<?php } ?>
</body>
</html>