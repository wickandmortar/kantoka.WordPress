<?php
/*

    Block Name: home-brands

*/
?>
<?php
    $brand_title = get_field('home_brand_title');
    $link_text = get_field('home_brand_see_more_text');
    $link_target = get_field('home_brand_see_more_link');


?>
<!-- Home page brands section -->
<section class="home-brands">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center bb bblg pink"><?php echo $brand_title ;?></h3>
            </div>
        </div>
        <br>
        <div class="row">

            <?php if( have_rows('home_brand_area_brands') ): ?>
                <?php while( have_rows('home_brand_area_brands') ): the_row(); ?>
                    
                    <?php 
                    
                      $title = get_sub_field('home_brand_area_brand_title'); 
                      $image = get_sub_field('home_brand_logo'); 
                      $link = get_sub_field('home_brand_area_brand_link');
                    
                    ?>

                    <div class="col-lg-4 col-md-6">
                        <a href="<?php echo $link; ?>">
                            <div class="brands-item" style="background-image: url('<?php echo $image; ?>')">
                                <div class="brands-item-content">
                                    <h4><?php echo $title; ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>








        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo $link_target ;?>" class="btn"><?php echo $link_text ;?></a>
            </div>
        </div>
    </div>
</section>