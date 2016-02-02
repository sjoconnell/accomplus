<?php /* Template Name: Homepage */ ?>
<?php while (have_posts()) : the_post(); ?>
    
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-one">
                    <div class="container">
                        <div class="slide-one-inner">
                            <h1>Welcome to efficiency.</h1>
                            <p>Accomplus is a resource for you to use whenever you need it. Easily keep up with the ever-changing regulatory landscape.</p>
                            <a href="#" class="login-button">log in</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-two">
                    <div class="container">
                        <div class="slide-two-inner">
                            <h1>Were here to serve.</h1>
                            <p>After using Accomplus services,<br> your CU will be a well-oiled machine.</p>
                            <a href="#" class="explore-services-button">explore services</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-three">
                    <div class="container">
                        <div class="slide-two-inner">
                            <h1 id="fix-width">The compliance hub</h1>
                            <p>Explore our vast knowledge base<br>(and use the search tool) to quickly<br>find what you're looking for.</p>
                            <a href="#" class="explore-services-button" id="fix-button">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-four">
                    <div class="container">
                        <div class="slide-four-inner">
                            <h1>We want to hear from you!</h1>
                            <p>Is there a way your Accomplus experience<br>could be even better?</p>
                            <a href="#" class="touch-button">get in touch</a>
                        </div>
                    </div>
                </div>
            </div>

            <i class="fa fa-chevron-left fa-2x prev-button"></i>
            <i class="fa fa-chevron-right fa-2x next-button"></i>

        </div>

        <div class="home-top">
            <div class="home-top-grey"></div>
            <div class="container">
                <div class="home-top-text">
                    <h1><?php the_field('homepage_middle_title');?></h1>
                    <p><?php the_field('homepage_middle_text');?></p>
                </div>
                <div class="home-top-slider">
                    <div class="small-slider">
                        <div class="swiper-wrapper">
                        <?php while( have_rows('homepage_middle_slider') ): the_row(); ?>
                            <div class="swiper-slide">
                                <div class="home-top-slider-box">
                                    <div class="home-top-slider-title">
                                        <h1><?php the_sub_field('title');?></h1>
                                    </div>
                                    <div class="home-top-slider-text">
                                        <p><?php the_sub_field('text');?></p>
                                    </div>
                                    <div class="home-top-slider-link">
                                        <h5><a href="#"><?php the_sub_field('link_text');?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-bottom">
            <div class="container">
                <div class="home-bottom-container">
                <?php while( have_rows('homepage_bottom_box') ): the_row(); ?>
                    <div class="home-bottom-box">
                        <div class="home-bottom-icon"><img src="<?= the_sub_field('icon');?>"></div>
                        <div class="home-bottom-box-title"><h2><?php the_sub_field('title');?></h2></div>
                        <div class="home-bottom-box-text"><p><?php the_sub_field('text');?></p></div>
                        <div class="home-bottom-box-link"><h5><a href="<?= the_sub_field('link');?>"><?php the_sub_field('link_text');?></a></h5></div>
                    </div>
                <?php endwhile; ?>    
                    <div class="home-bottom-split-boxes">
                        <div class="home-bottom-split-boxes-top">
                            <div class="home-bottom-split-boxes-title"><h2><?php the_field('homepage_bottom_right_box_top_title');?></h2></div>
                            <div class="home-bottom-split-boxes-link"><h5><a href="#"><?php the_field('homepage_bottom_right_box_top_link_text');?></a></h5></div>
                        </div>
                        <div class="home-bottom-split-boxes-bottom">
                            <div class="home-bottom-split-boxes-title"><h2><?php the_field('homepage_bottom_right_box_bottom_title');?></h2></div>
                            <div class="home-bottom-split-boxes-text">
                                <p><a href="#">Security update</a></p>
                                <p><a href="#">IRS Form 5498</a></p>
                            </div>
                            <div class="home-bottom-split-boxes-link"><h5><a href="#"><?php the_field('homepage_bottom_right_box_bottom_link_text');?></a></h5></div>
                        </div>               
                    </div>
                </div>
            </div>  
        </div>
        <div class="home-bottom-white"></div>

<?php endwhile; ?>