<?php /* Template Name: Resources */ ?>
<?php while (have_posts()) : the_post(); ?>

<div class="plugin-pages">
    <?php 
        wp_list_pages(array( 'title_li' => '' ));
    ?>
</div>

<?php endwhile; ?>