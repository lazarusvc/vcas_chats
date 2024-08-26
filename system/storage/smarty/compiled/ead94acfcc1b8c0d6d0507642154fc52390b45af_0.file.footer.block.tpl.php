<?php
/* Smarty version 4.4.1, created on 2024-05-31 18:17:11
  from '/home/eazysms1/public_html/templates/default/modules/footer.block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a3a79abd92_01141525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead94acfcc1b8c0d6d0507642154fc52390b45af' => 
    array (
      0 => '/home/eazysms1/public_html/templates/default/modules/footer.block.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a3a79abd92_01141525 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="bg-light">
    <div class="container pt-13 pt-md-15 pb-7">
        <div class="row gy-6 gy-lg-0">
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="h2 text-capitalize mb-3"><?php echo __("lang_and_def_f_blck_6");?>
</h3>
                    <p class="lead text-capitalize mb-5"><?php echo __("lang_and_def_f_blck_7");?>
</p>
                    <a href="<?php echo site_url("dashboard/authenticate/register");?>
" class="btn btn-primary"><?php echo __("lang_and_def_f_blck_8");?>
</a>
                </div>
            </div>

            <div class="col-md-4 col-lg-2 offset-lg-2">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo __("lang_landing_footer_ourcompnew");?>
</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="#" zender-page="3/about"><?php echo __("lang_landing_footer_about");?>
</a></li>
                        <li><a href="#" zender-page="5/privacy-policy"><?php echo __("lang_landing_footer_privacy");?>
</a></li>
                        <li><a href="#" zender-page="4/terms-of-service"><?php echo __("lang_landing_footer_tos");?>
</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo __("lang_landing_footer_links");?>
</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="<?php echo site_url("dashboard/authenticate/login");?>
"><?php echo __("lang_landing_footer_login");?>
</a></li>
                        <li><a href="<?php echo site_url("dashboard/authenticate/register");?>
"><?php echo __("lang_landing_footer_register");?>
</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo __("lang_and_def_f_blck_35");?>
</h4>
                    <address>1231 Tomas Mapua St, Santa Cruz, Manila, 1003 Metro Manila, Philippines</address>
                    <a href="mailto:mail@company.com">mail@company.com</a><br />
                    +12 123 456 7890
                </div>
            </div>
        </div>

        <hr class="mt-13 mt-md-15 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">
            <p class="mb-2 mb-lg-0"><?php echo __("lang_landing_footer_copyright");?>
 &copy; <?php echo date("Y");?>
</p>
            <nav class="nav social text-md-end">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-github"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
        </div>
    </div>
</footer><?php }
}
