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
                                    <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                                    
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