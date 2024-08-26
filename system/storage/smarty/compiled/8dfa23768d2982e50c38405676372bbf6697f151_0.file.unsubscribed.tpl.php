<?php
/* Smarty version 4.4.1, created on 2024-05-31 12:31:04
  from '/home/eazysms1/public_html/templates/dashboard/pages/user/contacts/unsubscribed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659b4f8ea6c02_69941957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dfa23768d2982e50c38405676372bbf6697f151' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/user/contacts/unsubscribed.tpl',
      1 => 1717150520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
),false)) {
function content_6659b4f8ea6c02_69941957 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo __("lang_dashboard_contacts_title");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-unlink la-lg"></i> <?php echo __("lang_and_con_unsub_3");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger lift" title="<?php echo __("lang_and_con_unsub_6");?>
" zender-trash="contacts.unsubscribed">
                            <i class="la la-stream la-lg"></i>
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
                    <table class="table" zender-table="contacts.unsubscribed"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
