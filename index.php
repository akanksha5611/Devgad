<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
$mysqli = new mysqli("localhost","root","","devgad");

require 'connection.php';
// require 'signup.php';
$conn = Connect();
$res = $mysqli->query('SELECT `user_name` FROM `user` WHERE `user_email` Is $_SESSION[`user`]');
echo $res;
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
      
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
      
    
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
                    <a class="navbar-brand" href="index.php"><img src="images/png 100.png" class="logo" height= "80px" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/front 1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Devgad Alphanso </strong></h1>
                            <p class="m-b-40">Devgad Ratnagiri alphonso mangoes to your Doors.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/front 2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Devgad Alphanso </strong></h1>
                            <p class="m-b-40">Devgad Ratnagiri alphonso mangoes to your Doors.</p>
                            <p><a class="btn hvr-hover" href="#.products-box">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/front 3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Devgad Alphanso </strong></h1>
                            <p class="m-b-40">Devgad Ratnagiri alphonso mangoes to your Doors</p>
                            <p><a class="btn hvr-hover" href="#products-box">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" id="man">
                        <img class="img-fluid" src="images/Mumbaikars beware! That Alphonso could be fake.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Direct From Farms</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" id="man">
                        <img class="img-fluid" src="images/3 mango.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Original Alphonso GI</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" >
                        <img class="img-fluid" id="man" src="images/slice.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">A+ Export Quality</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/Screenshot (314).png" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/Screenshot (314).png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->


    <body>
  <!-- Navbar start -->
  <!-- <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav> -->
  <!-- Navbar end -->

  <!-- Displaying Products Start -->

  <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1> Premium Quality Fruits</h1>
                        <p>We offer different variety of Organic and Fresh Mangoes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All categories</button>
                            <button data-filter=".top-featured">Devgad Alphonso</button>
                            <button data-filter=".top-featured">Ratnagiri Alphanso</button>
                            <button data-filter=".best-seller">Kutch Kesari</button>
                        </div>
                    </div>
                </div>
            </div>

  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
     <?php
  		// 	include 'connection.php';
  		 	$stmt = $conn->prepare('SELECT * FROM product');
  		 	$stmt->execute();
  		 	$result = $stmt->get_result();
  		 	while ($row = $result->fetch_assoc()):
  		 ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button onclick="location.href='cart.php'" class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
              <?php
            //   header('location:cart.php');
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    
  </div>

  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

<!--   

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">5 Dozen<br> Size A+</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="cart.php?id=1">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>
                                Five Dozen (Size A+) Devgad Alphonso Mangoes (60 Fruits)</h4>
                            <h5> ₹2200.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">5 Dozen<br> Size A</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="cart.php">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Five Dozen (Size A) Devgad Alphonso Mangoes (60 Fruits)</h4>
                            <h5> ₹2000.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">10 Dozen <br> Size A+</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4> Ten Dozen (Size A+) Devgad Alphonso Mango  (120 Fruits)</h4>
                            <h5> ₹4000.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">2 Dozen <br> Premium</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#cart.html">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Two Dozen Premium Devgad Alphonso Mango {24 Fruits} </h4>
                            <h5>  ₹1000.00</h5>
                        </div>
                    </div>
                </div> -->
                <!-- 2nd -->
                <!-- <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">5 Dozen<br> Size A</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Five Dozen (Size A) Ratnagiri Alphonso Mangoes (60 Fruits)</h4>
                            <h5> ₹2000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">10 Dozen <br> Size A+</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="cart.php?pid=">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4> Ten Dozen (Size A+) Ratnagiri Alphonso Mango  (120 Fruits)</h4>
                            <h5> ₹4000.00</h5>
                        </div>
                    </div>
                </div> -->
                <!-- 3rd -->
                <!-- <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">10 Kg.</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="cart.php">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>
                                10Kg. Kutch Kesar Mangoes (10 Kg )</h4>
                            <h5> ₹1500.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale"> 15Kg<br> Fresh</p>
                            </div>
                            <img src="images/peti2.png" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="cart.php">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4> Kutchkesar Mango 15Kg </h4>
                            <h5>  ₹1000.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/MangobasketPS-(1-of-1).jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>BUY MANGOES ONLINE IN INDIA - MUMBAI, NAVI MUMBAI, THANE</h3>
                                </p>Looking for juicy, in-season fresh mangoes? Now, you can buy mangoes online from the comfort of your home and save yourself from a hectic trip to the market. 
                                With this online venture, we are positive that mango lovers will now be able to get mangoes of A grade quality & savor their absolute taste and health benefits.
                                These export quality mangoes are also not easily available in the local markets hence, we have taken this initiative to bring ‘Original Ratnagiri Alphonso Mangoes’ directly from our farms to your doorsteps </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>"Hapoos" mangoes are the best!</h3>
                                <p>"Hapoos" mangoes are the best known mangoes amongst all owing to its distinct taste, texture, colour and aroma.
                                    You can also be rest assured about our quality as every mango is handpicked on the day we ship them across to you. We are sure that our mangoes will entice you with their pleasing aromas & their low prices will surely impress you.
                                    Most of our customers have often complimented us that our mangoes when delivered are farm fresh, large sized, succulent and more flavored than any other mangoes that are available locally or online.  </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>The easiest way to Peel A Mango</h3>
                                <p>The easiest way to Peel A Mango. <br>Ingredients<br>
                                    • 1 Mango<br>
                                    •1 Glass<br>
                                    Cut both cheeks (sides) of the mango off, leaving the pit aside.<br> Place the bottom edge of the mango cheek against the glass.<br>
                                    Gently press in and down as you slide the glass cup in between the mango skin and the mango flesh. <br>
                                    Let the mango flesh fall into the glass — it really is THAT easy!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->
    

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
        <!-- <div class="myButton">
            <a href="floater.html"></a>
        </div> -->

    
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <!-- <div class="footer-copyright">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-top-box">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
    </div> -->
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
   
</div>
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