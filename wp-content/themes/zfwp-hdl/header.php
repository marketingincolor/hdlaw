<?php
/**
 * The header template
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?> </title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Muli:400,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>

	<?php wp_head(); ?>

	<script type="text/javascript">
		jQuery(function($){
			$('.search-link').click(function () {
				$('.header-search').toggleClass('close');
			});
		})
	</script>

</head>

<body <?php body_class(); ?>>

	<div class="row default large-collapse">
		<div class="medium-12 hide-for-small-only columns">

			<div class="header-search close">
				<form method="get" id="searchform" action="<?php echo home_url();?>">
					<div class="header-search-form small-12 small-centered columns"><div class="search-zoom search-btn"></div> <input id="s" name="s" type="text" placeholder="<?php _e('Type & hit enter to search','presslayer');?>" class="search-box" />
					</div>
				</form>
			</div>

			<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="small-4 columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-hdr-logo.png" /></a>

				</div>
				<div class="small-4 columns" style="text-align:center;">
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" rel="home" style="margin-top:20px; display:block;"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-hdr-cta.png" /></a>
				</div>
				<div class="small-4 columns" style="text-align:right;">
					<h3>Call Toll-Free</h3>
					<h2 style="font-size:24px;"><?php do_action( 'cta_phone' ); ?></h2>
					<h4 style="font-style:italic;"><?php bloginfo( 'description' ); ?></h4>
				</div>
			</div>
			</header>

		</div>

		<div class="small-12 show-for-small-down">
			<header id="masthead" class="mobile-header" role="banner">
				<div class="site-description"><?php bloginfo( 'description' ); ?></div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-mob-hdr-logo.png" /></a>
			</header>
		</div>
	</div>

	<div class="row large-collapse">
		<div class="medium-12 hide-for-small-only">

			<nav class="top-bar" data-topbar>
				<ul class="title-area">
					<li class="name"><!-- Leave this empty --></li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>
				<section class="top-bar-section">
					<?php
					$search_link = '<li class="menu-item menu-item-type-custom-search"><a class="search-link">Search</a></li>';
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu'            => 'main-menu',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'main-menu',
						'menu_id'         => 'mid',
						'fallback_cb'     => 'wp_page_menu',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s'.$search_link.'</ul>',
						'depth'           => 3,
						'walker'          => new foundation_walker_nav_menu
					) );
					?>
				</section>
			</nav>

		</div>
		<div class="small-12 show-for-small-down">
			<?php include get_template_directory() . '/includes/mobile-nav.php'; ?>
		</div>

	</div>
	<div class="row default large-collapse">

<!--		<div class="small-12 columns">
			<section class="scroll-container" role="main">-->


	<?php if ( is_front_page() || is_home() ) : ?>
		<div id="main-content" class="small-12 columns">
			<section class="scroll-container" role="main">
	<?php else : ?>
		<div id="main-content" class="small-12 medium-8 columns">
			<section class="scroll-container" role="main">
	<?php endif; ?>




