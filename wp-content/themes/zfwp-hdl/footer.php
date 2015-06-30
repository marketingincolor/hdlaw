<?php
/**
 * The footer template
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?>
<!--			</section>
		</div>-->



	<?php if ( is_front_page() || is_home() ) : ?>
			</section>
		</div>
	<?php else : ?>
			</section>
		</div>
		<div class="medium-4 columns">
			Sidebar Content here:
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>

	</div>

	<div class="row large-collapse">
		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="row">

				<div class="small-12 medium-3 columns" style="display:flex;">
					<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						<div id="widget-area" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</div><!-- .widget-area -->
					<?php endif; ?>

				</div>

				<div class="hide-for-small-only medium-3 columns">
					Add Services Link List via menu display shortcode

				</div>

				<div class="small-12 medium-3 columns">
					<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
						<div id="widget-area" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-5' ); ?>
						</div><!-- .widget-area -->
					<?php endif; ?>

				</div>

				<div class="small-12 medium-3 columns">
					<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
						<div id="widget-area" class="hide-for-small-only widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-6' ); ?>
						</div><!-- .widget-area -->
						<div class="show-for-small-only small-12">
							<?php do_action( 'social_icons', 'footer' ); ?>

						</div>
					<?php endif; ?>
				</div>


			</div>

			<div class="row site-info">
				<div class="small-12 columns">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zfwpbase' ) ); ?>">Terms of Use</a>
					&nbsp;&#124;&nbsp;
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zfwpbase' ) ); ?>">Privacy Policy</a>
					&nbsp;&#124;&nbsp;
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zfwpbase' ) ); ?>">Site Map</a>
					<br />
					Copyright &copy; <?php echo date("Y"); ?> HD Law Partners
				</div>
			</div><!-- .site-info -->

		</footer><!-- .site-footer -->
	</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
<script>
	$(document).foundation();
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.frontpage-news-slider').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
					breakpoint: 640,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
		$('.frontpage-profiles-slider').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000

		});
	});
</script>

</body>
</html>