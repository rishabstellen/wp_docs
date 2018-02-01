<?php

//==========================//
//====[Import Functions]====//
//==========================//

include "includes/enqueue.php";
include "includes/menus.php";
include "includes/widget.php";
include "includes/post_types.php";
include "includes/post_fields.php";
include "includes/short_codes.php";

//==========================//
//======[Action Hooks]======//
//==========================//

add_action( 'wp_enqueue_scripts', 'import_styles' );
add_action( 'wp_enqueue_scripts', 'import_scripts' );

show_admin_bar( false );

// Settings
add_filter('widget_text','do_shortcode');

// Menus
add_action( 'after_setup_theme', 'register_menus' );

// Widgets
add_action( 'widgets_init', 'initilize_widget' );

// Post Types
add_action( 'init', 'header_posts' );

// Meta Boxes
add_action( 'add_meta_boxes', 'cm_pf_post_loop' );
add_action( 'save_post', 'cm_pf_post_loop_save' );

// Shortcodes
add_shortcode( 'social_icons', 'fn_social_icons' );
