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