<?php
/**
 * Prototype Home page markup.
 *
 * Variables:
 * - $page array Home page data.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<main class="site-main home-main">
	<section class="home-hero">
		<div class="home-hero__media" aria-hidden="true"></div>
		<div class="home-hero__content">
			<h1><?php echo esc_html( $page['title'] ); ?></h1>
			<a class="home-hero__button" href="<?php echo esc_url( home_url( '/all' ) ); ?>"><?php echo esc_html( $page['cta'] ); ?></a>
		</div>
	</section>

	<section class="home-intro">
		<div class="home-stamp">
			<span>Save</span>
			<strong>$90,000!</strong>
		</div>
		<div class="home-intro__copy">
			<h2>At Wind and Water Homes,<br>we don&rsquo;t tell you no,<br>we tell you how!</h2>
			<p>We understand that every family has different needs. So, we take the time to discuss your personal situation and find the best option for your family.</p>
		</div>
		<div class="home-floating-note">
			<span>You dream it,</span>
			<strong>we build it.</strong>
		</div>
	</section>

	<section class="home-image-band" aria-label="<?php esc_attr_e( 'Home exterior image placeholder', 'wind-and-water-homes' ); ?>">
		<span>Exterior image placeholder</span>
	</section>

	<section class="home-quote">
		<div class="home-quote__frame">
			<blockquote>At Wind and Water Homes, we are dedicated to building quality and affordable homes. Our team of experts will guide you through the entire process with the utmost care, ensuring that you get the home of your dreams, to be filled with memories for years to come.</blockquote>
		</div>
	</section>

	<section class="home-closing">
		<div class="home-closing__mark" aria-hidden="true"></div>
		<h2>We build houses, so you can make it a home.</h2>
	</section>
</main>
