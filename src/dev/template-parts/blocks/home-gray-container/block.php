<?php
/*

    Block Name: home-gray-container

*/
?>
<?php
    $text_content = get_field('home_gray_container_text');
    $form_text = get_field('home_gray_container_form_text');

?>
<!-- Home page one stop shop section -->
<section class="one-stop-shop" id="down-to-arrow">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1 h3_bb">
                <?php echo $text_content ;?>
                
            </div>
            <div class="col-md-5">
                <h3><?php echo $form_text ;?></h3>
                <form class="form my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Enter search here ..." aria-label="Search">
                    <button class="btn btn-block" type="submit">Search kantoka</button>
                </form>
            </div>
        </div>
    </div>
</section>
