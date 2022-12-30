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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/culinary.css'); ?>">
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
        <h1 class="judul">Culinary</h1>
        <div class="gallery" >
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\katsu.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Katsu</h2>
                        <p>Katsu adalah makanan Jepang yang terdiri dari daging atau sayuran yang dipotong tipis dan 
                        dipanggang atau digoreng. Daging yang sering digunakan adalah daging sapi, ayam, atau ikan, 
                        sementara sayuran yang sering digunakan adalah kol, terong, atau jagung. Katsu sering disajikan 
                        dengan saus tonkatsu, yang terdiri dari kaldu sapi, gula, sake, dan kecap asin.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\monjayaki.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Monjayaki</h2>
                        <p>Monjayaki adalah makanan Jepang yang terdiri dari campuran tepung dan air yang dicampur dengan 
                            berbagai macam bahan seperti daging, sayuran, atau seafood. Monjayaki sering disajikan di atas 
                            teppan (piring panas) di meja makan dan dimasak di depan pelanggan. Proses memasak monjayaki 
                            sering dilakukan secara bersama-sama dengan teman atau keluarga, sehingga monjayaki juga sering 
                            disebut sebagai "makanan bersosialisasi".</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\ramen.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Ramen</h2>
                        <p>Ramen adalah makanan Jepang yang terdiri dari mi yang dimasak dalam kaldu daging atau seafood dan 
                            disajikan dengan berbagai macam topping seperti daging, telur, sayuran, dan bahan lainnya. Ramen 
                            biasanya disajikan dengan kuah yang terdiri dari kaldu daging, seafood, atau miso (paste kacang-kacangan). 
                            Mi ramen terbuat dari tepung yang difermentasikan dan diproses, sehingga memiliki tekstur yang kenyal 
                            dan lembut.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\salad.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Salad</h2>
                        <p>Salad adalah makanan yang terdiri dari campuran sayuran segar atau buah-buahan yang dicampur dengan 
                            bahan lain seperti daging, ikan, atau telur. Salad biasanya disajikan dengan saus atau dressing yang
                             dioleskan di atasnya. Salad dapat disajikan sebagai makanan utama atau sebagai makanan pendamping. </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\sushi.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Sushi</h2>
                        <p>Sushi adalah makanan Jepang yang terdiri dari nasi yang dicampur dengan vinegar dan dikemas bersama 
                            dengan bahan lain seperti daging, seafood, atau sayuran. Sushi sering disajikan dalam bentuk 
                            potongan kecil yang diberi nama "gunkanmaki" atau "nigiri", di mana nasi diberi topping berupa 
                            daging, seafood, atau sayuran dan disusun di atasnya.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\takoyaki.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Takoyaki</h2>
                        <p>Takoyaki adalah makanan Jepang yang terdiri dari bola-bola kecil yang terbuat dari tepung dan diisi 
                            dengan potongan-potongan udang atau ikan gurita. Takoyaki sering disajikan dengan saus takoyaki, 
                            mayones, dan aonori (rumput laut yang dikeringkan). Takoyaki juga sering disajikan dengan kecap asin 
                            atau saus Worcestershire yang dioleskan di atasnya.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\udon.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Udon</h2>
                        <p>Udon adalah makanan Jepang yang terdiri dari mi yang terbuat dari tepung gandum yang diproses dan 
                            dicetak dalam bentuk yang tebal dan lebar. Udon sering disajikan dalam kuah yang terdiri dari 
                            kaldu daging atau seafood dan disajikan dengan berbagai macam topping seperti telur, sayuran, 
                            atau daging. Udon juga dapat disajikan dengan saus soy atau saus Worcestershire yang dioleskan di 
                            atasnya.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="assets\images\culinary\katsu.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <h2>Katsu</h2>
                        <p>Katsu adalah makanan Jepang yang terdiri dari daging atau sayuran yang dipotong tipis dan 
                        dipanggang atau digoreng. Daging yang sering digunakan adalah daging sapi, ayam, atau ikan, 
                        sementara sayuran yang sering digunakan adalah kol, terong, atau jagung. Katsu sering disajikan 
                        dengan saus tonkatsu, yang terdiri dari kaldu sapi, gula, sake, dan kecap asin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".navbar")

        menuHamburger.addEventListener('click',()=>{navLinks.classList.toggle('mobile-menu')})
    </script>
</html>

