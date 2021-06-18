<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lizzie_Theme_(Underscore)
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'body-bg' ); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'lizzie-theme-underscore'); ?></a>

		<header class="top-navigation">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid max-width">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<div class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;

					//$lizzie_theme_underscore_description = get_bloginfo('description', 'display');
					//if ($lizzie_theme_underscore_description || is_customize_preview()) :
					?>




					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-header',
								'container' => false,
								'menu_id'        => 'primary-menu',
								'container_class' => 'ms-auto',
								'menu_class'	=>	'navbar-nav',
								'list_item_class'  => 'nav-item',
								'link_class'   => 'nav-link'
							)
						);
						?>
					</div>
				</div>
			</nav>
		</header>

		<!-- TODO: Replace this -->
