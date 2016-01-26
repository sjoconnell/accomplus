<?php /* Template Name: Homepage */ ?>
<?php while (have_posts()) : the_post(); ?>
    
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-one"></div>
                <div class="swiper-slide slide-two"></div>
                <div class="swiper-slide slide-three"></div>
                <div class="swiper-slide slide-four"></div>
            </div>
            
            <!-- If we need navigation buttons -->
<!--             <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

            <i class="fa fa-chevron-left fa-2x prev-button"></i>
            <i class="fa fa-chevron-right fa-2x next-button"></i>

        </div>

        <div class="home-top">
            <div class="home-top-grey"></div>
            <div class="container">
                <div class="home-top-text">
                    <h1>Our mission</h1>
                    <p>At Accomplus, our priority is to be a one-stop compliance shop for credit unions. Our industry is always changing, and it can be hard to keep up. Thats where we come in. If you need compliance help, youll get a collaborative and simplified experience here. With sophisticated support and best-in-class services, we strive to help your CU operate more efficiently than ever before.</p>
                </div>
                <div class="home-top-slider">
                    <div class="small-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="home-top-slider-box">
                                    <div class="home-top-slider-title">
                                        <h1>Training</h1>
                                    </div>
                                    <div class="home-top-slider-text">
                                        <p>BSA, financial skills, board workshops and more.</p>
                                    </div>
                                    <div class="home-top-slider-link">
                                        <h5><a href="#">get trained</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="home-top-slider-box">
                                    <div class="home-top-slider-title">
                                        <h1>Consulting</h1>
                                    </div>
                                    <div class="home-top-slider-text">
                                        <p>Need help with a Field of Membership expansion?</p>
                                    </div>
                                    <div class="home-top-slider-link">
                                        <h5><a href="#">learn more</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="home-top-slider-box">
                                    <div class="home-top-slider-title">
                                        <h1>Reviews</h1>
                                    </div>
                                    <div class="home-top-slider-text">
                                        <p>Get a website or cybersecurity compliance review.</p>
                                    </div>
                                    <div class="home-top-slider-link">
                                        <h5><a href="#">start here</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-bottom">
            <div class="container">
                <div class="home-bottom-container">
                    <div class="home-bottom-box">
                    <!-- CHANGE ICON IMAGES FIELD BEFORE UPLOADING TO SERVER -->
                        <div class="home-bottom-icon"><img src="http://accomplus.dev/wp-content/uploads/2016/01/home-staff.png"></div>
                        <div class="home-bottom-box-title"><h2>our staff</h2></div>
                        <div class="home-bottom-box-text"><p>Experienced, driven and ready to help however we can.</p></div>
                        <div class="home-bottom-box-link"><h5><a href="about_us.html">about us</a></h5></div>
                    </div>
                    <div class="home-bottom-box">
                        <div class="home-bottom-icon"><img src="http://accomplus.dev/wp-content/uploads/2016/01/home-checkmark.png"></div>
                        <div class="home-bottom-box-title"><h2>our services</h2></div>
                        <div class="home-bottom-box-text"><p>A better operating environment is around the corner.</p></div>
                        <div class="home-bottom-box-link"><h5><a href="services.html">learn more</a></h5></div>
                    </div>
                    <div class="home-bottom-split-boxes">
                        <div class="home-bottom-split-boxes-top">
                            <div class="home-bottom-split-boxes-title"><h2>questions?</h2></div>
                            <div class="home-bottom-split-boxes-link"><h5><a href="#">contact us</a></h5></div>
                        </div>
                        <div class="home-bottom-split-boxes-bottom">
                            <div class="home-bottom-split-boxes-title"><h2>calendar</h2></div>
                            <div class="home-bottom-split-boxes-link"><h5><a href="#">see all events</a></h5></div>
                        </div>               
                    </div>
                </div>
            </div>  
        </div>
        <div class="home-bottom-white"></div>

<?php endwhile; ?>