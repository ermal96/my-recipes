<?php

/**
 * Function mr_paginate_links.
 */
function mr_paginate_links() {
	echo '<div class="paginate-links">';
	echo paginate_links(
		array(
			'prev_next' => false,
		)
	);
	echo '</div>';
}


