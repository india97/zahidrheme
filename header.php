<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Impact Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header fixed-top">

<div class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">

    <?php 

    //  $emailicon = get_field("emailicon");
    //  $email = get_feild("email");
    //  $social_icon = get_field("social_icon");
    
    
     ?>
       <i class="bi bi-envelope d-flex align-items-center" ><?php echo esc_html( get_field('emailicon') ); ?></i>
       <li><a href="mailto:contact@example.com">contact@example.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <!-- <a title="Facebook" href="<?= $social_icons['facebook_link']; ?>"> </a>
      <span class="social-icon"> <?= $social_icons['facebook_icon']; ?></span> -->
      <a href="<?php echo $facebook_link['url']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="twiter"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</div><!-- End Top Bar -->

<div class="branding d-flex align-items-cente">

  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
      
      
      <span><?php the_custom_logo() ?></span>
      

    </a>

    <nav id="navmenu" class="navmenu">


    <?php 
            
        wp_nav_menu( array(
          'theme_location' => 'primary-menu',
          'menu_class' => 'navmenu text-capitalize clearfix',
                        'menu_id'  => 'navmenu',
                        'container' => '',
          'walker'  => new Child_Wrap()
          
        ));
        
        ?> 

    
      <!-- <ul>
        <li><a href="#hero" class="active">Home<br></a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul class="dropdown">
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul> -->
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>

</div>

</header>