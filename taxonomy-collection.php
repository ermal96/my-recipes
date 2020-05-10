<?php
/**
 * The template for displaying all collection recipes
 *
 * @package My_Recipes
 */

get_header();


$terms   = get_queried_object();
$cat_obj = get_category( $terms );

$image_url = get_field( 'collection_image', $terms );
$color     = get_field( 'collection_color', $terms );
?>

	<div id="collection" class="content-area">
		<main id="main" class="site-main">
			<header class="entry-header-type" style="background:url(<?php echo esc_attr( $image_url ); ?>);">
			<span class="header-bg" style="background:<?php echo esc_attr( $color ); ?>"></span>
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
						<?php get_template_part( 'template/template', 'collection' ); ?>
					</div>
					<?php
				endwhile; // End of the loop.
				?>
			</div>
			<?php mr_paginate_links(); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
