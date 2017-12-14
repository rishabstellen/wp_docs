<?php

// Import Functions
include "front/enqueue.php";

// Action Hooks
add_action( 'wp_enqueue_scripts', 'import_styles' );
add_action( 'wp_enqueue_scripts', 'import_scripts' );

