<?php

function kantoka_widget_areas() {

    register_sidebar( array(
        'name' => __( 'Footer Column 1'),
        'id' => 'footer_col_1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 style="display:none">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column 2'),
        'id' => 'footer_col_2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 style="display:none">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column 3'),
        'id' => 'footer_col_3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 style="display:none">',
        'after_title' => '</h2>',
    ) );


}
add_action('widgets_init', 'kantoka_widget_areas');