<?php

// Import Style Sheets
function import_styles(){
	
	$parent_style = 'parent-style';
  
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
	get_stylesheet_directory_uri() . '/style.css',
	array( $parent_style ),
	wp_get_theme()->get('Version')
	);

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' ); 
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array() );
    wp_enqueue_style( 'lightslider', get_stylesheet_directory_uri().'/css/lightslider.css' ); 

    // Mobile Menu
    //wp_enqueue_style( 'jquery.mmenu.css', get_stylesheet_directory_uri().'/css/jquery.mmenu.css' ); 
}

// Import Scripts
function import_scripts(){
	
	wp_enqueue_script( 'jquery-3.2.1.min', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js' );
  	wp_enqueue_script( 'bootstrap.min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'lightslider', get_stylesheet_directory_uri()."/js/lightslider.js" );

    // Mobile Menu
    //wp_enqueue_script( 'jquery.mmenu.js', get_stylesheet_directory_uri()."/js/jquery.mmenu.js" );

    // Custom Script
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri()."/js/script.js" );

}