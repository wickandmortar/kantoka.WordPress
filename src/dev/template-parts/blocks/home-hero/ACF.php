<?php

# Builds this block only "home-hero"

add_action('acf/init', 'acf_build_block_home_hero');

function acf_build_block_home_hero() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-hero',
			'title'				=> __('Home Hero'),
			'render_callback'	=> 'acf_block_home_hero_render_callback',
			'category'			=> 'wickandmortar-blocks',
			'icon'				=> 'store',
		));
        
	}
}


function acf_block_home_hero_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/{$slug}/block.php") );
	}
}




# Register Field Group

function wickandmortar_home_hero_acf_field_groups() {

	acf_add_local_field_group(array(

		'key' => 'korasana_home_hero',
		'title' => 'Korasana Home Hero',
		'fields' => array(
		
			
			array(
				'key' => 'home_hero_title',
				'label' => 'Home Hero Title',
				'name' => 'home_hero_title',
				'type' => 'text',
				'default_value'=> 'Welcome to the world of kantoka'
			),
			array(
				'key' => 'home_hero_subtitle',
				'label' => 'Home Hero Subtitle',
				'name' => 'home_hero_subtitle',
				'type' => 'text',
				'default_value'=> 'Something for Everyone'
			),
			array(
				'key' => 'home_hero_btn_text',
				'label' => 'Home Hero Button Text',
				'name' => 'home_hero_btn_text',
				'type' => 'text',
				'default_value'=> 'Shop Now'
			),
			array(
				'key' => 'home_hero_btn_link',
				'label' => 'Home Hero Button Link',
				'name' => 'home_hero_btn_link',
				'type' => 'text',
			),
			array(
				'key' => 'home_hero_big_image',
				'label' => 'Home Hero Background Image',
				'name' => 'home_hero_big_image',
				'type' => 'image',
				'return_format'=> 'url'
			),
			
			array(
				'key' => 'home_hero_small_image',
				'label' => 'Home Hero Main Image',
				'name' => 'home_hero_small_image',
				'type' => 'image',
				'return_format'=> 'url'
			),
			
			
		),
		
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-hero',
				),
			),
		),
	));
}

add_action('acf/init', 'wickandmortar_home_hero_acf_field_groups');


?>