<?php
/* Smarty version 5.1.0, created on 2024-05-31 13:44:25
  from 'file:default/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6659c6299f7166_88861700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080d07711a0042f06a21377542c21cc991cb54d7' => 
    array (
      0 => 'default/header.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modules/header.block.tpl' => 1,
  ),
))) {
function content_6659c6299f7166_88861700 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/default';
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

    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Manrope:wght@400;500;700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/line-awesome.min.css");?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/flag-icon.min.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/bootstrap.rtl.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/bootstrap.css");
}?>">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/libs/plugins.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/style.rtl.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("css/style.min.css");
}?>">

    <style>
        .accent-header {
            background: url(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("bg");?>
) top center;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php $_smarty_tpl->renderSubTemplate("file:./modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
