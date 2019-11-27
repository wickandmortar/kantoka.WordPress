<?php 
/*
    Template Name: Blog Template
*/
get_header(); ?>

<!-- The blog list -->
<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-header text-center">
                    <h3>The world of kantoka</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
                global $post;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'category_name' => 'top-3'

                );
                $i = 1;

                $head_query  = new WP_Query($args);
                
                if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();


                        

                    if($i == 1){ ?>

                        <?php

                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
                            $image = $image[0];

                        ?>

                        <div class="col-md-8">
                            <a href="<?php the_permalink(); ?>">
                                <article class="blog-list-item lg" style="background-image: url('<?php echo $image; ?>')">
                                    <div class="blog-list-content">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </article>

                            </a>
                        </div>

                    <?php  }else if($i == 2){ ?>
                    
                        <?php
                        
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
                            $image = $image[0];

                        ?>

                    <div class="col-md-4 blog-lists">

                        <a href="<?php the_permalink(); ?>">
                            <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                <div class="blog-list-content">
                                     <h4><?php the_title(); ?></h4>
                                </div>
                            </article>
                        </a>


                            <?php  } else{ ?>

                        <?php
                        
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
                            $image = $image[0];

                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                <div class="blog-list-content">
                                     <h4><?php the_title(); ?></h4>
                                </div>
                            </article>
                        </a>
                    </div>

                        <?php }

                    $i++;
                ?>

               
                

                <br />

            <?php
                endwhile; endif; wp_reset_postdata();
            ?>


        </div>
    </div>
</section>


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
                    'posts_per_page' =>5,
                    'category__not_in' => 3

                );

                $head_query  = new WP_Query($args);
                $j = 1;
                if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();
 
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
                    $image = $image[0];
                    
                    if($j == 4){ ?>
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                    <div class="blog-list-content">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </article>
                            </a>


                    <?php }elseif($j == 5){ ?>
                            <a href="<?php the_permalink(); ?>">
                                <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                    <div class="blog-list-content">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </article>
                            </a>

                        </div>

                    <?php }else{ ?>

                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">                  
                                <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                    <div class="blog-list-content">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </article>
                            </a>  
                        </div>

                    <?php }


                    $j++;
                ?>

               


            <?php
                endwhile; endif; wp_reset_postdata();
            ?>



            <div class="col-md-8">

            <?php
                global $post;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '1',
                    'category_name' => 'featured'

                );
                $i = 1;

                $head_query  = new WP_Query($args);
                if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();
 
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
                    $image = $image[0];
            ?>    


                <a href="<?php the_permalink(); ?>">
                    <article class="blog-list-item lg" style="background-image: url('<?php echo $image; ?>')">
                        <div class="blog-list-content">
                            <h4><?php echo wp_trim_words(get_the_title(), 7); ?></h4>
                        </div>
                    </article>
                </a>

            <?php
                endwhile; endif; wp_reset_postdata();
            ?>



                
            </div>

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
                    <article class="blog-list-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/brnt/BRNT-Designs-Full Logo-Black.png')">
                        <div class="blog-list-content">
                            <h4>Brnt</h4>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-md-4">                    
                <a href="/brands/vessel.html">
                    <article class="blog-list-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/vessel/VESSEL Logo.png')">
                        <div class="blog-list-content">
                            <h4>vessel</h4>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-md-4">                    
                <a href="/brands/xvape.html">                   
                    <article class="blog-list-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brands/xvape/xvape-logo.jpg')">
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

    
<?php get_footer(); ?>