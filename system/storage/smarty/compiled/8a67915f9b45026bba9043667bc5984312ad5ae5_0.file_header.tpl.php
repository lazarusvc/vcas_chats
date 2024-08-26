<?php
/* Smarty version 5.1.0, created on 2024-05-31 13:43:47
  from 'file:dashboard/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6659c603806ab0_87069998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a67915f9b45026bba9043667bc5984312ad5ae5' => 
    array (
      0 => 'dashboard/header.tpl',
      1 => 1717159113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modules/sidebar.block.tpl' => 1,
  ),
))) {
function content_6659c603806ab0_87069998 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard';
?><!DOCTYPE html>
<html lang="en" <?php if (language_rtl) {?>dir="rtl"<?php }?>>

<head>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(system_site_desc,165);?>
">
    <link rel="icon" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("favicon");?>
">

    <title><?php echo $_smarty_tpl->getValue('title');?>
 &middot; <?php echo system_site_name;?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/line-awesome.min.css");?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/fonts/feather/feather.css");?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/flag-icon.min.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
if ('logged_theme_color' == "dark") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/bootstrap.dark.rtl.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/bootstrap.rtl.min.css");
}
} else {
if ('logged_theme_color' == "dark") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/bootstrap.dark.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/bootstrap.min.css");
}
}?>" />
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/style.rtl.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/style.min.css");
}?>">
</head>

<body <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("auth/default","auth/forgot","auth/register"))) {?>class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"<?php }?> <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("auth/social.error","plugin/plugin.page","plugin/plugin.error","errors/404.error","misc/payment","misc/unsubscribe"))) {?>class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"<?php }?>>
    <?php if (logged_id && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("auth/default","auth/social.error","plugin/plugin.page","plugin/plugin.error","errors/404.error","misc/payment","misc/unsubscribe"))) {?>
    <?php $_smarty_tpl->renderSubTemplate("file:./modules/sidebar.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
}
