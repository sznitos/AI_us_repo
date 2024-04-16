<?php
include _ROOT_PATH.'/top.php';
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
</nav></header>                    
<div id="main" class="wrapper style1">
	<div class="container">
	<header class="major">
            <h2>Panel logowania</h2>
            <p>Wprowadź poświadczenia aby uzyskać dostęp do kalkulatora</p>
        </header>
	
 <!--aaaa-->
 <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
    <legend><h3>Wprowadź swoje dane logowania</h3></legend>
	<div class="row gtr-uniform gtr-50">
            <div class="col-6 col-12-xsmall">
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" placeholder="Login"/>
            </div>
            <div class="col-6 col-12-xsmall">
		<input id="id_pass" type="password" name="pass" placeholder="Hasło"/>
            </div>
	<div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Zaloguj się" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
                </ul>
        </div>	
    </div>
</form>	


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<pre><code>';
		foreach ( $messages as $key => $msg ) {
			echo $msg.'</br>';
		}
		echo '</pre></code>';
	}
}
?>

<?php
include _ROOT_PATH.'/bottom.php';