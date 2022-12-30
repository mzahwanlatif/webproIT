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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tubes.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/transitions/transition.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style >
    .container{
    background-image: linear-gradient(rgba(0,0,0,0.3),transparent),url('<?php echo base_url("assets/images/background.png");?>');
    }
    .text-box h1{
        background: url('<?php echo base_url(assets/images/back.png);?>');  
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
            <a href="https://marketplace.rakuten.net/"><img src='assets/images/cart.png' class="cart-icon"></a>
            <img src='assets/images/menu-btn.png' alt="menu hamburger" class="menu-hamburger">
            
        </nav>
        <div class="text-box">
            <p>街</p>
            <h1>TOKYO</h1>
            <h3>the other side of the metropolis</h3>
            <div class="row">
                <a href="<?php echo base_url('/About');?>">Explore</a>
                <a href="<?php echo base_url('/Login'); ?>">Buy Tickets <span>&#x27F6;</span></a>
                <span>Support us by always <br> Praying for goodness.</span>
            </div>
            
        </div>

        <div class="social-icons">
            <a href="https://telegram.com"><img src='assets/images/telegram.png' ></a>
            <a href="https://instagram.com"><img src='assets/images/instagram.png' ></a>
        </div>
    </div>
</body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".navbar")

        menuHamburger.addEventListener('click',()=>{navLinks.classList.toggle('mobile-menu')})
    </script>
</html>