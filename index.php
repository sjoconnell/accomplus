<?php get_template_part('templates/page', 'header'); ?>
<?php include 'myplugin.php';?>

<?php 

    wp_list_pages( $args );

    print_r($array_of_ids);
    
 ?>




<!-- <?php if (!have_posts()) : ?> -->
  <!-- <div class="alert alert-warning"> -->
    <!-- <?php _e('Sorry, no results were found.', 'sage'); ?> -->
  <!-- </div> -->
  <!-- <?php get_search_form(); ?> -->
<!-- <?php endif; ?> -->

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
