
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
    <link rel="shortcut icon" type="image/svg" href="images/Lilypad-logo.svg">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('components/main-header'); ?>
