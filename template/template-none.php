<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Recipes
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'my-recipes' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content-search">
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'my-recipes' ); ?></p>
			<?php mr_search_form(); ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
