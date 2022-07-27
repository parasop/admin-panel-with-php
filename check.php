<?php

require("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];




$query = "SELECT * FROM `user` WHERE email='$email' OR username='$email' AND password = '$password'";


$res = mysqli_query($connect,$query);

if(mysqli_num_rows($res)) {
      
    session_start();

    $_SESSION['email'] = $email;
    return header("location:panel.php");
}else{

   return header('location:login.php?error=incorrect');
}
