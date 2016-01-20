<?php get_template_part('templates/page', 'header'); ?>
<?php include 'myplugin.php';?>

<?php 
    // var_dump($array_csv[0]);
    // var_dump($array_csv[1]);
    var_dump($new_array);
 ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
