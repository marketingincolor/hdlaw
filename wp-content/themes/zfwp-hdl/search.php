<?php
/**
 * The template for displaying all search results
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
get_header(); ?>

<div class="row collapse medium-uncollapse">
	<div class="small-12 columns">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			//get_template_part( 'content', get_post_format() );
			get_template_part( 'content', 'search' );
			// End the loop.
		endwhile; ?>

	</div>
</div>

	<?php get_footer(); ?>
