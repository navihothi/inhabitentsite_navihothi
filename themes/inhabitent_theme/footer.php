<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-container" >
		<div class="site-info">
			<?php dynamic_sidebar( 'footer' ); ?>
				<div class="footer-block">
					<div class="logo">
						<a href="<?php echo home_url( '/' ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo"/>
						</a>
					</div>
				</div>
		</div><!-- .site-info -->
				<div class="copyright">
					<?php printf( __('Copyright &copy; 2019 Inhabitent')); ?>
				</div>
	</div>

	<!-- JS AND JQUERY -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script rel="text/javascript" src="<?php echo get_template_directory_uri(); ?>/build/js/scroll-header.min.js">  </script>
</footer><!-- #colophon -->
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
