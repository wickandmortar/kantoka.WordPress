<?php
/*

    Block Name: kantoka-mission

*/
?>
<?php
	$title = get_field('kantoka_mission_title');
	$desc = get_field('kantoka_mission_desc');
	$bg_img = get_field('kantoka_mission_bg_img');



?>
<!-- kantoka-mission block -->
<section class="cann-meet">

    <div class="kantoka-mission" style="background-image: url('<?php echo $bg_img ; ?>')">
        <div class="kantoka-mission-content">
            <h2 class="bb"><?php echo $title ; ?></h2>
            <p>
                <?php echo $desc ; ?>
            </p>
        </div>
    </div>

</section>