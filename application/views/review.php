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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/review.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/transitions/transition.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
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
        

    <!--contact section start-->
    <div class="contact-section">
        <div class="contact-info">
          <div><i class="fas fa-map-marker-alt"></i>bandung, Jawa Barat</div>
          <div><i class="fas fa-envelope"></i>roadtoJapan@email.com</div>
          <div><i class="fas fa-phone"></i>+648 13920823</div>
          <div><i class="fas fa-clock"></i>senin - sabtu pukul 8:00 sampai 15:00 </div>
        </div>
        <div class="contact-form">
          <h2>Contact Us</h2>
          <form class="contact" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send">
          </form>
        </div>
      </div>
      <!--contact section end-->
    </div>
</body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".navbar")

        menuHamburger.addEventListener('click',()=>{navLinks.classList.toggle('mobile-menu')})
    </script>
</html>

