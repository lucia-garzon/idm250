<header class="header">
    <div class="header__logo">
        <?php if (has_custom_logo()) : ?>
        <div class="site-logo">
        <?php the_custom_logo(); ?>

        
        </div>
        <?php else: ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sws-logo.svg" alt="logo">
        </a>
        <?php endif; ?>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="menu-toggle js-menu-toggle" aria-label="Toggle Menu">☰</button>
    <nav class="nav">
        <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'menu_class' => 'menu',
                'container' => false
            ]);
        ?>
    </nav>
</header>