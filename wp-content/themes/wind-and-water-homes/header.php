<?php
/**
 * Site header.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
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
<header class="site-header">
	<div class="header-shell">
		<p class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Wind & Water Homes</a>
		</p>
		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'wind-and-water-homes' ); ?>">
			<?php foreach ( wwh_sample_nav() as $label => $url ) : ?>
				<a href="<?php echo esc_url( home_url( $url ) ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>
	</div>
</header>
