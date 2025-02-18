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

    <nav>
    <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
    <label class="m-menu__toggle" for="menu">
        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    </label>
    <label class="m-menu__overlay" for="menu"></label>

    <div class="m-menu">
        <div class="m-menu__header">
        <label class="m-menu__toggle" for="menu">
            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </label>
        <span>MENU</span>
    </div>
        <ul>
        <li><label>About</label></li>
        <li>
            <label class="a-label__chevron" for="item-2">Books</label>
            <input type="checkbox" id="item-2" name="item-2" class="m-menu__checkbox">
            <div class="m-menu">
            <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-2">
                <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                </label>
                <span>Item 2</span>
            </div>
            <ul>
                <li><label>Item 2.1</label></li>
                <li><label>Item 2.2</label></li>
                <li>
                <label class="a-label__chevron" for="item-2-3">Item 2.3</label>
                <input type="checkbox" id="item-2-3" name="item-2" class="m-menu__checkbox">
                <div class="m-menu">
                    <div class="m-menu__header">
                    <label class="m-menu__toggle" for="item-2-3">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                        <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                    </label>
                    <span>Item 2.3 </span>
                </div>
                    <ul>
                    <li><label>Item 2.3.1</label></li>
                    <li><label>Item 2.3.2</label></li>
                    <li><label>Item 2.3.3</label></li>
                    <li><label>Item 2.3.4</label></li>
                    <li><label>Item 2.3.5</label></li>
                    </ul>                
                </li>
                <li><label>Item 2.4</label></li>
                <li><label>Item 2.5</label></li>
                <li><label>Item 2.6</label></li>
                <li><label>Item 2.7</label></li>
                <li><label>Item 2.8</label></li>
                <li><label>Item 2.9</label></li>
    </div>
        </li>
        <li><label>Art</label></li>
        <li><label>Contact</label></li>
        </ul>  
        </div>
</nav>