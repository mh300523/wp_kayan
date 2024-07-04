<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo FAV_ICON; ?>" type="image/x-icon">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >

  <div class="overlay" id="closeNav"></div>
  <!-- Start Loader -->
  <div class="loader">
      <img src="<?php echo esc_url(IMAGES . '/12.png'); ?> " class="img-fluid svg pulse">
  </div> 

  <header>
    <div class="top-head">
      <div class="container">
        <div class="top-head-flex">
          <div class="logo-head">
              <a href="<?php echo home_url() ?>" class="img-responsive wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
              <?php if (!empty(HEADER_LOGO)) { ?>
                <img src="<?php echo esc_url(HEADER_LOGO) ?>" alt="logo" class="img-fluid">
                <?php } else { ?>
                    <h1>home</h1>
                <?php 
                }
              ?>
              </a>
          </div>
            <div class="menu-head">
              <div class="menu">
              <?php
                // Display the Navbar Menu with custom walker class
                wp_nav_menu( array(
                    'theme_location' => 'navbar_menu',
                    'menu_class' => 'list-unstyled list-inline',
                    'container' => false,
                    'walker' => new Custom_Menu_Walker(),
                ) );
                ?>
              </div>
            </div>

            <div class="lang-head">
              <?php get_template_part('/common/language-swicher'); ?>
            </div>


            <div class="side-menu">
              <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
                  <div class="logo">
                        <img src="<?php echo esc_url(IMAGES . '/12.png'); ?>" class="img-fluid" alt="logo">
                  </div> 
                  <?php
                // Display the Navbar Menu with custom walker class
                wp_nav_menu( array(
                    'theme_location' => 'navbar_menu',
                    'menu_class' => 'list-unstyled list-inline',
                    'container' => false,
                    'walker' => new Custom_Menu_Walker(),
                ) );
                ?>

              <div class="lang-head-mobile">
                <?php get_template_part('/common/language-swicher'); ?>
              </div>
              </div>

              
         
              <span id="openNav">
                  <div class="logo-side">
                      <div class="open-side">
                        <i class="uil uil-bars"></i>
                      </div>
                  </div>
          
              </span>
            </div>
        </div>
      </div>
    </div>
  </header>














