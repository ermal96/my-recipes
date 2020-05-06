<?php
/**
 * Template part for displaying posts
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
				<span><?php echo __( 'Postuar ne ', 'my-recipes' ) . get_the_time( 'd / m / y' ); ?> </span>
			</div>
		</header><!-- .entry-header -->

		<div class="entry-content-single">
			<div  class="container">
				<div class="row">
					<div class="col-lg-6">
						<?php the_content(); ?>
					</div>
					<div class="col-lg-6">
						<?php my_recipes_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</div>

</article><!-- #post-<?php the_ID(); ?> -->
