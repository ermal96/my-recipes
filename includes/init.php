<?php
/**
 * Load theme functions.
 */
require 'theme/theme.php';

/**
 * Load theme scripts.
 */
require 'scripts/scripts.php';

/**
 * Require theme helpers.
 */
require 'helpers/helpers.php';


/**
 * Security matters.
 */
add_filter( 'the_generator', '__return_empty_string' );


