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
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container'      => 'nav',
				'fallback_cb'    => false,
			)
		);
		?>
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
