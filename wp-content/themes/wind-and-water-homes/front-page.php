<?php
/**
 * Front page template.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
wwh_render_sample_page( wwh_get_sample_page( 'home' ) );
get_footer();
