<?php

function header_posts(){
	$labels = array(
    'name' => _x('Header Posts', 'post type general name'),
    'singular_name' => _x('header_posts', 'post type singular name'),
    'all_items' => __('All Posts'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_icon'           => 'dashicons-networking',
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('header_posts',$args);
}

?>