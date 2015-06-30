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
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans' type='text/css' />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>