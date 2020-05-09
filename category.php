<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package My_Recipes
 */

get_header();
$cat_obj = get_category( get_queried_object() );
?>


	<div id="type" class="content-area">
		<main id="main" class="site-main">
			<header class="entry-header-type" style="">
				<h1 class="entry-title-type"><?php single_cat_title(); ?></h1>
				<div class="entry-meta-single">
					<span><?php echo esc_attr( $cat_obj->count . __( ' in total', 'my-recipes' ) ); ?> </span>
				</div>
			</header>
		<div class="container">
			<div class="row">
				<?php
				while ( have_posts() ) :
						the_post();
					?>
					<div class="col-12 col-md-6 col-lg-4">
						<?php get_template_part( 'template/template', 'category' ); ?>
					</div>
					<?php
				endwhile; // End of the loop.
				?>
			</div>
			<div class="paginate-links">
				<?php
					echo paginate_links(
						array(
							'prev_next' => false,
						)
					);
					?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
