<header>

       <div class="top-header clearfix">
           <div class="container">
               <nav class="top-header-nav">
                   <ul class="top-header-list">
                       <li class="top-header-list-item"><a href="#">login</a></li>
                       <li class="top-header-list-item"><a href="#">contact us</a></li>
                       <li><p class="phone"><?php the_field('header_number', 728);?></p></li>
                   </ul>
               </nav>
           </div>
       </div>

       <div class="middle-header">
           <div class="container">
               <a href="<?= the_field('header_logo_link', 728);?>" style="background-image:url(<?= the_field('header_logo', 728); ?>)"></a>
           </div>
       </div>

       <div class="bottom-header clearfix">
           <div class="container">
                     <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>

               <div class="header-search">
                   <input type="search" class="header-search-input" placeholder="Search">
                   <i class="fa fa-search"></i>
               </div>
           </div>
       </div>

</heade>