<?php
/* Smarty version 5.1.0, created on 2024-08-01 22:19:19
  from 'file:dashboard/pages/user/whatsapp/campaigns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66ac42275ce7e0_26134197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '876bf2bc7203edefbfd080ec10b9a7bc20d084f9' => 
    array (
      0 => 'dashboard/pages/user/whatsapp/campaigns.tpl',
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
function content_66ac42275ce7e0_26134197 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/pages/user/whatsapp';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_whats_line10");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-coffee la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_wacampaigns_header");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_table_btn_refresh");?>
" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_sent_15");?>
" zender-toggle="zender.whatsapp.bulk">
                            <i class="la la-mail-bulk la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_sent_17");?>

                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_sent_20");?>
" zender-toggle="zender.whatsapp.excel">
                            <i class="la la-file-excel la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_bulkexcel");?>

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
                    <table class="table table-striped" zender-table="whatsapp.campaigns"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
