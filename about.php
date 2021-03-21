<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<?php 
session_start();
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>DevgadHapoos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/faviconn.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-iconn.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

  
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  
    <!-- <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Contact Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet"> -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
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
                        <a class="navbar-brand" href="index.php"><img src="images/png 100.png" class="logo" height= "80px" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->
    
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                            
                            
                           <li class="dropdown">
                                <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
    
                                <ul class="dropdown-menu">
                                <?php 
                                    if(isset($_SESSION['user']))
                                {
                                ?>
                                    <li><a href="cart.php">MyCart</a></li>
                                    <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
                                    <!-- <ul class="navbar-nav ml-auto"> -->
                                        <!-- <li class="nav-item">
                                        </li>
                                        <li class="nav-item">
                                        </li>
                                        <li class="nav-item">
                                        </li> -->
                                        <li class="nav-item">
                                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                                        </li>
                             
                                    <?php 
                                        }
                                        ?>
                                    <!-- <li><a href="shop-detail.html">FreshShop</a></li> -->
                                
                                    <!-- <li><a href="shop.php">Shop</a></li>  -->
                                    <li><a href="checkout.php">Checkout</a></li>
                                </ul>
                            </li>
                          
                         <!--   <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li> -->
                        </ul>
                        <li><a href="#">
                        <?php
                        if
                        (isset($_SESSION['user'])){echo " Hello  " .$_SESSION['user']; echo  '<a href="logout.php"><span class="glyphicon glyphicon-log-out">  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp LOGOUT </span></a>';
                        } else 
                          echo  '<li class="nav-item"><a class="nav-link" href="checkout.php">LOGIN</a></li>'
                        
                        ?></a></li>
     
                    </div>
             </div>
                
            </nav>
            <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/leftmango.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">Devgad <span> Alphonso Mangoes Online</span></h2>
                    <p>"FROM OUR FAMILY OWNED FARMS
                        Looking to buy mangoes online? Mangoes Mumbai offers the juiciest and freshest mangoes of them all, 
                        Ratnagiri Alphonso Mangoes Online! All our mangoes are chemical-free,
                        carbide free and handpicked from reliable farms in Devgad, Ratnagiri and Sindhudurg.Buy the world’s best quality chemical & carbide free natural farm fresh Alphonso Mango direct farm to your home from Ratnagiri Alphonso Mango and Devgad Alphonso Mango origin of India</p>
					<a class="btn hvr-hover" href="#">Shop Now</a>
                </div>
            
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>When you choose our products, you are getting the best mango rate in Mumbai! For example, you can get India’s most popular variety – the Alphonso mango (also known as Hapoos) – at unbelievable prices! Count on us for best quality mangoes at prices that are hard to match! </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Among our buyers include individuals and establishments who buy our mangoes in bulk. The best part of our services is the delivery. After you place the order, you will receive your favourite fruit at your doorstep in quick time! We have grown a reputation for delivering mangoes on time, every time!  </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>We bring these mangoes directly from farms in semi ripened condition hence no artificial ripening process is used. The mangoes are original Ratnagiri Alphonso’s which are famous worldwide grown in our Ratnagiri & Devgad farms. We bring fresh stock every alternate day maintaining freshness of the fruit. </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <h2 class="noo-sh-title">  <br></h2>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-1.png" alt="" />
                            <div class="team-content">
                                <h3 class="title">Geniuen Prizes</h3></div>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>When you choose our products, you are getting the best mango rate in Mumbai! For example, you can get India’s most popular variety – the Alphonso mango (also known as Hapoos) – at unbelievable prices! Count on us for best quality mangoes at prices that are hard to match!</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-2.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Reliable Delivery</h3>  </div>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Among our buyers include individuals and establishments who buy our mangoes in bulk. The best part of our services is the delivery. After you place the order, you will receive your favourite fruit at your doorstep in quick time! We have grown a reputation for delivering mangoes on time, every time! </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-3.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">100% Natural</h3> </div>
                             <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>We bring these mangoes directly from farms in semi ripened condition hence no artificial ripening process is used. The mangoes are original Ratnagiri Alphonso’s which are famous worldwide grown in our Ratnagiri & Devgad farms. We bring fresh stock every alternate day maintaining freshness of the fruit. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->
        <!-- Start Contact Us  -->
        <div class="contact-box-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="contact-form-right">
                            <h2>GET IN TOUCH</h2>
                            <p>Seeing is believing and hearing is assuring. Feel free to write to us for any queries or to tell us how you love Hafoos mangoes.
                                    If you feel we could do something better and improve our services, write to us and we promise you will hear from us shortly.</p>
                            <!-- <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" required data-error="Please enter your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="submit-button text-center">
                                            <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                    <div class="col-md-9">
               <form method="post" id="frmContactus">
					<div class="contact-form">
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="name">Name:</label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="email">Email:</label>
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="mobile">Mobile:</label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
						 </div>
					  </div>
					  
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="comment">Comment:</label>
						 <div class="col-sm-10">
							<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
						 </div>
					  </div>
					  <div class="submit-button text-center">
						 <div >
							<button class="btn hvr-hover"id="submit" type="submit" name="submit">Submit</button>
							<span style="color:red;" id="msg"></span>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                    </div>
					  </div>
				   </div>
			   </form>
            </div>
            <script>
                            jQuery('#frmContactus').on('submit',function(e){
                            jQuery('#msg').html('');
                            jQuery('#submit').html('Please wait');
                            jQuery('#submit').attr('disabled',true);
                            jQuery.ajax({
                                url:'submit.php',
                                type:'post',
                                data:jQuery('#frmContactus').serialize(),
                                success:function(result){
                                    jQuery('#msg').html(result);
                                    jQuery('#submit').html('Submit');
                                    jQuery('#submit').attr('disabled',false);
                                    jQuery('#frmContactus')[0].reset();
                                }
                            });
                            e.preventDefault();
                        });
            </script>
                    <!-- <div class="col-lg-4 col-sm-12">
                        <div class="contact-info-left">
                            <h2>CONTACT INFO</h2>
                            <p>Authentic, Original & 100% Natural Ratnagiri and Devgad Alphonso Mangoes Online. Delivered to your doorsteps PAN India Shipping available. </p>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Suyash Shelake <br> Vartaknagar <br> Pok. Rd. No. 01,<br> Thane West - 400606 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 9619374214">+91 9619374214</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 9619259407">+91 9619259407</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


     <!-- Start Footer  -->
     <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Suyash Shelake <br> Vartaknagar <br> Pok. Rd. No. 01,<br> Thane West - 400606 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 9619374214">+91 9619374214</a></p>
                               <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 9619259407">+91 9619259407</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">devgadalphonso@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
				</div>
				<hr>
            </div>
        </div>
        </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-top-box">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
    </div>
    <!-- End copyright  -->
    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
    var options = {
    whatsapp: "9619374214", // WhatsApp number
    call_to_action: "Message us", // Call to action
    position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
    </script>
</body>

</html>