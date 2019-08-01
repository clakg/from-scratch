<?php
/**
 * 
 * Template name: Présentation
 * 
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$the_query = new WP_Query( array(
	'posts_per_page' => 3,
	'category_name' => 'temoignage',
	'order' => 'ASC',
) );

get_header();
?>

<!-- <pre>
	<?php //print_r($the_query) ?>
</pre> -->

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

	<section class="section-last-posts">

		<h2>Nos témoignages</h2>

		<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<article <?php post_class(); ?>>
					<figure>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium') ?></a>
					</figure>
					<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
					<p><?php the_excerpt() ?></p>
				</article>

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</section>

<?php
get_footer();