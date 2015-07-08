<?php
/**
 * Custom display of News items for Frontpage, using Slick Slider.
 *
 */

?>

<div class="frontpage-news-slider" style="padding:0px 20px 20px 20px;">
	<?php
	$args = array( 'posts_per_page' => 5, 'category_name' => 'news' );
	$show_posts = get_posts( $args );
	foreach ( $show_posts as $post ) : setup_postdata( $post ); ?>
		<div>
			<span><?php the_title(); ?></span>
			<span><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></span>
			<span style="margin-top:10px; display:block; min-height:100px;"><?php the_excerpt(); ?></span>
			<span><a href="<?php the_permalink(); ?>" class="button radius white-gradient">Read More</a></span>
		</div>
	<?php endforeach;
	wp_reset_postdata();?>
</div>




