<?php

/*
Plugin Name: {ucfirst($name)}
Plugin URI:  {$author_uri}
Description: {ucfirst($desc)}
Version:     2.0
Author:      {ucfirst($author)}
Author URI:  {$author_uri}
License:     GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Text Domain: {$prefix}-woocommerce
*/

use MessagingAPI_WC\Loader;

if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'ZMPLGXX_NAME' ) ) {
	define("ZMPLGXX_NAME", "{ucfirst($name)}");
}

if ( ! defined( 'ZMPLGXX_SITENAME' ) ) {
	define("ZMPLGXX_SITENAME", "{$site_name}");
}

if ( ! defined( 'ZMPLGXX_URL' ) ) {
	define("ZMPLGXX_URL", "{$site_url}");
}

if ( ! defined( 'ZMPLGXX_DOMAIN' ) ) {
	define("ZMPLGXX_DOMAIN", "{$prefix}-woocommerce");
}

if ( ! defined( 'ZMPLGXX_FREEMIUS' ) ) {
	define("ZMPLGXX_FREEMIUS", [
        "id" => "{if $freemius_id eq "none"}12467{else}{$freemius_id}{/if}",
        "slug" => "{if $freemius_slug eq "none"}messaging-sms-whatsapp{else}{$freemius_slug}{/if}",
        "public_key" => "{if $freemious_public_key eq "none"}pk_3a177d3eccbcc62adbd26e93510f0{else}{$freemious_public_key}{/if}",
    ]);
}

if ( ! function_exists( 'messaging_fs' ) ) {
    // Create a helper function for easy SDK access.
    function messaging_fs() {
        global $messaging_fs;

        if ( ! isset( $messaging_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/lib/freemius/start.php';

            $messaging_fs = fs_dynamic_init( array(
                'id'                  => ZMPLGXX_FREEMIUS['id'],
                'slug'                => ZMPLGXX_FREEMIUS['slug'],
                'type'                => 'plugin',
                'public_key'          => ZMPLGXX_FREEMIUS['public_key'],
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'slug'           => 'messagingsms-woocoommerce-setting',
                    'override_exact' => true,
                    'account'        => false,
                    'contact'        => false,
                    'support'        => false,
                    'parent'         => array(
                        'slug' => 'options-general.php',
                    ),
                ),
            ) );
        }

        return $messaging_fs;
    }

    // Init Freemius.
    messaging_fs();
    // Signal that SDK was initiated.
    do_action( 'messaging_fs_loaded' );

    function messaging_fs_settings_url() {
        return admin_url( 'options-general.php?page=messagingsms-woocoommerce-setting' );
    }

    messaging_fs()->add_filter('connect_url', 'messaging_fs_settings_url');
    messaging_fs()->add_filter('after_skip_url', 'messaging_fs_settings_url');
    messaging_fs()->add_filter('after_connect_url', 'messaging_fs_settings_url');
    messaging_fs()->add_filter('after_pending_connect_url', 'messaging_fs_settings_url');
}

define("MESSAGINGSMS_PLUGIN_URL", plugin_dir_url(__FILE__));
define("MESSAGINGSMS_PLUGIN_DIR", plugin_dir_path(__FILE__));
define("MESSAGINGSMS_INC_DIR", MESSAGINGSMS_PLUGIN_DIR . "includes/");
define("MESSAGINGSMS_ADMIN_VIEW", MESSAGINGSMS_PLUGIN_DIR . "admin/");
define("MESSAGINGSMS_TEXT_DOMAIN", ZMPLGXX_DOMAIN);

require_once MESSAGINGSMS_PLUGIN_DIR . 'lib/action-scheduler/action-scheduler.php';

add_action( 'plugins_loaded', 'messagingsms_woocommerce_init', PHP_INT_MAX );

function messagingsms_woocommerce_init() {
    require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');
	require_once ABSPATH . '/wp-admin/includes/plugin.php';
	require_once ABSPATH . '/wp-includes/pluggable.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'interfaces/Messagingsms_PluginInterface.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/contracts/class-messagingsms-register-interface.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-freemius.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-helper.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-woocommerce-frontend-scripts.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-woocommerce-hook.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-woocommerce-register.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-woocommerce-logger.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-woocommerce-notification.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-download-log.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/class-messagingsms-sendsms.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/multivendor/class-messagingsms-multivendor.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'lib/MessagingSMS.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'lib/class.settings-api.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'admin/class-messagingsms-woocommerce-setting.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'admin/sendsms.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'admin/automation.php';
	require_once MESSAGINGSMS_PLUGIN_DIR . 'admin/logs.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingS2Member.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingARMemberLite.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingARMemberPremium.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingMemberPress.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingMemberMouse.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingSimpleMembership.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingRestaurantReservation.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingQuickRestaurantReservation.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingBookIt.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingLatePoint.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingFATService.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingWpERP.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingJetpackCRM.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingFluentCRM.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingGroundhoggCRM.php';
    require_once MESSAGINGSMS_PLUGIN_DIR . 'includes/plugins/MessagingSupportedPlugin.php';

    // load all Forms integrations
    Loader::load();

	//create notification instance
	$messagingsms_notification = new Messagingsms_WooCommerce_Notification();

	//register hooks and settings
	$registerInstance = new Messagingsms_WooCommerce_Register();
	$registerInstance->add( new MessagingSMS_Freemius() )
	                 ->add( new Messagingsms_WooCommerce_Hook( $messagingsms_notification ) )
	                 ->add( new Messagingsms_WooCommerce_Setting() )
	                 ->add( new Messagingsms_WooCommerce_Frontend_Scripts() )
	                 ->add( new Messagingsms_Multivendor() )
	                 ->add( new Messagingsms_Download_log() )
	                 ->add( new MessagingSMS_SendSMS_View() )
	                 ->add( new MessagingSMS_Automation_View() )
	                 ->add( new MessagingSMS_Logs_View() )
	                 ->load();
}

