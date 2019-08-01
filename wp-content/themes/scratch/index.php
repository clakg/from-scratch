<!-- index appelle header et footer -->

<?php get_header() ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php the_title(); ?>

<?php endwhile; ?>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer() ?>

