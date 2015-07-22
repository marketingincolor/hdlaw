<?php
/**
 * ZFWP Base Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 */
if ( ! function_exists( 'theme_setup' ) ) :
	/**
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support post thumbnails.
	 */
	function theme_setup() {
		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );
		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 294, 208 );
		add_image_size( 'news-thumb', 250, 130, true );
		add_image_size( 'related-thumb', 220, 115, true );
		add_image_size( 'profile-thumb', 110, 150, true );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'   =>  'Header menu',
			'secondary' => 'Footer menu'
		) );
		//Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
		//Enable support for Post Formats. See http://codex.wordpress.org/Post_Formats
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
		) );
		//Creating custom theme settings
		require get_template_directory() . '/includes/custom-settings.php';
	}
endif;

add_action( 'after_setup_theme', 'theme_setup' );

require get_template_directory() . '/includes/foundation-wp-navwalker.php';

//Initialize and Register sidebars for theme
function theme_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Primary Sidebar', 'zfwpbase' ),
		'id' => 'sidebar-1',
		'description' => __( 'Main sidebar content for site', 'zfwpbase' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => __('Secondary Sidebar', 'zfwpbase' ),
		'id' => 'sidebar-2',
		'description' => __( 'Alternate sidebar content for site', 'zfwpbase' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => __('Tertiary Sidebar', 'zfwpbase' ),
		'id' => 'sidebar-3',
		'description' => __( 'Alternate sidebar content for site', 'zfwpbase' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => __( 'Footer One', 'zfwpbase' ),
		'id' => 'sidebar-4',
		'description' => __( 'Footer area content for site', 'zfwpbase' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => __( 'Footer Two', 'zfwpbase' ),
		'id' => 'sidebar-5',
		'description' => __( 'Footer area content for site', 'zfwpbase' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => __( 'Footer Three', 'zfwpbase' ),
		'id' => 'sidebar-6',
		'description' => __( 'Footer area content for site', 'zfwpbase' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}
add_action( 'widgets_init', 'theme_widgets_init' );
// Enqueue scripts and functions specific for theme
//function theme_scripts () {
//	wp_enqueue_script( 'devtheme-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20140319', true );
//}
//add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Shortcode for display of Custom Contact Forms [ccf id="##"]
function ccf_shortcode ( $atts ){
	$val = shortcode_atts( array(
		'id' => '0'
	), $atts );
	$form_id = $val['id'];
	return ccf_output_form( $form_id );
}
add_shortcode('ccf_display', 'ccf_shortcode');

//Create custom display for Social Media icons as grouped set.
function display_social_media_icons( $pagelocation ){
	$custom_option = get_option('custom_option_name');
	$stringfix = ($pagelocation == 'header' ? 'left' : 'center');
	echo '<div class="social-icons">';
	echo '<p style="text-align:' . $stringfix . ';" >' ;

	if ($custom_option['fb_link']) :
		echo '&nbsp;<a href="'.$custom_option['fb_link'].'" target="_blank"><img src="'. get_template_directory_uri(). '/img/hdl-grfx-ico-sm-fb.png"></a>&nbsp;';
	endif;

	if ($custom_option['tw_link']) :
		echo '&nbsp;<a href="'.$custom_option['tw_link'].'" target="_blank"><img src="'. get_template_directory_uri(). '/img/hdl-grfx-ico-sm-tw.png"></a>&nbsp;';
	endif;

	if ($custom_option['gp_link']) :
		echo '&nbsp;<a href="'.$custom_option['gp_link'].'" target="_blank"><img src="'. get_template_directory_uri(). '/img/hdl-grfx-ico-sm-gp.png"></a>&nbsp;';
	endif;

	if ($custom_option['li_link']) :
		echo '&nbsp;<a href="'.$custom_option['li_link'].'" target="_blank"><img src="'. get_template_directory_uri(). '/img/hdl-grfx-ico-sm-li.png"></a>&nbsp;';
	endif;

	echo '</p></div>';
}
add_action( 'social_icons', 'display_social_media_icons', 10, 1 );

//Create custom display for Company Phone Number Call To Action.
function display_cta_phone(){
	$custom_option = get_option('custom_option_name');
	$location_phone = $custom_option['pp_link'];
	echo '<div class="cta-phone">';
	echo '<a href="tel://'.$location_phone.'">'.$location_phone.'</a>';
	echo '</div>';
}
add_action( 'cta_phone', 'display_cta_phone', 10, 1 );


add_post_type_support( 'page', 'excerpt');

// Alter length of the Excerpt.
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Alter the more of the Excerpt.
function new_excerpt_more( $more ) {
	//return ' ...';
	return ' ...<a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( ' Read More', 'fwp-base' ) . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Enable Shortcodes in Widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

function get_id_by_slug($page_slug) {
	$find_page = get_page_by_path($page_slug);
	if ($find_page) {
		return $find_page->ID;
	} else {
		return null;
	}
}

add_filter( 'display_posts_shortcode_output', 'be_display_posts_read_more', 10, 9 );
function be_display_posts_read_more( $output, $atts, $image, $title, $date, $excerpt, $inner_wrapper, $content, $class ) {

	// First check if an excerpt is included by looking at the shortcode $atts
	if ( $atts['layout'] ) {
		// Now let's rebuild the excerpt to include read more
		$excerpt = '<div class="excerpt">' . get_the_excerpt() . '<br /><br /></div><a class="more-link blue-gradient" href="' . get_permalink() . '">Read More</a>';
		$title   = '<div><a class="title" href="' . apply_filters( 'the_permalink', get_permalink() ) . '">' . get_the_title() . '</a></div>';


		$date = '<div class="entry-meta"><img class="icon" src="' . get_template_directory_uri() . '/img/hdl-grfx-meta-ico-cal.png">&nbsp;' . $date . '&nbsp;<img class="icon" src="' . get_template_directory_uri() . '/img/hdl-grfx-meta-ico-fold.png">&nbsp;<a href="#" rel="category">' . get_the_category_list(', ') . '</a></div>';
	} else {
		$excerpt = '';
		$title = $title;
	}
	$title = '<div><a class="title" href="' . apply_filters( 'the_permalink', get_permalink() ) . '">' . get_the_title() . '</a></div>';

	// Now let's rebuild the output. Only the excerpt changed so we're using the original $image, $title, and $date
	$output = '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">' . $title . $image . $date . $excerpt . $content . '</' . $inner_wrapper . '>';

	// Finally we'll return the modified output
	return $output;
}

function be_display_post_class( $classes, $post, $listing, $atts ) {
	if( !isset( $atts['columns'] ) )
		return $classes;

	$columns = array( '', '', 'one-half', 'one-third', 'one-fourth', 'one-fifth', 'one-sixth' );
	$classes[] = $columns[$atts['columns']];
	if( 0 == $listing->current_post || 0 == $listing->current_post % $atts['columns'] )
		$classes[] = 'first';
	return $classes;
}
add_filter( 'display_posts_shortcode_post_class', 'be_display_post_class', 10, 4 );
