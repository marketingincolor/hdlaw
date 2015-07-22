<?php
/**
 * The default template for displaying content
 *
 * Used for showing category content.
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */

get_header(); ?>
	<div class="row">
		<div class="small-12 columns">

			<?php if ( have_posts() ) : ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( '&laquo; Previous', 'zfwpbase' ),
					'next_text'          => __( 'Next &raquo;', 'zfwpbase' ),
					'screen_reader_text' => __( ' ', 'zfwpbase' )
				) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content', 'none' );
			endif;
			?>

		</div>
	</div>

<?php get_footer(); ?>
