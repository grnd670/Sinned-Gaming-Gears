<?php

include 'config.php';

error_reporting(0);
session_start();


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
       
        if(!mysqli_num_rows($result) > 0){
            $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
              $result = mysqli_query($conn, $sql);
         if($result){
             echo "<script> alert('User Registration Succeed') </script>";  
             $username = "";
             $email = "";
             $_POST['password'] = "";
             $_POST['cpassword'] = "";
            }else{
                echo '<script type="text/javascript">';
                echo 'alert("Something went wrong, please try again.");';
                echo '</script>';
              }
         }else {
            echo '<script type="text/javascript">';
          echo 'alert("Email Already Exists.");';
          echo '</script>';
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Password doesnt match");';
        echo '</script>';
    }
}
if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result -> num_rows > 0 ){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header("Location: Home.php");
    }else{
        echo '<script type="text/javascript">';
        echo 'alert("Wrong Email or Password!");';
        echo '</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="Login File/style.css" />
    <title>Sinned Gaming Peripherals</title>
</head>
<body>
      <!-- Navigation Bar-->
      <nav class="navbar">
        <a href="Home.php" class="brand-title">
            Sinned
        </a>

        <div class="navbar-links">
            <ul>
                <li><a href="About.html">About Us</a></li>
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
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                <button name="submit" class="sign-up">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required/>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['cpassword']; ?>" required />
                <a href="#">Forgot your password?</a>
                <button name="signIn" class="sign-in">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to Sinned Gaming Gears!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
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

  <script src="Login file/main.js"></script> 
</body>
</html>