<?php

# Builds this block only "kantoka-contact"

add_action('acf/init', 'acf_build_block_kantoka_contact');

function acf_build_block_kantoka_contact() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'kantoka-contact',
			'title'				=> __('Kantoka Home Contact Form'),
			'description'		=> __('Block Description'),
			'render_callback'	=> 'acf_block_kantoka_contact_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_kantoka_contact_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_kantoka_contact_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'kantoka_home_contact',
		'title' => 'Kantoka Home Contact Form',
		'fields' => array(
		

			array(
				'key' => 'home_conctact_title',
				'label' => 'Contact Form Title',
				'name' => 'home_conctact_title',
				'type' => 'text',
				'default_value'=> 'Contact Us'
			),
			array(
				'key' => 'home_conctact_ID',
				'label' => 'Gravity Form ID',
				'name' => 'home_conctact_ID',
				'type' => 'text',
			),
			
			
		),

		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/kantoka-contact',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_kantoka_contact_acf_field_groups');


?>