<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- CSS stylesheets -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        />
        <link rel="stylesheet" href="CSS/reset.css" />
        <link rel="stylesheet" href="CSS/template.css" />
        <!-- Javascript Libraries -->
        <!-- font-family: "Noto Sans TC"; -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <!-- metadata -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title/Icon -->
        <title>Fond Momento</title>
        <link rel="icon" href="images/icon.png" type="image/x-icon" />
    </head>
    <body>
        <header>
            <div id="banner_top">
                <div id="banner_logo_box">
                    <a href="index.php"
                        ><img
                            id="banner_logo"
                            src="images/logo.png"
                            alt="LOGO: Fond Momento"
                    /></a>
                </div>
                <div id="banner_slogan_box">
                    <img
                        id="banner_slogan"
                        src="images/header_slogan.png"
                        alt="Slogan: Love is not only a sentiment, but also an art"
                    />
                </div>
            </div>
        </header>
        <nav>
            <div id="nav_bar">
                <div id="nav_logo">
                    <a href="index.php"
                        ><img src="images/logo2.png" alt="Logo"
                    /></a>
                </div>
                <ul class="horizontalNav">
                    <li class="nav_items">
                        <a href="訂製拼圖.php">訂製拼圖</a>
                    </li>
                    <li class="nav_items">
                        <a href="裱框服務.php">產品介紹</a>
                    </li>
                    <li class="nav_items">
                        <a href="拼圖遊戲.php">拼圖遊戲</a>
                    </li>
                </ul>
            </div>
            <div class="member_cart horizontalNav">
                <a href="會員.php"
                    ><img
                        class="cart_icons"
                        src="images/icons/1x/member.png"
                        alt="Member Login"
                /></a>
                <a href="購物車.php"
                    ><img
                        class="cart_icons"
                        src="images/icons/1x/cart.png"
                        alt="Shopping Cart"
                /></a>
                <a href="index.php"
                    ><img
                        class="cart_icons"
                        src="images/icons/1x/home.png"
                        alt="Home Page"
                        style="padding-left: 0.20em"
                        
                /></a>
            </div>
            <div class="sideMenu">
                <ul>
                    <li></li>
                    <li><a href="訂製拼圖.php">訂製拼圖</a></li>
                    <li><a href="裱框服務.php">產品介紹</a></li>
                    <li><a href="拼圖遊戲.php">拼圖遊戲</a></li>
                    <li class="member_cart">
                        <a href="會員.php"
                            ><img
                                class="cart_icons"
                                src="images/icons/1x/member.png"
                                alt="Member Login"
                        /></a>
                        <a href="購物車.php"
                            ><img
                                class="cart_icons"
                                src="images/icons/1x/cart.png"
                                alt="Shopping Cart"
                        /></a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>

        </main>
        <footer>
            <div class="footerLeft">
                <a href="對對碰.php"><img src="Game/g52.jpg" alt="對對碰" /></a>
                <span>僅供教學練習</span>
            </div>

            <ul id="footer_details">
                <li class="footer_items">
                    <a href="關於我們.php">關於我們</a>
                </li>
                <li class="footer_lines">|</li>
                <li class="footer_items">
                    <a href="index.php#contactSection">聯絡我們</a>
                </li>
            </ul>
        </footer>
        <!-- Javascript Scripts -->

        <script src="js/libraries/jquery-3.6.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/template.js"></script>
    </body>
</html>