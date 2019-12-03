<?php get_header(); ?>

    <?php
        $single_image = get_field('details_page_main_image');
    ?>
    <section class="blog-list">
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="blog-header text-center">
                        <h3>The world of kantoka</h3>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 post_details">
                    <?php if($single_image) : ?>
                        <div class="featured_image">
                            <img src="<?php echo $single_image; ?>" alt="">
                        </div>
                        <br>
                        <br>
                    <?php endif; ?>
                    
					<?php
						if(have_posts()): while(have_posts()): the_post(); ?>
							<h3 class="bb pink"><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php
						endwhile; endif;
					?>

                    <div class="row post_links">

                        <div class="col-sm-4 col-6 text-left order-1 prev_post my-auto">
                            <?php previous_post_link('%link', '<span class="iconify" data-icon="dashicons:arrow-left-alt" data-inline="false"></span> Previous Post'); ?>
                        </div>

                        <div class="col-sm-4 my-auto order-3 order-sm-2">
                            <a class="button btn btn-block back_to_blog" href="/blog">Back to Blog</a>
                        </div>

                        <div class="col-sm-4 col-6 text-right order-2 next_post my-auto">
                            <?php next_post_link('%link', 'Next Post <span class="iconify" data-icon="dashicons:arrow-right-alt" data-inline="false"> '); ?>                 
                        </div>

                    </div>







                </div>
            </div>

        </div>
    </section>


<?php get_footer(); ?>