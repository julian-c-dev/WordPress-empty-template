<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package empty
 */

?>

			</div><!-- #primary -->
		</div><!-- #content -->

		<footer id="site-footer" class="site-footer mk-bg-gray-900 mk-text-white mk-py-12">
			<div class="mk-max-w-container mk-mx-auto mk-px-4">

				<?php // Footer Widget Area (optional). ?>
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widgets mk-grid mk-grid-cols-1 md:mk-grid-cols-3 mk-gap-8 mk-mb-8">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>

				<?php // Footer Bottom Section. ?>
				<div class="footer-bottom mk-border-t mk-border-gray-700 mk-pt-8 mk-flex mk-flex-col md:mk-flex-row mk-justify-between mk-items-center mk-gap-4">

					<?php // Copyright. ?>
					<p class="mk-text-sm mk-text-gray-400 mk-m-0">
						<?php
						printf(
							/* translators: %1$s: current year, %2$s: site name */
							esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'empty' ),
							esc_html( gmdate( 'Y' ) ),
							esc_html( get_bloginfo( 'name' ) )
						);
						?>
					</p>

					<?php // Footer Menu. ?>
					<?php if ( has_nav_menu( 'footer' ) ) : ?>
						<nav class="footer-navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_class'     => 'mk-flex mk-gap-6 mk-m-0 mk-list-none mk-text-sm',
									'container'      => false,
									'depth'          => 1,
									'fallback_cb'    => false,
								)
							);
							?>
						</nav>
					<?php endif; ?>

					<?php // Social Media Links (optional). ?>
					<div class="social-links mk-flex mk-gap-4">
						<?php
						// You can replace these with dynamic links from theme options.
						$social_links = array(
							'facebook'  => get_theme_mod( 'facebook_url', '' ),
							'twitter'   => get_theme_mod( 'twitter_url', '' ),
							'instagram' => get_theme_mod( 'instagram_url', '' ),
							'linkedin'  => get_theme_mod( 'linkedin_url', '' ),
						);

						foreach ( $social_links as $social => $url ) :
							if ( ! empty( $url ) ) :
								?>
								<a href="<?php echo esc_url( $url ); ?>" class="mk-text-gray-400 hover:mk-text-white" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( ucfirst( $social ) ); ?>">
									<?php echo wp_kses( empty_svgs( $social ), empty_allowed_svg_tags() ); ?>
								</a>
								<?php
							endif;
						endforeach;
						?>
					</div>

				</div>
			</div>
		</footer>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>