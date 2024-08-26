<?php
/* Smarty version 4.4.1, created on 2024-05-31 12:19:23
  from '/home/eazysms1/public_html/templates/dashboard/pages/user/whatsapp/queue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659b23bb9f307_18616802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f274558e38a0d4fa8ddb3e857b25d375dd174e53' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/user/whatsapp/queue.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
),false)) {
function content_6659b23bb9f307_18616802 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo __("lang_and_dash_pg_whats_line10");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-tasks la-lg"></i> <?php echo __("lang_tabs_wapage_queuetitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo __("lang_table_btn_refresh");?>
" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-danger lift" title="<?php echo __("lang_and_what_sent_6");?>
" zender-trash="whatsapp.sent">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo __("lang_and_what_sent_10");?>
" zender-toggle="zender.whatsapp.quick">
                            <i class="la la-telegram la-lg"></i> <?php echo __("lang_and_what_sent_12");?>

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
                    <table class="table table-striped" zender-table="whatsapp.queue"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
