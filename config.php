<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
        echo '<script type="text/javascript">';
        echo 'alert("Connection Failed.");';
        echo '</script>';
        die;
}

?>