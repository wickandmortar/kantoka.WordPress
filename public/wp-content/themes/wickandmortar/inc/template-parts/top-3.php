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
                

                $head_query  = new WP_Query($args);

                if($head_query -> found_posts == 3){
                    $i = 1;
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
                                         <h4><?php echo wp_trim_words(get_the_title(), 8,'...'); ?></h4>
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

                }elseif($head_query -> found_posts == 2){

                    $m = 1;
                    if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();


                        if($m == 1){ ?>

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

                        <?php  }else if($m == 2){ ?>
                        
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


                                <?php  }

                                $m++;


                    endwhile; endif; wp_reset_postdata();

                    ?>

                    <?php

                        $args2 = array(
                            'post_type' => 'post',
                            'posts_per_page' => '1',
                        );
                        $qury2 = new WP_Query($args2);

                        if($qury2 -> have_posts()): while ($qury2 -> have_posts()): $qury2 -> the_post();
                    
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
                    <?php
                    endwhile;  endif; wp_reset_postdata();


                }elseif($head_query -> found_posts == 1){

                    if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();

                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
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
                <?php
                    endwhile; endif; wp_reset_postdata();

                        $args2 = array(
                            'post_type' => 'post',
                            'posts_per_page' => '2',
                        );
                        $qury2 = new WP_Query($args2);

                        $i =1; 

                        if($qury2 -> have_posts()): while ($qury2 -> have_posts()): $qury2 -> the_post();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
                            $image = $image[0];

                            if($i == 1){ ?>

                            <div class="col-md-4 blog-lists">

                                <a href="<?php the_permalink(); ?>">
                                    <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                        <div class="blog-list-content">
                                             <h4><?php the_title(); ?></h4>
                                        </div>
                                    </article>
                                </a>


                            <?php } else if( $i ==2 ){ ?>

                                <a href="<?php the_permalink(); ?>">
                                    <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                        <div class="blog-list-content">
                                             <h4><?php the_title(); ?></h4>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        <?php

    
                        }
						
						$i++;
						endwhile; endif; wp_reset_postdata();
						
                    }elseif($head_query -> found_posts == 0){
                        $args2 = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                        );
                        $qury2 = new WP_Query($args2);

                        $i =1; 

                        if($qury2 -> have_posts()): while ($qury2 -> have_posts()): $qury2 -> the_post();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
                            $image = $image[0];

                            if($i == 1){ ?>
                                <div class="col-md-8">
                                    <a href="<?php the_permalink(); ?>">
                                        <article class="blog-list-item lg" style="background-image: url('<?php echo $image; ?>')">
                                            <div class="blog-list-content">
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                        </article>

                                    </a>
                                </div>


                            <?php } else if($i == 2){ ?>

                                <div class="col-md-4 blog-lists">

                                    <a href="<?php the_permalink(); ?>">
                                        <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
                                            <div class="blog-list-content">
                                                 <h4><?php the_title(); ?></h4>
                                            </div>
                                        </article>
                                    </a>

                            <?php }elseif($i == 3){ ?>

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

                        endwhile; endif; wp_reset_postdata();



                    }


                
            ?>

        </div>
    </div>
</section>
