<?php

# Builds this block only "kantoka-mission"

add_action('acf/init', 'acf_build_block_kantoka_mission');

function acf_build_block_kantoka_mission() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'kantoka-mission',
			'title'				=> __('Kantoka Mission'),
			'render_callback'	=> 'acf_block_kantoka_mission_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_kantoka_mission_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_kantoka_mission_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'kantoka_mission_group',
		'title' => 'Kantoka Mission',
		'fields' => array(
		

			array(
				'key' => 'kantoka_mission_title',
				'label' => 'Mission Title',
				'name' => 'kantoka_mission_title',
				'type' => 'text',
				'default_value'=> 'THE KANTOKA MISSION'
			),
			array(
				'key' => 'kantoka_mission_desc',
				'label' => 'Kantoka Mission Description',
				'name' => 'kantoka_mission_desc',
				'type' => 'textarea',
				'default_value'=> "We believe in the positive role cannabis can have in enhancing people's lives, & our mission is to provide consumers with the most effective and reliable products on the market"
			),
			
			array(
				'key' => 'kantoka_mission_bg_img',
				'label' => 'Kantoka Mission Background Image',
				'name' => 'kantoka_mission_bg_img',
				'type' => 'image',
				'return_format'=> 'url'
			),
			
			
		),

		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/kantoka-mission',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_kantoka_mission_acf_field_groups');


?>