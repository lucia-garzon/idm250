<div class="hero-home">
    <h1 class="page-header">
        <?php echo get_the_title(); ?>
    </h1>
    <div class="featured-image">
    <?php 
    $hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero-img.jpg'); 
    if (!empty($hero_image)) {
        echo '<img src="' . esc_url($hero_image) . '" alt="Hero Image">';
    }
    ?>
    </div>
    <div><?php echo get_the_excerpt(); ?></div>
</div>