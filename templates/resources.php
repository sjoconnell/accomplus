<?php /* Template Name: Resources */ ?>
<?php while (have_posts()) : the_post(); ?>

<?php 

    wp_list_pages( $args );

?>

<?php endwhile; ?>