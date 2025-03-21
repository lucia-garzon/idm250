<?php get_header(); ?>
<div class="wrapper">
    <h1>
    <?php echo get_the_title(); ?> 
    </h1>

    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>

    <?php echo get_the_content(); ?>
</div>

<?php get_footer(); ?>