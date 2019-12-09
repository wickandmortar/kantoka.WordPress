<?php 
// sidebar for settings page
?>

<div id="ageverify-sidebar" style="width: 23%; float: right; min-width: 150px;">
	
	<div class="box resources">
		<header>
			<?php _e( 'Resources', 'ageverify' ); ?>
		</header>
        <p style="text-align:center;">We're here to help. If at any time you need assistance, click the button below to contact us.</p>
		<p style="text-align:center;"><a href="https://ageverify.com/" target="_blank"class="button submit-button button-primary"><?php _e( 'Contact Us', 'ageverify' ); ?></a>
		</p>
	</div>

	<div class="box">
		<p style="text-align:center;"><?php _e( 'We would love your feedback!  It only takes seconds and it means a lot.', 'ageverify' ); ?></p>
		<p style="text-align:center;"><a href="https://wordpress.org/support/view/plugin-reviews/ageverify" target="_blank" class="button submit-button button-primary">
			<?php _e( 'Rate This Plugin Now', 'ageverify' ); ?>
		</a></p>

	<div class="logo">
		<a href="https://imbibedigital.co/" target="_blank">
			<img src="<?php echo plugins_url() . '/ageverify-custom/includes/imbibedigital.png'; ?>" style="width:180px;height:auto;margin-top:5px;">
		</a>
	</div>

</div>


<?php

?>