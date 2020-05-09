<?php

/**
 * Function to dispaly desktop menu.
 */
function mr_menu_desktop() {
	?>
<div class="collapse menu-bottom" id="menuDesktop">
				<div class="navbar-nav">
					<?php wp_nav_menu(); ?>
				</div>
				<div class="mr-contact">
					<a class="mr-btn-contact" href="#"><?php echo esc_attr( 'Contact', 'my-recipes' ); ?></a>
				</div>
			</div>
	<?php
}
