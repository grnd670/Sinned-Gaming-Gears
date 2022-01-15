<?php
    session_start();

      /*  if(!isset($_SESSION['username'])){
        header("Location: Login.php"); 
        
 } */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Product selection file/style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Sinned Gaming Gears</title>
</head>
<body>
      <!-- Navigation Bar-->
      <nav class="navbar">
        <a href="Home.php" class="brand-title">
            Sinned
        </a>

        <div class="navbar-links">
            <ul>
                <li><a href="About.html" class="nav-aboutus">About Us</a></li>
                <li><a href="Login.php"class="nav-signup">Sign Up</a></li>
                <li><a href="Login.php"class="nav-login">Login</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
                <li><a href="Product Selection.php"><i class="fas fa-shopping-cart"></a></i></li>
                <li><a href="User.php"><i class="fas fa-user"></i></a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Navigation Bar End-->
    <div class="main-container">

        <!-- Mouse -->
        <div class="product-container">
            <img class="shop-item-image"src="Product selection file/image/mouse/xm1r.png">
            <h1 class="shop-item-title">Endgame Gear XM1r</h1>
            <div class="shop-item-details">
            <p>Endgame Gear</p>
            <p>Mouse</p>
            <p class="shop-item-price">₱ 3100</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/mouse/logi.png">
            <h1 class="shop-item-title">Logitech G Pro X Superlight</h1>
            <div class="shop-item-details">
            <p>Logitech</p>
            <p>Mouse</p>
            <p class="shop-item-price">₱ 6499</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/mouse/pulsar.png">
            <h1 class="shop-item-title">Pulsar Xlite</h1>
            <div class="shop-item-details">
            <p>Pulsar</p>
            <p>Mouse</p>
            <p class="shop-item-price">₱ 2400</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>

        <!-- Keyboard -->
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/keyboard/gmmk.png">
            <h1 class="shop-item-title">Glorious GMMK PRO</h1>
            <div class="shop-item-details">
            <p>Glorious</p>
            <p>Keyboard</p>
            <p class="shop-item-price">₱ 9800</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/keyboard/razer.jpeg">
            <h1 class="shop-item-title">Razer Hunstman Mini</h1>
            <div class="shop-item-details">
            <p>Razer</p>
            <p>Keyboard</p>
            <p class="shop-item-price">₱ 5300</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/keyboard/pulsar.png">
            <h1 class="shop-item-title">Pulsar PCMK TKL Keyboard</h1>
            <div class="shop-item-details">
            <p>Pulsar</p>
            <p>Keyboard</p>
            <p class="shop-item-price">₱ 3490</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>

        <!--Headset-->
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/headset/EPOS headset.png">
            <h1 class="shop-item-title">EPOS H3 Headset</h1>
            <div class="shop-item-details">
            <p>EPOS</p>
            <p>Headset</p>
            <p class="shop-item-price">₱ 3990</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/headset/Logitech headset.png">
            <h1 class="shop-item-title" >Logitech G733 Headset</h1>
            <div class="shop-item-details">
            <p>Logitech</p>
            <p>Headset</p>
            <p class="shop-item-price">₱ 8000</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
        <div class="product-container">
            <img class="shop-item-image" src="Product selection file/image/headset/Razer headset.png">
            <h1 class="shop-item-title">Razer Barracuda X</h1>
            <div class="shop-item-details">
            <p>Razer</p>
            <p>Headset</p>
            <p class="shop-item-price">₱ 4950</p>
            <div class="btn-container">
                <a href="Payment.php" class="buy-now">Buy Now</a>
            <button class="add-to-cart shop-item-button" href="#">Add to Cart</button>
            <a href="#scroll" class="jump-to-cart">Jump to Cart</a>
            </div>
            </div>
        </div>
    </div>


    <section class="container content-section" id="scroll">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
            
            </div>
        <div class="cart-total">
            <strong class="cart-total-title">Sub Total<span class="cart-total-price"> ₱ 0</span></strong>
            <span class="shipping">Shipping Fee:<span> ₱60</span></span>
            <span class="shipping">Total:<span class="shipping-total">₱ 0</span></span>
        </div>
        <a id="btn-purchase"class="btn btn-purchase" type="button" href="#">Purchase</a>
    </section>

    
            <!--footer-->
            <!--
<div class="footer">
    <div class="cs-about">
        <a href="../Contact Us/contactUs.html">Customer Support</a>
        <a href="../About Us/aboutUs.html">About Us</a>
        <a href="../FAQ/style.css">FAQs</a>
    </div>
    <h1>Copyright 2021, Sinned Gaming Peripherals</h1>
</div> -->

<script src="Product selection file/main.js"></script>
<!--<script src="main.js"></script> -->
</body>
</html>