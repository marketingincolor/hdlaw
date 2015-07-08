<?php
/**
 * Custom display of Attorneys Profiles for Frontpage, using Slick Slider.
 *
 */
?>
<h1 class="entry-title">Attorney Profiles</h1>
<div class="frontpage-profiles-slider">

	<?php
	$where_page = get_id_by_slug('attorneys');
	$args = array( 'child_of' => $where_page, 'sort_order' => 'desc' );
	$show_pages = get_pages( $args );
	foreach ( $show_pages as $page ) :
	?>
	<div>
		<span style="min-height:40px; display:block; color: #47c2bf;"><?php  echo $page->post_title; ?></span>
		<span style="display:block;"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_post_thumbnail($page->ID, 'profile-thumb'); ?></a></span>
		<span style="margin-top:10px; display:block;"><a href="<?php echo get_page_link( $page->ID ); ?>" class="button radius blue-gradient">Read Bio</a></span>
	</div>
	<?php endforeach; ?>
</div>