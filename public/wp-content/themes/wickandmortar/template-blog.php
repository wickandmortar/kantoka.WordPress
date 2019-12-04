<?php 
/*
    Template Name: Blog Template
*/
get_header(); ?>

<?php
    get_template_part('inc/template-parts/top-3');
?>

<!-- Recent Blog Post -->
<section class="blog-list recent-blog-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h2>Recent Articles</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="row">

            <?php
                global $post;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' =>3,
                    'category__not_in' => 3

                );

                $head_query  = new WP_Query($args);
                $j = 1;
                if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();
 
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
                    $image = $image[0]; 
                ?>
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">                  
                                <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                    <div class="blog-list-content">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </article>
                            </a>  
                        </div>


            <?php
                endwhile; endif; wp_reset_postdata();
            ?>

        </div>
    </div>
</section>


<!-- Brands List -->

<!-- <section class="blog-list blog-page-brands">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h2>Brands you might like</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="row">

            <div class="col-md-4">                    
                <a href="/brands/brnt.html">
                    <article class="blog-list-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/brands/brnt/BRNT-Designs-Full Logo-Black.png')">
                        <div class="blog-list-content">
                            <h4>Brnt</h4>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-md-4">                    
                <a href="/brands/vessel.html">
                    <article class="blog-list-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/brands/vessel/VESSEL Logo.png')">
                        <div class="blog-list-content">
                            <h4>vessel</h4>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-md-4">                    
                <a href="/brands/xvape.html">                   
                    <article class="blog-list-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/brands/xvape/xvape-logo.jpg')">
                        <div class="blog-list-content">
                            <h4>Xvape</h4>
                        </div>
                    </article>
                </a>    
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btn">See More Articles</a>
            </div>
        </div>
    </div>
</section>
 -->
    <?php
        $text = get_field('kantoka_cta_text');
        $ID = get_field('kantoka_cta_ID')
    ?>
    <section class="join-circle blog--join-circle" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/pattern.png');">
        <div class="join-circle-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <?php echo $text;?>
                            </div>

                            <div class="col-md-5 join-circle-content offset-md-1">

                                <?php echo do_shortcode('[gravityform id='.$ID.' title=false description=false ajax=true tabindex=49]'); ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>