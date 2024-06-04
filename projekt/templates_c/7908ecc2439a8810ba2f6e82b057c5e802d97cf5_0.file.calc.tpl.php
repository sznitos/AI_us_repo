<?php
/* Smarty version 4.5.2, created on 2024-04-27 20:44:53
  from 'F:\Programy\xampp\htdocs\AI-repo\P5\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_662d47a5502862_99965737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7908ecc2439a8810ba2f6e82b057c5e802d97cf5' => 
    array (
      0 => 'F:\\Programy\\xampp\\htdocs\\AI-repo\\P5\\app\\calc.tpl',
      1 => 1713304716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662d47a5502862_99965737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1620565629662d47a54f5923_33341478', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1541282539662d47a54f60e8_91891913', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_1620565629662d47a54f5923_33341478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1620565629662d47a54f5923_33341478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakis tam tekst dla stopki. Lorem Ipsum...<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1541282539662d47a54f60e8_91891913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1541282539662d47a54f60e8_91891913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2>Prosty kalkulator</h2>

    <div class="row gtr-150">
        <div class="col-4 col-12-medium">Wprowadź dane do kalkulatora lokat.</div>
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
       
    <div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
            <input id="id_cash" type="text" name="cash" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['cash'];?>
" placeholder="Ile pieniędzy? [PLN]" />
        </div>
        <div class="col-6 col-12-xsmall">
            <input id="id_time" type="text" name="time" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['time'];?>
" placeholder="Na ile miesięcy?" />
        </div>    
        <div class="col-6 col-12-xsmall">
            <input id="id_percent" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percent'];?>
" placeholder="Oprocentowanie w skali roku?"/>
        </div>
    <div class="col-12">
        <ul class="actions">
            <li><input type="submit" value="Oblicz" class="primary" /></li>
        </ul>
    </div> 
	
</div>
</form></div>
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Uzyskane odsetki:</h4>
        <table><td>
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł (brutto)
	</td>
        <tr><td>
	<?php echo $_smarty_tpl->tpl_vars['result_netto']->value;?>
 zł (netto)
            </td> </table>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
