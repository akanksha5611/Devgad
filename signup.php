<?php
session_start(); 

$valid = "SELECT * FROM user WHERE username = '".$_POST["InputEmail1"]."';";
$mysqli = new mysqli("localhost","root","","devgad");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
    
    $res = $mysqli->query($valid);
    if($res != false ) {
    $row= mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
    }
    else{
      $count = 0 ; 
    }
   
// if($_POST["psw"]!=$_POST["psw-repeat"]){
//     echo '<script>alert("Password re-entered is different")</script>';
//     header("Location: ../../myaccount.php");
// }
if($count == 1){
    echo '<script>alert("Username already taken")</script>';
    // header("Location: ../../myaccount.php");
}
else{

$sql = "INSERT INTO user (user_name, user_lastname, user_email, user_password) VALUES ('".$_POST["InputName"]."','".$_POST["InputLastname"]."', '".$_POST["InputEmail1"]."','".$_POST["InputPassword1"]."');";
echo 'reached here';
    if ($mysqli->query($sql) === TRUE) {
        // $_SESSION['type'] = 'Customer';
        $_SESSION['user'] = $_POST["InputEmail1"];
        header("Location: ./checkout.php");
        // header("Location: ../../myaccount.php");
      } else {
        echo 'Error:   '.$sql.'    '.$mysqli->error.'';
        
        // header("Location: ../../myaccount.php");
        // "Error: " , '$sql' . "<br>" , '$mysqli->error' ---to find error
      }
      
}


?>
    
