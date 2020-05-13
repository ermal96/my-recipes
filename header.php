<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Recipes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="Etl65TadULD0kvXHIr_LsHR-AirM8H7JVI1tthSAq8o" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'loading' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<!-- Theme Loader -->
			<?php mr_theme_loader(); ?>
		<!-- End Theme Loader -->
	<header id="masthead" class="site-header">
		<div class="container">

			<!-- Header -->
				<?php mr_theme_header(); ?>
			<!-- End Header -->

			<!-- Desktop Menu -->
				<?php mr_menu_desktop(); ?>
			<!-- End Desktop Menu -->
		</div>

		<!-- Mobile Menu -->
			<?php mr_menu_mobile(); ?>
		<!-- End Mobile Menu -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
