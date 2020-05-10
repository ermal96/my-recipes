<?php
/**
 * Set recipe views count using post meta
 */
function mr_set_rost_views( $post_id ) {
	$count_key = 'recipe_views_count';
	$count     = get_post_meta( $post_id, $count_key, true );
	if ( $count == '' ) {
		$count = 0;
		delete_post_meta( $post_id, $count_key );
		add_post_meta( $post_id, $count_key, '0' );
	} else {
		$count++;
		update_post_meta( $post_id, $count_key, $count );
	}
}
