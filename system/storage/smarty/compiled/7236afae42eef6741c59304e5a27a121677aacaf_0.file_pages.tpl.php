<?php
/* Smarty version 5.1.0, created on 2024-07-20 03:08:17
  from 'file:default/pages/pages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_669ab9a1f041c1_00103061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7236afae42eef6741c59304e5a27a121677aacaf' => 
    array (
      0 => 'default/pages/pages.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/analytics.block.tpl' => 1,
  ),
))) {
function content_669ab9a1f041c1_00103061 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/default/pages';
?><div class="content-wrapper accent-header" zender-wrapper>
	<?php $_smarty_tpl->renderSubTemplate("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <section class="wrapper accent-overlay">
      <div class="container py-18 text-center">
        <div class="row">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
            <h1 class="display-1 mb-3 text-white"><?php echo $_smarty_tpl->getValue('data')['page']['name'];?>
</h1>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-gray angled upper-end">
      <div class="container py-14 py-md-16">
        <div class="gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
        	<?php echo $_smarty_tpl->getValue('data')['content'];?>

        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
</div>
<!-- /.content-wrapper -->
<?php }
}
