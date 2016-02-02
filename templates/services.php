<?php /* Template Name: Services */ ?>
<?php while (have_posts()) : the_post(); ?>

        <div class="banner">
<!--             <div class="orange-rectangle"></div>
            <div class="black-rhombus"></div> -->
            <div class="banner-rhombus"></div>
            <div class="container">
                <div class="banner-text">
                    <h2><?php the_field('services_banner_title');?></h2>
                    <p><?php the_field('services_banner_text');?></p>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="container">
                <div class="compliance-text">
                    <h3><?php the_field('services_main_title');?></h3>
                    <p><?php the_field('services_main_text');?></p>
                </div>
                <div class="compliance-categories">
                <?php while( have_rows('services_boxes') ): the_row(); ?>
                    <div class="compliance-box">
                        <div class="compliance-box-title"><h4><?php the_sub_field('title');?></h4></div>
                        <div class="compliance-box-content"><p id="compliance-box-text"><?php the_sub_field('text');?></p></div>
                        <div class="compliance-box-link"><h5><a href="#"><?php the_sub_field('link_text');?></a></h5></div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>

<?php endwhile; ?>