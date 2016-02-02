<?php /* Template Name: About */ ?>
<?php while (have_posts()) : the_post(); ?>

        <div class="banner">
<!--             <div class="orange-rectangle"></div>
            <div class="black-rhombus"></div> -->
            <div class="banner-rhombus"></div>
            <div class="container">
                <div class="banner-text-about">
                    <h2><?php the_field('about_banner_title');?></h2>
                    <p><?php the_field('about_banner_text');?></p>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="container">
                <div class="about-text">
                    <p><?php the_field('about_main_text');?></p>
                </div>
                <div class="about-profiles">
                    <ul>
                    <?php while( have_rows('about_profiles') ): the_row(); ?>
                        <li>
                            <div class="about-profiles-image" style="background-image:url(<?= the_sub_field('image'); ?>)"></div>
                            <div class="about-profiles-text">
                                <h1><?php the_sub_field('name');?></h1>
                                <h2><?php the_sub_field('job');?></h2>
                                <p><?php the_sub_field('description');?></p>
                                <div class="about-profile-text-hidden">
                                    <p><?php the_sub_field('description_hidden');?></p>
                                </div>
                                <div class="about-profile-text-bottom about-read"><p>read more</p></div>
                                <div class="about-profile-text-bottom about-contact"><p>contact</p></div>
                                <div class="email-hidden">
                                    <a href="#" class="profile-email">SOlson@accomplus.net</a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ul>        
                </div>
            </div>
        </div>

<?php endwhile; ?>