<?php
/**
 * 🧩 Project Card Component
 * -------------------------------------------------
 * ✅ **Purpose:**
 * - Reusable card to display project details with image, date, tags, and title.
 *
 * 🎯 **Displays:**
 * - Featured image with overlay effect
 * - Project date
 * - Project tags (custom taxonomy: 'project-tags')
 * - Project title linked to the project page
 */
?>

<article class="project-card">
    <a href="<?php the_permalink(); ?>" class="project-card__link">
    <?php if (has_post_thumbnail()) : ?>
    <div class="project-card__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'project-card__image']); ?>
    </div>
    <?php endif; ?>
        <div class="project-card__content">
        <h3 class="project-card__title"><?php the_title(); ?></h3>
        </div>
    </a>
</article>