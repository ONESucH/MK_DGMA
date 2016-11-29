<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="ru"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="ru"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="ru"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="">
<!-- Header CSS (First Sections of Website: compress & paste after release from _header.css here) -->
<style></style>
<!-- Fonts Loader from fonts.css (HTML5 LocalStorage) -->
<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
<!-- Load CSS Compilled without JS -->
<noscript><link rel="stylesheet" href="style.css"></noscript>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="img/favicon/icon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/favicon/icon.ico">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/fiveIcon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/fiveIcon-114x114.png">
<?php wp_head(); ?>
</head>
<body>
<div class="header">
    <div class="logo">
        <div class="logo-left">
            <img src="<?php bloginfo('template_url'); ?>/img/header/logo.png" alt="">
            <div class="block-text">
                <h2>МАШИНОБУДІВНИЙ<br>КОЛЛЕДЖ</h2>
                <p>Донбаської<br>
                    Державної<br>
                    Машинобудівної<br>
                    Академії</p>
            </div>
        </div>
        <div class="center-block">
            <img src="<?php bloginfo('template_url'); ?>/img/background/background-1.png" alt="image">
        </div>
        <div class="right-block">
            <h2>ВСТУПАЙ<br>
                ДО КРАЩОГО<br>
                КОЛЛЕДЖУ!</h2>
        </div>
    </div>
    <ul class="showAndHideMenu">
        <li><a href="#">ПРО КОЛЕДЖ</a>
            <ul class="sub-menu">
                <li><a href="#">Первое меню</a></li>
                <li><a href="#">Второе меню</a></li>
                <li><a href="#">Третье меню</a></li>
            </ul>
        <li><a href="#">СТУДЕНТУ</a>
            <ul class="sub-menu">
                <li><a href="#">Первое меню</a></li>
            </ul></li>
        <li><a href="#">АБІТУРІЄНТУ</a>
            <ul class="sub-menu">
                <li><a href="#">Первое меню</a></li>
                <li><a href="#">Второе меню</a></li>
                <li><a href="#">Третье меню</a></li>
            </ul>
        </li>
        <li><a href="#">СПЕЦІАЛЬНОСТІ</a>
            <ul class="sub-menu">
                <li><a href="#">Первое меню</a></li>
                <li><a href="#">Второе меню</a></li>
            </ul></li>
        <li><a href="#">НАВЧАЛЬНИЙ ПРОЦЕС</a>
            <ul class="sub-menu">
                <li><a href="#">Первое меню</a></li>
                <li><a href="#">Второе меню</a></li>
            </ul></li>
        <li><a href="#">ФОРУМ</a></li>
    </ul>
    <button id="buttonTop" onclick="howAndHideMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
</div>