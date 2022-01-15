<?php
    session_start();

       /* if(!isset($_SESSION['username'])){
        header("Location: Login.php"); 
 } */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home file/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Sinned Gaming Peripheral</title>
</head>
<body>
    <!-- Navigation Bar-->
    <nav class="navbar">
            <div class="brand-title">
            <h1>Sinned</h1>
            <h2>Welcome, <?php if(empty($_SESSION['username'])){
                echo "User!";
            } else{
                echo $_SESSION['username'];
                echo "!";
            }
            ?> </h2>
       </div>
        <div class="navbar-links">
            <ul>
                <li><a href="About.html">About Us</a></li>
                <li><a href="Login.php">Sign Up</a></li>
                <li><a href="Login.php" >Login</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
                <li><a href="Product Selection.php"><i class="fas fa-shopping-cart"></a></i></li>
                <li><a href="User.php"><i class="fas fa-user"></i></a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Navigation Bar End-->

    <!--Showcase-->
<showcase>
    <div class="wrapper">
        <div class="txt-container">
            <h1>Experience
            <span class="txt-type" data-wait="2000" data-words='["better", "smooth","ease","comfort"] '></span>
             <h2>by using the product!</h2> 
            </h1>
             <h3 class="semi-txt">We are your number one local supplier here in the Philippines.</h3>
             <a href="#scroll" class="btn">Shop Now <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="showcase-container">
            <img class="image-rotate" src="Home file/image/White.png" alt="">
            <img class="trans-image" src="Home file/image/black 2.png" alt="">
        </div>
    </div>
</showcase>
<!--featured container-->
<div class="features-container"> 
        <h1 class="feature-txt">Featured Product</h1>
    <div class="s-features-container">
            <div class="col-3">
                <img src="Home file/image/mouse 1.3.png" alt="">
            </div>
            <div id="s-mouse" class="col-3">
                <img src="Home file/image/headset 3.png" alt="">
            </div>
            <div class="col-3">
                <img src="Home file/image/keyboard 1.2.png" alt="">
            </div>
            
        </div>
    </div>
<!--Products-->
<section id="scroll">
<div class="product-components">Mouse</div>
    <div class="product-showcase">
        <!--Mouse-->
        <div class="product">
            <img src="Home file/image/black 2.png">
            <a href="Product/Mouse/Endgame/index.php" class="prod-link">Endgame Gear XM1r</a>
            <h3>Endgame Gear</h3>
            <h4>₱ 3100.00</h4>
        </div>
        <div class="product">
            <img src="Home file/image/mouse 3.png">
            <a href="Product/Mouse/Logitech/index.php" class="prod-link">Logitech G Pro X Superlight</a>
            <h3>Logitech</h3>
            <h4>₱ 6499.00</h4>
        </div>
        <div class="product">
            <img src="Home file/image/mouse 1.4.png">
            <a href="Product/Mouse/Pulsar/index.php" class="prod-link">Pulsar Xlite</a>
            <h3>Pulsar</h3>
            <h4>₱ 2400.00</h4>
        </div>
    </div>
<div class="product-components">Keyboard</div>
    <div class="product-showcase">
        <!--Keyboard-->
        <div class="product">
            <img src="Home file/image/keyboard 6.png">
            <a href="Product/Keyboard/Glorious/index.php" class="prod-link">Glorious GMMK Pro</a>
            <h3>Glorious</h3>
            <h4>₱ 9800.00</h4>
        </div>
        <div class="product">
            <img src="Home file/image/keyboard 5.1.png">
            <a href="Product/Keyboard/Razer/index.php" class="prod-link">Razer Huntsman Mini</a>
            <h3>Razer</h3>
            <h4>₱ 5300.00</h4>
        </div>
        <div class="product">
            <img src="Home file/image/keyboard 1.2.png">
            <a href="Product/Keyboard/Pulsar/index.php" class="prod-link">Pulsar PCMK TKL Keyboard</a>
            <h3>Pulsar</h3>
            <h4>₱ 3490.00</h4>
        </div>
    </div>
<div class="product-components">Headset</div>
<div class="product-showcase">
    <!--Headset-->
    <div class="product">
        <img src="Home file/image/headset 1.2.png">
        <a href="Product/Headset/EPOS/index.php" class="prod-link">EPOS H3 Headset</a>
        <h3>EPOS</h3>
        <h4>₱ 3990.00</h4>
    </div>
    <div class="product">
        <img src="Home file/image/headset 3.2.png">
        <a href="Product/Headset/Logitech/index.php" class="prod-link">Logitech G733 Headset</a>
        <h3>Logitech</h3>
        <h4>₱ 8000.00</h4>
    </div>
    <div class="product">
        <img src="Home file/image/barracuda-Copy_500x.png">
        <a href="Product/Headset/Razer/index.php" class="prod-link">Razer Barracuda X</a>
        <h3>Razer</h3>
        <h4>₱ 4950.00</h4>
    </div>
</div>
</section>

<!--footer-->
<div class="footer">
    <div class="cs-about">
        <a href="Contact.html">Customer Support</a>
        <a href="About.html">About Us</a>
        <a href="FAQ.html">FAQs</a>
    </div>
    <h1>Copyright 2021, Sinned Gaming Peripherals</h1>
</div>

    <script src="Home file/main.js"></script>
</body>
</html>