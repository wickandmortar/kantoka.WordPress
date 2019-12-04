<?php get_header(); ?>

<?php
    if(have_posts()):while(have_posts()):the_post();
        the_content();
    endwhile; endif;

?>

<!-- About Content -->
<section class="about_content">
	<div class="container">
		<div class="row">
			<div class="col-12"><hr></div>
			<div class="col-md-6">
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-1.jpg" alt="">
				<div class="lower_img_holder">
					<img class="lower_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-2.jpg" alt="">
				</div>
				
			</div>
			<div class="col-md-6">
				
				<h2 class="bb pink">BUILT FOR YOU, BY US: <br>OUR STORY</h2>
				<p>Kantoka is a story about growth, discovery, and personal journeys. The platform was founded by a group who came together while exploring the space individually in search of solutions that closed the gap between consumers and products in the legal cannabis space.</p>
				<p>We’ve had a privileged cannabis experience, especially growing up in British Columbia, where access to quality growers has been around well before legalization. While the regulated market has since made notable strides and infrastructure is underway, the legacy market continues to thrive, largely due to issues with quality, access, and product variation.</p>
				<p>To facilitate a necessary shift, safe and lab tested products need a platform to be showcased. Quality growers need to be heard. The knowledge gap needs to be filled. Putting the pieces together, we realize there is a need for something different. Consumers and brands need a place to connect in an authentic way that respects the integrity of the plant and each person’s unique relationship with her.</p>
				<p>Kantoka provides consumers with a reliable platform to learn and explore the ever-evolving cannabis industry. Our journey of learning and self-education has become the basis for building a platform that educates and informs fellow cannabis enthusiasts and curiosos.</p>
				<p>Our roots are west coast, but our vision is universal. With cannabis legalization happening in various forms across the world, Kantoka is dedicated to enhancing the consumption experience with an international influence. Because cannabis is all about connection, we’re all better when we grow together. </p>
				<p>That's our story. Honest. Unfiltered. Something different.</p>

			</div>
		</div>
	</div>
</section><!-- End About Content -->




    <section class="blog-list recent-blog-post about_featured">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr>
                    <h2>Featured Articles</h2>
                </div>
            </div>
            <br>
            <br>
            <div class="row">

                <?php

                    $args = array(
                        'post_type' => 'post', 
                        'posts_per_page' => 3, 
                        'cat' => 3
                    );

                    $post_query = new WP_Query($args);
                    if($post_query-> have_posts()):while($post_query-> have_posts()): $post_query-> the_post();?>

                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    $image = $image[0]; 
                                 ?>                
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

            <div class="row more_articles">
                <div class="col-md-12 text-center">
                    <a href="/blog" class="btn">See More Articles</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>