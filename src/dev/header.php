<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/f.png"/>

    <!-- Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>> 

<!-- Top Bar -->
<!-- <div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="auth-menu">
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Login <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="kantoka-nav">
                    <div class="row">
                        <div class="col-lg-8 col-6">
                            <div class="logo-and-search">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205" height="69" viewBox="0 0 205 69">
                                          <image id="kantoka-logo.svg" width="205" height="69" xlink:href="data:img/png;base64,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"/>
                                        </svg>



                                        
                                    </a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6 text-right" style="display: flex;justify-content: flex-end;align-items: center;">
                            <div class="navigations">
                                <div class="nav-button" id="nav-button">
                                    <span class="nav_button_bar"></span>
                                    <span class="nav_button_bar"></span>
                                    <span class="nav_button_bar"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="nav-megamenu" id="nav-megamenu">
                        <div class="row">

                            <div class="col-md-8">
                                <div class="row">

                                    <?php get_template_part('inc/template-parts/menu-post'); ?>

                                </div>
                            </div>


                            <div class="col-md-4 main-menu-container">
                                <?php
                                    if (function_exists('wp_nav_menu')) {
                                        wp_nav_menu(array('theme_location' => 'wpj-main-menu','container' => false, 'menu_class' => 'main-menu', 'fallback_cb' => 'wpj_default_menu'));
                                    }
                                    else {
                                        wpj_default_menu();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div>
</header>