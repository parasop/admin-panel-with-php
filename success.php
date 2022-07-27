<html>
        <head>

        <script src="https://cdn.tailwindcss.com"></script>
        </head>


<?php

require("connection.php");


if($_GET['email']){



    $email = $_GET['email'];
    $query ="SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($result);

    if(!mysqli_num_rows($result)) {
      
        return header("location:register.php");
    }
    
    $name = $row['name'];
}
?>


<?php require("navbar.php"); ?>
<header>
  <div class="text-center bg-gray-50 text-gray-800 py-20 px-6">
    <h1 class="text-5xl font-bold mt-0 mb-6">Hey <?php echo $name ?></h1>
    <h3 class="text-2xl font-bold mb-8">You have been successfully registered with geetanjali click on below button to login</h3>
    <a class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Login </a>
  </div>
  </header>
