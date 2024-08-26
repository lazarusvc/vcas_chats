<?php
/* Smarty version 4.4.1, created on 2024-05-31 18:17:11
  from '/home/eazysms1/public_html/templates/default/modules/header.block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a3a78abed3_04608216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d35cb621e84d9ca2fce96db3b1f3e47f293a0b4' => 
    array (
      0 => '/home/eazysms1/public_html/templates/default/modules/header.block.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a3a78abed3_04608216 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="home" class="wrapper bg-soft-primary">
  <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
        <a href="<?php echo site_url;?>
" zender-nav>
          <img class="logo-light" src="<?php echo get_image("logo_light");?>
" />
          <img class="logo-dark" src="<?php echo get_image("logo_dark");?>
" />
        </a>
      </div>
      
      <div class="navbar-collapse offcanvas-nav">
        <div class="offcanvas-header d-lg-none d-xl-none">
          <a href="<?php echo site_url;?>
">
            <img src="<?php echo get_image("logo_light");?>
" alt="<?php echo system_site_name;?>
" />
          </a>
          <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
        </div>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link scroll" href="#home"><?php echo __("lang_and_head_blck_21");?>
</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#features"><?php echo __("lang_and_head_blck_24");?>
</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#pricing"><?php echo __("lang_and_head_blck_27");?>
</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#clients"><?php echo __("lang_and_head_blck_30");?>
</a>
          </li> 
        </ul>
      </div>

      <div class="navbar-other ms-lg-4">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <?php if (logged_id) {?> 
            <li class="nav-item d-md-block">
                <a href="<?php echo site_url("dashboard");?>
" class="btn btn-sm btn-primary text-capitalize"><?php echo __("lang_and_head_blck_39");?>
</a>
            </li> 
            <li class="nav-item d-none d-md-block">
                <button class="btn btn-sm btn-danger text-capitalize" zender-action="logout"><?php echo __("lang_and_head_blck_42");?>
</button>
            </li>
            <?php } else { ?>
            <li class="nav-item d-md-block">
                <a href="<?php echo site_url("dashboard/authenticate/login");?>
" class="btn btn-sm btn-white text-capitalize"><?php echo __("lang_landing_nav_login");?>
</a>
            </li> 
            <?php }?> 

            <li class="nav-item d-lg-none">
                <div class="navbar-hamburger">
                    <button class="hamburger animate plain" data-toggle="offcanvas-nav">
                        <span></span>
                    </button>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </nav>
</header><?php }
}
