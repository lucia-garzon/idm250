<?php get_header(); ?>


<main class="post-container">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="wrapper">
        
        <article class="post">
            <h1 class="post-title"><?php echo get_the_title(); ?></h1>
            <p class="post-meta">Published on <?php the_date(); ?> in <?php echo get_the_term_list(
                    get_the_ID(), // 204
                    'project-categories', // taxonomy name
                    '', // before
                    ', ', // separator
                    '' // after
                ); ?></p>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>

            
            
            <div>
            <p><strong>Book Audience:</strong>
                <?php echo get_the_term_list(
                    get_the_ID(), // 204
                    'project-categories', // taxonomy name
                    '', // before
                    ', ', // separator
                    '' // after
                ); ?>
            </p>
            </div>

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