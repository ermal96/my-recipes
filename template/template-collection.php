<?php
/**
 * Template part for displaying collections
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Recipes
 */
?>
	<article class="mr-types-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<img src="<?php the_post_thumbnail_url(); ?>" class="" >
		<div class="mr-meta-info">
					<i class="fal fa-clock"></i>  	<?php echo get_field( 'recipe_time' ) . __( ' min', 'my-recipes' ); ?>
				</div>
			<div class="mr-types-card-body">
				<h3 class="mr-types-card-title"><?php the_title(); ?></h3>
				<a href="<?php the_permalink(); ?>" class="mr-type-btn"><?php echo esc_attr( __( 'See More', 'my-recipes' ) ); ?></a>
			</div>
	</article><!-- #post-<?php the_ID(); ?> -->
