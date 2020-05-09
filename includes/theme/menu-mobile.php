<?php

/**
 * Function to dispaly mobile menu.
 */
function mr_menu_mobile() {
	?>
	<div class="collapse" id="mobileMenu" >
				<div class="mr-mobile-menu-wrapper">
				<div class="mr-logo-menu-mobile">
					<?php the_custom_logo(); ?>
					<p><?php echo esc_attr__( get_bloginfo( 'name' ) ); ?></p>
				</div>
				<button class="navbar-toggler" type="button" id="menuMobileBtnHide">
					<i class="fal fa-times"></i>
				</button>
				</div>
				<div class="navbar-nav-mobile">
					<?php wp_nav_menu(); ?>
				</div>
				<div class="mr-contact">
					<a class="mr-btn-contact" href="#"><?php echo esc_attr( 'Contact', 'my-recipes' ); ?></a>
				</div>
			</div>
	<?php
}
