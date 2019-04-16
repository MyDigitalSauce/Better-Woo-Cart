<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mydigitalsauce.com
 * @since             1.0.0
 * @package           Better_Woo_Cart
 *
 * @wordpress-plugin
 * Plugin Name:        Better WooCommerce Cart
 * Plugin URI:        https://mydigitalsauce.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            MyDigitalSauce
 * Author URI:        https://mydigitalsauce.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       better-woo-cart
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BETTER_WOO_CART_VERSION', '1.0.0' );

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
 * @since    1.0.0
 */
function run_better_woo_cart() {

	$plugin = new Better_Woo_Cart();
	$plugin->run();

}
run_better_woo_cart();
