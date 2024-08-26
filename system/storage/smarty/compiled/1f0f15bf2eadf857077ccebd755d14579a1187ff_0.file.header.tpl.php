<?php
/* Smarty version 4.4.1, created on 2024-05-31 13:21:18
  from '/home/eazysms1/public_html/templates/dashboard/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659c0be660d56_12082163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f0f15bf2eadf857077ccebd755d14579a1187ff' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/header.tpl',
      1 => 1717158039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modules/sidebar.block.tpl' => 1,
  ),
),false)) {
function content_6659c0be660d56_12082163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/eazysms1/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!DOCTYPE html>
<html lang="en" <?php if (language_rtl) {?>dir="rtl"<?php }?>>

<head>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo smarty_modifier_truncate(system_site_desc,165);?>
">
    <link rel="icon" href="<?php echo get_image("favicon");?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 &middot; <?php echo system_site_name;?>
</title>

    <link rel="stylesheet" href="<?php echo _assets("css/libs/line-awesome.min.css");?>
">
    <link rel="stylesheet" href="<?php echo assets("css/fonts/feather/feather.css");?>
">
    <link rel="stylesheet" href="<?php echo _assets("css/libs/flag-icon.min.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo assets("css/libs/bootstrap.rtl.min.css");
} else {
echo assets("css/libs/bootstrap.min.css");
}?>" />
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo assets("css/style.rtl.min.css");
} else {
echo assets("css/style.min.css");
}?>">
</head>

<body <?php if (in_array($_smarty_tpl->tpl_vars['page']->value,array("auth/default","auth/forgot","auth/register"))) {?>class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"<?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['page']->value,array("auth/social.error","misc/payment","misc/unsubscribe"))) {?>class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"<?php }?>>
    <?php if (logged_id && !in_array($_smarty_tpl->tpl_vars['page']->value,array("auth/default"))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./modules/sidebar.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
