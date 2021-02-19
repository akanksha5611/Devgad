<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
require 'connection.php';
$conn = Connect();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevgadHapoos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/faviconn.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-iconn.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
     
    
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
    
</head>

<body>


    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/png 100.png" class="logo" height= "80px" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>

                       <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.html">MyCart</a></li>
								<li><a href="shop-detail.html">Devgad</a></li>
                            
                                <li><a href="shop.html">Shop</a></li> 
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href=profile.php">My Account</a></li>

                            
                            </ul>
                        </li>
                     <!--   <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li> -->
                    </ul>
                </div>
<body style="background-color: #044e42; ">
 <div class="container">
     <form action="" method="post">
         <button class="btn btn-default" style="float: right; width: 70px;" name="submit1">Edit</button>
     </form>
     <div class="wrapper">
         <?php

             if(isset($_POST['submit1']))
             {
                 ?>
                     <script type="text/javascript">
                         window.location="edit.php"
                     </script>
                 <?php
             }
             $q=mysqli_query($db,"SELECT * FROM user where username='$_SESSION[login_user]' ;");
         ?>
         <h2 style="text-align: center;">My Profile</h2>

         <?php
             $row=mysqli_fetch_assoc($q);

             echo "<div style='text-align: center'>
                 <img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
             </div>";
         ?>
         <div style="text-align: center;"> <b>Welcome, </b>
             <h4>
                 <?php echo $_SESSION['login_user']; ?>
             </h4>
         </div>
         <?php
             echo "<b>";
             echo "<table class='table table-bordered'>";
                 echo "<tr>";
                     echo "<td>";
                         echo "<b> First Name: </b>";
                     echo "</td>";

                     echo "<td>";
                         echo $row['first'];
                     echo "</td>";
                 echo "</tr>";

                 echo "<tr>";
                     echo "<td>";
                         echo "<b> Last Name: </b>";
                     echo "</td>";
                     echo "<td>";
                         echo $row['last'];
                     echo "</td>";
                 echo "</tr>";

                 echo "<tr>";
                     echo "<td>";
                         echo "<b> User Name: </b>";
                     echo "</td>";
                     echo "<td>";
                         echo $row['username'];
                     echo "</td>";
                 echo "</tr>";

                 echo "<tr>";
                     echo "<td>";
                         echo "<b> Password: </b>";
                     echo "</td>";
                     echo "<td>";
                         echo $row['password'];
                     echo "</td>";
                 echo "</tr>";

                 echo "<tr>";
                     echo "<td>";
                         echo "<b> Email: </b>";	
                     echo "</td>";
                     echo "<td>";
                         echo $row['email'];
                     echo "</td>";
                 echo "</tr>";

                 echo "<tr>";
                     echo "<td>";
                         echo "<b> Contact: </b>";
                     echo "</td>";
                     echo "<td>";
                         echo $row['contact'];
                     echo "</td>";
                 echo "</tr>";

                 
             echo "</table>";
             echo "</b>";
         ?>
     </div>
 </div>
</body>
</html>

