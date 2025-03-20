<?php

function theme_styles_and_scripts() {
     // normalize
    wp_enqueue_style(
        'idm-normalize', // Handle for the stylesheet. Has to be unique
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', // URL for the stylesheet
        [], // No dependencies
        '8.0.1' // Version of Normalize.css
    );

    // inject css
    wp_enqueue_style(
        'idm-main', // Handle for the stylesheet
        get_template_directory_uri() . '/assets/css/main.css', // Path to the stylesheet
        [], // No dependencies
        filemtime(get_template_directory() . '/assets/css/main.css') // Cache-busting by file modification time
    );

    // inject js
    wp_enqueue_script(
        'idm-main-script', // Handle for the script
        get_template_directory_uri() . '/assets/js/main.js', // Path to the script
        [], // No dependencies
        filemtime(get_template_directory() . '/assets/js/main.js'), // Cache-busting by file modification time
        true // Load in the footer
    );


}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');


function theme_setup(){
    //enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary-menu'=>'Primary Menu',
        'footer-menu'=>'Footer Menu',
    ]);
}

add_action('after_setup_theme','theme_setup');



/**
 * Widget Areas & Sidebars
 *
 * This file registers the widget areas (sidebars, footer widgets, etc.) for the theme.
 * Widgets allow users to add small content blocks in specific sections of the theme.
 */

// Register the main sidebar
function add_widgets()
{
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
        'description' => 'Widgets in this area will be shown in the main sidebar.',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'add_widgets');

// Register additional sidebars
function register_custom_sidebar()
{
    register_sidebar([
        'name' => 'Primary Sidebar',
        'id' => 'primary-sidebar',
        'description' => 'Widgets in this area will be shown in the Primary Sidebar.',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Footer Widget',
        'id' => 'footer-widget',
        'description' => 'Widgets in this area will be shown in the Footer.',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-widget-title">',
        'after_title' => '</h4>',
    ]);
}



/**
 * Register custom post types for the theme.
 *
 * This function registers a custom post type "Projects" for managing project-based content.
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 *
 * @return void
 */
function register_custom_post_types()
{
    $post_type_name = 'projects';

    $args = [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects found',
            'not_found_in_trash' => 'No Projects found in Trash',
        ],
        'public' => true,             // Makes it accessible on the front and back end
        'has_archive' => true,             // Enables an archive page
        'rewrite' => ['slug' => 'projects'], // URL slug
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // Enabled post features
        'menu_position' => 5,                // Position in WP admin menu
        'menu_icon' => 'dashicons-portfolio', // Optional: Custom icon for the post type
        'show_in_rest' => true,             // Enables Gutenberg support
        'taxonomies'  => ['project-categories'], // Uncomment if you have a custom taxonomy
    ];

    register_post_type($post_type_name, $args);
}

add_action('init', 'register_custom_post_types');

// Header customization!!!
function mytheme_customize_register($wp_customize) {
    // Add a section for the hero header
    $wp_customize->add_section('hero_section', [
        'title'    => __('Hero Section', 'mytheme'),
        'priority' => 30,
    ]);

    // Add setting for the hero title
    $wp_customize->add_setting('hero_title', [
        'default'   => 'SWS',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Add control for the hero title
    $wp_customize->add_control('hero_title_control', [
        'label'   => __('Hero Title', 'mytheme'),
        'section' => 'hero_section',
        'settings' => 'hero_title',
        'type'    => 'text',
    ]);

    // Add setting for the hero subtitle
    $wp_customize->add_setting('hero_subtitle', [
        'default'   => 'SWS writes and draws award-winning comics.',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Add control for the hero subtitle
    $wp_customize->add_control('hero_subtitle_control', [
        'label'   => __('Hero Subtitle', 'mytheme'),
        'section' => 'hero_section',
        'settings' => 'hero_subtitle',
        'type'    => 'text',
    ]);

    // Add Hero Image Setting
    $wp_customize->add_setting('hero_image', [
        'default'   => get_template_directory_uri() . '/assets/images/hero-img.jpg', // Default image
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control', [
        'label'    => __('Hero Image', 'mytheme'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    ]));
}
add_action('customize_register', 'mytheme_customize_register');

/**
 * 5. Register Custom Taxonomies
 * ------------------------------
 * Defines custom taxonomies (categories/tags for CPTs).
 */
require get_template_directory() . '/includes/taxonomies.php';