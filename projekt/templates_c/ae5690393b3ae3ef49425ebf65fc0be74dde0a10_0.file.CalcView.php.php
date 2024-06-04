<?php
/* Smarty version 4.5.2, created on 2024-04-30 15:04:13
  from 'C:\xampp\htdocs\AI-repo\P6\app\calc\CalcView.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6630ec4d5ccb66_35767951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae5690393b3ae3ef49425ebf65fc0be74dde0a10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AI-repo\\P6\\app\\calc\\CalcView.php',
      1 => 1714482101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630ec4d5ccb66_35767951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6998067156630ec4d5a9360_49608947', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1917882236630ec4d5ac8b9_53823244', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_6998067156630ec4d5a9360_49608947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6998067156630ec4d5a9360_49608947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1917882236630ec4d5ac8b9_53823244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1917882236630ec4d5ac8b9_53823244',
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
            Zysk (zł):<p>
            <table>
                <tr>
                    <th>BRUTTO</th>
                    <th>NETTO</th>
                </tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł 
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['res_n']->value->result_netto;?>

                </td>
            </table>
            </p>

            <?php }?>

        </div>

        <?php
}
}
/* {/block 'content'} */
}
