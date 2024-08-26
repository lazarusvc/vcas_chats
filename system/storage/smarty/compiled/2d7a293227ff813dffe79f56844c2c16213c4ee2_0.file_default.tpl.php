<?php
/* Smarty version 5.1.0, created on 2024-05-31 13:44:04
  from 'file:dashboard/widgets/charts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6659c6145649d8_22137465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d7a293227ff813dffe79f56844c2c16213c4ee2' => 
    array (
      0 => 'dashboard/widgets/charts/default.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6659c6145649d8_22137465 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/charts';
?><!DOCTYPE html>

<div id="chart"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	fetchInject([
		"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/functions.js");?>
"
	], fetchInject([
		"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/apexcharts.min.js");?>
",
		"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/iframeResizer.contentWindow.min.js");?>
"
	])).then(() => {
		zender.charts("<?php echo $_smarty_tpl->getValue('chart');?>
");
	});
<?php echo '</script'; ?>
><?php }
}
