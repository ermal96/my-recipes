<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Recipes
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div class="footer-wrapper">
			<?php the_custom_logo(); ?>
			<p><?php echo __( '&copy; Copyright ', 'my-recipes' ) . date( 'Y' ) . __(' te gjitha te drejtat e rezervuara', 'my-recipes'); ?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
