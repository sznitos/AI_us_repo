<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;
    private $result_netto;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->result_netto = new CalcResult();
    }

    // 1. pobranie parametrów
    //pobranie parametrów
    public function getParams() {
        $this->form->cash = isset($_REQUEST['cash']) ? $_REQUEST['cash'] : null;
        $this->form->time = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
        $this->form->percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
        //popraw ewentualne bledy (kropki-przecinki), biale znaki
        $this->form->cash = preg_replace('/[ ,.]/', '', $this->form->cash);
        $this->form->percent = str_replace(',', '.', $this->form->percent);
        }

    //walidacja parametrów z przygotowaniem zmiennych dla widoku
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->cash) && isset($this->form->time) && isset( $this->form->percent))){
        return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->cash == "") {
            $this->msgs->addError('Nie podano kwoty depozytu!');
        }
        if ($this->form->time == "") {
            $this->msgs->addError('Nie podano czasu trwania lokaty!');
        }
        if ($this->form->percent == "") {
            $this->msgs->addError('Nie podano oprocentowania w skali roku lokaty!');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        // sprawdzenie, czy $this->form->cash i $this->form->time są liczbami całkowitymi
        if (! $this->msgs->isError()) {
            if ((!is_numeric($this->form->cash) ) || ($this->form->cash <= 0)) {
                $this->msgs->addError('Podaj poprawną <b>kwotę depozytu!');
            }
            if ((!is_numeric($this->form->time)) || ($this->form->time <= 0)) {
                $this->msgs->addError('Wprowadź poprawny <b>czas depozytu!</b>');
            }
            if ((!is_numeric($this->form->percent)) || ($this->form->percent <= 0.00)) {
                $this->msgs->addError('Wprowadź poprawną <b>wysokość oprocentowania</b>');
            }
        }
        return ! $this->msgs->isError();
    }

        public function process() {
            $this->getparams();
            
            if ($this->validate()) {
                //konwersja parametrów na int
                $this->form->cash = intval($this->form->cash);
                $this->form->time = intval($this->form->time);
                $this->msgs->addInfo('Parametry poprawne.');

                //wykonanie operacji + zaokraglij do 2 miejsc po przecinku (grosza nie połamiemy)
                $this->result->result = round(($this->form->cash * $this->form->time * $this->form->percent * 0.01), 2);
//                $this->result_netto->result_netto = round($this->result * (1 - 0.23), 2);
                $this->result_netto->result_netto = round($this->result->result * (1 - 0.23), 2);

                $this->msgs->addInfo('Wykonano obliczenia.');
            }
            $this->generateView();
        }


        public function generateView(){
            global $conf;
            
            $smarty = new Smarty();
            $smarty->assign('conf',$conf);
            
            $smarty->assign('page_title', 'Kalkulator lokat');
            $smarty->assign('page_description', 'Jedyny słuszny kalkulator lokat');
            $smarty->assign('page_header', 'Szablony Smarty');
            $smarty->assign('css_path', $conf->css_path);
            $smarty->assign('msgs',$this->msgs);    
            $smarty->assign('form',$this->form);
            $smarty->assign('res',$this->result);
            $smarty->assign('res_n',$this->result_netto);

            $smarty->display($conf->root_path.'/app/calc/CalcView.php');

    }
}