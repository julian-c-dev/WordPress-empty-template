<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package empty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'empty' ); ?></a>

		<header id="site-header" class="site-header mk-bg-white mk-shadow-sm">
			<div class="mk-max-w-container mk-mx-auto mk-px-4">
				<div class="mk-flex mk-justify-between mk-items-center mk-h-20">

					<?php // Logo / Site Title. ?>
					<div class="site-branding">
						<?php if ( has_custom_logo() ) : ?>
							<?php the_custom_logo(); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mk-text-2xl mk-font-bold mk-text-gray-900">
								<?php bloginfo( 'name' ); ?>
							</a>
						<?php endif; ?>
					</div>

					<?php // Primary Navigation. ?>
					<nav id="site-navigation" class="main-navigation mk-hidden md:mk-block">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'mk-flex mk-gap-8 mk-m-0 mk-list-none',
								'container'      => false,
								'fallback_cb'    => false,
							)
						);
						?>
					</nav>

					<?php // Mobile Menu Toggle. ?>
					<button id="mobile-menu-toggle" class="md:mk-hidden mk-p-2" aria-label="<?php esc_attr_e( 'Toggle menu', 'empty' ); ?>">
						<?php echo wp_kses( empty_svgs( 'menu' ), empty_allowed_svg_tags() ); ?>
					</button>
				</div>

				<?php // Mobile Menu. ?>
				<div id="mobile-menu" class="md:mk-hidden mk-hidden mk-pb-4">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'mk-flex mk-flex-col mk-gap-4 mk-m-0 mk-list-none',
							'container'      => false,
							'fallback_cb'    => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">