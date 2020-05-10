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
		
		<div class="container">
			<div class="mb-5">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry-meta-single mb-5">
			<h1 class="entry-title-single"><?php the_title(); ?></h1>
				<span><?php echo esc_attr( __( 'Posted on ', 'my-recipes' ) . get_the_time( 'd / m / y' ) ); ?> </span>
			</div>
			<div class="mb-5">
			<?php the_content(); ?>
			</div>
		</div>
			

</article><!-- #post-<?php the_ID(); ?> -->
