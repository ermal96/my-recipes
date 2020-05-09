<?php

/**
 * Function to dispaly theme header.
 */
function mr_theme_header() {
	$facebook_url  = '#';
	$instagram_url = '#';
	if ( get_option( 'mr-social-links' )['facebook'] ) {
		$facebook_url = get_option( 'mr-social-links' )['facebook'];
	}
	if ( get_option( 'mr-social-links' )['instagram'] ) {
		$instagram_url = get_option( 'mr-social-links' )['instagram'];
	}

	?>
		<nav class="mr-nav-top">
			<div class="mr-social">
				<a target="_blank" href="<?php echo esc_attr( $facebook_url ); ?>"><i class="fab fa-facebook"></i></a>
				<a target="_balnk" href="<?php echo esc_attr( $instagram_url ); ?>"><i class="fab fa-instagram"></i></a>
			</div>
			<div class="mr-logo" >
				<?php the_custom_logo(); ?>
				<p><?php echo esc_attr__( get_bloginfo( 'name' ) ); ?></p>
			</div>
				<button class="navbar-toggler" type="button" id="menuMobileBtnShow">
					<i class="fal fa-bars"></i>
				</button>	

			<div class="mr-search">
			<?php mr_search_form(); ?>
				<i id="searchToggleForm" class="fal fa-search"></i>
			</div>
		</nav>
	<?php
}
