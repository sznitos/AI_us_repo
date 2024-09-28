<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
    private $form;
    private $database;
    
    public function __construct(){
        // Stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
        $this->database = new \Medoo\Medoo([
            // [required]
            'type' => 'mysql',
            'host' => 'localhost',
            'database' => 'library_db',
            'username' => 'library_dbadmin',
            'password' => 'vFjIhweUrVOWkWd-', // Silne hasło
            // [optional]
            'charset' => 'utf8',
            'collation' => 'utf8_polish_ci',
            'port' => 3306,
            'option' => [
                \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        ]);
    }
    
    public function getParams(){
        // Pobranie parametrów
        $this->form->login = getFromRequest('login');
        $this->form->pass = getFromRequest('pass');
    }
    
public function validate() {
    // Sprawdzenie, czy parametry zostały przekazane
    if (! (isset($this->form->login) && isset($this->form->pass))) {
        // Sytuacja wystąpi, kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
        return false;
    }
    
    // Nie ma sensu walidować dalej, gdy brak parametrów
    if (!getMessages()->isError()) {
        // Sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->login == "") {
            getMessages()->addError('Nie podano loginu');
        }
        if ($this->form->pass == "") {
            getMessages()->addError('Nie podano hasła');
        }
    }
    echo "Próba pobrania danych z bazy danych...";
    // Nie ma sensu walidować dalej, gdy brak wartości
    if (!getMessages()->isError()) {
        // Sprawdzenie, czy dane logowania poprawne
echo "Próba pobrania danych z bazy danych...";
// Pobierz hasła użytkowników
$users = $this->database->select("user", ["user_id", "password"]);

foreach ($users as $user) {
    // Haszuj hasło za pomocą password_hash()
    $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);

    // Zaktualizuj rekord w bazie danych z zahaszowanym hasłem
    $this->database->update("user", ["password" => $hashedPassword], ["user_id" => $user['user_id']]);
}

$record = $this->database->get("user", ["password", "login"], ["login" => $this->form->login]);

if (!$record) {
    echo "Błąd pobierania danych z bazy danych: " . $this->database->error()[2];
} else {
    var_dump($record);
}

        
        if ($record && password_verify($this->form->pass, $record['password'])) {
            // Logowanie udane
            return true;
        } else {
            // Błędny login lub hasło
            getMessages()->addError('Niepoprawny login lub hasło');
        }
    }
    
    return false;
}

    public function action_login(){

        $this->getParams();
        
        if ($this->validate()){
            // Logowanie udane => przekieruj na stronę główną
            header("Location: ".getConf()->app_url."/");
        } else {
            // Logowanie nieudane => wyświetl stronę logowania
            $this->generateView(); 
        }
        
    }
    
    public function action_logout(){
        // Zakończenie sesji
        session_destroy();
        
        // Wyświetlenie strony logowania z informacją
        getMessages()->addInfo('Poprawnie wylogowano z systemu');

        $this->generateView();         
    }
    
    public function generateView(){
        
        getSmarty()->assign('page_title','LibraApp - logowanie');
        getSmarty()->assign('page_description','Proszę o wprowadzenie danych logowania do systemu.');
        getSmarty()->assign('form',$this->form);
        getSmarty()->display('LoginView.tpl');        
    }
}
