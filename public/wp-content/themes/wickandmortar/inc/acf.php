<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(

	'key' => 'kantoka_post_option_group',
	'title' => 'Kantoka post options',
	'fields' => array(
	

		array(
			'key' => 'details_page_main_image',
			'label' => 'Big Hero Image at Post Details Page',
			'name' => 'details_page_main_image',
			'type' => 'image',
			'return_format'=> 'url'
		),
		
		
	),


	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
));

endif;