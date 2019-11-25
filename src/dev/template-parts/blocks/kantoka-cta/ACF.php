<?php

# Builds this block only "kantoka-cta"

add_action('acf/init', 'acf_build_block_kantoka_cta');

function acf_build_block_kantoka_cta() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'kantoka-cta',
			'title'				=> __('Kantoka CTA'),
			'render_callback'	=> 'acf_block_kantoka_cta_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_kantoka_cta_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_kantoka_cta_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'kantoka_cta_group',
		'title' => 'Kantoka CTA',
		'fields' => array(
		

			array(
				'key' => 'kantoka_cta_title',
				'label' => 'CTA Title',
				'name' => 'kantoka_cta_title',
				'type' => 'text',
				'default_value'=> 'Join the circle'
			),
			array(
				'key' => 'kantoka_cta_form_heading',
				'label' => 'CTA From Heading',
				'name' => 'kantoka_cta_form_heading',
				'type' => 'textarea',
				'default_value'=> "As a thank you for signing up, we'e giving away some cool products to some <span>lucky individuals."
			),

			array(
				'key' => 'kantoka_cta_form_ID',
				'label' => 'Gravity From ID',
				'name' => 'kantoka_cta_form_ID',
				'type' => 'text',
			),

			array(
				'key' => 'kantoka_cta_form_background_image',
				'label' => 'Background Image',
				'name' => 'kantoka_cta_form_background_image',
				'type' => 'image',
				'return_format'=> 'url'
			),

			
			
			
		),

		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/kantoka-cta',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_kantoka_cta_acf_field_groups');


?>