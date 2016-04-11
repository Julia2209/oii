<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php $pagetitle?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/screen.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!--<script type="text/javascript" src="js/slider.js"></script>-->
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/login_logout.js"></script>
    <script type="text/javascript" src="js/registration.js"></script>
    <script type="text/javascript" src="js/pictures.js"></script>
    <script type="text/javascript"><?php include $pagescript?></script>
    
</head>

<body onload="digitalWatch()">
    <div class="container">
        <div class="navigation">
            <div class="navigation-bar-list">
                <ul class="nav-bar">
                    <?php
                    if (isset($_COOKIE['isLogged'])) {
                        $userName = $_COOKIE['userName'];
                        echo "<li>Добро пожаловать, $userName!</li>";
                        echo "<li><a href='#' id='logout'>Выйти</a></li>";
                    } else{
                        echo "<li class='enter'><a href='login.php' title='enter'>Войти</a></li>";
                        echo "<li class='registration'><a href='registration.php' title='registration'>Зарегистрироваться</a></li>";
                    }

                    ?>
                </ul>
            </div>
        </div>

        <header class="content-header">
            <div class="wrapper">
                <img src="img/logo.png" alt="logo" title="logo">

                <div class="list-menu">
                    <ul class="navbar">
                        <li><a class="search" href="#">
                            <img src="img/search1.png" alt="search1" title="search"></a></li>
                        <li><a href="contacts.php" title="contacts">Контакты</a></li>
                        <li><a href="events.php" title="expositions">Выставки</a></li>
                        <li><a href="shop.php" title="shop">Магазин</a></li>
                        <li  class="current"><a href="about-us.php" id="hover-block" title="about us" onmouseover=hiddenBlock() onmouseout=hiddenBlock()>О нас</a></li>
                    </ul>
                    <div id="hidden_block">Сайт был создан украинскими студентками и просто хорошими людьми Юлией Харченко и Анной Николевой в апреле 2016 года как основной проект Интернет технологий в сфере технологий и культуры.</div>
                    <div class="clock-block" ><p id="clock"></p></div>
                </div>
            </div>
        </header>

        <div class="content">
            <?php include $content ?>
        </div>


        <div class="logo_footer">
            <img src="img/logo_footer.png" alt="logo_footer">
        </div>


        <div class="footer">
            <div class="footer-container">
                <div class="copyright">
                    <p>All rights reserved &copy; by Julia Kharchenko and Ann Nikolaeva INSPIRATION .2016</p>
                </div>
                <div class="social_networks">
                    <ul class="footer-links-list">
                        <li><a href="instagram.com">
                            <img src="img/icon_instagram.png" alt="icon_instagram"></a></li>
                        <li><a href="#">
                            <img src="img/icon_facebook.png" alt="icon_facebook"></a></li>
                        <li><a href="#">
                            <img src="img/icon_twitter.png" alt="icon_twitter"></a></li>
                        <li><a href="#">
                            <img src="img/icon_vk.png" alt="icon_vk"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
