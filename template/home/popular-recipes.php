<?php
/**
 * Template part for displaying popular recipes
 *
 * @package My_Recipes
 */
	$query = new WP_Query(
		array(
			'posts_per_page' => 10,
			'meta_key'       => 'recipe_views_count',
			'orderby'        => 'meta_value_num',
			'order'          => 'DESC',
			'post_type'      => 'recipe',
		)
	);
	?>

<section class="mr-popular-recipes">
	<h2 class="mr-popular-recipes-title"><?php esc_attr_e( 'Popular Recipes', 'my-recipes' ); ?></h2>

	<div class="swiper-container-popular-recipes">
		<div class="swiper-wrapper">
			<?php
			while ( $query->have_posts() ) :
					$query->the_post();
				?>
							<div class="swiper-slide mr-popular-recipe" style="background:url(<?php the_post_thumbnail_url(); ?>)">
								<a href="<?php the_permalink(); ?>">
									<div class="mr-popular-recipe-content">
										<h5 class="mr-popular-recipe-title"><?php the_title(); ?></h5>
										<div class="mr-popular-recipe-meta">
											<span><i class="fal fa-hat-chef"></i> <?php the_field( 'recipe_skill_level' ); ?></span>
											<span><i class="fal fa-clock"></i> <?php the_field( 'recipe_time' ); ?></span>
											<span><i class="fal fa-utensils"></i> <?php the_field( 'recipe_serves' ); ?></span>
										</div>
									</div>
								</a>
							</div>		
					<?php
								endwhile;
						wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="swiper-button-next swiper-button-next-popular-recipes"></div>
	<div class="swiper-button-prev swiper-button-prev-popular-recipes"></div>
</section>
