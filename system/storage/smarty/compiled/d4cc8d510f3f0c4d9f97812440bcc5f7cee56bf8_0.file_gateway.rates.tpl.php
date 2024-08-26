<?php
/* Smarty version 5.1.0, created on 2024-08-01 10:55:08
  from 'file:dashboard/widgets/modals/gateway.rates.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66ab5b7c9d45d1_67691657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4cc8d510f3f0c4d9f97812440bcc5f7cee56bf8' => 
    array (
      0 => 'dashboard/widgets/modals/gateway.rates.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ab5b7c9d45d1_67691657 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-comments-dollar la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_rate_gate_10");?>
</th>
                    <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_rate_gate_11");?>
 <span class="badge badge-success"><?php echo system_currency;?>
</span></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['pricing']['countries'], 'country');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('country');
?>
                    <tr>
                        <td class="text-uppercase"><i class="flag-icon flag-icon-<?php echo $_smarty_tpl->getVariable('country')->key;?>
"></i>
                            <?php echo $_smarty_tpl->getVariable('country')->key;?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('country');?>
</td>
                    </tr>
                <?php
$_smarty_tpl->setVariable('country', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <tr>
                    <td class="text-uppercase"><i class="flag-icon flag-icon-un"></i>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_rate_gate_22");?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('data')['pricing']['default'];?>
</td>
                </tr>
            </tbody>
        </table>
    </div>
</div><?php }
}
