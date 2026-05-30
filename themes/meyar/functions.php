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
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ,'page-attributes' ),
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
        'rewrite'               => array('slug' => 'services'),
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
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes' ),
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
        'rewrite'               => array('slug' => 'courses' ),
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
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions','page-attributes' ),
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
        'hierarchical'          => true,
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



// Register Custom Post Type for WhyMeyar
function custom_post_type_whyMeyars() {

    $labels = array(
        'name'                  => _x( 'WhyMeyars', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'WhyMeyar', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'WhyMeyars', 'text_domain' ),
        'name_admin_bar'        => __( 'WhyMeyar', 'text_domain' ),
        'archives'              => __( 'WhyMeyar Archives', 'text_domain' ),
        'attributes'            => __( 'WhyMeyar Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent WhyMeyar:', 'text_domain' ),
        'all_items'             => __( 'All WhyMeyars', 'text_domain' ),
        'add_new_item'          => __( 'Add New WhyMeyar', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New WhyMeyar', 'text_domain' ),
        'edit_item'             => __( 'Edit WhyMeyar', 'text_domain' ),
        'update_item'           => __( 'Update WhyMeyar', 'text_domain' ),
        'view_item'             => __( 'View WhyMeyar', 'text_domain' ),
        'view_items'            => __( 'View WhyMeyars', 'text_domain' ),
        'search_items'          => __( 'Search WhyMeyar', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into whyMeyar', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this whyMeyar', 'text_domain' ),
        'items_list'            => __( 'WhyMeyars list', 'text_domain' ),
        'items_list_navigation' => __( 'WhyMeyars list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter whyMeyars list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'WhyMeyar', 'text_domain' ),
        'description'           => __( 'Post Type for WhyMeyars', 'text_domain' ),
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
    register_post_type( 'WhyMeyar', $args );

}
add_action( 'init', 'custom_post_type_whyMeyars', 0 );

// Register Custom Post Type for faq
function custom_post_type_faqs() {

    $labels = array(
        'name'                  => _x( 'faqs', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'faq', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'faqs', 'text_domain' ),
        'name_admin_bar'        => __( 'faq', 'text_domain' ),
        'archives'              => __( 'faq Archives', 'text_domain' ),
        'attributes'            => __( 'faq Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent faq:', 'text_domain' ),
        'all_items'             => __( 'All faqs', 'text_domain' ),
        'add_new_item'          => __( 'Add New faq', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New faq', 'text_domain' ),
        'edit_item'             => __( 'Edit faq', 'text_domain' ),
        'update_item'           => __( 'Update faq', 'text_domain' ),
        'view_item'             => __( 'View faq', 'text_domain' ),
        'view_items'            => __( 'View faq', 'text_domain' ),
        'search_items'          => __( 'Search faq', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into faq', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this faq', 'text_domain' ),
        'items_list'            => __( 'faqs list', 'text_domain' ),
        'items_list_navigation' => __( 'faqs list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter faqs list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'faq', 'text_domain' ),
        'description'           => __( 'Post Type for faqs', 'text_domain' ),
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
    register_post_type( 'faq', $args );

}
add_action( 'init', 'custom_post_type_faqs', 0 );


// Register Custom Post Type for events
function custom_post_type_events() {

    $labels = array(
        'name'                  => _x( 'events', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'event', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'events', 'text_domain' ),
        'name_admin_bar'        => __( 'event', 'text_domain' ),
        'archives'              => __( 'event Archives', 'text_domain' ),
        'attributes'            => __( 'event Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent event:', 'text_domain' ),
        'all_items'             => __( 'All events', 'text_domain' ),
        'add_new_item'          => __( 'Add New event', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New event', 'text_domain' ),
        'edit_item'             => __( 'Edit event', 'text_domain' ),
        'update_item'           => __( 'Update event', 'text_domain' ),
        'view_item'             => __( 'View event', 'text_domain' ),
        'view_items'            => __( 'View event', 'text_domain' ),
        'search_items'          => __( 'Search event', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into event', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this event', 'text_domain' ),
        'items_list'            => __( 'events list', 'text_domain' ),
        'items_list_navigation' => __( 'events list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter events list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'event', 'text_domain' ),
        'description'           => __( 'Post Type for events', 'text_domain' ),
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
    register_post_type( 'event', $args );

}
add_action( 'init', 'custom_post_type_events', 0 );



// Register Custom Post Type for news
function custom_post_type_newss() {

    $labels = array(
        'name'                  => _x( 'newss', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'news', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'newss', 'text_domain' ),
        'name_admin_bar'        => __( 'news', 'text_domain' ),
        'archives'              => __( 'news Archives', 'text_domain' ),
        'attributes'            => __( 'news Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent news:', 'text_domain' ),
        'all_items'             => __( 'All news', 'text_domain' ),
        'add_new_item'          => __( 'Add New news', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New news', 'text_domain' ),
        'edit_item'             => __( 'Edit news', 'text_domain' ),
        'update_item'           => __( 'Update news', 'text_domain' ),
        'view_item'             => __( 'View news', 'text_domain' ),
        'view_items'            => __( 'View news', 'text_domain' ),
        'search_items'          => __( 'Search news', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into news', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this news', 'text_domain' ),
        'items_list'            => __( 'newss list', 'text_domain' ),
        'items_list_navigation' => __( 'newss list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter newss list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'news', 'text_domain' ),
        'description'           => __( 'Post Type for newss', 'text_domain' ),
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
    register_post_type( 'news', $args );

}
add_action( 'init', 'custom_post_type_newss', 0 );


// Register Custom Post Type for customer
function custom_post_type_customers() {

    $labels = array(
        'name'                  => _x( 'customers', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'customer', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'customers', 'text_domain' ),
        'name_admin_bar'        => __( 'customer', 'text_domain' ),
        'archives'              => __( 'customer Archives', 'text_domain' ),
        'attributes'            => __( 'customer Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent customer:', 'text_domain' ),
        'all_items'             => __( 'All customer', 'text_domain' ),
        'add_new_item'          => __( 'Add New customer', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New customer', 'text_domain' ),
        'edit_item'             => __( 'Edit customer', 'text_domain' ),
        'update_item'           => __( 'Update customer', 'text_domain' ),
        'view_item'             => __( 'View customer', 'text_domain' ),
        'view_items'            => __( 'View customer', 'text_domain' ),
        'search_items'          => __( 'Search customer', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into customer', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this customer', 'text_domain' ),
        'items_list'            => __( 'customers list', 'text_domain' ),
        'items_list_navigation' => __( 'customers list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter customers list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'customer', 'text_domain' ),
        'description'           => __( 'Post Type for customers', 'text_domain' ),
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
    register_post_type( 'customers', $args );

}
add_action( 'init', 'custom_post_type_customers', 0 );

// Register Custom Post Type for license
function custom_post_type_licenses() {

    $labels = array(
        'name'                  => _x( 'licenses', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'license', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'licenses', 'text_domain' ),
        'name_admin_bar'        => __( 'license', 'text_domain' ),
        'archives'              => __( 'license Archives', 'text_domain' ),
        'attributes'            => __( 'license Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent license:', 'text_domain' ),
        'all_items'             => __( 'All license', 'text_domain' ),
        'add_new_item'          => __( 'Add New license', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New license', 'text_domain' ),
        'edit_item'             => __( 'Edit license', 'text_domain' ),
        'update_item'           => __( 'Update license', 'text_domain' ),
        'view_item'             => __( 'View license', 'text_domain' ),
        'view_items'            => __( 'View license', 'text_domain' ),
        'search_items'          => __( 'Search license', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into license', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this license', 'text_domain' ),
        'items_list'            => __( 'licenses list', 'text_domain' ),
        'items_list_navigation' => __( 'licenses list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter licenses list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'license', 'text_domain' ),
        'description'           => __( 'Post Type for licenses', 'text_domain' ),
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
    register_post_type( 'licenses', $args );

}
add_action( 'init', 'custom_post_type_licenses', 0 );


function catalog_file_customizer($wp_customize) {

    $wp_customize->add_section('catalog_section', array(
        'title'    => 'تنظیمات کاتالوگ',
        'priority' => 30,
    ));

    $wp_customize->add_setting('catalog_file', array(
        'default' => '',
        'sanitize_callback' => 'esc_url'
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'catalog_file',
            array(
                'label'    => 'آپلود فایل کاتالوگ',
                'section'  => 'catalog_section',
                'settings' => 'catalog_file'
            )
        )
    );
}
add_action('customize_register', 'catalog_file_customizer');



function meyar_search_all_post_types($query) {

    if ($query->is_search() && $query->is_main_query() && !is_admin()) {

        $query->set('post_type', array(
            'post',
            'course',
            'service',
            'personal_development',
            'article',
            'event',
            'news',
            'faq'
        ));

    }

}
add_action('pre_get_posts','meyar_search_all_post_types');

function meyar_empty_search_redirect() {

    if ( is_search() && get_search_query() == '' ) {

        wp_redirect( home_url('/search/') );
        exit;
    }
}
add_action('template_redirect', 'meyar_empty_search_redirect');

function highlight_search_results($text) {
    if (is_search()) {
        $query = get_search_query();
        if ($query && !is_admin()) {
            $text = preg_replace('/(' . preg_quote($query, '/') . ')/iu', '<span class="search-highlight">$1</span>', $text);
        }
    }
    return $text;
}
// اعمال فیلتر روی عنوان و محتوا/خلاصه
add_filter('the_title', 'highlight_search_results');
add_filter('the_excerpt', 'highlight_search_results');
