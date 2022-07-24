<header class="header">
        <div class="container header_block">
            <a class="logo header_logo">
                Сайт
            </a>
            <nav class="navigation header_navigation">
            <?php
            session_start();
           include 'nav.php';
            nav($item);
            include 'db.php';
            ?>
            </nav>
            <?php if( isset($_SESSION['session_username']) && !empty($_SESSION['session_username']) )
            {
                ?>
                <a href="logout.php">Logout</a>
                <?php }else{ ?>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                    <?php } ?>
         </div>
    </header>