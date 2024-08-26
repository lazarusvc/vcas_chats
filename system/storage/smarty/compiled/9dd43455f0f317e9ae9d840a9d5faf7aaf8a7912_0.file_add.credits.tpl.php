<?php
/* Smarty version 5.1.0, created on 2024-07-29 11:51:06
  from 'file:dashboard/widgets/modals/add.credits.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7ba6ab26096_92681806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd43455f0f317e9ae9d840a9d5faf7aaf8a7912' => 
    array (
      0 => 'dashboard/widgets/modals/add.credits.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a7ba6ab26096_92681806 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-coins la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="p-3 pl-5 pr-5">
                <div class="form-row">
                    <div class="input-group col-12">
                        <input type="number" class="form-control" placeholder="eg. 12" min="10" value="10" zender-credits>
                        <div class="input-group-append">
                            <span class="input-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')(system_currency);?>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary btn-block" zender-toggle="zender.payment/credits/10" zender-loader="Processing request" zender-credits-button>
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_cre_line28");?>

            </button>
        </div>
    </div>
</form><?php }
}
