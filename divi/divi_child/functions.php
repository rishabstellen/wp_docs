<?php

// Import Functions
include "includes/enqueue.php";
include "includes/settings.php";
include "includes/cm_widgets.php";
include "includes/short_codes.php";
include "includes/post_types.php";
include "includes/post_fields.php";
include "includes/menus.php";
include "includes/options.php";

// Action Hooks
add_action( 'wp_enqueue_scripts', 'import_styles' );
add_action( 'wp_enqueue_scripts', 'import_scripts' );