<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/f.png"/>

    <!-- Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class( $class ); ?>> 

<!-- Top Bar -->
<div class="top-bar">
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
</div>

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
                                <div class="header_search_area">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="What are you looking for today?..." aria-label="Search">
                                        <button class="btn btn-sm" type="submit">Search</button>
                                    </form>
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
                                    <div class="col-md-6">
                                        <div class="menu-featured-item lg" style="background-image: url('https://dopemagazine.com/wp-content/uploads/2019/10/democratic-primary-debate.jpg')">
                                            <div class="menu-featured-item-content">
                                                <h4>Democratic Debates Gone Wild</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 menu-featured-item-sm-container">
                                        <div class="menu-featured-item sm" style="background-image: url('https://dopemagazine.com/wp-content/uploads/2019/10/Texas-Veterans-for-Medical-Marijuana-TXVMMJhero.jpg')">
                                            <div class="menu-featured-item-content">
                                                <h4>Texas Veterans for Medical Marijuana (TXVMMJ)</h4>
                                            </div>
                                        </div>
                                        <div class="menu-featured-item sm" style="background-image: url('https://dopemagazine.com/wp-content/uploads/2019/10/more-than-consumers.jpg')">
                                            <div class="menu-featured-item-content">
                                                <h4>More Than Consumers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 main-menu-container">
                                <ul class="main-menu">
                                    <li class="current-menu-item"><a href="index.html">Home</a></li>
                                    <li class=""><a href="about.html">About</a></li>
                                    <li class=""><a href="category.html">Brands</a></li>
                                    <li class=""><a href="category.html">The Circle</a></li>
                                    <li class=""><a href="blog.html">Blog</a></li>
                                    <li><a href="index.html#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div>
</header>