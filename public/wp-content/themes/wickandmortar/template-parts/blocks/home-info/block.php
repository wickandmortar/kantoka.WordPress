<?php
/*

    Block Name: home-info

*/
?>


<!-- Home Feature table -->
<section class="feature-table">
    <div class="feature-table-container">

		<?php if( have_rows('knatoka_home_info_loop') ): ?>
		    <?php $i=1; while( have_rows('knatoka_home_info_loop') ): the_row(); ?>
		        
		        <?php 
		        
		          $title = get_sub_field('knatoka_home_info_block_title'); 
		          $icon = get_sub_field('knatoka_home_info_block_icon'); 
		          $bg_image = get_sub_field('knatoka_home_info_block_bg'); 
		          $description = get_sub_field('knatoka_home_info_block_text', false, false);
		        
		        ?>

		        <div class="feature-table-item" style="background-image: url('<?php echo $bg_image ;?>')">
		            <div class="feature-table-content text-center">
		                <img src="<?php echo $icon ;?>" alt="">
		                <h2 class="bb black text-center"><?php echo $title ;?></h2>
		                <p>
		                    <?php echo $description ;?>
		                </p>
		            </div>
		        </div>

		        
		    <?php $i++; endwhile; ?>
		<?php endif; ?>





    </div>
</section>