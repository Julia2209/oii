<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php $pagetitle?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css"> 
    <link rel="stylesheet" href="css/screen.css">   
</head>

<body>
    <div class="container">
        <div class="navigation">
        	<div class="navigation-bar-list">
	        	<ul class="nav-bar">
	        		<li class="enter"><a href="#" title="enter">Войти</a></li>
	        		<li class="registration"><a href="registration.html" title="registration">Зарегистрироваться</a></li>
	        	</ul>
	        </div>
        </div>

	   <header class="content-header">
            <div class="wrapper">
                <img src="img/logo.png" alt="logo" title="logo">

                <div class="list-menu">
                    <ul class="navbar">
                        <li><a class="search" href="search.html"><img src="img/search1.png" alt="search1" title="search"></a></li>
                        <li><a href="contacts.html" title="contacts">Контакты</a></li>
                        <li><a href="expositions.html" title="expositions">Выставки</a></li>
                        <li><a href="shop.html" title="shop">Магазин</a></li>
                        <li class="current"><a href="index.html" title="about us">О нас</a></li>
                    </ul>
                </div>
            </div>
        </header>
        
        <div class="content">
            <? include $content ?>
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
                        <li><a href="instagram.com"><img src="img/icon_instagram.png" alt="icon_instagram"></a></li>
                        <li><a href="instagram.com"><img src="img/icon_facebook.png" alt="icon_facebook"></a></li>
                        <li><a href="instagram.com"><img src="img/icon_twitter.png" alt="icon_twitter"></a></li>
                        <li><a href="instagram.com"><img src="img/icon_vk.png" alt="icon_vk"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    
</body>

</html>
