<?php

// Style Sheets
function import_styles(){
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

}

// Scripts
function import_scripts(){
	
	// Register Script
	wp_register_script( 'scripts', get_stylesheet_directory_uri()."/js/script.js" );

	// Enqueue Script
	wp_enqueue_script( 'scripts' );
    
}