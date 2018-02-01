<?php

function initilize_widget(){
	
	register_sidebar(array(
		'name' => __( 'Header Extra #1', 'header-1' ),
        'id' => 'header-extra-1',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name' => __( 'Header Extra #2', 'header-2' ),
        'id' => 'header-extra-2',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name' => __( 'Header Extra #3', 'header-3' ),
        'id' => 'header-extra-3',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name' => __( 'Header Extra #4', 'header-4' ),
        'id' => 'header-extra-4',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));

}

?>