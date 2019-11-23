<?php 
/*
    Template Name: Home
*/
get_header(); ?>

<!-- Slider -->
<div class="slider">
    <div id="main-carouse" class="carousel slide carousel-fade" data-ride="carousel">
        
        <!-- <ol class="carousel-indicators">
            <li data-target="#main-carouse" data-slide-to="0" class="active">01</li>
            <li data-target="#main-carouse" data-slide-to="1">02</li>
            <li data-target="#main-carouse" data-slide-to="2">03</li>
        </ol> -->

        <div class="carousel-inner">
            <!-- carousel 1 -->
            <div class="carousel-item active">
                <div class="slider-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/slider_bg.png')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-6">
                                <h1>Welcome to the world of kantoka</h1>
                                <h4>Something for Everyone</h4>
                                <a href="category.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                        <div class="slider-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <a href="#down-to-arrow" id="down-arrow" class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arow.png" alt=""></a>
        
    </div>
</div>


<!-- Home page one stop shop section -->
<section class="one-stop-shop" id="down-to-arrow">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <h3 class="bb">YOUR ONE-STOP SHOP FOR CANNABIS <br> INFO & ACCESORIES</h3>
                <p>
                    In a world with overwhelming options, you need something <span>quick and easy</span> so you can enjoy the finer things in life. That something is Kantoka. Simply tell us what you need. Let us do the rest.
                </p>
            </div>
            <div class="col-md-5">
                <h3>WHAT ARE YOU <br> LOOKING FOR TODAY?</h3>
                <form class="form my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Enter search here ..." aria-label="Search">
                    <button class="btn btn-block" type="submit">Search kantoka</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Home page brands section -->
<section class="home-brands">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center bb bblg pink">ALL THE BEST BRANDS IN ONE PLACE</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="brands/brnt.html">
                    <div class="brands-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/brnt/BRNT-Designs-Full Logo-Black.png')">
                        <div class="brands-item-content">
                            <h4>Brnt</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="brands/vessel.html">
                    <div class="brands-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/vessel/VESSEL Logo.png')">
                        <div class="brands-item-content">
                            <h4>Vessel</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="brands-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/pulsar/logo.png')">
                    <div class="brands-item-content">
                        <h4>Pulsar</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="brands-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/rowll/ROWLL_LOGO_TM.jpg')">
                    <div class="brands-item-content">
                        <h4>Rowll</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="brands-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/session/Session_Logo_Final.png')">
                    <div class="brands-item-content">
                        <h4>session</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="brands-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/xvape/xvape-logo.jpg')">
                    <div class="brands-item-content">
                        <h4>Xvape</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="category.html" class="btn">See More Brands</a>
            </div>
        </div>
    </div>
</section>


<!-- Home Feature table -->
<section class="feature-table">
    <div class="feature-table-container">

        <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-table-item-1-bg.png')">
            <div class="feature-table-content text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-shop.png" alt="">
                <h2 class="bb black text-center">HIGH-STYLE LUXURY RETAIL</h2>
                <p>
                    If passion is what ignites you, purpose is how you serve others. With social responsibility at our core, we are committed to serving our communities with safe, legal and compliant content and products.
                </p>
            </div>
        </div>

        <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-table-item-2-bg.jpg')">
            <div class="feature-table-content text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-desktop.png" alt="">
                <h2 class="bb black text-center">SOCIAL RESPONSIBILITY</h2>
                <p>
                    If passion is what ignites you, purpose is how you serve others. With social responsibility at our core, we are committed to serving our communities with safe, legal and compliant content and products.
                </p>
            </div>
        </div>

        <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-table-item-3-bg.png')">
            <div class="feature-table-content text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-cann.png" alt="">
                <h2 class="bb black text-center">BRAND AMBASSADORS</h2>
                <p>
                    If passion is what ignites you, purpose is how you serve others. With social responsibility at our core, we are committed to serving our communities with safe, legal and compliant content and products.
                </p>
            </div>
        </div>

    </div>
</section>


<!-- Home where cann is meets style sec -->
<section class="cann-meet">
    <div class="cann-meet-header-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-pattern.png');">
        <div class="cann-meet-header">
            <h3 class="lslg text-center">Where cannabis meets style</h3>
        </div>
    </div>
    <div class="kantoka-mission" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/kantoka-mission-bg.jpg')">
        <div class="kantoka-mission-content">
            <h2 class="bb">The kantoka mission</h2>
            <p>
                We believe in the positive role cannabis can have in enhancing people's lives, & our mission is to provide consumers with the most effective and reliable products on the market
            </p>
        </div>
    </div>
</section>


<!-- Home join circle -->
<section class="join-circle" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-pattern.png');">
    <div class="join-circle-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-5 join-circle-content">
                            <p>
                                As a thank you for signing up, we'e giving away some cool products to some <span>lucky individuals.</span>
                            </p>
                            <form class="form my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Email Address" aria-label="Search">
                                <button class="btn btn-block" type="submit">Join the circle</button>
                            </form>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <h1 class="join-circle-title">
                                Join the circle
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Home Contact form -->
<section class="home-contact-form" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="bb lg text-center">Contact Us</h1>
                <br>
                <div class="contact-form">
                    <form class="form">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                                <select class="form-control custom-select">
                                    <option selected>Tell Us Who You Are</option>
                                    <option value="licensed-producer">Licensed Producer</option>
                                    <option value="cannabis-brand">Cannabis Brand</option>
                                    <option value="retail-store">Retail Store</option>
                                    <option value="clinic">Clinic</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" type="Email" placeholder="Email Address">
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control" id="msg" placeholder="Message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <br>
                                <button class="btn light" type="submit">Send It</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>