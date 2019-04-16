<?php

/**
 *
 * @link       https://mydigitalsauce.com
 * @since      1.0.0
 *
 * @package    Better_Woo_Cart_Shortcodes
 */

/**
 *
 * @package    Better_Woo_Cart_Shortcodes
 * @author     MyDigitalSauce <justin@mydigitalsauce.com>
 */
class Better_Woo_Cart_Shortcodes {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_shortcode( 'better_woo_cart', array($this, 'better_woo_cart_shortcode_func') );

	}

	public function better_woo_cart_shortcode_func( $atts ) {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . '../public/css/public.css', array(), $version, 'all' );

		ob_start(); ?>

		<button data-toggle="modal" data-target="#BWC_Right_Sidebar" >Cart</button>

		<div class="modal right fade" id="BWC_Right_Sidebar" tabindex="-1" role="dialog" aria-labelledby="BWC_Right_Sidebar_Label" aria-hidden="true" style="z-index: 10000;" >
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-body" style="padding-top: 0;">
		              <div class="row">
		                <div class="col p-0">
							Better Woo Cart - Right Sidebar 
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<?php $output_string = ob_get_contents();
		ob_get_clean();

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . '../public/js/public.js', array( 'jquery' ), $this->$version, false );
		wp_localize_script( $this->plugin_name, 'BWCsettings', array(
			'apiRoot' => esc_url_raw( rest_url('/wp/v2') ),
			'siteUrl' => get_site_url(),
			'blogName'=> get_bloginfo('name'),
		));

		return $output_string;

	}

}