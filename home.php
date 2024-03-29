<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Recipes
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
					<?php require get_template_directory() . '/template/home/slider-recipes.php'; ?>
					<?php require get_template_directory() . '/template/home/popular-recipes.php'; ?>
					<?php require get_template_directory() . '/template/home/collection.php'; ?>
					<?php require get_template_directory() . '/template/home/cta.php'; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
