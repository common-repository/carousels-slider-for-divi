<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       divicarousels.com
 * @since      1.0.0
 *
 * @package    Divicarousel8
 * @subpackage Divicarousel8/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Divicarousel8
 * @subpackage Divicarousel8/public
 * @author     divi-carousels-lite
 */
class CSFD_CarouselSlider_Public {

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

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( 'divicarousel8_swipper_css', plugin_dir_url( __FILE__ ) . 'css/swiper-bundle.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'divicarousel8_custom_css', plugin_dir_url( __FILE__ ) . 'css/custom.css', array(), $this->version, 'all' );
		
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( 'divicarousel8_swipper_js', plugin_dir_url( __FILE__ ) . 'js/swiper-bundle.min.js', array('jquery'), $this->version, false );
	}

}
