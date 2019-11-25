<?php
/*

    Block Name: home-hero

*/
?>
<?php

    $title = get_field('home_hero_title');
    $subtitle = get_field('home_hero_subtitle');
    $btnText = get_field('home_hero_btn_text');
    $btnLink = get_field('home_hero_btn_link');
    $bigImage = get_field('home_hero_big_image');
    $smallImage = get_field('home_hero_small_image');
?>
<!-- Slider -->
<div class="slider">
    <div id="main-carouse" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner">
            <!-- carousel 1 -->
            <div class="carousel-item active">
                <div class="slider-item" style="background-image: url('<?php echo $bigImage ;?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-6">
                                <h1><?php echo $title ;?></h1>
                                <h4><?php echo $subtitle ;?></h4>
                                <a href="<?php echo $btnLink ;?>" class="btn"><?php echo $btnText ;?></a>
                            </div>
                        </div>
                        <div class="slider-img">
                            <img src="<?php echo $smallImage ;?>" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <a href="#down-to-arrow" id="down-arrow" class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arow.png" alt=""></a>
        
    </div>
</div>