<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tubes WEBPRO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/historic_sites.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/transitions/transition.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style >
    .container{
    background-image: linear-gradient(rgba(0,0,0,0.3),transparent),url('<?php echo base_url("assets/images/background1.png");?>');
    }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="<?php echo base_url(); ?>"><img src='assets/images/logo.png' class="logo"></a>
            <ul class="navbar">
                <li><a href="<?php echo base_url('/About');?>">About</a></li>
                <li><a href="<?php echo base_url('/Tourist_attraction');?>">Tourist Attraction</a></li>
                <li><a href="<?php echo base_url('/Culinary'); ?>">Culinary</a></li>
                <li><a href="<?php echo base_url('/Historic_sites') ?>">Historic Sites</a></li>
                <li><a href="<?php echo base_url('/Review'); ?>">Review</a></li>
            </ul>
            <a href="https://marketplace.rakuten.net/"><img src="assets/images/cart.png" class="cart-icon"></a>
            <img src="assets/images/menu-btn.png" alt="menu hamburger" class="menu-hamburger">

        </nav>
        <div class="slider">
            <div class="slide">
                <img src="assets/images/History_site/1.jpg" alt="">
                <div class="info">
                    <h2>Winter Mountains</h2>
                    <p>Yushima Tenmangu is a Shinto shrine commonly called Yushima Tenjin. This shrine was originally established in 458 A.D. in order to worship Ameno-tajikaraono-mikoto, one of deities appears in the Japanese myths. Later,
                    in February 1355, the spirit of Sugawara Michizane, a historical figure, was also enshrined to venerate his extraordinary virtue as a scholar.
                    In October 1478, Oota Dokan(1432-86), a war lord in Kanto region, made the shrine building anew. Since then, many scholars and men of letters including Hayashi Doshun and Arai Hakuseki Confucian scholars in Edo period, have worshiped this shrine.</p>
                </div>
            </div>  
            <div class="slide">
                <img src="assets/images/History_site/2.jpg" alt="">
                <div class="info">
                    <h2>Meiji Shrine </h2>
                    <p>To understand the basics of the history of Meiji Jingu Shrine, the first thing you need to know is the strong relation with the Imperial Family during the Meiji period. The shrine was built to commemorate Emperor Meiji and his wife, 
                    Empress Shoken. Emperor Meiji was the first emperor of modern Japan and after he (1912) and his wife (1914) passed away, the Japanese government officially started the construction of Meiji Jingu Shrine to commemorate their deified spirits. 
                    The construction took about five years to complete the entire shrine before it was formally dedicated in 1920.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/images/History_site/3.jpg" alt="">
                <div class="info">
                    <h2>Yasukuni Shrine</h2>
                    <p>The origins of Yasukuni Jinja lie in a shrine called Shokonsha, which was established at Kudan in Tokyo in the second year of the Meiji era (1869) by the will of the Emperor Meiji. In 1879, it was renamed Yasukuni Jinja.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/images/History_site/4.jpg" alt="">
                <div class="info">
                    <h2>Shrine of wisdom</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/images/History_site/5.jpg" alt="">
                <div class="info">
                    <h2>Shrine of purity</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="navigation">
                <i class="fas fa-chevron-left prev-btn"></i>
                <i class="fas fa-chevron-right next-btn"></i>
            </div>
            <div class="navigation-visibility">
                <div class="slide-icon"></div>
                <div class="slide-icon"></div>
                <div class="slide-icon"></div>
                <div class="slide-icon"></div>
                <div class="slide-icon"></div>
            </div>
        </div>
        
    </div>
    <script src="assets/js/historic_sites.js"></script>
</body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".navbar")

        menuHamburger.addEventListener('click',()=>{navLinks.classList.toggle('mobile-menu')})
    </script>
</html>

