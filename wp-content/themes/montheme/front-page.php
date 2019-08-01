<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$lastposts = get_posts( array(
	'numberposts' => 3,
	'post_type' => 'sejour',
	'meta_query' => array(
		array(
			'key' => 'prochain_depart', //nom du tableau de ACF
			'value' => date('Ymd'), // nom du champ recherché dans ACF
			'compare' => '>' // filtre pour la recherche
		),
	)
));

get_header();
?>

<!-- <pre>
	<?php //print_r($lastposts) ?>
</pre> -->

	<section class="section-last-posts section-last-sejours">

	<h2><?php _e('Last trips', 'montheme'); ?></h2>


		<?php if ($lastposts) : ?>

			<?php foreach ($lastposts as $post) : ?>
				<?php setup_postdata( $post );
				$champ_duree = get_field_object('duree'); ?>

				<article <?php post_class(); ?>>
					<figure>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium') ?></a>
					</figure>
					<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
					<p><?= $champ_duree['label'] ?> : <strong><?= $champ_duree['value'] ?> <?= $champ_duree['append'] ?></strong></p>
					<p><?php the_excerpt() ?></p>
				</article>

				

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</section>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();