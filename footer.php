<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset Child 1.0
 */
?>

</div>
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
			<div class="site-credit">
				<p>&copy; 2015 All Rights Reserved ||| <a href="http://html5reset.org/">HTML5 Reset</a> by Tim Murtaugh and Michael Pick, Child Theme by <a href="mailto:browk276@gmail.com">Awesome Dude</a></p>

			</div>
		</footer><!-- #colophon -->
		</div>
		</div>

	<?php wp_footer(); ?>
</body>
</html>