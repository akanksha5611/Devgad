<?php
session_start();

$mysqli = new mysqli("localhost","root","root","devgad");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM user WHERE user_email = '".$_POST["InputEmail"]."' and user_id= '".$_POST["InputEmail"]."' and user_password = '".$_POST["InputPassword"]."';";
$res = $mysqli->query($sql);
$row= mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);

if($count==0){
    echo '<script>alert("Enterted Username or Password is wrong")</script>';
}
else{
    // if
    // (isset($_POST['admin']) && $_POST['admin']=='admin'){
    //     if($row['user_type']=='MGR'){
    //         $_SESSION['type'] = 'Seller';
    //         $_SESSION['user'] = $_POST["uname"];
    //         echo '<script>alert("Welcome Boss")</script>';
    //     }
    //     else{
    //         echo '<script>alert("You do not have access to this area")</script>';
    //     }
    // }
    // else{
        // $_SESSION['type'] = 'Customer';
        $_SESSION['user'] = $row['user_name'];
        echo('<script>alert("kya yaar")</script>');
    // }
}
// header("Location: ../../myaccount.php");
header("Location: ./index.php");
// <?php if
//                     (isset($_SESSION['user'])){echo " Hello".$_SESSION['user_name'];
//                     }else{echo('world');}
//                      ?>

