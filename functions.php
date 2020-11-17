<?php

function ozgurwp_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'ozgurwp_scripts');

add_theme_support("post-thumbnails");

add_image_size('1920x1080', 1920, 1080, true);
add_image_size('1920x750', 1920, 750, true);
add_image_size('1920x500', 1920, 500, true);
add_image_size('600x400', 600, 400, true);

function register_my_menus()
{
    register_nav_menus(
        array(
            'main-nav' => 'Main Navigation',
            'footer-nav' => 'Footer Navigation'
        )
    );
}

add_action('init', 'register_my_menus');

function ozgurwp_custom_logo_setup()
{
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'ozgurwp_custom_logo_setup');

add_theme_support('title-tag');


// Our custom post type function
function slide_create_posttype() {

    register_post_type( 'slides',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'slide' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slides'),
            'show_in_rest' => true,
            'supports' => array('thumbnail', 'title')
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'slide_create_posttype' );

