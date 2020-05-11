<?php
$collections = get_terms( 'collection' );
?>

<section class="mr-collections">
	<h2 class="mr-collection-title"><?php esc_attr_e( 'Collections', 'my-recipes' ); ?></h2>
		<div class="row">
			<?php foreach ( $collections as $collection ) : ?>
				<?php
				$image_url = get_field( 'collection_image', $collection );
				$color     = get_field( 'collection_color', $collection );
				?>
				<div class="mr-collection md-auto " style="background-image:url(<?php echo esc_attr( $image_url ); ?>);">
						<span style="background:<?php echo esc_attr( $color ); ?>"></span>
						<a  href="<?php echo get_term_link( $collection ); ?>"><h3><?php echo esc_attr( $collection->name ); ?></h3></a>
				</div>
			<?php endforeach; ?>
		</div>
</section>
