<?php
/* Smarty version 5.1.0, created on 2024-06-08 09:34:38
  from 'file:dashboard/widgets/modals/payment.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6663fb7ee42809_81242983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd274c5ed8900384934e7a03428a828f3ad49077' => 
    array (
      0 => 'dashboard/widgets/modals/payment.tpl',
      1 => 1717159114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6663fb7ee42809_81242983 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-credit-card la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <div class="row" zender-payments>
            <?php if (system_offline_payment < 2) {?>
            <div class="col-md-6">
                <button class="btn btn-white btn-payment-offline btn-block lift" zender-toggle="zender.view/bank-<?php echo $_smarty_tpl->getValue('data')['original_price'];?>
">
                    <i class="la la-money-check la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_modal_paymentbtn_banktransfernew");?>

                </button>
            </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
