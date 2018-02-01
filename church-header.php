<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<?php wp_head(); ?>
<?php woo_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<div id="wrapper">

	<div id="inner-wrapper">

	<?php woo_header_before(); ?>
	
	<?php if(has_nav_menu('top-bar')) : ?>
		<div id="top-bar">
			<div class="container">
				<?php wp_nav_menu(array(
					'theme_location'			=>	'top-bar'
				)); ?>	
			</div>
		</div>
	<?php endif; ?>

	<header id="header" class="col-full">

		<?php woo_header_inside(); ?>
		
		<div id="secondary" class="widget-area header-contact" role="complementary">
			<?php dynamic_sidebar( 'header-extra-info' ); ?>
		</div>

	</header>
		
	<?php woo_header_after(); ?>