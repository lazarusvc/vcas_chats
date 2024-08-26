<?php
/* Smarty version 5.1.0, created on 2024-06-02 01:44:44
  from 'file:dashboard/pages/errors/404.error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665b5e0c397029_70337523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1ca2a8e6423104b64c1476425bc6c6a1e7f4609' => 
    array (
      0 => 'dashboard/pages/errors/404.error.tpl',
      1 => 1717159113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665b5e0c397029_70337523 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/pages/errors';
?><div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">
            <div class="text-center">

                <h6 class="text-uppercase text-muted mb-4">
                    <?php echo $_smarty_tpl->getValue('title');?>

                </h6>

                <h1 class="display-4 mb-3">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_page_error404page_header");?>

                </h1>

                <p class="text-muted mb-4">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_page_error404page_tagline");?>

                </p>

                <a href="<?php echo site_url;?>
" class="btn btn-primary lift">
                    <i class="la la-arrow-circle-left"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_page_error404page_button");?>

                </a>
            </div>
        </div>
    </div>
</div><?php }
}
