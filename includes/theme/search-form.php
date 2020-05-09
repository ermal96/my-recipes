<?php

/**
 * Function to dispaly search from.
 */
function mr_search_form() {
	?>
	<div class="mr-search-form" id="searchForm">
		<form action="<?php echo esc_attr( home_url() ); ?>" method="get">
			<input type="text" name="s" id="search" placeholder="<?php echo esc_attr( __( 'Search', 'my-recipes' ) ); ?>" value="<?php the_search_query(); ?>" />
		</form>
	</div>
	<?php
}
