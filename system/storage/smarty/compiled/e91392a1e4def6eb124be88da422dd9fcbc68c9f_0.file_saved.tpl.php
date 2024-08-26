<?php
/* Smarty version 5.1.0, created on 2024-07-29 11:46:05
  from 'file:dashboard/pages/user/contacts/saved.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7b93dc75e91_75170025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91392a1e4def6eb124be88da422dd9fcbc68c9f' => 
    array (
      0 => 'dashboard/pages/user/contacts/saved.tpl',
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
function content_66a7b93dc75e91_75170025 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/pages/user/contacts';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_contacts_title");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_contacts_tabsavedtitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_con_sav_6");?>
" zender-trash="contacts.saved">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_con_sav_10");?>
" zender-toggle="zender.add.contact">
                            <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_btn_addcontact");?>

                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_con_sav_15");?>
" zender-toggle="zender.import.contacts">
                            <i class="la la-upload la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_import_btn");?>

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
                    <table class="table" zender-table="contacts.saved"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
