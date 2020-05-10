<?php
/**
 * The template for displaying all single recipes
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package My_Recipes
 */

get_header();
?>
	<div id="single-recipe" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();

				// set post views.
				mr_set_rost_views( get_the_ID() );

				// get template.
				get_template_part( 'template/template', 'recipe' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
