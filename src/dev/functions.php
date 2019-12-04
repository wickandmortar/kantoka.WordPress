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


add_filter('age_gate_before', 'before_age_gate', 10, 1);

function before_age_gate($before){

  $before .= '<div class="site_logo">';
  $before .= "<img src='/wp-content/uploads/2019/12/logo.png'>";
  $before .= '</div>';

  return $before;

}
add_filter('age_gate_after', 'after_age_gate', 10, 1);

function after_age_gate($after){

  $after .= '<div class="custom-markup">';
  $after .= "<a href=''>Privacy Policy</a>   |    <a href=''>Terms of Use & Code Conduct</a>";
  $after .= '</div>';

  return $after;

}