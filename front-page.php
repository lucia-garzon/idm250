
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" type="image/svg" href="images/Lilypad-logo.svg">
</head>
<body>
    <header>
        <!-- navigation -->
        <a class="logo" href="index.html">
            <img alt="logo" src="images/sws-logo.svg" class="logo">
        </a>
        <nav class="nav-wrapper">
            <ul class="nav-menu">
                <li>
                    <a class="nav-link">About</a>
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
        <button class="btn_menu burger"><img src="images/Lilypad-burger.svg" class="burger" alt="Hamburger menu"></button>
    </header>


    This is <b>the front-page<b>.

    <footer>
        <div class="footer-content">
        <div class="footer-info">
            <!-- <div class="footer-logo"> 
                <img class="footer-img" src="images/hand-logo.svg" alt="Hand with heart above">
            </div> -->
            <h3 class="footer-header">Stay in the loop with all things Sarah!</h3>
            <p class="footer-text">An occasional newsletter with project announcements, reminders on public appearances, sneak peeks and more!</p>
        </div>
        
        <div>
            <form class="email-form" action="google.com" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required="">
                <input type="submit" id="mc-embedded-subscribe" class="btn btn--solid btn--black" value="sign me up">
            </form>
        </div>

        </div>
    </footer>
</body>
</html>