﻿<!DOCTYPE html>
<html>
<head>
    <title>Resilience Academy</title>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Sintony:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet">

      <!-- First add the elements you need in <head>; then last, add: -->
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="animated" data-animated="fadeIn">

<script>
    var $ = jQuery;
    $(document).ready(function () {
        $('.speakers-slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        });
    });
</script>
    <header id="header" style="margin-top: 130px;">
         <div class="wrapper">
                    <nav id="gtl-site-navigation" class="navmenu navbar navbar-inverse navbar-fixed-top">
                        <div class="container-fluid top">
            
                 <div  class="collapse navbar-collapse" id="myNavbar">
                        <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'primary', 
                                'menu_id'         => 'myNavbar',
                                'menu_class'      => 'primary-items',         
                                'container-fluid'      => 'div',
                                'container_class'=> 'primary_menu',
                                'walker'         => '',
                                'fallback_cb'    => 'wp_page_menu',

                            ) ); 
                        ?>
                        </div>
                            </div>
                            <div class="container-fluid secondary">
                            <div class="container ">
                            <div class="navbar-header">
                            <div class="logo">
                            <?php 
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                         ?>
                         </div>
                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button> 
                         </div>
                         <div class="collapse navbar-collapse" id="secondary_nav">
                           <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'secondary', 
                                'menu_id'         => 'secondary_nav',
                                'menu_class'      => 'secondary-items',         
                                'container-fluid'      => 'div',
                                'container_class'=> 'text-center',
                                'walker'         => '',
                                'fallback_cb'    => 'wp_page_menu',

                            ) ); 
                        ?>
                                </div>
                            </div>
                        
                        </div>
                    </nav><!-- #ht-site-navigation -->
      </div>
 
    </header>
