<?php

require("connection.php");


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$select = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email'");
if(mysqli_num_rows($select)) {
      
    return header("location:register.php?email");
}


$query = "INSERT INTO `user` (`name`, `username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password')";
$res = mysqli_query($connect,$query);


if($res ==1){
        return header("location:success.php?email=$email");
}








?>
