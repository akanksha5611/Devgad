<?php
session_start(); 

$valid = "SELECT * FROM user WHERE username = '".$_POST["InputEmail"]."';";
$mysqli = new mysqli("localhost","root","root","devgad");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
    
    $res = $mysqli->query($valid);
    $row= mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);



// if($_POST["psw"]!=$_POST["psw-repeat"]){
//     echo '<script>alert("Password re-entered is different")</script>';
//     header("Location: ../../myaccount.php");
// }
if($count == 1){
    echo '<script>alert("Username already taken")</script>';
    header("Location: ../../myaccount.php");
}
else{

$sql = "INSERT INTO user (user_name, user_lastname, user_email, user_password) VALUES ('".$_POST["InputName"]."','".$_POST["InputLastname"]."', '".$_POST["InputEmail"]."','".$_POST["InputPassword"]."',";
echo 'reached here';
    if ($mysqli->query($sql) === TRUE) {
    //   $_SESSION['type'] = 'Customer';
        $_SESSION['user'] = $_POST["InputEmail"];
        header("Location: ../../myaccount.php");
      } else {
        echo '<script>alert("Error: ")</script>';
        header("Location: ../../myaccount.php");
        // "Error: " , '$sql' . "<br>" , '$mysqli->error' ---to find error
      }
}

?>
    
