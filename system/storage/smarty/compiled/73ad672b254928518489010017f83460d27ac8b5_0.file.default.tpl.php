<?php
/* Smarty version 4.4.1, created on 2024-05-31 11:17:57
  from '/home/eazysms1/public_html/templates/dashboard/widgets/charts/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a3d5bb73f8_99416805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ad672b254928518489010017f83460d27ac8b5' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/widgets/charts/default.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a3d5bb73f8_99416805 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<div id="chart"></div>

<?php echo '<script'; ?>
 src="<?php echo _assets("js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	fetchInject([
		"<?php echo _assets("js/functions.js");?>
"
	], fetchInject([
		"<?php echo _assets("js/libs/apexcharts.min.js");?>
",
		"<?php echo _assets("js/libs/iframeResizer.contentWindow.min.js");?>
"
	])).then(() => {
		zender.charts("<?php echo $_smarty_tpl->tpl_vars['chart']->value;?>
");
	});
<?php echo '</script'; ?>
><?php }
}
