<?php
// Action Hook
add_action( 'admin_menu', 'wp_ft_add_admin_menu' );
add_action( 'admin_init', 'wp_ft_settings_init' );

function wp_ft_add_admin_menu(  ) { 

	add_submenu_page( 
			'options-general.php', 
			'Footer Setting', 
			'Footer Setting', 
			'manage_options', 
			'footer_setting', 
			'wp_ft_options_page' 
	);

}

function test_settings_init(  ) { 

	register_setting( 'pluginPage', 'test_settings' );

	add_settings_section(
		'test_pluginPage_section', 
		__( 'Your section description', 'test' ), 
		'test_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'test_text_field_0', 
		__( 'Settings field description', 'test' ), 
		'test_text_field_0_render', 
		'pluginPage', 
		'test_pluginPage_section' 
	);


}


function test_text_field_0_render(  ) { 

	$options = get_option( 'test_settings' );
	?>
	<input type='text' name='test_settings[test_text_field_0]' value='<?php echo $options['test_text_field_0']; ?>'>
	<?php

}


function test_settings_section_callback(  ) { 

	echo __( 'This section description', 'test' );

}


function test_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>test</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>