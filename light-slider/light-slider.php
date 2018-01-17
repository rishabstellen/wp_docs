<?php
/**
 * Plugin Name: Light Slider
 * Plugin URI: http://www.stelleninfotech.com
 * Description: Light Slider based on light slider 
 * Version: 1.0.0
 * Author: Stellen Infotech
 * Author URI: http://www.stelleninfotech.com
 * License: GPL2
 */

// Define Rules
define( 'SLIDER_PLUGIN', __FILE__ );
define( 'SLIDER_PLUGIN_DIR', untrailingslashit( dirname( SLIDER_PLUGIN ) ) );

// Include Files
require_once SLIDER_PLUGIN_DIR . '/st_functions.php';


// Add Post Type Slider
add_action( 'init', 'st_cm_light_slider' );

// Shortcodes
add_shortcode( 'light_slider', 'st_cm_sh_light_slider' );

// Java Script
add_action( 'wp_footer', 'st_cm_slider_script' );