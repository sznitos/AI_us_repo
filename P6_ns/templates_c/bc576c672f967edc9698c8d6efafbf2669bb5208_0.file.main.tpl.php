<?php
/* Smarty version 4.5.2, created on 2024-04-30 16:57:39
  from 'C:\xampp\htdocs\AI-repo\P6_ns\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_663106e3c976c2_79300122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc576c672f967edc9698c8d6efafbf2669bb5208' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AI-repo\\P6_ns\\app\\views\\templates\\main.tpl',
      1 => 1714489057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663106e3c976c2_79300122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator lokat" ?? null : $tmp);?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root_path']->value;?>
/assets/css/main.css">
         <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root_path']->value;?>
/assets/css/noscript.css"> </noscript>

</head>
<body class="is-preload">
<div id="page-wrapper">
    <div id="app_top">
<header id="header">
    <div id="app_top" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <h1 id="logo"><a href=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</a></h1>
        <nav id="nav">
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul></nav>
    </div>
    </div></div>
<div id="main" class="wrapper style1">
    <div class="container">
    <section>
        <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
        <p>
             <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

        </p>
        <p><a href="#app_content" class="primary">Idź do formularza</a></p>
    </section>
    </div>
        <div class="content-wrapper">

    <div class="container">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_760706977663106e3c961a3_23708338', 'content');
?>

    </div>
        </div></div></div>


<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Michał Kromoliński. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_760706977663106e3c961a3_23708338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_760706977663106e3c961a3_23708338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
