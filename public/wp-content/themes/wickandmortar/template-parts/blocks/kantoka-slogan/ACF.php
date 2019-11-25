<?php

# Builds this block only "kantoka-slogan"

add_action('acf/init', 'acf_build_block_kantoka_slogan');

function acf_build_block_kantoka_slogan() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'kantoka-slogan',
			'title'				=> __('Kantoka Slogan'),
			'render_callback'	=> 'acf_block_kantoka_slogan_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_kantoka_slogan_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_kantoka_slogan_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'kantoka_slogan_group',
		'title' => 'Kantoka Slogan',
		'fields' => array(
		

			array(
				'key' => 'kantoka_slogan',
				'label' => 'Slogan Text',
				'name' => 'kantoka_slogan',
				'type' => 'text',
				'default_value'=> 'Where cannabis meets style'
			),
			
			array(
				'key' => 'kantoka_slogan_bg',
				'label' => 'Slogan Background Image',
				'name' => 'kantoka_slogan_bg',
				'type' => 'image',
				'return_format'=> 'url'
			),
			
			
		),

		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/kantoka-slogan',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_kantoka_slogan_acf_field_groups');


?>