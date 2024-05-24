<?php
/* Smarty version 4.5.2, created on 2024-05-24 21:34:51
  from 'F:\Programy\xampp\htdocs\AI-repo\P7\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6650ebdb153d48_12884123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f32e2146dcc2ad19e329c8ce8389a0ae8dba2b' => 
    array (
      0 => 'F:\\Programy\\xampp\\htdocs\\AI-repo\\P7\\app\\views\\CalcView.tpl',
      1 => 1716579283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6650ebdb153d48_12884123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7925816946650ebdb149e82_13968471', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7276824056650ebdb14ac08_83453758', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_7925816946650ebdb149e82_13968471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7925816946650ebdb149e82_13968471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7276824056650ebdb14ac08_83453758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7276824056650ebdb14ac08_83453758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


</nav>
</header> 

<div id="main" class="wrapper style1">
    <div class="container">
        <h3>Kalkulator lokaty</h3>
        <div class="row gtr-150">
            <div class="col-4 col-12-medium">Cześć, <?php echo '<?php'; ?>
 echo $role;
echo($role == "admin") ? (" 😎✨") : (" 😊"); <?php echo '?>'; ?>
! </br>Wprowadź dane do kalkulatora lokat.</div>
            
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
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
                    </div> </div>   
            </form>	
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
