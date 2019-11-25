<?php

# Builds this block only "block_name"

add_action('acf/init', 'acf_build_block_block_name');

function acf_build_block_block_name() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'block_name',
			'title'				=> __('Block Title'),
			'description'		=> __('Block Description'),
			'render_callback'	=> 'acf_block_block_name_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_block_name_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_block_name_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/block_name',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_block_name_acf_field_groups');


?>