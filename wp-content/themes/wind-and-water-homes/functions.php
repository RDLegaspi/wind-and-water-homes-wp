<?php
/**
 * Theme setup for Wind and Water Homes.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/sample-pages.php';

function wwh_setup(): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'wind-and-water-homes' ),
			'footer'  => __( 'Footer Menu', 'wind-and-water-homes' ),
		)
	);
}
add_action( 'after_setup_theme', 'wwh_setup' );

function wwh_enqueue_assets(): void {
	wp_enqueue_style(
		'wwh-theme',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'wwh_enqueue_assets' );

function wwh_sample_template_include( string $template ): string {
	if ( wwh_get_sample_page() ) {
		$sample_template = get_template_directory() . '/sample-page.php';

		if ( file_exists( $sample_template ) ) {
			global $wp_query;

			status_header( 200 );
			$wp_query->is_404 = false;

			return $sample_template;
		}
	}

	return $template;
}
add_filter( 'template_include', 'wwh_sample_template_include' );

function wwh_sample_document_title_parts( array $title ): array {
	$page = wwh_get_sample_page();

	if ( $page ) {
		$title['title'] = $page['title'];
	}

	return $title;
}
add_filter( 'document_title_parts', 'wwh_sample_document_title_parts' );
