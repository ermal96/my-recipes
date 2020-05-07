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

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'loading' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div id="loader">
		<div class="text-center">
			<div class="spinner-border text-danger" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header">

		<div class="container">

		<nav class="mr-nav-top">
			<div class="mr-social">
			<i class="fab fa-facebook"></i>
			<i class="fab fa-instagram"></i>
			</div>
			<div class="mr-logo" >
				<?php the_custom_logo(); ?>
				<p><?php echo esc_attr__( get_bloginfo( 'name' ) ); ?></p>
			</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
				</button>	

			<div class="mr-search">
				<i class="fas fa-search"></i>
			</div>
		</nav>

			<div class="collapse navbar-collapse menu-bottom" id="navbarNavAltMarkup">
				<div class="navbar-nav">
							<?php wp_nav_menu(); ?>
				</div>
				<div class="mr-contact">
					<a class="mr-btn-contact" href="#">Kontakt</a>
				</div>
			</div>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
