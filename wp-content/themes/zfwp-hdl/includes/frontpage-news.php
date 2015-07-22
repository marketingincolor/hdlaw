<?php
/**
 * Custom display of News items for Frontpage, using Slick Slider.
 *
 */

?>

<div class="frontpage-news-slider" style="padding:0px 20px 20px 20px;">
	<?php
	$args = array( 'posts_per_page' => 15, 'category_name' => 'news' );
	$show_posts = get_posts( $args );
	foreach ( $show_posts as $post ) : setup_postdata( $post ); ?>
		<div>
			<div style="min-height:3.75em; line-height:1.25em;"><?php the_title(); ?></div>
			<div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
			<div style="margin-top:10px; display:block; min-height:100px;"><?php the_excerpt(); ?></div>
			<div><a href="<?php the_permalink(); ?>" class="button radius white-gradient">Read More</a></div>
		</div>
	<?php endforeach;
	wp_reset_postdata();?>
</div>




