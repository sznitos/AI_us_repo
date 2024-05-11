<?php require_once 'init.php';

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
//		include_once 'app/controllers/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new \app\controllers\CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
//		include_once 'app/controllers/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new \app\controllers\CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
            print('hejka 123');
		// zrób coś innego ...
	break;
}
