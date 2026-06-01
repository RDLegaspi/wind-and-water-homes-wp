<?php
/**
 * Static sample page template.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sample_page = wwh_get_sample_page();

get_header();

if ( $sample_page ) {
	wwh_render_sample_page( $sample_page );
}

get_footer();
