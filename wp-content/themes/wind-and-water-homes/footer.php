<?php
/**
 * Site footer.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="site-footer">
	<div class="footer-shell">
		<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Wind & Water Homes home', 'wind-and-water-homes' ); ?>">
			<img
				src="https://static.wixstatic.com/media/137e22_e28c541940404d21bb22afb0a3506b0a~mv2.png/v1/fill/w_275,h_106,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/137e22_e28c541940404d21bb22afb0a3506b0a~mv2.png"
				alt="<?php esc_attr_e( 'Wind & Water Homes', 'wind-and-water-homes' ); ?>"
				width="275"
				height="106"
			>
		</a>
		<div class="footer-links">
			<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'wind-and-water-homes' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<a href="<?php echo esc_url( home_url( '/buying-process' ) ); ?>">Buying Process</a>
				<a href="<?php echo esc_url( home_url( '/why-wind-water' ) ); ?>">Why Wind & Water</a>
				<a href="<?php echo esc_url( home_url( '/warranty' ) ); ?>">Warranty</a>
				<a href="<?php echo esc_url( home_url( '/all' ) ); ?>">Find Your Home</a>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a>
			</nav>
			<nav class="footer-socials" aria-label="<?php esc_attr_e( 'Social media', 'wind-and-water-homes' ); ?>">
				<a href="https://www.tiktok.com/@windandwaterhomes" target="_blank" rel="noreferrer noopener" aria-label="<?php esc_attr_e( 'TikTok', 'wind-and-water-homes' ); ?>">
					<img src="https://static.wixstatic.com/media/11062b_4b88b89fe4694d949be4919c81f194b4~mv2.png/v1/fill/w_21,h_21,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_4b88b89fe4694d949be4919c81f194b4~mv2.png" alt="" width="21" height="21">
				</a>
				<a href="https://www.facebook.com/windandwaterhomes" target="_blank" rel="noreferrer noopener" aria-label="<?php esc_attr_e( 'Facebook', 'wind-and-water-homes' ); ?>">
					<img src="https://static.wixstatic.com/media/11062b_366f7fdbcafc4effaeddb0dba92014c1~mv2.png/v1/fill/w_21,h_21,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_366f7fdbcafc4effaeddb0dba92014c1~mv2.png" alt="" width="21" height="21">
				</a>
				<a href="https://www.instagram.com/windandwaterhomes/" target="_blank" rel="noreferrer noopener" aria-label="<?php esc_attr_e( 'Instagram', 'wind-and-water-homes' ); ?>">
					<img src="https://static.wixstatic.com/media/11062b_6e9638ad803e4099a6116eb750b5a584~mv2.png/v1/fill/w_21,h_21,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_6e9638ad803e4099a6116eb750b5a584~mv2.png" alt="" width="21" height="21">
				</a>
			</nav>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
