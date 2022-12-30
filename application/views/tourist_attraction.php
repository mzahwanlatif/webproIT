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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tourist_attraction.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/transitions/transition.css'); ?>">
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
        <!-- product slider -->
        <section class="product">
            <h2 class="product-category">Tourist Attraction</h2>
            <button class="pre-btn"><img src="assets/images/slider/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="assets/images/slider/arrow.png" alt=""></button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/slider/senso.jpg" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Senso-ji </h2>
                        <p class="product-short-description">Historic Temple to the goddess of mercy</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/slider/tokyo tower.jpg" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Tokyo Tower</h2>
                        <p class="product-short-description">Well-known tower with observation areas</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/slider/gyoen.jpg" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Shinjuku Gyoen National Garden</h2>
                        <p class="product-short-description">Sizeble park with gardens & a greenhouse</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/slider/imperial.jpg" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Imperial Palace</h2>
                        <p class="product-short-description">Emperor’s residence with gardens & tours</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/slider/skytree.jpg" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Tokyo Skytree</h2>
                        <p class="product-short-description">Huge tower with an observation deck</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/slider/meiji.jpg" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Meiji Jingu</h2>
                        <p class="product-short-description">Famed Shinto shrine with a garden</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="assets/js/tourist_attraction.js"></script>
</body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".navbar")

        menuHamburger.addEventListener('click',()=>{navLinks.classList.toggle('mobile-menu')})
    </script>
</html>

