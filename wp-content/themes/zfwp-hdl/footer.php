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
		<div id="sidebar-separator" class="medium-4 columns">
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>

	</div>


	<?php if ( is_front_page() || is_home() ) : ?>
	<div class="row collapse medium-uncollapse large-uncollapse">
		<div id="front-page-news" class="small-12 columns" style="padding:0px 20px;">
			<h1 style="font-weight:normal;">News</h1>
			<?php include get_template_directory() . '/includes/frontpage-news.php'; ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="row large-collapse">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<br />
			<div class="row collapse medium-uncollapse large-uncollapse" data-equalizerx>

				<div class="small-12 medium-3 columns" data-equalizer-watchx>
					<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						<div id="widget-area" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</div><!-- .widget-area -->
					<?php endif; ?>
					<div class="show-for-small-only"><hr class="footer-rule" /></div>
				</div>

				<div class="footer-separator hide-for-small-only medium-3 columns" data-equalizer-watchx>
					<div id="widget-area" class="widget-area" role="complementary">
						<div class="widget">
							<h3 class="widget-title">Services</h3>
							<div class="menu-footer-menu-container">
								<ul>
									<?php
									$where_page = get_id_by_slug('our-services');
									wp_list_pages('title_li=&child_of='.$where_page ); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-separator small-12 medium-3 columns" data-equalizer-watchx>
					<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
						<div id="widget-area" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-5' ); ?>
						</div><!-- .widget-area -->
					<?php endif; ?>
					<span class="show-for-small-only"><hr class="footer-rule" /></span>
				</div>

				<div class="footer-separator small-12 medium-3 columns" data-equalizer-watchx>
					<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
						<div id="widget-area" class="hide-for-small-only widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-6' ); ?>
						</div><!-- .widget-area -->
						<div class="show-for-small-only widget-area">
							<br />
							<?php do_action( 'social_icons', 'footer' ); ?>

						</div>
					<?php endif; ?>
				</div>

			</div>
			<div class="small-12 show-for-medium-up">
				<div style="display:inline-block; font-size:1.25em;">Follow Us on Social Media!</div>
				<?php do_action( 'social_icons', 'footer' ); ?>
			</div>
			<br />
			<div class="row collapse medium-uncollapse large-uncollapse site-info">
				<div id="footer-menu" class="small-12 columns">
					<div class="footer-nav">
						<div><a href="<?php echo esc_url( home_url( '/terms-of-use' ) ); ?>">Terms of Use</a></div>
						<div>&nbsp;&#124;&nbsp;</div>
						<div><a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy Policy</a></div>
						<!--<div>&nbsp;&#124;&nbsp;</div>
						<div><a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Site Map</a></div>-->
					</div>
					<span class="show-for-small-only"></span>
					<div class="footer-copy alpha">&nbsp;&#124;&nbsp;Copyright &copy; <?php echo date("Y"); ?> HD Law Partners</div>
					<div class="footer-copy beta">Copyright &copy; <?php echo date("Y"); ?> HD Law Partners</div>
				</div>
			</div><!-- .site-info -->

		</footer><!-- .site-footer -->
	</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.accordion.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.equalizer.js"></script>
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
			autoplaySpeed: 6000,
			respondTo: 'min',
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
			autoplaySpeed: 6000

		});
	});
</script>

</body>
</html>