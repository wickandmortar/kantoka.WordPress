<?php
// Includes
include 'inc/menu.php';
include 'inc/enqueue.php';
include 'inc/widget.php';
include 'inc/acf.php';



// theme supports:
add_theme_support( 'post-thumbnails', array( 'post') );


# Include all Blocks > kantoka > ACF.php files

$blocks = array_slice(scandir(__DIR__ . '/template-parts/blocks'),2);
foreach( $blocks as $block ) {
    include('template-parts/blocks/' . $block . '/ACF.php');
}

# Create wickandmortar Block Category

function wickandmortar_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'wickandmortar-blocks',
				'title' => __( 'Wickandmortar Blocks', 'wickandmortar-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'wickandmortar_block_category', 10, 2);

