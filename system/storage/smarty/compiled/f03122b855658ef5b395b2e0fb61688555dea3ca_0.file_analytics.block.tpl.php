<?php
/* Smarty version 5.1.0, created on 2024-05-31 13:44:25
  from 'file:/home/eazysms1/public_html/templates/default/pages/../modules/analytics.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6659c629a728c3_33661954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f03122b855658ef5b395b2e0fb61688555dea3ca' => 
    array (
      0 => '/home/eazysms1/public_html/templates/default/pages/../modules/analytics.block.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6659c629a728c3_33661954 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/default/modules';
if (!empty(system_analytics_key)) {
echo '<script'; ?>
 async src="//www.googletagmanager.com/gtag/js?id=<?php echo system_analytics_key;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
        dataLayer.push(arguments);
    }
  gtag("js", new Date());

  gtag("config", "<?php echo system_analytics_key;?>
");
<?php echo '</script'; ?>
>
<?php }
}
}
