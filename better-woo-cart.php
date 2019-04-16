<?php

/*
 * Plugin Name:			Better WooCommerce Cart
 * Plugin URI:        https://mydigitalsauce.com
 * Description:       Gives you available shortcodes to display a cart button that reveals an offcanvas right sidebar that has a WooCommerce Cart.
 * Version:           0.0.1
 * Author:            MyDigitalSauce
 * Author URI:        https://mydigitalsauce.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       better-woo-cart
 * Domain Path:       /languages
 */

 /*
 * @link              https://mydigitalsauce.com
 * @since             0.0.1
 * @package           Better_Woo_Cart
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.0.1 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BETTER_WOO_CART_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-better-woo-cart-activator.php
 */
function activate_better_woo_cart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-better-woo-cart-activator.php';
	Better_Woo_Cart_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-better-woo-cart-deactivator.php
 */
function deactivate_better_woo_cart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-better-woo-cart-deactivator.php';
	Better_Woo_Cart_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_better_woo_cart' );
register_deactivation_hook( __FILE__, 'deactivate_better_woo_cart' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-better-woo-cart.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_better_woo_cart() {

	$plugin = new Better_Woo_Cart();
	$plugin->run();

}
run_better_woo_cart();
