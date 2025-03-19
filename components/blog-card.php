<?php
/**
 * 🧩 Blog Card Component
 * -------------------------------------------------
 * ✅ **Purpose:**
 * - This reusable component displays a single blog post preview (card style).
 * - Commonly used in blog listings, archives, home pages, and related post sections.
 *
 * 🎯 **What It Displays:**
 * - Featured image (if available)
 * - Post publication date
 * - First category (if assigned)
 * - Post title linked to the full post
 * - Shortened excerpt (20 words)
 *
 */
?>
<article class="blog-card">
    <a href="<?php the_permalink(); ?>" class="blog-card__link">
    <?php if (has_post_thumbnail()) : ?>
    <div class="blog-card__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'blog-card__image']); ?>
    </div>
    <?php endif; ?>

    <div class="blog-card__content">
        
    


        <h3 class="blog-card__title"><?php the_title(); ?></h3>
        
    </div>
    </a>
</article>