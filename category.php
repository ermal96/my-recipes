<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package My_Recipes
 */

get_header();
?>

<?php $cat_count = get_category( get_queried_object() ); ?>

	<div id="category" class="content-area">
		<main id="main" class="site-main">
		<header class="entry-header-category">
			<h1 class="entry-title-category"><?php single_cat_title(); ?></h1>
			<div class="entry-meta-single">
				<span><?php echo esc_attr( $cat_count->count . __( ' ne total', 'my-recipes' ) ); ?> </span>
			</div>
		</header><!-- .entry-header -->
		<div class="container">

		<div class="row">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="col-12 col-md-6 col-lg-4">
					<?php	get_template_part( 'template-parts/content', 'category' ); ?>
					</div>
				<?php
				// // If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
		</div>
			<div class="paginate-links">
				<?php  echo paginate_links(array(
					'prev_next' => false
				));?>
		</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
