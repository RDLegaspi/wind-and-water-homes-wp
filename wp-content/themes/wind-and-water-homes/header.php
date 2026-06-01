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
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Wind & Water Homes home', 'wind-and-water-homes' ); ?>">
			<img
				src="https://static.wixstatic.com/media/137e22_16919b6a964147ccb9566340a8739661~mv2.png/v1/fill/w_257,h_101,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Transparent%20Logo%20HD.png"
				alt="<?php esc_attr_e( 'Wind & Water Homes', 'wind-and-water-homes' ); ?>"
				width="257"
				height="101"
			>
		</a>
		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'wind-and-water-homes' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<div class="site-nav-dropdown">
				<a href="<?php echo esc_url( home_url( '/all' ) ); ?>" aria-haspopup="true">Properties</a>
				<div class="site-subnav">
					<a href="<?php echo esc_url( home_url( '/all' ) ); ?>">All Properties</a>
					<a href="<?php echo esc_url( home_url( '/upcoming-development' ) ); ?>">Upcoming Development</a>
					<a href="<?php echo esc_url( home_url( '/warner-robins-ga' ) ); ?>">Warner Robins, GA</a>
					<a href="<?php echo esc_url( home_url( '/georgianwalkwest' ) ); ?>">Byron, GA</a>
					<a href="<?php echo esc_url( home_url( '/wolfcreekranch' ) ); ?>">Wills Point, TX</a>
				</div>
			</div>
			<a href="<?php echo esc_url( home_url( '/why-wind-water' ) ); ?>">Why Wind & Water</a>
			<a href="<?php echo esc_url( home_url( '/buying-process' ) ); ?>">Buying Process</a>
			<a href="<?php echo esc_url( home_url( '/warranty' ) ); ?>">Warranty</a>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
		</nav>
		<nav class="header-socials" aria-label="<?php esc_attr_e( 'Social media', 'wind-and-water-homes' ); ?>">
			<a href="https://www.facebook.com/windandwaterhomes" target="_blank" rel="noreferrer noopener" aria-label="<?php esc_attr_e( 'Facebook', 'wind-and-water-homes' ); ?>">
				<img src="https://static.wixstatic.com/media/11062b_366f7fdbcafc4effaeddb0dba92014c1~mv2.png/v1/fill/w_21,h_21,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_366f7fdbcafc4effaeddb0dba92014c1~mv2.png" alt="" width="21" height="21">
			</a>
			<a href="https://www.instagram.com/windandwaterhomes" target="_blank" rel="noreferrer noopener" aria-label="<?php esc_attr_e( 'Instagram', 'wind-and-water-homes' ); ?>">
				<img src="https://static.wixstatic.com/media/11062b_6e9638ad803e4099a6116eb750b5a584~mv2.png/v1/fill/w_21,h_21,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_6e9638ad803e4099a6116eb750b5a584~mv2.png" alt="" width="21" height="21">
			</a>
		</nav>
	</div>
</header>
