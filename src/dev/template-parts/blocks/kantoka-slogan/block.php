<?php
/*

    Block Name: kantoka-slogan

*/
?>
<?php
	$slogan = get_field('kantoka_slogan');
	$bg = get_field('kantoka_slogan_bg');
?>
<!-- kantoka-slogan block -->
<section class="cann-meet">
    <div class="cann-meet-header-container" style="background-image: url('<?php echo $bg; ?>');">
        <div class="cann-meet-header">
            <h3 class="lslg text-center"><?php echo $slogan; ?></h3>
        </div>
    </div>
</section>