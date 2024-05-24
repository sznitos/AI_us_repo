<?php
<<<<<<< OURS
/* Smarty version 4.5.2, created on 2024-05-24 23:57:58
=======
/* Smarty version 4.5.2, created on 2024-05-24 22:15:26
>>>>>>> THEIRS
  from 'F:\Programy\xampp\htdocs\AI-repo\P7\app\views\CalcView.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
<<<<<<< OURS
  'unifunc' => 'content_66510d66a86a15_83574936',
=======
  'unifunc' => 'content_6650f55ee54a62_38932551',
>>>>>>> THEIRS
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f3ee232f80fa338cab85d683ee01303ef3f149' => 
    array (
      0 => 'F:\\Programy\\xampp\\htdocs\\AI-repo\\P7\\app\\views\\CalcView.php',
<<<<<<< OURS
      1 => 1716587876,
=======
      1 => 1716581725,
>>>>>>> THEIRS
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
<<<<<<< OURS
function content_66510d66a86a15_83574936 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6650f55ee54a62_38932551 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> THEIRS
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< OURS
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27501903366510d66a7bb37_69725483', 'footer');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14734667906650f55ee4bb74_96493433', 'footer');
>>>>>>> THEIRS
?>


<?php 
<<<<<<< OURS
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148491819566510d66a7c875_88195744', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14298913276650f55ee4c898_06997424', 'content');
>>>>>>> THEIRS
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
<<<<<<< OURS
class Block_27501903366510d66a7bb37_69725483 extends Smarty_Internal_Block
=======
class Block_14734667906650f55ee4bb74_96493433 extends Smarty_Internal_Block
>>>>>>> THEIRS
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< OURS
    0 => 'Block_27501903366510d66a7bb37_69725483',
=======
    0 => 'Block_14734667906650f55ee4bb74_96493433',
>>>>>>> THEIRS
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
<<<<<<< OURS
class Block_148491819566510d66a7c875_88195744 extends Smarty_Internal_Block
=======
class Block_14298913276650f55ee4c898_06997424 extends Smarty_Internal_Block
>>>>>>> THEIRS
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< OURS
    0 => 'Block_148491819566510d66a7c875_88195744',
=======
    0 => 'Block_14298913276650f55ee4c898_06997424',
>>>>>>> THEIRS
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['user']->value->login != null) {?>
<h3><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj się</a></h3>
<?php }?>
</nav>
</header> 

<div id="main" class="wrapper style1">
    <div class="container">
        <h3>Kalkulator lokaty</h3>
        <div class="row gtr-150">
            <div class="col-4 col-12-medium">Wprowadź dane do kalkulatora lokat.</div>
            
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
<div class ="col-4 col-12-medium">
    <b>Zysk (zł):</b>
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
<<<<<<< OURS
            </p>
</div>

=======

            </div>
>>>>>>> THEIRS
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
