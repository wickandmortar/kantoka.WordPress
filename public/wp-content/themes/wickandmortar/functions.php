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
//add_filter('age_gate_after', 'after_age_gate', 10, 1);

function after_age_gate($after){

  $after .= '<div class="custom-markup">';
  $after .= "<a href=''>Privacy Policy</a>   |    <a href=''>Terms of Use & Code Conduct</a>";
  $after .= '</div>';

  return $after;

}

//remove scroll to down after form submission
add_filter( 'gform_confirmation_anchor', '__return_false' );


//Load More Posts

function kantoka_load_more_callback(){
	
	$paged = $_POST['page'];
	$page_no = $paged + 1;
	$previous = $paged - 1;
	$second_next = $paged +2;

	$args = array(
	    'post_type' => 'post',
	    'posts_per_page' =>3,
	    'category__not_in' => 3,
	    'paged' => $paged +1,
	);

	$head_query  = new WP_Query($args);
	$max_num_pages = $head_query->max_num_pages;
	

	echo "<div class='listitempage row' data-url='/page/$page_no' data-pagination='[ <a href=&quot;";
	
	if($paged != 1){
		echo "/page/$paged";
	}else{
		echo "/";
	}
	
	echo "&quot;>Previous</a> ][ <a href=&quot;/page/".$second_next."&quot;>Next</a> ] ";

	for($i = 1; $i<= $max_num_pages; $i++){
		if($i == $page_no){
			echo $i;
		}else{
			echo "<a href=&quot;/page/$i&quot;>$i</a>";
		}
		
	}

	echo "'>";


	if($head_query -> have_posts()): while($head_query -> have_posts()): $head_query ->the_post();

	    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large');
	    $image = $image[0]; 
	?>

	<div class="col-md-4 single_blog listitem" data-page-url="/page/<?php echo $page_no; ?>">
	    <a href="<?php the_permalink(); ?>">                  
	        <article class="blog-list-item" style="background-image: url('<?php echo $image; ?>')">
	            <div class="blog-list-content">
	                <h4><?php the_title(); ?></h4>
	            </div>
	        </article>
	    </a>  
	</div>


	<?php
	endwhile; 
	echo paginate_links(array(
	  'total' => $head_query->max_num_pages
	));


	endif; wp_reset_postdata();

	echo '</div>';

	die();
}

add_action('wp_ajax_kantoka_load_more', 'kantoka_load_more_callback');
add_action('wp_ajax_nopriv_kantoka_load_more', 'kantoka_load_more_callback');