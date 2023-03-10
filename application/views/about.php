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
    background-image: linear-gradient(rgba(0,0,0,0.3),transparent),url('<?php echo base_url("assets/images/background1.png");?>');
    }
    .row{
    box-sizing: border-box;

    position: absolute;
    width: 850px;
    height: 388px;
    left: 494px;
    top: 230px; 

    background: #000000;
    opacity: 0.5;
    border: 1px solid #FFFFFF;
    border-radius: 50px;
    }
    
    .about_me{
    box-sizing: border-box;

    position: absolute;
    top: 250px;
    width: 237px;
    height: 388px;

    opacity: 0.95;
    border: 2px solid #484747;
    border-radius: 50px;
    
    }
    .row , .about_me{
        z-index: 1;
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
        
        <img src="assets/images/aboutme.png" class="about_me">
        <ul class="row" >
            <a>Tokyo</a>
            <p>Tokyo adalah ibu kota dan kota terbesar di Jepang. Terletak di pulau Honshu di bagian 
            tenggara negara tersebut, Tokyo merupakan pusat ekonomi, politik, dan budaya Jepang. 
            Kota ini terkenal dengan budayanya yang unik dan menarik, serta kemajuan teknologinya 
            yang tinggi. Tokyo juga memiliki beberapa tempat wisata populer seperti Tokyo Skytree, 
            Senso-ji Temple, dan Tokyo Disneyland. Selain itu, kota ini juga merupakan tempat yang 
            tepat untuk menikmati makanan Jepang yang lezat, seperti sushi, ramen, dan tempura.</p>
        </ul>

    </div>
</body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".navbar")

        menuHamburger.addEventListener('click',()=>{navLinks.classList.toggle('mobile-menu')})
    </script>
</html>