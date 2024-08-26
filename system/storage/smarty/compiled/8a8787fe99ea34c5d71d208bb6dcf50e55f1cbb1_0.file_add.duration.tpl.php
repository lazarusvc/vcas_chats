<?php
/* Smarty version 5.1.0, created on 2024-06-17 19:30:20
  from 'file:dashboard/widgets/modals/add.duration.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66702c5ce97dc5_60627425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8787fe99ea34c5d71d208bb6dcf50e55f1cbb1' => 
    array (
      0 => 'dashboard/widgets/modals/add.duration.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66702c5ce97dc5_60627425 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-clock la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="p-3">
                <div class="form-row">
                    <div class="input-group input-group-md col-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_durationmonth");?>
</span>
                        </div>
                        <input type="number" class="form-control" placeholder="eg. 1" min="1" value="1" zender-duration>
                    </div>

                    <div class="form-group mt-3 mb-1 text-center col-12">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_durationpackage");?>
 <?php echo $_smarty_tpl->getValue('data')['package']['name'];?>
</label>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_durationpay");?>
 <span zender-duration-price><?php echo $_smarty_tpl->getValue('data')['package']['price'];?>
</span> <?php echo system_currency;?>

                        </label>
                    </div>

                    <div class="form-group mb-0 col-12">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $_smarty_tpl->getValue('data')['package']['id'];?>
">
                        <input type="hidden" name="price" class="form-control" value="<?php echo $_smarty_tpl->getValue('data')['package']['price'];?>
">

                        <button class="btn btn-primary btn-lg btn-block" zender-toggle="zender.payment/<?php echo $_smarty_tpl->getValue('data')['package']['id'];?>
/1" zender-loader="Processing request" zender-duration-button>
                            <i class="la la-credit-card"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_purchase");?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
