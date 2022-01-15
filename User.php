<?php
    session_start();

        if(!isset($_SESSION['username'])){
        header("Location: Login.php"); 
 } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="User file/style.css" />
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
    <h1 class="user">User</h1>
    <div class="showcase">
    

        <div class="showcase-container">
            <div class="Username">
                <h1>Username: </h1><p class="with-color" id="username"><?php if(empty($_SESSION['username'])){
                echo "User!";
            } else{
                echo $_SESSION['username'];
            }
            ?></p>
            </div>
            <div class="Email">
                <h1>Email: </h1><p class="with-color" id="email"> <?php if(empty($_SESSION['email'])){
                echo "User!";
            } else{
                echo $_SESSION['email'];
            }
            ?></p>
            </div>
            <div class="Phone">
                <h1>Phone No: </h1><p class="with-color" id="phone">0932442932</p>
            </div>
            <div class="Address">
                <h1>Address: </h1><p class="with-color" id="address"> 4835 Baseline St. Bagong bato Caloocan City</p>
            </div>
        </div>

    </div>
            <!--footer-->
<div class="footer">
    <div class="cs-about">
        <a href="Contact.html">Customer Support</a>
        <a href="About.html">About Us</a>
        <a href="FAQ.html">FAQs</a>
    </div>
    <h1>Copyright 2021, Sinned Gaming Peripherals</h1>
</div>
</body>
</html>