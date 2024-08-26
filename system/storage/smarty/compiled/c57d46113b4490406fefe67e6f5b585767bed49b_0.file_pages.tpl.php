<?php
/* Smarty version 5.1.0, created on 2024-08-25 01:53:30
  from 'file:default/pages/pages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66ca1e1a1aaba4_48254982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57d46113b4490406fefe67e6f5b585767bed49b' => 
    array (
      0 => 'default/pages/pages.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/analytics.block.tpl' => 1,
  ),
))) {
function content_66ca1e1a1aaba4_48254982 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/default/pages';
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
