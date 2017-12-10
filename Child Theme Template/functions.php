<?php

// Import Functions
include( get_stylesheet_directory() . '/front/enqueue.php');

// Action Hooks
add_action( 'wp_enqueue_scripts', 'import_styles' );
add_action( 'wp_enqueue_scripts', 'import_scripts' );