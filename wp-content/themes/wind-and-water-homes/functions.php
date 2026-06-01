<?php
/**
 * Theme setup for Wind and Water Homes.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
