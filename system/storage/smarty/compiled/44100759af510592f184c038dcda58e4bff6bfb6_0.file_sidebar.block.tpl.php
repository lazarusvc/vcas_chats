<?php
/* Smarty version 5.1.0, created on 2024-07-29 09:58:41
  from 'file:/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/./modules/sidebar.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7a011e97497_62755677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44100759af510592f184c038dcda58e4bff6bfb6' => 
    array (
      0 => '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/./modules/sidebar.block.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a7a011e97497_62755677 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/modules';
?><nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark navbar-vibrant" id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard");?>
" zender-nav>
            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("logo_light");?>
" class="navbar-brand-img mx-auto">
        </a>

        <div class="navbar-user d-md-none" zender-usernav>
            <div class="dropdown">
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="<?php echo logged_avatar;?>
" class="avatar-img rounded-circle">
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="#" class="dropdown-item" zender-toggle="zender.user.settings">
                        <i class="la la-user-cog"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menusettings");?>

                    </a>

                    <?php if (system_freemodel < 2) {?>
                    <a href="#" class="dropdown-item" zender-toggle="zender.user.subscription">
                        <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menusubscription");?>

                    </a>
                    <?php } else { ?>
                        <?php if (!empty($_smarty_tpl->getValue('data')['package'])) {?>
                            <a href="#" class="dropdown-item" zender-toggle="zender.user.subscription">
                                <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menusubscription");?>

                            </a>
                        <?php }?>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/misc/packages");?>
" class="dropdown-item" zender-nav>
                        <i class="la la-cubes la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_packages");?>

                    </a>
        
                    <a href="#" class="dropdown-item" zender-toggle="zender.redeem">
                        <i class="la la-ticket la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_redeem");?>

                    </a>

                    <hr class="dropdown-divider">

                    <a href="#" class="dropdown-item" zender-action="logout">
                        <i class="la la-sign-out"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_menulogout");?>

                    </a>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_nav_default");?>

            </h6>

            <ul class="navbar-nav">
                <li class="nav-item" zender-navbar>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard");?>
" zender-nav>
                        <i class="la la-chart-bar la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_overview");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#smsMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="la la-comment la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashnav_sms_navname");?>

                    </a>
                    <div class="collapse" id="smsMenu">
                        <ul class="nav nav-sm flex-column" zender-navbar>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/queue");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_tabs_smspage_queuebtn");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/sent");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_messages_menusent");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/received");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_messages_menureceived");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/campaigns");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_sms_campaignstab");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/scheduled");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_pages_android_line40");?>

                                </a>
                            </li>
                            <?php if ($_smarty_tpl->getValue('partner')) {?>
                                <li class="nav-item">
                                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/transactions");?>
" class="nav-link" zender-nav>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_sms_partnertransactions");?>

                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#whatsappMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_modules_header_line25");?>

                    </a>
                    <div class="collapse" id="whatsappMenu">
                        <ul class="nav nav-sm flex-column" zender-navbar>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/queue");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_tabs_wapage_queuebtn");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/sent");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_whats_line28");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/received");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_whats_line34");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/campaigns");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_whatsapp_campaignstab");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/scheduled");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_whats_line40");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/groups");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_whatsapp_groupstab");?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sendersMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="la la-fax la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_hosts");?>

                    </a>
                    <div class="collapse" id="sendersMenu">
                        <ul class="nav nav-sm flex-column" zender-navbar>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/hosts/android");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_hostsandroid");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/hosts/whatsapp");?>
" class="nav-link" zender-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_hostswhatsapp");?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_pages_android_line10");?>

            </h6>

            <ul class="navbar-nav" zender-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/android/ussd");?>
" class="nav-link" zender-nav>
                        <i class="la la-mobile la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_pages_android_line46");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/android/notifications");?>
" class="nav-link" zender-nav>
                        <i class="la la-satellite-dish la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_pages_android_line52");?>

                    </a>
                </li>
            </ul>

            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_contacts_title");?>

            </h6>

            <ul class="navbar-nav" zender-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/contacts/saved");?>
" class="nav-link" zender-nav>
                        <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_contacts_menusaved");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/contacts/groups");?>
" class="nav-link" zender-nav>
                        <i class="la la-list la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_contacts_menugroups");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/contacts/unsubscribed");?>
" class="nav-link" zender-nav>
                        <i class="la la-unlink la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_pages_contacts_line40");?>

                    </a>
                </li>
            </ul>

            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_tools_title");?>

            </h6>

            <ul class="navbar-nav" zender-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/keys");?>
" class="nav-link" zender-nav>
                        <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_tools_menukeys");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/webhooks");?>
" class="nav-link" zender-nav>
                        <i class="la la-code-branch la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_tools_menuhooks");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/actions");?>
" class="nav-link" zender-nav>
                        <i class="la la-robot la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_tools_menuactions");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/templates");?>
" class="nav-link" zender-nav>
                        <i class="la la-wrench la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_messages_menutemplates");?>

                    </a>
                </li>
            </ul>
            
            <?php if (is_admin) {?>
            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_modules_header_line45");?>

            </h6>

            <ul class="navbar-nav" zender-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin");?>
" class="nav-link" zender-nav>
                        <i class="la la-chart-bar la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_overview");?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_users")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/users");?>
" class="nav-link" zender-nav>
                        <i class="la la-users la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menuusers");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_roles")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/roles");?>
" class="nav-link" zender-nav>
                        <i class="la la-shield la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menuroles");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_packages")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/packages");?>
" class="nav-link" zender-nav>
                        <i class="la la-cubes la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menupackages");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_vouchers")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/vouchers");?>
" class="nav-link" zender-nav>
                        <i class="la la-money-bill-wave la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menuvouchers");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_subscriptions")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/subscriptions");?>
" class="nav-link" zender-nav>
                        <i class="la la-crown la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menusubscriptions");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_transactions")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/transactions");?>
" class="nav-link" zender-nav>
                        <i class="la la-coins la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menutransactions");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_payouts")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/payouts");?>
" class="nav-link" zender-nav>
                        <i class="la la-money-check-alt la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_administration_landing_payouts");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_widgets")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/widgets");?>
" class="nav-link" zender-nav>
                        <i class="la la-puzzle-piece la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menuwidgets");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_pages")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/pages");?>
" class="nav-link" zender-nav>
                        <i class="la la-stream la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menupages");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_marketing")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/marketing");?>
" class="nav-link" zender-nav>
                        <i class="la la-bullhorn la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_administration_landing_marketing");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_languages")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/languages");?>
" class="nav-link" zender-nav>
                        <i class="la la-language la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menulanguages");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_waservers")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/waservers");?>
" class="nav-link" zender-nav>
                        <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_waservers");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_gateways")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/gateways");?>
" class="nav-link" zender-nav>
                        <i class="la la-code la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_administration_landing_gateways");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_shorteners")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/shorteners");?>
" class="nav-link" zender-nav>
                        <i class="la la-link la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_administration_landing_shorteners");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_plugins")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/plugins");?>
" class="nav-link" zender-nav>
                        <i class="la la-cogs la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_admin_menuplugins");?>

                    </a>
                </li>
                <?php }?>
            </ul>
            <?php }?>

            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_doc_line10");?>

            </h6>

            <ul class="navbar-nav" zender-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs");?>
" class="nav-link" zender-nav>
                        <i class="la la-code la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_doc_line28");?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_api")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/admin");?>
" class="nav-link" zender-nav>
                        <i class="la la-cogs la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_administration_landing_api");?>

                    </a>
                </li>
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/webhooks");?>
" class="nav-link" zender-nav>
                        <i class="la la-code-branch la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_doc_line34");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/actions");?>
" class="nav-link" zender-nav>
                        <i class="la la-robot la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_doc_line40");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/android");?>
" class="nav-link" zender-nav>
                        <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_sidebarblk_docsandroid");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/partners");?>
" class="nav-link" zender-nav>
                        <i class="la la-handshake la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_doc_line52");?>

                    </a>
                </li>
            </ul>

            <div class="mt-auto"></div>
        </div> 
    </div>
</nav><?php }
}
