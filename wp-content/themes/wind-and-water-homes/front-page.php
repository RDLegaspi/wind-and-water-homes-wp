<?php
/**
 * Front page template.
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
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
				<?php
			endwhile;
		else :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<p><?php bloginfo( 'description' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
