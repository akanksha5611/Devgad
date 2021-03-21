<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address']) && isset($_POST['product'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$product=mysqli_real_escape_string($con,$_POST['product']);
	mysqli_query($con,"INSERT INTO orders(name,email,mobile,comment) values('$name','$email','$mobile','$address',$product')");
	$msg="Thanks message";
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Address</td><td>$address</td></tr><tr><td>Product</td><td>$product</td></tr></table>";
	echo 'Done'

	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	// $mail->SMTPDebug = 2;
	// $mail->Debugoutput = 'html';
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="suyashshelake50@gmail.com";//GAMIL_EMAIL_ID
	$mail->Password="liger090";//GAMIL_PASSWORD
	$mail->SetFrom("suyashshelake50@gmail.com");//GAMIL_EMAIL_ID
	$mail->addAddress("suyashshelake50@gmail.com");//TO_EMAIL_ID
	$mail->IsHTML(true);
	$mail->Subject="New Order";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));

	echo 'Done'

	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	echo $msg;
}
?>