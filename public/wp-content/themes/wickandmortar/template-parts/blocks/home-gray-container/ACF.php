<?php

# Builds this block only "home-gray-container"

add_action('acf/init', 'acf_build_block_home_gray_container');

function acf_build_block_home_gray_container() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-gray-container',
			'title'				=> __('Home Gray Container'),
			'render_callback'	=> 'acf_block_home_gray_container_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_home_gray_container_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_home_gray_container_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'kantoka_home_gray_container',
		'title' => 'Kantoka Home Gray Container',
		'fields' => array(
		

			array(
				'key' => 'home_gray_container_text',
				'label' => 'Home Gray Container Text Content',
				'name' => 'home_gray_container_text',
				'type' => 'wysiwyg',
				'default_value' => ''
			),
			
			array(
				'key' => 'home_gray_container_form_text',
				'label' => 'Home Gray Container Form Text',
				'name' => 'home_gray_container_form_text',
				'type' => 'textarea',
				'default_value' => 'WHAT ARE YOU <br> LOOKING FOR TODAY?'
			),
			
			
		),

		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-gray-container',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_home_gray_container_acf_field_groups');


?>