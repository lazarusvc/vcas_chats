<?php
/* Smarty version 5.1.0, created on 2024-07-29 11:49:24
  from 'file:dashboard/widgets/modals/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7ba0461d7e7_21467053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcb8ed86e5a8be941ea7f142e4d6b1bf67a72356' => 
    array (
      0 => 'dashboard/widgets/modals/view.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a7ba0461d7e7_21467053 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-<?php echo $_smarty_tpl->getValue('data')['icon'];?>
 la-lg"></i> <?php echo $_smarty_tpl->getValue('data')['title'];?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <p class="text-left text-wrap px-5">
            <?php echo $_smarty_tpl->getValue('data')['content'];?>

        </p>
    </div>
</div><?php }
}
