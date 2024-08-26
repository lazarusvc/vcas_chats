<?php
/* Smarty version 5.1.0, created on 2024-06-08 09:35:06
  from 'file:/home/eazysms1/public_html/templates/dashboard/pages/user/contacts/../../../modules/header.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6663fb9a248fc2_54414451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58d59532d0a18606f0763b8883e355aa77e89117' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/user/contacts/../../../modules/header.block.tpl',
      1 => 1717159113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6663fb9a248fc2_54414451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/modules';
?><nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container">
        <div class="me-4">
            <?php if (system_freemodel < 2) {?>
            <a class="btn btn-md btn-primary mb-1 lift" href="#" zender-toggle="zender.user.subscription">
                <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menusubscription");?>

            </a>
            <?php } else { ?>
                <?php if (!empty($_smarty_tpl->getValue('data')['package'])) {?>
                    <a class="btn btn-md btn-primary mb-1 lift" href="#" zender-toggle="zender.user.subscription">
                        <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menusubscription");?>

                    </a>
                <?php }?>
            <?php }?>

            <a class="btn btn-md btn-primary mb-1 lift" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/misc/packages");?>
" zender-nav>
                <i class="la la-cubes la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_packages");?>

            </a>

            <a class="btn btn-md btn-primary mb-1 lift" href="#" zender-toggle="zender.redeem">
                <i class="la la-ticket la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_redeem");?>

            </a>
        </div>

        <div class="navbar-user" zender-usernav>
            <div class="dropdown">
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo logged_avatar;?>
" class="avatar-img rounded-circle">
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right">
                    <a href="#" class="dropdown-item" zender-toggle="zender.user.settings">
                        <i class="la la-user-cog"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menusettings");?>

                    </a>

                    <?php if (impersonate) {?>
                    <a href="#" class="dropdown-item" auth-type="exit" zender-action="impersonate">
                        <i class="la la-times-circle"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_impersonate_exit_btn");?>

                    </a>
                    <?php } else { ?>
                    <a href="#" class="dropdown-item" zender-action="logout">
                        <i class="la la-sign-out"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menulogout");?>

                    </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</nav><?php }
}
