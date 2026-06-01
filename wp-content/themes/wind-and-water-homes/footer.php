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
	<div class="content-shell">
		<p class="footer-logo">Wind & Water Homes</p>
		<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'wind-and-water-homes' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<a href="<?php echo esc_url( home_url( '/why-wind-water' ) ); ?>">Why Wind & Water</a>
			<a href="<?php echo esc_url( home_url( '/all' ) ); ?>">Find Your Home</a>
			<a href="<?php echo esc_url( home_url( '/buying-process' ) ); ?>">Buying Process</a>
			<a href="<?php echo esc_url( home_url( '/warranty' ) ); ?>">Warranty</a>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a>
		</nav>
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Wind & Water Homes</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
