<?php
/* Smarty version 5.1.0, created on 2024-08-04 01:21:40
  from 'file:dashboard/pages/admin/widgets.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66aec9947d16d9_94447731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aa752a928242b14c393560ed48930678c1aeadd' => 
    array (
      0 => 'dashboard/pages/admin/widgets.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../modules/header.block.tpl' => 1,
    'file:../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_66aec9947d16d9_94447731 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/pages/admin';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_modules_header_line45");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-puzzle-piece la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_tabwidgetstitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" zender-toggle="zender.add.widget">
                            <i class="la la-puzzle-piece la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_btn_addwidget");?>

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
                    <table class="table" zender-table="administration.widgets"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
