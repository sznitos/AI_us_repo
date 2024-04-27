<?php
/* Smarty version 4.5.2, created on 2024-04-27 22:14:47
  from 'F:\Programy\xampp\htdocs\AI-repo\P5\app\CalcView.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_662d5cb703a843_38971595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dabd7606413b3e34033c4de17a037ce0cd91f0de' => 
    array (
      0 => 'F:\\Programy\\xampp\\htdocs\\AI-repo\\P5\\app\\CalcView.php',
      1 => 1714248877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662d5cb703a843_38971595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1762524924662d5cb7030a98_70927083', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1504257473662d5cb70312b6_26718609', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_1762524924662d5cb7030a98_70927083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1762524924662d5cb7030a98_70927083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1504257473662d5cb70312b6_26718609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1504257473662d5cb70312b6_26718609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<?php'; ?>

//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
<?php echo '?>'; ?>

<ul>	
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/inna_chroniona.php">Inna chroniona strona</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="button primary">Wyloguj</a></li>
</ul>
</nav>
</header> 

<div id="main" class="wrapper style1">
    <div class="container">
    <h3>Kalkulator lokaty</h3>
    <div class="row gtr-150">
        <div class="col-4 col-12-medium">Cześć, <?php echo '<?php'; ?>
 echo $role; echo($role=="admin") ? (" 😎✨") : (" 😊"); <?php echo '?>'; ?>
! </br>Wprowadź dane do kalkulatora lokat.</div>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
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
<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
