<?php get_header(); ?>


<main class="post-container">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="wrapper">
    <section class="single-row">
        <aside>
            <ul>
            <?php dynamic_sidebar('main-sidebar');?>
        </ul>
        </aside>
        </section>

        <article class="post">
            <h1 class="post-title"><?php echo get_the_title(); ?></h1>
            <p class="post-meta">Published on <?php the_date(); ?> in <?php the_category(', '); ?></p>
            

            <!-- added featured image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        
    </div>
            <!-- <div class="post-tags">
                <?php the_tags('Tags: ', ', '); ?>
            </div> -->
        </article>
    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>