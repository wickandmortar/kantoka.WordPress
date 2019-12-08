<?php



function cwp_fc_scripts(){
  
  //wp_enqueue_style('fonts-style', get_template_directory_uri() .'/css/fonts.css');
  //wp_enqueue_script('main_script', get_template_directory_uri() .'/js/main.js',array(),'',true);

	
  	// wp_enqueue_script('ajax_script', get_template_directory_uri() .'/assets/js/ajax.js',array('jquery'),'',true);
  	// wp_localize_script('ajax_script', 'kantokaData', array(
	  // 	'ajax_url' => admin_url( 'admin-ajax.php' ),
	  // ));

	wp_enqueue_script("jquery");

}


add_action('wp_enqueue_scripts','cwp_fc_scripts');