
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    wp_title('|', true, 'right');
    bloginfo('name');
    ?></title>

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/sws-logo.svg" type="image/svg+xml">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('components/main-header'); ?>

    <!-- <?php
        wp_nav_menu ([
            'theme_location' => 'primary-menu',
        ]);
    ?> -->