<?php
/**
 * Custom display of Services for Frontpage, as UL for reuse as needed.
 *
 */
?>
<ul id="services-list" class="small-block-grid-5">
<?php
$where_page = get_id_by_slug('our-services');
$args = array( 'child_of' => $where_page, 'sort_order' => 'asc' );
$show_pages = get_pages( $args );
foreach ( $show_pages as $page ) :
	$img_args = array(
		'numberposts' => 1,
		'order'=> 'ASC',
		'post_mime_type' => 'image',
		'post_parent' => $page->ID,
		'post_type' => 'attachment'
	);
	$get_children_array = get_children($img_args,ARRAY_A);
	$rekeyed_array = array_values($get_children_array);
	$child_image = $rekeyed_array[0];
?>
	<li>
		<span id="services-list-title"><?php echo $page->post_title; ?></span>
		<span id="services-list-img"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo wp_get_attachment_image( $child_image['ID'] ); ?></a></span>
		<span id="services-list-copy"><p style=" text-align:center !important;"><?php echo $page->post_excerpt; ?></p></span>
	</li>
<?php endforeach; ?>
</ul>
