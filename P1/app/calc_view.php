<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>LokatoMat</title>
</head>
<body>
       
    <h1>Kalkulator lokaty</h1>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_cash">Kwota depozytu [PLN]: </label> <br />
        <input id="id_cash" type="text" name="cash" value="<?php if(isset($cash))print($cash); ?>" /><br />
        
        <label for="id_time">Czas lokaty [liczba miesięcy]: </label> <br />
        <input id="id_time" type="text" name="time" value="<?php if(isset($time))print($time); ?>" /><br />
        
        <label for="id_percent">Oprocentowanie w skali roku [%]: </label> <br />
	<input id="id_percent" type="text" name="percent" value="<?php if(isset($percent))print($percent); ?>" /><br />
        
	<input type="submit" value="Oblicz" />
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
      echo '<b>Zysk (netto): '.$result_netto.' zł<b/>' ;

?>
    
</div>
<?php } ?>

</body>
</html>