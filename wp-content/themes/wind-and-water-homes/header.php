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
	<div class="content-shell">
		<p class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</p>
		<?php if ( get_bloginfo( 'description' ) ) : ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		<?php endif; ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => 'nav',
				'fallback_cb'    => false,
			)
		);
		?>
	</div>
</header>
