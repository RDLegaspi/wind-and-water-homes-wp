<?php
/**
 * Prototype page registry.
 *
 * This file is intentionally small: it loads page data from one file per page
 * and leaves markup rendering to inc/sample-renderers.php.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/sample-renderers.php';

function wwh_sample_pages(): array {
	$slugs = array(
		'home',
		'all',
		'upcoming-development',
		'warner-robins-ga',
		'georgianwalkwest',
		'wolfcreekranch',
		'why-wind-water',
		'buying-process',
		'warranty',
		'contact',
	);

	$pages = array();

	foreach ( $slugs as $slug ) {
		$file = get_template_directory() . "/inc/sample-pages/{$slug}.php";

		if ( file_exists( $file ) ) {
			$pages[ $slug ] = require $file;
		}
	}

	return $pages;
}

function wwh_current_sample_slug(): string {
	$path = trim( wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );

	return '' === $path ? 'home' : sanitize_title( $path );
}

function wwh_get_sample_page( ?string $slug = null ): ?array {
	$pages = wwh_sample_pages();
	$slug  = $slug ?: wwh_current_sample_slug();

	return $pages[ $slug ] ?? null;
}

function wwh_sample_nav(): array {
	return array(
		'Home'                 => '/',
		'All Properties'       => '/all',
		'Upcoming Development' => '/upcoming-development',
		'Warner Robins, GA'    => '/warner-robins-ga',
		'Byron, GA'            => '/georgianwalkwest',
		'Wills Point, TX'      => '/wolfcreekranch',
		'Why Wind & Water'     => '/why-wind-water',
		'Buying Process'       => '/buying-process',
		'Warranty'             => '/warranty',
		'Contact'              => '/contact',
	);
}
