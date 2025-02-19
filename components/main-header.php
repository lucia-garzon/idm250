<!-- <header>
        
        <nav class="nav-wrapper">
        
            <ul class="nav-menu">
                <li class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sws-logo.svg" alt="logo">
                </li>
                <li>
                    <a class="nav-link" href="page.php">About</a>
                </li>
                <li>
                    <a class="nav-link">Books</a>
                </li>
                <li>
                    <a class="nav-link">Art</a>
                </li>
                <li>
                    <a class="nav-link">Contact</a>
                </li>
            </ul>
            <button class="btn_menu burger-x-button"><img src="images/Burger-x.svg" alt="Burger x out" class="burger-x"></button>
        </nav> 
        <button class="btn_menu burger"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/burger-250.svg" class="burger" alt="Hamburger menu"></button>
        
    </header> -->

<header class="header">
    <div class="header__logo">
        <?php if (has_custom_logo()) : ?>
        <div class="site-logo">
        <?php the_custom_logo(); ?>

        
        </div>
        <?php else: ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
        <?php bloginfo('name'); ?>
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