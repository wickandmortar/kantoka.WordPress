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



acf_add_local_field_group(array(

	'key' => 'kantoka_blog_form_group',
	'title' => 'Kantoka CTA',
	'fields' => array(
	

		array(
			'key' => 'kantoka_cta_text',
			'label' => 'CTA Text',
			'name' => 'kantoka_cta_text',
			'type' => 'wysiwyg',
			'default_value'=> '<h3 class="join-circle-title">GROW YOUR KNOW</h3><br /><p>The Canadian cannabis industry is quickly evolving and Kantoka is keeping pace.</p><p>Sign-up for industry and company updates, new product releases, events, giveaways, exclusive perks, and more!</p>'
		),	

		array(
			'key' => 'kantoka_cta_ID',
			'label' => 'Gravity Form ID',
			'name' => 'kantoka_cta_ID',
			'type' => 'text',
		),
		
		
	),

	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-blog.php',
			),
		),
	),
));









endif;