<?php
/**
 * The custom template used for displaying front page content
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?>
<div class="row">
	<div id="front-page-services" class="hide-for-small medium-12 columns">

		<ul class="small-block-grid-5">
			<li>
				<h3>Appeals, Writs, & Trial Support</h3>
				<img src="http://satyr.io/82" /><br />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<h3>Appeals, Writs, & Trial Support</h3>
				<img src="http://satyr.io/82" /><br />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<h3>Appeals, Writs, & Trial Support</h3>
				<img src="http://satyr.io/82" /><br />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<h3>Appeals, Writs, & Trial Support</h3>
				<img src="http://satyr.io/82" /><br />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<h3>Appeals, Writs, & Trial Support</h3>
				<img src="http://satyr.io/82" /><br />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
		</ul>

	</div>
</div>

<div class="row">
	<div id="front-page-separator" class="hide-for-small medium-5 columns">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'zfwpbase' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'zfwpbase' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
				?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->

	</div>

	<div id="front-page-profiles" class="hide-for-small medium-7 columns">
		<?php include get_template_directory() . '/includes/frontpage-profiles.php'; ?>
	</div>
</div>
<div class="show-for-medium-up">&nbsp;</div>
<div class="row">
	<div id="front-page-news" class="small-12 columns">
		<h3>News</h3>
		<?php include get_template_directory() . '/includes/frontpage-news.php'; ?>
	</div>
</div>
