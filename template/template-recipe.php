<?php
/**
 * Template part for displaying  single recipe
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Recipes
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header-single">
			<h1 class="entry-title-single"><?php the_title(); ?></h1>
			<div class="entry-meta-single">
				<span><?php echo esc_attr( __( 'Posted on ', 'my-recipes' ) . get_the_time( 'd / m / y' ) ); ?> </span>
			</div>
		</header><!-- .entry-header -->

		<div class="entry-content-single">
			<div  class="container">
			<div id="social-share">
				<?php do_action( 'mr_social_share' ); ?>
			</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="mr-recipe-meta">
							<div class="mr-recipe-meta-info">
								<p class="mr-preparation-time">
								<i class="fal fa-hat-chef"></i>
									<?php echo __( 'Preparation Skills ', 'my-recipes' ) . '<span>' . get_field( 'recipe_skill_level' ) . '</span>'; ?>
								</p>
								<p class="mr-preparation-time">
									<i class="fal fa-clock"></i> 
									<?php echo __( 'Preparation Time ', 'my-recipes' ) . '<span>' . get_field( 'recipe_time' ) . '</span>' . __( ' min', 'my-recipes' ); ?>
								</p>
								<p class="mr-preparation-time">
								<i class="fal fa-utensils"></i>
									<?php echo __( 'Servings ', 'my-recipes' ) . '<span>' . get_field( 'recipe_serves' ) . __( ' persons', 'my-recipes' ) . '</span>'; ?>
								</p>
							</div>
							<div class="mr-recipe-meta-ingredients">
							 <ul class="list-group list-group-flush">
									<?php
									if ( have_rows( 'recipe_ingredients' ) ) :

										while ( have_rows( 'recipe_ingredients' ) ) :
											the_row();
											?>
											<li class="list-group-item">
												<?php the_sub_field( 'recipe_ingredient' ); ?>
											</li>
											<?php
									   endwhile;
										else :
											return null;
										endif;

										?>
							</ul>
							</div>
						</div>
						<div class="mr-recipe-preparation-method">
							<div class="mr-recipe-preparation-method-card">
								<?php echo get_field( 'recipe_preparation_method' ); ?>
							</div>	
						</div>
					</div>

					<div class="col-lg-6">	
						<div class="recipe-image">
						<?php the_post_thumbnail( 'medium_large' ); ?>
						</div>
					</div>

				</div>
			</div>
		</div>

</article><!-- #post-<?php the_ID(); ?> -->
