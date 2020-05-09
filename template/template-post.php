<?php
/**
 * Template part for displaying recipe
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
				<div class="row">
					<div class="col-lg-6">
						<div class="mr-recipe-meta">
							<div class="mr-recipe-meta-info">
								<p class="mr-preparation-time">
									<i class="fa fa-chart-bar"></i>
									<?php echo __( 'Preparation Skills ', 'my-recipes' ) . '<span>' . get_field( 'preparation_skills' ) . '</span>'; ?>
								</p>
								<p class="mr-preparation-time">
									<i class="fa fa-clock"></i> 
									<?php echo __( 'Preparation Time ', 'my-recipes' ) . '<span>' . get_field( 'preparation_time' ) . '</span>' . __( ' Min', 'my-recipes' ); ?>
								</p>
								<p class="mr-preparation-time">
									<i class="fa fa-chart-bar"></i> 
									<?php echo __( 'Servings ', 'my-recipes' ) . '<span>' . get_field( 'servings' ) . '</span>'; ?>
								</p>
							</div>
							<div class="mr-recipe-meta-ingredients">
							 <ul class="list-group list-group-flush">
									<?php
									if ( have_rows( 'ingredients' ) ) :

										while ( have_rows( 'ingredients' ) ) :
											the_row();
											?>
											<li class="list-group-item">
												<?php the_sub_field( 'ingredient' ); ?>
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
								<?php echo get_field( 'preparation_method' ); ?>
							</div>	
						</div>
					</div>
					<div class="col-lg-6">
						<?php my_recipes_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</div>

</article><!-- #post-<?php the_ID(); ?> -->
