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
	<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="row default large-collapse">
		<div class="medium-12 hide-for-small-only columns">

			<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="small-4 columns">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-hdr-logo.png" /></a>

				</div>
				<div class="small-4 columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-hdr-cta.png" /></a>
				</div>
				<div class="small-4 columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">contact links</a>
				</div>
			</div>
			</header>

		</div>

		<div class="small-12 show-for-small-down">
			<header id="masthead" class="mobile-header" role="banner">
				<div class="site-description"><?php bloginfo( 'description' ); ?></div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl-grfx-mob-hdr-logo.png"</a>
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
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu'            => 'main-menu',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => 'mid',
						'fallback_cb'     => 'wp_page_menu',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 3,
						'walker'          => new foundation_walker_nav_menu
					) );
					?>
				</section>
			</nav>

		</div>
		<div class="small-12 show-for-small-down">
			<div class="mobile-nav">Menu</div>
		</div>

	</div>
	<div class="row default large-collapse">

<!--		<div class="small-12 columns">
			<section class="scroll-container" role="main">-->


	<?php if ( is_front_page() || is_home() ) : ?>
		<div class="small-12 columns">
			<section class="scroll-container" role="main">
	<?php else : ?>
		<div class="small-12 medium-8 columns">
			<section class="scroll-container" role="main">
	<?php endif; ?>




