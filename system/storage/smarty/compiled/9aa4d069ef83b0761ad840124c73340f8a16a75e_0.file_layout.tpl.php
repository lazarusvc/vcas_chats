<?php
/* Smarty version 5.1.0, created on 2024-06-27 17:56:34
  from 'file:_install/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_667da7d2900301_76522395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aa4d069ef83b0761ad840124c73340f8a16a75e' => 
    array (
      0 => '_install/layout.tpl',
      1 => 1716355865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667da7d2900301_76522395 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/_install';
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="icon" href="./templates/_assets/images/favicon.png" />

        <title>Installation &middot; Zender</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" />
        <link rel="stylesheet" href="./templates/_assets/css/libs/line-awesome.min.css" />
        <link rel="stylesheet" href="./templates/_assets/css/libs/flag-icon.min.css" />
        <link rel="stylesheet" href="./templates/dashboard/assets/css/libs/bootstrap.min.css" />
        <link rel="stylesheet" href="./templates/dashboard/assets/css/style.min.css" />

        <style>
            body {
                background: #333;
            }
        </style>

        <?php echo '<script'; ?>
>
        	window.site_url = "<?php echo site_url;?>
";
        <?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="container-fluid" zender-wrapper zender-authenticate-page zender-wrapper-authenticate>
            <div class="row justify-content-center align-items-center" zender-authenticate-form>
                <div class="col-md-8">
                    <div class="mb-2 text-center" zender-authenticate-logo>
                        <img src="./templates/_install/assets/images/logo.png" class="w-25" />
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <form zender-authenticate-login>
                            	<div class="row">
                            		<div class="col-md-6">
                            			<div class="form-row">
		                            		<div class="form-group mb-0 col-md-12">
			                                    <h2 class="text-uppercase">System</h2>
			                                </div>

			                            	<div class="form-group col-md-6">
			                                    <label>Site Name</label>
			                                    <input type="text" name="site_name" class="form-control" placeholder="eg. Zender">
			                                </div>

			                                <div class="form-group col-md-6">
			                                	<label>Protocol</label>
			                                    <select name="protocol" class="form-control">
			                                        <option value="1" selected>HTTP</option>
			                                        <option value="2">HTTPS</option>
			                                    </select>
			                                </div>

			                                <div class="form-group col-md-12">
			                                	<label>Site Description</label>
			                                    <input type="text" name="site_desc" class="form-control" placeholder="This is my marketing platform">
			                                </div>

			                                <div class="form-group col-md-12">
			                                	<label>Purchase Code</label>
			                                    <input type="text" name="purchase_code" class="form-control" placeholder="pt64c343-c7yq-4f59-853e-h754301675ed">
			                                </div>
		                                </div>
                            		</div>

                            		<div class="col-md-6">
                            			<div class="form-row">
			                                <div class="form-group mb-0 col-md-12">
			                                    <h2 class="text-uppercase">Database</h2>
			                                </div>

			                                <div class="form-group col-md-6">
			                                    <label>Database Host</label>
			                                    <input type="text" name="dbhost" class="form-control" placeholder="eg. localhost" value="localhost">
			                                </div>

			                                <div class="form-group col-md-6">
			                                    <label>Database Port</label>
			                                    <input type="text" name="dbport" class="form-control" placeholder="eg. 3306" value="3306">
			                                </div>

			                                <div class="form-group col-md-6">
			                                    <label>Database Name</label>
			                                    <input type="text" name="dbname" class="form-control" placeholder="eg. zender_db">
			                                </div>

			                                <div class="form-group col-md-6">
			                                    <label>Database Username</label>
			                                    <input type="text" name="dbuser" class="form-control" placeholder="eg. root">
			                                </div>

			                                <div class="form-group col-md-12">
			                                    <label>Database Password</label>
			                                    <input type="password" name="dbpass" class="form-control" placeholder="eg. password">
			                                </div>
			                            </div>
                            		</div>
                            	</div>

	                            <div class="form-row">
	                                <div class="form-group mb-0 col-md-12">
	                                    <h2 class="text-uppercase">Account</h2>
	                                </div>

	                                <div class="form-group col-md-6">
	                                    <label>Full Name</label>
	                                    <input type="text" name="name" class="form-control" placeholder="eg. John Doe">
	                                </div>

	                                <div class="form-group col-md-6">
	                                    <label>Email Address</label>
	                                    <input type="text" name="email" class="form-control" placeholder="eg. user@mail.com">
	                                </div>

	                                <div class="form-group col-md-6">
	                                    <label>Password</label>
	                                    <input type="password" name="password" class="form-control" placeholder="eg. Enter Password">
	                                </div>

	                                <div class="form-group col-md-3">
		                                <label class="text-uppercase">Timezone</label>
		                                <select name="timezone" class="form-control" data-live-search="true">
		                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach0DoElse = false;
?>
		                                    <option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
		                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		                                </select>
		                            </div>

		                            <div class="form-group col-md-3">
		                                <label class="text-uppercase">Country</label>
		                                <select name="country" class="form-control" data-live-search="true">
		                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('country');
?>
		                                    <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
"><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
		                                    <?php
$_smarty_tpl->setVariable('country', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		                                </select>
		                            </div>
	                            </div>

                                <div class="btn-group btn-group-lg float-right">
                                    <button type="submit" class="btn btn-success p-2">
                                    	<i class="la la-check-circle"></i> Install
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div zender-preloader>
	        <div class="loadingio loadingio-spinner-ripple-c4xwekkbyc9">
	            <div class="ldio-k6xrhuhg6o">
	                <div></div>
	                <div></div>
	            </div>
	        </div>
	    </div>

        <?php echo '<script'; ?>
 src="./templates/_assets/js/libs/fetch.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.lang_alert_attention = "Attention";
            window.lang_js_loader_pleasewait = "Please wait";
            window.alert_position = "topLeft";
            window.color_primary = "#333";
            window.overlap_alert_position = "bottomLeft";

            fetchInject([
            	"./templates/_install/assets/js/install.js"
            ],
            fetchInject([
            	"./templates/_assets/js/functions.js"
            ],
            fetchInject([
                "./templates/_assets/js/libs/pjax.min.js",
                "./templates/_assets/js/libs/waves.min.js",
                "./templates/_assets/js/libs/topbar.min.js",
                "./templates/_assets/js/libs/izitoast.min.js",
                "./templates/_assets/js/libs/bootstrap-select.min.js",
                "./templates/_assets/js/libs/jquery.loading.min.js"
            ],
            fetchInject([
                "./templates/_assets/js/libs/bootstrap.min.js"
            ],
            fetchInject([
            	"./templates/_assets/js/libs/jquery.min.js", 
            	"./templates/_assets/css/libs/waves.min.css", 
            	"./templates/_assets/css/libs/izitoast.min.css", 
            	"./templates/_assets/css/libs/bootstrap-select.min.css"
            ])))));
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
