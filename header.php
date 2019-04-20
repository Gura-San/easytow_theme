<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Citymotors
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php citymotors_get_page_preloader(); ?>
<div id="page" class="site">
	<div id="easytow-custom1">
		<div id="easytow-custom2">
			<a class="skip-link screen-reader-text"
			   href="#content"><?php esc_html_e( 'Skip to content', 'citymotors' ); ?></a>
			<header id="masthead" <?php citymotors_header_class(); ?> role="banner">
				<?php citymotors_ads_header(); ?>
				<?php get_template_part( 'template-parts/header/top-panel' ); ?>
				<div <?php citymotors_header_container_class(); ?>>
					<div <?php echo citymotors_get_container_classes( array( 'header-container_wrap' ), 'header' ); ?>>
						<?php get_template_part( 'template-parts/header/layout', get_theme_mod( 'header_layout_type' ) ); ?>
					</div>
				</div><!-- .header-container -->
			</header><!-- #masthead -->

			<div id="content" <?php citymotors_content_class(); ?>>
