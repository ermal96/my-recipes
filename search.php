<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package My_Recipes
 */

get_header();
?>

	<section id="collection" class="content-area mb-5 pb-5">
		<main id="main" class="site-main">
		<div class="container">
					<?php if ( have_posts() ) : ?>
						<h2 class="search-result-title">
							<?php
								esc_attr_e( 'Search results for ', 'my-recipes' );
								the_search_query();
							?>
						</h2>
						<div class="row">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								?>
								<div class="col-12 col-md-6 col-lg-4">
									<?php
										get_template_part( 'template/template', 'collection' );
									?>
								</div>
								<?php
							endwhile;
							?>
						</div>
						<?php
					else :

						get_template_part( 'template/template', 'none' );

					endif;
					?>

		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
