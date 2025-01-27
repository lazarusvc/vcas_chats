<?php
/* Smarty version 5.1.0, created on 2024-07-29 11:46:15
  from 'file:dashboard/pages/user/hosts/whatsapp.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7b947a47de2_61491932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a03cd5bb5604c95671c9fe5a9729f416e665699' => 
    array (
      0 => 'dashboard/pages/user/hosts/whatsapp.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_66a7b947a47de2_61491932 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/pages/user/hosts';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_userhosts_hostbreadcrumb");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_tabs_whatsappaccounts_titleheader");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_table_btn_refresh");?>
" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_accnt_6");?>
" relink-unique="none" wa-link-url="link" wa-link-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_widget_waaddaccount_title");?>
" zender-toggle="zender.add.whatsapp">
                            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_accnt_8");?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table" zender-table="whatsapp.accounts"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
