<?php

$args  = array(
	'posts_per_page' => 6,
	'order'          => 'ASC',
);
$query = new WP_Query( $args );
?>
<div class="posts-slider-conatiner">
	<div class="swiper-wrapper">
		<?php
		while ( $query->have_posts() ) :
			$query->the_post();
			$categories = get_the_category();
			$cat_name   = $categories[0]->cat_name;
			?>
			<div style="background: url(<?php the_post_thumbnail_url(); ?>)" class="swiper-slide post-slider">
				<div class="content-slider ">
					<div class="post-slider-category">
						<?php echo $cat_name; ?>
					</div>
					<h2><?php the_title(); ?></h2>
					<a href="<?php the_permalink(); ?>" class="mr-slider-btn">Lexo Receten</a>
				</div>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
		?>
	</div>
 </div>

 


