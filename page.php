<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package empty
 */

get_header();

get_template_part( 'template-parts/content/content', 'page' );

get_footer();
