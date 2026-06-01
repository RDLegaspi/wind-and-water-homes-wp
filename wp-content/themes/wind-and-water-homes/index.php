<?php
/**
 * Main template file.
 *
 * @package WindAndWaterHomes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main class="site-main">
	<div class="content-shell">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1><?php esc_html_e( 'Nothing found', 'wind-and-water-homes' ); ?></h1>
			<p><?php esc_html_e( 'Add your first page or post to begin shaping the site.', 'wind-and-water-homes' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
