<?php
/* Smarty version 4.4.1, created on 2024-05-31 18:17:11
  from '/home/eazysms1/public_html/templates/default/modules/analytics.block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a3a7931d03_10789872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd99a9865bd296306301be9b5d7a871fb9d32c6' => 
    array (
      0 => '/home/eazysms1/public_html/templates/default/modules/analytics.block.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a3a7931d03_10789872 (Smarty_Internal_Template $_smarty_tpl) {
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
