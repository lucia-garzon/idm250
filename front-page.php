<?php get_header();?>

<main>
<div class="wrapper">
    <div class="featured-image">
    <?php 
    $hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero-img.jpg'); 
    if (!empty($hero_image)) {
        echo '<img src="' . esc_url($hero_image) . '" alt="Hero Image">';
    }
    ?>
    </div>
    <?php get_template_part('components/latest-projects'); ?>
    <?php get_template_part('components/latest-posts'); ?>
</div>
</main>
<?php get_footer();?>