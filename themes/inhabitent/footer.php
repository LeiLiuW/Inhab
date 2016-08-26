<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-widget-area" >
					<?php dynamic_sidebar( 'sidebar-1'); ?>
				</div><!-- #secondary -->
				<div class="footer-inhabitent-logo">
					<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-text.svg" alt="inhabitent">
				</div>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
