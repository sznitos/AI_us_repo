<?php
/* Smarty version 4.5.2, created on 2024-05-26 12:32:50
  from 'F:\Programy\xampp\htdocs\AI-repo\P8\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66530fd2384a49_79485205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea134fccff88664dbb520e4b73852e28adc4149' => 
    array (
      0 => 'F:\\Programy\\xampp\\htdocs\\AI-repo\\P8\\app\\views\\LoginView.tpl',
      1 => 1716588432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66530fd2384a49_79485205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88748781066530fd22e1462_98402738', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_88748781066530fd22e1462_98402738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88748781066530fd22e1462_98402738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
    <div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
            <div class="col-12">
            <legend>Logowanie do systemu</legend>
            	<fieldset>
            </div>
            <div class="container">
                
                    <div class="col-6 col-12-xsmall">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
                    </div>
                    <div class="col-6 col-12-xsmall">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
                    </div>
		<div class="col-12">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
                	
	<div class="container">
        </div></div>
        </fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
