<?php if(has_nav_menu( 'top-bar' )) : ?>
	<div class="left">
		<?php wp_nav_menu(array(
			'theme_location'			=>	'top-bar',
			'menu_id'				=>	'top-bar_menu',
		)); ?>
	</div>
<?php endif; ?>

<?php if(has_nav_menu( 'social' )) : ?>
	<div class="right">
		<?php wp_nav_menu( array(
			'theme_location' => 'social',
			'menu_class'        => 'social_links',
		) ); ?>
	</div>
<?php endif; ?>