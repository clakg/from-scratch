<!-- index appelle header et footer -->

<?php get_header() ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="container">
      <h1 class="entry-title"><?php the_title() ?></h1>
      <?php the_content() ?>
      <?php the_post_thumbnail() ?>
    </article>

<?php endwhile; ?>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer() ?>

