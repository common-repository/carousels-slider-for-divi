<?php
/*
Plugin Name: Divi Carousel Lite
Plugin URI:  http://wordpress.org/plugins/carousels-slider-for-divi/
Description: Carousels Slider For Divi
Version:     1.6.2
Author:      Divi Carousels
Author URI:  https://divicarousels.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: divi-carousels-lite
Domain Path: /languages

Carousels Slider For Divi is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Carousels Slider For Divi is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Carousels Slider For Divi. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
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

define( 'DIVICAROUSEL8_VERSION', '1.0.0' );
define( 'DIVICAROUSEL8_FILE', __FILE__ );
define( 'DIVICAROUSEL8_DIR', plugin_dir_path( __FILE__ ) );
define( 'DIVICAROUSEL8_PATH', __DIR__ );
define( 'DCS_DIVICAROUSEL_PATH', __DIR__ );
define( 'DIVICAROUSEL8_URL', plugins_url( '', DIVICAROUSEL8_FILE ) );
define( 'DIVICAROUSEL8_PLUGIN_ASSETS', trailingslashit( DIVICAROUSEL8_URL . '/admin/img' ) );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-divicarousel8-activator.php
 */
if (! function_exists('csfd_carousel_module_activate')) :
	function csfd_carousel_module_activate() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-divicarousel8-activator.php';
		CSFD_Divicarousel8_Activator::activate();
	}
	register_activation_hook( __FILE__, 'csfd_carousel_module_activate' );
endif;
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-divicarousel8-deactivator.php
 */
if (! function_exists('csfd_carousel_module_deactivate')) :
	function csfd_carousel_module_deactivate() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-divicarousel8-deactivator.php';
		CSFD_Divicarousel8_Deactivator::deactivate();
	}
	register_deactivation_hook( __FILE__, 'csfd_carousel_module_deactivate' );
endif;

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-divicarousel8.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
if (! function_exists('csfd_initialize_carousel_module_extension')) :
	function csfd_initialize_carousel_module_extension() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/Divicarousel8.php';
	}
	add_action( 'divi_extensions_init', 'csfd_initialize_carousel_module_extension' );
	// Idea format for add css and js in plugin 
endif;

function csfd_run_divicarousel8() {

	$plugin = new CSFD_Carousel_Module_Class_Activator();
	$plugin->run();

}
csfd_run_divicarousel8();