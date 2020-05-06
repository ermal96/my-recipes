<?php

$args  = array(
    'posts_per_page' => 6,
    'order' => 'ASC'
);
$query = new WP_Query( $args );
?>
<div class="posts-slider-conatiner">
	<div class="swiper-wrapper">
		<?php
		while ( $query->have_posts() ) :
			$query->the_post();
			?>
			<div style="background: url(<?php the_post_thumbnail_url(); ?>)" class="swiper-slide post-slider">
				<div class="content-slider">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-warning">Lexo Receten</a>
				</div>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
		?>
	</div>
	<div class="swiper-pagination"></div>
 </div>

 


