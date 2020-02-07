<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EcoVolt
 * @author Benjamin Roffe
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157812059-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157812059-1');
</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="theme-color" content="#F44336">
	<meta name="msapplication-navbutton-color" content="#F44336">
	<meta name="apple-mobile-web-app-status-bar-style" content="#F44336">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<?php wp_head(); ?>

	<noscript>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/dist/css/noscript.css'; ?>">
	</noscript>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	

	
	
	<header id="masthead" class="site-header" role="banner">
			<!-- <a href="#" onclick="mute(); return false;">
				<i class="fas fa-volume-mute"></i></a> -->
		<?php get_template_part( 'template-parts/layout/layout', 'main-nav' ); ?>
	</header>
