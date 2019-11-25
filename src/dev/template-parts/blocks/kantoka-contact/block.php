<?php
/*

    Block Name: kantoka-contact

*/
?>
<?php
	$title = get_field('home_conctact_title');
	$form_ID = get_field('home_conctact_ID');

?>
<!-- Home Contact form -->
<section class="home-contact-form" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="bb lg text-center"><?php echo $title; ?></h1>
                <br>

                <div class="contact-form">
                	<div class="row">
                        <div class="col-12">
                            <?php echo do_shortcode('[gravityform id='.$form_ID.' title=false description=false ajax=true tabindex=49]');   ?>
                        </div>
                		
                	</div>
                </div>

            </div>
        </div>
    </div>
</section>
