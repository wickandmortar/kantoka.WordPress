<?php

# Builds this block only "home-info"

add_action('acf/init', 'acf_build_block_home_info');

function acf_build_block_home_info() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-info',
			'title'				=> __('Home info block'),
			'render_callback'	=> 'acf_block_home_info_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_home_info_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_home_info_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'kantoka_home_inof',
		'title' => 'Kantoka Home Info',
		'fields' => array(
		

			array(
				'key' => 'knatoka_home_info_loop',
				'label' => 'Kantoka Home Info Blocks',
				'name' => 'knatoka_home_info_loop',
				'type' => 'repeater',
				'button_label' => 'Add New Info Block',
				'layout' => 'row',
				'sub_fields' => array(

					array(
						'key' => 'knatoka_home_info_block_icon',
						'label' => 'Block Icon',
						'name' => 'knatoka_home_info_block_icon',
						'type' => 'image',
						'return_format' => 'url',
					),
					array(
						'key' => 'knatoka_home_info_block_title',
						'label' => 'Block Title',
						'name' => 'knatoka_home_info_block_title',
						'type' => 'text',
					),
					array(
						'key' => 'knatoka_home_info_block_text',
						'label' => 'Block Text',
						'name' => 'knatoka_home_info_block_text',
						'type' => 'textarea',
					),
					array(
						'key' => 'knatoka_home_info_block_bg',
						'label' => 'Block Background Image',
						'name' => 'knatoka_home_info_block_bg',
						'type' => 'image',
						'return_format' => 'url',
					),
				)
			),
			
			
		),

		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-info',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_home_info_acf_field_groups');


?>