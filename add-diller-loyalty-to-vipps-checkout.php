<?php
/**
 * Plugin Name: Add Diller Loyalty to the Vipps Checkout
 * Description: Integrates the Diller Loyalty sign-up process with the Vipps payment process in WooCommerce.
 * Version: 0.1
 * Author: Trippple AS
 * Author URI: https://trippple.no
 * License: GPL2
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Include other plugin files
require_once plugin_dir_path(__FILE__) . 'includes/class-diller-integration.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-vipps-integration.php';

// Initialize the plugin
function add_diller_loyalty_to_vipps_checkout_init() {
    $diller_integration = new Diller_Integration();
    $vipps_integration = new Vipps_Integration();
}

add_action('plugins_loaded', 'add_diller_loyalty_to_vipps_checkout_init');
?>
