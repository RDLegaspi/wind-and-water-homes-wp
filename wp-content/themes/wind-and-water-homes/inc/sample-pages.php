<?php
/**
 * Static sample pages for the migration preview.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wwh_sample_pages(): array {
	return array(
		'home'                 => array(
			'title'    => 'Where your dreams find a home',
			'eyebrow'  => 'Wind & Water Homes',
			'cta'      => 'Find Your Dream',
			'sections' => array(
				array(
					'type'  => 'split',
					'title' => "We don't tell you no, we tell you how!",
					'copy'  => 'At Wind & Water Homes we understand that every family has different needs. So, we take the time to discuss your personal situation and find the best option for your family.',
					'image' => 'New construction home exterior',
				),
				array(
					'type'  => 'callout',
					'title' => 'Save $90,000!',
					'copy'  => 'Quality and affordable homes built to help more families step into ownership.',
				),
				array(
					'type'  => 'quote',
					'copy'  => 'At Wind and Water Homes, we are dedicated to building quality and affordable homes. Our team of experts will guide you through the entire process with the utmost care, ensuring that you get the home of your dreams, to be filled with memories for years to come.',
				),
				array(
					'type'  => 'statement',
					'title' => 'We build houses, so you can make it a home.',
				),
			),
		),
		'all'                  => array(
			'title'    => 'All Properties',
			'eyebrow'  => 'Find Your Home',
			'sections' => array(
				array(
					'type'       => 'property-grid',
					'properties' => array(
						array( 'title' => 'Georgian Walk West', 'location' => 'Byron, GA', 'price' => "Starting from the $240's", 'url' => '/georgianwalkwest' ),
						array( 'title' => 'Wolf Creek Ranch', 'location' => 'Wills Point, TX', 'price' => 'Starting at $189,900', 'url' => '/wolfcreekranch' ),
						array( 'title' => 'Upcoming Development', 'location' => 'Coming Soon', 'price' => 'More details soon', 'url' => '/upcoming-development' ),
						array( 'title' => 'Warner Robins', 'location' => 'Warner Robins, GA', 'price' => 'Homes and communities', 'url' => '/warner-robins-ga' ),
					),
				),
			),
		),
		'upcoming-development' => array(
			'title'    => 'Upcoming Development',
			'eyebrow'  => 'Properties',
			'sections' => array(
				array(
					'type'  => 'split',
					'title' => 'New communities are on the way.',
					'copy'  => 'This page is ready for upcoming development details as communities are announced.',
					'image' => 'Future community rendering placeholder',
				),
			),
		),
		'warner-robins-ga'     => array(
			'title'    => 'Warner Robins, GA',
			'eyebrow'  => 'Properties',
			'sections' => array(
				array(
					'type'  => 'split',
					'title' => 'Homes in Warner Robins',
					'copy'  => 'A placeholder page for Warner Robins community information, available homes, floor plans, and local details.',
					'image' => 'Warner Robins community placeholder',
				),
			),
		),
		'georgianwalkwest'     => array(
			'title'    => 'Georgian Walk West',
			'eyebrow'  => 'Byron, GA',
			'intro'    => 'Situated right in the "Home of Planes, Trains and Heroes", you\'ll find our quality, affordable homes. Our fully upgraded homes are just waiting for you to make them your home base!',
			'badge'    => "Starting from the $240's",
			'sections' => array(
				array(
					'type'  => 'plans',
					'plans' => array(
						array( 'name' => 'The Frio', 'beds' => '3', 'baths' => '2', 'garage' => '2', 'sqft' => '1,380' ),
						array( 'name' => 'The Trinity', 'beds' => '3', 'baths' => '2', 'garage' => '2', 'sqft' => '1,549' ),
						array( 'name' => 'The Douglas', 'beds' => '3 + Bonus', 'baths' => '2.5', 'garage' => '2', 'sqft' => '1,704' ),
						array( 'name' => 'The Victoria', 'beds' => '4', 'baths' => '2.5', 'garage' => '2', 'sqft' => '1,834' ),
						array( 'name' => 'The Guadalupe', 'beds' => '4', 'baths' => '3', 'garage' => '2', 'sqft' => '1,841' ),
						array( 'name' => 'The Kennedy', 'beds' => '4', 'baths' => '2.5', 'garage' => '2', 'sqft' => '2,091' ),
					),
				),
			),
		),
		'wolfcreekranch'       => array(
			'title'    => 'Wolf Creek Ranch',
			'eyebrow'  => 'Wills Point, TX',
			'intro'    => 'Take advantage of 5-10 acres of pure country paradise living in this Buy Now, Build Later community. Secure your future with a piece of land today and build when you want.',
			'badge'    => 'Final Liquidation Sale',
			'sections' => array(
				array(
					'type'  => 'feature-list',
					'title' => 'Community Features',
					'items' => array( '5-10 Acre Developed Homesites', 'Creeks, Trees & Views', 'Starting at $189,900', 'No HOA', 'No City Taxes', 'Paved Roads', 'Gated Entrance', 'High Speed Internet Available', 'Water & Electric Supplied at the Street', 'Barndominiums Allowed' ),
				),
				array(
					'type'  => 'feature-list',
					'title' => 'Nearby Amenities',
					'items' => array( '5 Minutes to the Grocery Store', '7 Minutes to the Police & Fire Station', '15 Minutes to Mall Shopping & Chain Restaurants', '45 Minutes to Dallas', '1 Hr. 20 Min. to DFW Airport' ),
				),
			),
		),
		'why-wind-water'       => array(
			'title'    => 'You dream it, we build it.',
			'eyebrow'  => 'Why Wind & Water',
			'sections' => array(
				array(
					'type'  => 'testimonials',
					'title' => 'What Dream Owners Say',
					'items' => array(
						array( 'quote' => "Great experience for a 1st time buyer's home. It was a pleasure meeting everyone who was involved in the process.", 'name' => 'Monica Williams' ),
						array( 'quote' => 'My experience with them has been nothing but positive. They do a fantastic job of meeting your expectations.', 'name' => 'Chris Jones' ),
						array( 'quote' => 'They surpassed my expectations in assisting us to achieve our goal of homeownership.', 'name' => 'Chris Gilbert' ),
						array( 'quote' => 'They are responsive, stay on schedule, and very professional.', 'name' => 'Lisa Goff' ),
					),
				),
				array(
					'type'  => 'feature-list',
					'title' => 'What We Focus On',
					'items' => array( 'Included Upgrades', 'Value', 'Energy Efficiency' ),
				),
				array(
					'type'  => 'split',
					'title' => 'Our promise',
					'copy'  => 'To build every house with integrity, honesty, empathy, creativity, respect and ambition; so you can focus on living your dream.',
					'image' => 'Honest homebuilding placeholder',
				),
			),
		),
		'buying-process'       => array(
			'title'    => 'Where Do I Even Start?',
			'eyebrow'  => 'Buying Process',
			'intro'    => 'Sometimes, knowing where to start is the hardest, and most overwhelming part. At Wind & Water Homes, we believe in making your dream come true from Step 1 all the way to handing you the keys.',
			'sections' => array(
				array(
					'type'  => 'steps',
					'steps' => array(
						array( 'title' => 'What can I afford?', 'copy' => "We take the time to evaluate your situation and make sure you're on a path to owning your very own home." ),
						array( 'title' => 'Find your home!', 'copy' => 'You get to pick the home that is perfect for you and your family, then we walk you through the contract process.' ),
						array( 'title' => 'Closing Day!', 'copy' => 'We review documents with you step by step, then hand you the keys to your beautiful new home.' ),
						array( 'title' => 'Moving Day!', 'copy' => "Start filling your home with the first of many memories. We're still here if you have questions." ),
					),
				),
				array(
					'type'  => 'faq',
					'items' => array(
						array( 'q' => 'Rent vs. Buy?', 'a' => 'When you own your own home, you are investing in something that can return value to you.' ),
						array( 'q' => 'Down Payment?', 'a' => 'Wind & Water Homes offers many financing options, including programs with $0 down.' ),
						array( 'q' => 'What are Closing Costs?', 'a' => 'Closing costs can include lender and title fees. The team walks you through the details with no surprises.' ),
						array( 'q' => 'What if I have an issue?', 'a' => 'Homes include a Home Buyers Warranty with details provided at closing.' ),
					),
				),
			),
		),
		'warranty'             => array(
			'title'    => 'We Have Your Back',
			'eyebrow'  => 'Warranty',
			'intro'    => 'You can rest easy knowing that your home is covered. Wind & Water Homes believes in providing you with the security of knowing your home is protected.',
			'sections' => array(
				array(
					'type'  => 'split',
					'title' => 'You are our priority!',
					'copy'  => 'Upon closing on your new home, you will receive an informative booklet that explains what is included in your warranty and how to request service.',
					'image' => '2-10 Home Buyers Warranty placeholder',
				),
			),
		),
		'contact'              => array(
			'title'    => 'Request Information',
			'eyebrow'  => 'Contact',
			'sections' => array(
				array(
					'type' => 'contact',
				),
			),
		),
	);
}

function wwh_current_sample_slug(): string {
	$path = trim( wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );

	return '' === $path ? 'home' : sanitize_title( $path );
}

function wwh_get_sample_page( ?string $slug = null ): ?array {
	$pages = wwh_sample_pages();
	$slug  = $slug ?: wwh_current_sample_slug();

	return $pages[ $slug ] ?? null;
}

function wwh_sample_nav(): array {
	return array(
		'Home'                 => '/',
		'All Properties'       => '/all',
		'Upcoming Development' => '/upcoming-development',
		'Warner Robins, GA'    => '/warner-robins-ga',
		'Byron, GA'            => '/georgianwalkwest',
		'Wills Point, TX'      => '/wolfcreekranch',
		'Why Wind & Water'     => '/why-wind-water',
		'Buying Process'       => '/buying-process',
		'Warranty'             => '/warranty',
		'Contact'              => '/contact',
	);
}

function wwh_render_placeholder( string $label ): void {
	?>
	<div class="image-placeholder" role="img" aria-label="<?php echo esc_attr( $label ); ?>">
		<span><?php echo esc_html( $label ); ?></span>
	</div>
	<?php
}

function wwh_render_sample_page( array $page ): void {
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
