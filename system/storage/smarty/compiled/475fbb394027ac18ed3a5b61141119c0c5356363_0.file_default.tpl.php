<?php
/* Smarty version 5.1.0, created on 2024-07-29 09:58:42
  from 'file:dashboard/widgets/charts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7a012c03f33_44150208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475fbb394027ac18ed3a5b61141119c0c5356363' => 
    array (
      0 => 'dashboard/widgets/charts/default.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a7a012c03f33_44150208 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/charts';
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
