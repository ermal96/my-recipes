<?php
/**
 * Template part for displaying collections
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Recipes
 */
?>
	<article  class="mr-collection-recipe" style="background:url(<?php the_post_thumbnail_url( 'medium_large' ); ?>)" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
								<a href="<?php the_permalink(); ?>">
									<div class="mr-collection-recipe-content">
										<h5 class="mr-collection-recipe-title"><?php the_title(); ?></h5>
										<div class="mr-collection-recipe-meta">
											<span><i class="fal fa-hat-chef"></i> <?php the_field( 'recipe_skill_level' ); ?></span>
											<span><i class="fal fa-clock"></i> <?php the_field( 'recipe_time' ); ?></span>
											<span><i class="fal fa-utensils"></i> <?php the_field( 'recipe_serves' ); ?></span>
										</div>
									</div>
								</a>
	</article><!-- #post-<?php the_ID(); ?> -->
