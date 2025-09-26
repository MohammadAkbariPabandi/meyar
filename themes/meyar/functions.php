<?php
/**
 * My Custom Theme functions and definitions
 */

// Theme setup
function my_custom_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for title tag
    add_theme_support('title-tag');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'meyar'),
        'footer'  => __('Footer Menu', 'meyar'),
    ));
    
    // Add support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Enqueue styles and scripts
function my_custom_theme_scripts() {
    // Main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // Custom CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/app.css');
    
    // JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// Widget areas
function my_custom_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'meyar'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'meyar'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widgets', 'meyar'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in your footer.', 'meyar'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_custom_theme_widgets_init');