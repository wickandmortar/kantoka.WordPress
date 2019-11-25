<?php get_header(); ?>

    <section class="blog-list">
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="blog-header text-center">
                        <h3>The world of kantoka</h3>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2">
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