<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Recipes
 */

?>

<a href="<?php the_permalink(); ?>">

	<article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" >
			<div class="card-body">
				<h5 class="card-title"><?php the_title(); ?></h5>
				<p class="card-text"><?php the_excerpt(); ?></p>
			</div>
	</article><!-- #post-<?php the_ID(); ?> -->


</a>