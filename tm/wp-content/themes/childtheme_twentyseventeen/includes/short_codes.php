<?php

//[social_icons]
function fn_social_icons( $atts ){
	
	$return = '';
	if(has_nav_menu( 'social' )) :
		$return .= '<div class="social_icons">';
			$return .= wp_nav_menu( array(
			'theme_location' => 'social',
			'menu_class'        => 'social_links',
		) ); 
		$return .= '</div>';
	endif;

	return $return;
}


?>