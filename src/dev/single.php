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
                </div>
            </div>

        </div>
    </section>


<?php get_footer(); ?>