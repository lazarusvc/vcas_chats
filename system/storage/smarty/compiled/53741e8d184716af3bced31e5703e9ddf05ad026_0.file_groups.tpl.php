<?php
/* Smarty version 5.1.0, created on 2024-06-08 09:36:53
  from 'file:dashboard/pages/user/whatsapp/groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6663fc0514d1b7_00171510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53741e8d184716af3bced31e5703e9ddf05ad026' => 
    array (
      0 => 'dashboard/pages/user/whatsapp/groups.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_6663fc0514d1b7_00171510 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/pages/user/whatsapp';
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
                            <i class="la la-users la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_wagroups_header");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_rev_6");?>
" zender-trash="whatsapp.groups">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_what_sent_10");?>
" zender-toggle="zender.whatsapp.groups">
                            <i class="la la-layer-group la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_wagroups_fetchbtn");?>

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
                    <table class="table table-striped" zender-table="whatsapp.groups"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
