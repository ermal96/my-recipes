<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package My_Recipes
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
					<section class="error-404 not-found">
							<i class="fal fa-hat-chef"></i>
							<h1><?php esc_attr_e( 'Sorry this page does not exist', 'my-recipes' ); ?></h1>
							<a href="<?php echo esc_attr( get_home_url() ); ?>"><?php esc_attr_e( 'Go back to home', 'my-recipes' ) ?></a>
					</section><!-- .error-404 -->
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
