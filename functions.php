<?php
// Enqueue styles and scripts
function custom_theme_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');

// Custom Post Type - Testimonials
function custom_post_types() {
    register_post_type('testimonials', array(
        'public' => true,
        'label'  => 'Testimonials',
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'custom_post_types');

