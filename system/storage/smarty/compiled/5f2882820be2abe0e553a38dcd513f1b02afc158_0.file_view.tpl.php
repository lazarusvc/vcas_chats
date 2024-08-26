<?php
/* Smarty version 5.1.0, created on 2024-06-08 09:34:40
  from 'file:dashboard/widgets/modals/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6663fb80dbc090_58223816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2882820be2abe0e553a38dcd513f1b02afc158' => 
    array (
      0 => 'dashboard/widgets/modals/view.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6663fb80dbc090_58223816 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
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
