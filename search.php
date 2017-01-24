<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <?php get_template_part('templates/page-header','search'); ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php else : ?>
	<?php get_template_part('templates/page-header','search'); ?>
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'search'); ?>
	<?php endwhile; ?>

<?php endif; ?>

<?php the_posts_navigation(); ?>
