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


// Register Custom Post Type for services
function custom_post_type_services() {

    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'service', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'services', 'text_domain' ),
        'name_admin_bar'        => __( 'service', 'text_domain' ),
        'archives'              => __( 'service Archives', 'text_domain' ),
        'attributes'            => __( 'service Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent service:', 'text_domain' ),
        'all_items'             => __( 'All services', 'text_domain' ),
        'add_new_item'          => __( 'Add New service', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New service', 'text_domain' ),
        'edit_item'             => __( 'Edit service', 'text_domain' ),
        'update_item'           => __( 'Update service', 'text_domain' ),
        'view_item'             => __( 'View service', 'text_domain' ),
        'view_items'            => __( 'View services', 'text_domain' ),
        'search_items'          => __( 'Search service', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into service', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this service', 'text_domain' ),
        'items_list'            => __( 'services list', 'text_domain' ),
        'items_list_navigation' => __( 'services list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter services list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'service', 'text_domain' ),
        'description'           => __( 'Post Type for services', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ,'page-attributes' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'service', $args );

}
add_action( 'init', 'custom_post_type_services', 0 );


// Register Custom Post Type for courses
function custom_post_type_courses() {

    $labels = array(
        'name'                  => _x( 'Courses', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'course', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'courses', 'text_domain' ),
        'name_admin_bar'        => __( 'course', 'text_domain' ),
        'archives'              => __( 'course Archives', 'text_domain' ),
        'attributes'            => __( 'course Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent course:', 'text_domain' ),
        'all_items'             => __( 'All courses', 'text_domain' ),
        'add_new_item'          => __( 'Add New course', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New course', 'text_domain' ),
        'edit_item'             => __( 'Edit course', 'text_domain' ),
        'update_item'           => __( 'Update course', 'text_domain' ),
        'view_item'             => __( 'View course', 'text_domain' ),
        'view_items'            => __( 'View courses', 'text_domain' ),
        'search_items'          => __( 'Search course', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into course', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this course', 'text_domain' ),
        'items_list'            => __( 'courses list', 'text_domain' ),
        'items_list_navigation' => __( 'courses list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter courses list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'course', 'text_domain' ),
        'description'           => __( 'Post Type for courses', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ,'page-attributes' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'course', $args );

}
add_action( 'init', 'custom_post_type_courses', 0 );



// Register Custom Post Type for PersonalDevelopments
function custom_post_type_personal_developments() {

    $labels = array(
        'name'                  => _x( 'PersonalDevelopments', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'PersonalDevelopment', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'PersonalDevelopments', 'text_domain' ),
        'name_admin_bar'        => __( 'PersonalDevelopment', 'text_domain' ),
        'archives'              => __( 'PersonalDevelopment Archives', 'text_domain' ),
        'attributes'            => __( 'PersonalDevelopment Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent PersonalDevelopment:', 'text_domain' ),
        'all_items'             => __( 'All PersonalDevelopments', 'text_domain' ),
        'add_new_item'          => __( 'Add New PersonalDevelopment', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New PersonalDevelopment', 'text_domain' ),
        'edit_item'             => __( 'Edit PersonalDevelopment', 'text_domain' ),
        'update_item'           => __( 'Update PersonalDevelopment', 'text_domain' ),
        'view_item'             => __( 'View PersonalDevelopment', 'text_domain' ),
        'view_items'            => __( 'View PersonalDevelopments', 'text_domain' ),
        'search_items'          => __( 'Search PersonalDevelopment', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into PersonalDevelopment', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this PersonalDevelopment', 'text_domain' ),
        'items_list'            => __( 'PersonalDevelopments list', 'text_domain' ),
        'items_list_navigation' => __( 'PersonalDevelopments list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter PersonalDevelopments list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'PersonalDevelopment', 'text_domain' ),
        'description'           => __( 'Post Type for PersonalDevelopments', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ,'page-attributes' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'personal_development', $args );

}
add_action( 'init', 'custom_post_type_personal_developments', 0 );


// Register Custom Post Type for Articles
function custom_post_type_articles() {

    $labels = array(
        'name'                  => _x( 'Articles', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Articles', 'text_domain' ),
        'name_admin_bar'        => __( 'Article', 'text_domain' ),
        'archives'              => __( 'Article Archives', 'text_domain' ),
        'attributes'            => __( 'Article Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Article:', 'text_domain' ),
        'all_items'             => __( 'All Articles', 'text_domain' ),
        'add_new_item'          => __( 'Add New Article', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Article', 'text_domain' ),
        'edit_item'             => __( 'Edit Article', 'text_domain' ),
        'update_item'           => __( 'Update Article', 'text_domain' ),
        'view_item'             => __( 'View Article', 'text_domain' ),
        'view_items'            => __( 'View Articles', 'text_domain' ),
        'search_items'          => __( 'Search Article', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into article', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this article', 'text_domain' ),
        'items_list'            => __( 'Articles list', 'text_domain' ),
        'items_list_navigation' => __( 'Articles list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter articles list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Article', 'text_domain' ),
        'description'           => __( 'Post Type for Articles', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ,'page-attributes' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'article', $args );

}
add_action( 'init', 'custom_post_type_articles', 0 );