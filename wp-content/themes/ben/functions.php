<?php

function scripts()
{
    wp_register_style('ben_style', get_template_directory_uri() . './dist/app.css', array(), false, 'all');
    wp_enqueue_style('ben_style');

    wp_enqueue_script('jquery');

    wp_register_script('ben_js', get_template_directory_uri() . './dist/app.js', array(), false, true);
    wp_enqueue_script('ben_js');
}

add_action('wp_enqueue_scripts', 'scripts');



// function load_css()
// {
//     wp_register_style('ben_style', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
//     wp_enqueue_style('ben_style');
// }

// add_action('wp_enqueue_scripts', 'load_css');



// function load_js()
// {
//     wp_enqueue_script('jquery');
//     wp_register_script('ben_js', get_template_directory_uri() . '/script.js', array(), false, true);
//     wp_enqueue_script('ben_js');
// }

// add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('menus');
add_theme_support('post-thumbnails');


register_nav_menus(
    array(
        'top-nav' => 'Top Menu Nav'
    )
);

remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);


function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
// remove_filter('the_content', 'wpautop');
