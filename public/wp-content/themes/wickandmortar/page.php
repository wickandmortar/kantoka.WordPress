<?php get_header(); ?>

<div class="container page_content">
	<div class="row">
		<div class="col-12">
			<?php
			    if(have_posts()):while(have_posts()):the_post();
			        the_content();
			    endwhile; endif;

			?>			
		</div>
	</div>
</div>


<?php get_footer(); ?>