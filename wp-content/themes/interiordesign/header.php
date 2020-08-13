<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->
<head>
<meta charset="utf-8">
<title>Stella Orr'e - Interior and Home Renovation HTML Template | Home Page 01</title>
<!-- Stylesheets -->
<!-- <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet"> -->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri()?>/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<?php echo wp_head()?>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <?php if (!dynamic_sidebar( 'header_widget_right' )) : ?>
                <div class="top-left clearfix">
                    <div class="text">
                        <span class="icon flaticon-call-answer"></span>
                         Need help? Call Us Now :
                         <a href="tel:1800-456-7890" class="number">
                          1800 456 7890
                        </a>
                        
                   </div>
                </div>
              <?php endif;?>
                <?php if (!dynamic_sidebar( 'header_widget' )) : ?>
                <div class="top-right clearfix">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="about.html">Our Story</a></li>
                        <li><a href="blog.html">Inspiration</a></li>
                        <li class="quote"><a href="contact.html">Get Free Quote</a></li>
                    </ul>
                </div>
            <?php endif;?>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="
                            <?php
                             if($interiordesign_opt['logo']['url']!="")
                           {  echo $interiordesign_opt['logo']['url']; } 
                        else{
                            echo get_template_directory_uri()."?>/images/logo.png";
                        }
                        ?>" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            <?php
                           wp_nav_menu( array(
                             'theme_location'=>'main-menu',
                             'container_class'=>'collapse navbar-collapse clearfix" id="navbarSupportedContent',
                             'menu_class'     =>'navigation clearfix'
                           ) );

                            ?>
                         
                        </nav>
                        
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="<?php 
                if($interiordesign_opt['logo']['url']!="")
                        {echo $interiordesign_opt['logo']['url'];} 
                        else{
                            echo get_template_directory_uri()."?>/images/logo.png";
                        }?>" alt="logo" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="commercial-interior.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>