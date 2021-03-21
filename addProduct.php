

<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['comment'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$comment=mysqli_real_escape_string($con,$_POST['comment']);
	
	mysqli_query($con,"INSERT INTO product(name,email,mobile,comment) values('$name','$email','$mobile','$comment')");
	$msg="Thanks message";
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr></table>";
	
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
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	echo $msg;
}

'<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <!-- The above 3 meta tags must come first in the head -->

        <title>Save product details</title>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
        <style type="text/css">
            body {
                padding: 30px;
            }

            .form-container {
                margin-left: 80px;
            }

            .form-container .messages {
                margin-bottom: 15px;
            }

            .form-container input[type="text"],
            .form-container input[type="number"] {
                display: block;
                margin-bottom: 15px;
                width: 150px;
            }

            .form-container input[type="file"] {
                margin-bottom: 15px;
            }

            .form-container label {
                display: inline-block;
                float: left;
                width: 100px;
            }

            .form-container button {
                display: block;
                padding: 5px 10px;
                background-color: #8daf15;
                color: #fff;
                border: none;
            }

            .form-container .link-to-product-details {
                margin-top: 20px;
                display: inline-block;
            }
        </style>

    </head>
    <body>

        <div class="form-container">
            <h2>Add a product</h2>

            <div class="messages">
           

            </div>

            <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" >

                <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Product ID</label>
                <input type="text" id="name" name="name" >

                <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Price</label>
                <input type="text" id="name" name="name" >

                <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Product Code</label>
                <input type="text" id="name" name="name" >

                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="0" >

                <label for="file">Images</label>
                <input type="file" id="file" name="file[]" multiple>

                <button type="submit" id="submit" name="submit" class="button">
                    Submit
                </button>
            </form>
            <?php
            if ($productSaved) {
                ?>
                <a href="getProduct.php?id=<?php echo $id; ?>" class="link-to-product-details">
                    Click me to see the saved product details in <b>getProduct.php</b> (product id: <b><?php echo $id; ?></b>)
                </a>
           
        </div>

    </body>
    </html>'
?>