<?php
/* Smarty version 5.1.0, created on 2024-07-29 05:30:54
  from 'file:/home/u481720228/domains/vouchcast.com/public_html/chats/templates/default/pages/../modules/analytics.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a6b88e052081_21427911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb4671b2a31ba497b4936556ada426dc688b3f02' => 
    array (
      0 => '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/default/pages/../modules/analytics.block.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a6b88e052081_21427911 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/default/modules';
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
