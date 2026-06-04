<?php
/**
 * Prototype page renderers.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wwh_render_placeholder( string $label ): void {
	?>
	<div class="image-placeholder" role="img" aria-label="<?php echo esc_attr( $label ); ?>">
		<span><?php echo esc_html( $label ); ?></span>
	</div>
	<?php
}

function wwh_render_sample_page( array $page ): void {
	if ( 'home' === ( $page['layout'] ?? '' ) ) {
		wwh_render_home_page( $page );
		return;
	}

	?>
	<main class="site-main">
		<section class="hero-section">
			<div class="hero-copy">
				<p class="eyebrow"><?php echo esc_html( $page['eyebrow'] ?? 'Wind & Water Homes' ); ?></p>
				<h1><?php echo esc_html( $page['title'] ); ?></h1>
				<?php if ( ! empty( $page['intro'] ) ) : ?>
					<p class="hero-intro"><?php echo esc_html( $page['intro'] ); ?></p>
				<?php endif; ?>
				<?php if ( ! empty( $page['badge'] ) ) : ?>
					<p class="hero-badge"><?php echo esc_html( $page['badge'] ); ?></p>
				<?php endif; ?>
				<?php if ( ! empty( $page['cta'] ) ) : ?>
					<a class="button" href="<?php echo esc_url( home_url( '/all' ) ); ?>"><?php echo esc_html( $page['cta'] ); ?></a>
				<?php endif; ?>
			</div>
			<?php wwh_render_placeholder( $page['eyebrow'] ?? $page['title'] ); ?>
		</section>

		<?php foreach ( $page['sections'] ?? array() as $section ) : ?>
			<?php wwh_render_sample_section( $section ); ?>
		<?php endforeach; ?>
	</main>
	<?php
}

function wwh_render_home_page( array $page ): void {
	$template = locate_template( 'template-parts/sample/home.php' );

	if ( $template ) {
		include $template;
	}
}

function wwh_render_sample_section( array $section ): void {
	switch ( $section['type'] ) {
		case 'split':
			?>
			<section class="content-band split-band">
				<div>
					<h2><?php echo esc_html( $section['title'] ); ?></h2>
					<p><?php echo esc_html( $section['copy'] ); ?></p>
				</div>
				<?php wwh_render_placeholder( $section['image'] ); ?>
			</section>
			<?php
			break;
		case 'callout':
		case 'statement':
			?>
			<section class="content-band centered-band">
				<h2><?php echo esc_html( $section['title'] ); ?></h2>
				<?php if ( ! empty( $section['copy'] ) ) : ?>
					<p><?php echo esc_html( $section['copy'] ); ?></p>
				<?php endif; ?>
			</section>
			<?php
			break;
		case 'quote':
			?>
			<section class="content-band quote-band">
				<blockquote><?php echo esc_html( $section['copy'] ); ?></blockquote>
			</section>
			<?php
			break;
		case 'property-grid':
			?>
			<section class="content-band card-grid">
				<?php foreach ( $section['properties'] as $property ) : ?>
					<article class="property-card">
						<?php wwh_render_placeholder( $property['title'] ); ?>
						<div>
							<p class="eyebrow"><?php echo esc_html( $property['location'] ); ?></p>
							<h2><?php echo esc_html( $property['title'] ); ?></h2>
							<p><?php echo esc_html( $property['price'] ); ?></p>
							<a class="text-link" href="<?php echo esc_url( home_url( $property['url'] ) ); ?>">Find Out More</a>
						</div>
					</article>
				<?php endforeach; ?>
			</section>
			<?php
			break;
		case 'plans':
			?>
			<section class="content-band">
				<div class="plan-grid">
					<?php foreach ( $section['plans'] as $plan ) : ?>
						<article class="plan-card">
							<?php wwh_render_placeholder( $plan['name'] ); ?>
							<h2><?php echo esc_html( $plan['name'] ); ?></h2>
							<dl>
								<div><dt>Beds</dt><dd><?php echo esc_html( $plan['beds'] ); ?></dd></div>
								<div><dt>Baths</dt><dd><?php echo esc_html( $plan['baths'] ); ?></dd></div>
								<div><dt>Garage</dt><dd><?php echo esc_html( $plan['garage'] ); ?></dd></div>
								<div><dt>Sq Ft</dt><dd><?php echo esc_html( $plan['sqft'] ); ?></dd></div>
							</dl>
							<a class="button button-small" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Find Out More</a>
						</article>
					<?php endforeach; ?>
				</div>
			</section>
			<?php
			break;
		case 'feature-list':
			?>
			<section class="content-band">
				<h2><?php echo esc_html( $section['title'] ); ?></h2>
				<ul class="feature-list">
					<?php foreach ( $section['items'] as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</section>
			<?php
			break;
		case 'testimonials':
			?>
			<section class="content-band">
				<h2><?php echo esc_html( $section['title'] ); ?></h2>
				<div class="testimonial-grid">
					<?php foreach ( $section['items'] as $item ) : ?>
						<figure>
							<blockquote><?php echo esc_html( $item['quote'] ); ?></blockquote>
							<figcaption>- <?php echo esc_html( $item['name'] ); ?></figcaption>
						</figure>
					<?php endforeach; ?>
				</div>
			</section>
			<?php
			break;
		case 'steps':
			?>
			<section class="content-band step-list">
				<?php foreach ( $section['steps'] as $index => $step ) : ?>
					<article>
						<span><?php echo esc_html( (string) ( $index + 1 ) ); ?></span>
						<div>
							<h2><?php echo esc_html( $step['title'] ); ?></h2>
							<p><?php echo esc_html( $step['copy'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</section>
			<?php
			break;
		case 'faq':
			?>
			<section class="content-band faq-list">
				<?php foreach ( $section['items'] as $item ) : ?>
					<details open>
						<summary><?php echo esc_html( $item['q'] ); ?></summary>
						<p><?php echo esc_html( $item['a'] ); ?></p>
					</details>
				<?php endforeach; ?>
			</section>
			<?php
			break;
		case 'contact':
			?>
			<section class="content-band contact-band">
				<div>
					<h2>Our Offices</h2>
					<p><strong>Texas</strong><br>Tel: (800) 690-0891</p>
					<p><strong>Georgia</strong><br>Tel: (800) 215-2735</p>
				</div>
				<form class="sample-form">
					<label>First name<input type="text"></label>
					<label>Last name<input type="text"></label>
					<label>Email<input type="email"></label>
					<label>Phone<input type="tel"></label>
					<label>What community would you like to learn more about?<input type="text"></label>
					<label>How can we help you?<textarea rows="5"></textarea></label>
					<button class="button" type="button">Submit</button>
				</form>
			</section>
			<?php
			break;
	}
}
