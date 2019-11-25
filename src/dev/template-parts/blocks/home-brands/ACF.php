<?php

# Builds this block only "home-brands"

add_action('acf/init', 'acf_build_block_home_brands');

function acf_build_block_home_brands() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-brands',
			'title'				=> __('Home Brands'),
			'render_callback'	=> 'acf_block_home_brands_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_home_brands_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_home_brands_acf_field_groups() {

	acf_add_local_field_group(array(
		# Add fields here
		# https://www.advancedcustomfields.com/resources/register-fields-via-php/
		'key' => 'Kantoka_home_brand',
		'title' => 'Kantoka Home Brands',
		'fields' => array(
		

			array(
				'key' => 'home_brand_title',
				'label' => 'Home Brand Area Title',
				'name' => 'home_brand_title',
				'type' => 'text',
				'default_value'=> 'ALL THE BEST BRANDS IN ONE PLACE'
			),
			array(
				'key' => 'home_brand_area_brands',
				'label' => 'Home Brands',
				'name' => 'home_brand_area_brands',
				'type' => 'repeater',
				'button_label' => 'Add New Brand',
				'sub_fields' => array(
					array(
						'key' => 'home_brand_logo',
						'label' => 'Brand Logo',
						'name' => 'home_brand_logo',
						'type' => 'image',
						'return_format' => 'url',
					),
					array(
						'key' => 'home_brand_area_brand_title',
						'label' => 'Brand Title',
						'name' => 'home_brand_area_brand_title',
						'type' => 'text',
					),

					array(
						'key' => 'home_brand_area_brand_link',
						'label' => 'Brand Link',
						'name' => 'home_brand_area_brand_link',
						'type' => 'text',
					),
				)
			),

			array(
				'key' => 'home_brand_see_more_text',
				'label' => 'See more brands link text',
				'name' => 'home_brand_see_more_text',
				'type' => 'text',
				'default_value'=> 'See More Brands'
			),
			array(
				'key' => 'home_brand_see_more_link',
				'label' => 'See more brands link target',
				'name' => 'home_brand_see_more_link',
				'type' => 'text',
				'default_value'=> ''
			),
			
			
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-brands',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_home_brands_acf_field_groups');


?>