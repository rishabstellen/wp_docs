<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div id="top-bar">
		<?php get_template_part( 'template-parts/top', 'bar' ); ?>
		<span class="clear"></span>
	</div>

	<div class="content">
		<div class="mobile_nav_container">	
			<div class="menu">
				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'mobile_nav',
				) ); ?>
			</div>
		</div>

		<header>
			
			<div id="logo_container">

				<div class="mob_burger_icon">
					<a href="#mobile_nav"><i class="fa fa-bars"></i></a>
				</div>

				<div id="logo">
					<?php the_custom_logo(); ?>
				</div><!-- logo -->

				<div class="extra_info">
					<?php get_template_part( 'template-parts/extra', 'info' ); ?>
				</div>
				<span class="clear"></span>
			</div><!-- logo container -->

			<div id="primary-manu">
				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'main_menu',
				) ); ?>
			</div><!-- primary menu -->
			<span class="clear"></span>
		</header>

		<div class="popular-post">
			<?php //get_template_part( 'template-parts/header', 'post' ); ?>
		</div>