<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package esportsWP
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic,800,800italic'
		  rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
<div id="page" class="menu hfeed site">

	<header id="masthead" class="site-header" role="banner">

	<div id="header">
		<section id="header-top">
			<a class="menu-toggle" id="menuButton"><i></i></a>
			<nav class="main-menu menu-side arrow-right">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'container' 	=> '',
					) ); ?>
			</nav>

		</section>

		<section id="header-search">
			<?php get_search_form(  ); ?>
		</section>





	</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">



