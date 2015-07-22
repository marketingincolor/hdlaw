<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?>
<div class="sidebar columns">

	<?php if ( is_page('contact-us') ) : ?>
		<?php include get_template_directory() . '/includes/contact-sidebar.php'; ?>
	<?php else : ?>
	<div class="columns show-for-medium-up">
		<?php if ( function_exists( 'ccf_output_form' ) ) {
			//echo do_shortcode( '[ccf_display id="181"]' );
			echo do_shortcode( '[ccf_display id="64"]' );
		} ?>
	</div>
	<?php endif; ?>

	<div id="secondary" class="secondary columns">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	</div><!-- .secondary -->
</div>
