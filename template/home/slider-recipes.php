<?php
/**
 * Template part for displaying recipes slider
 *
 * @package My_Recipes
 */
	$query = new WP_Query(
		array(
			'posts_per_page' => 6,
			'order'          => 'DESC',
			'post_type'      => 'recipe',
		)
	);
	?>

<section class="recipes-slider-conatiner">
	<div class="swiper-wrapper">
		<?php
		while ( $query->have_posts() ) :
				$query->the_post();
			?>
					<div style="background: url(<?php the_post_thumbnail_url(); ?>)" class="swiper-slide post-slider">
						<div class="content-slider ">
							<div class="post-slider-category"></div>
							<h3><?php the_title(); ?></h3>
							<a href="<?php echo get_the_post_thumbnail( 'mr-large-size' ); ?>" class="mr-slider-btn"><?php echo esc_attr( __( 'Read Recipe', 'my-recipes' ) ); ?></a>
						</div>
					</div>
				<?php
				endwhile;
		wp_reset_postdata();
		?>
	</div>
 </section>

 


