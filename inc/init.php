<?php
/**
 * Load theme support.
 */
require 'theme-supports.php';

/**
 * Load scripts.
 */
require 'scripts.php';

/**
 * Custom template tags for this theme.
 */
require 'template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require 'template-functions.php';

/**
 * Customizer additions.
 */
require 'customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require 'jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require 'woocommerce.php';
}

/**
 * Security matters.
 */
add_filter( 'the_generator', '__return_empty_string' );


if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
	 */
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
}

/**
 * Development Helpers.
 */

function print_pre( $data ) {
	echo '<pre>';
	var_dump( $data );
	echo '</pre>';
}

