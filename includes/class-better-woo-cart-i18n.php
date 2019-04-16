<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mydigitalsauce.com
 * @since      1.0.0
 *
 * @package    Better_Woo_Cart
 * @subpackage Better_Woo_Cart/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Better_Woo_Cart
 * @subpackage Better_Woo_Cart/includes
 * @author     MyDigitalSauce <justin@mydigitalsauce.com>
 */
class Better_Woo_Cart_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'better-woo-cart',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
