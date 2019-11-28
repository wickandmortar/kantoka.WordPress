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
  
           
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
            $image = $image[0];
            if($i == 1){ ?>


                <div class="col-md-6">
                    <div class="menu-featured-item lg" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>

            <?php  }else if($i == 2){ ?>

                    <div class="col-md-6 menu-featured-item-sm-container">
                        <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                            <div class="menu-featured-item-content">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>


                <?php  } else{ ?>

                        <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                            <div class="menu-featured-item-content">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </div>

                <?php }

            $i++;
     
        endwhile; endif; wp_reset_postdata();

	}else if($head_query -> found_posts == 2){

        $i = 1;
        if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
            $image = $image[0];
            if($i == 1){ ?>


                <div class="col-md-6">
                    <div class="menu-featured-item lg" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>

            <?php  } else if($i == 2){ ?>
                <div class="col-md-6 menu-featured-item-sm-container">
                    <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
            <?php }

        $i++;
        endwhile; endif; wp_reset_postdata();
        ?>
        <?php

            $args2 = array(
                'post_type' => 'post',
                'posts_per_page' => '1',
            );
            $qury2 = new WP_Query($args2);

            if($qury2 -> have_posts()): while($qury2 -> have_posts()): $qury2 -> the_post();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
            $image = $image[0];
        ?>
            <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                <div class="menu-featured-item-content">
                    <h4><?php the_title(); ?></h4>
                </div>
            </div>
        </div>

    <?php
    endwhile; endif; wp_reset_postdata(); 

} else if($head_query -> found_posts == 1){


        if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
            $image = $image[0]; ?>


                <div class="col-md-6">
                    <div class="menu-featured-item lg" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>

            <?php
        endwhile; endif; wp_reset_postdata();


            $args2 = array(
                'post_type' => 'post',
                'posts_per_page' => '2',
            );
            $qury2 = new WP_Query($args2);
            $i = 1;
            if($qury2 -> have_posts()): while($qury2 -> have_posts()): $qury2 -> the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
                $image = $image[0];
                if($i==1){ ?>
                    <div class="col-md-6 menu-featured-item-sm-container">
                        <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                            <div class="menu-featured-item-content">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>

                <?php }else{ ?>
                        <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                            <div class="menu-featured-item-content">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </div>

                <?php }
				
				$i++;
            endwhile; endif; wp_reset_postdata();


}else if($head_query -> found_posts == 0){

            $args2 = array(
                'post_type' => 'post',
                'posts_per_page' => '3',
            );
            $qury2 = new WP_Query($args2);
            $i = 1;

            if($qury2 -> have_posts()): while($qury2 -> have_posts()): $qury2 -> the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
                $image = $image[0];
            if($i ==1){ ?>

                <div class="col-md-6">
                    <div class="menu-featured-item lg" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>
            <?php }elseif($i ==2){ ?>
                <div class="col-md-6 menu-featured-item-sm-container">
                    <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>                

            <?php }else{ ?>
                    

                    <div class="menu-featured-item sm" style="background-image: url('<?php echo $image; ?>')">
                        <div class="menu-featured-item-content">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>


            <?php }


            $i++;
            endwhile; endif; wp_reset_postdata();




}
?>   

