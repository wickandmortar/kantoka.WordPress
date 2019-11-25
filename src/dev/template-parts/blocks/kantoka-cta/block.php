<?php
/*

    Block Name: kantoka-cta

*/
?>

<?php


?>
<?php
	$title = get_field('kantoka_cta_title');
	$form_text = get_field('kantoka_cta_form_heading');
	$bg_image = get_field('kantoka_cta_form_background_image');
	$id = get_field('kantoka_cta_form_ID');


?>
<!-- kantoka-cta block -->
<section class="join-circle" style="background-image: url('<?php echo $bg_image ; ?>');">
    <div class="join-circle-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-5 join-circle-content">
                            <p>
                                <?php echo $form_text ; ?>
                            </p>
                            <!-- <form class="form my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Email Address" aria-label="Search">
                                <button class="btn btn-block" type="submit">Join the circle</button>
                            </form> -->
                            <?php echo do_shortcode('[gravityform id='.$id.' title=false description=false ajax=true tabindex=49]');
                           	?>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <h1 class="join-circle-title">
                                <?php echo $title; ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>