 <!-- Additional PHP code to fetch and display product details -->
 <?php
 session_start();
           ?>
<!DOCTYPE html>
<html lang="en">

     <title>FarmConnect | Store</title>
     <link rel="icon" type="image/png" href="../images/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
   <style> .loader_bg {
            position: fixed;
            z-index: 9999999;
            background: #fff;
            width: 100%;
            height: 100%;
        }

        .loader {
            height: 100%;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader img {
            width: 280px;
        }
        .navbar-nav .nav-link .icon-shopping_cart {
            transition: color 0.3s, transform 0.3s;
        }

        .navbar-nav .nav-link:hover .icon-shopping_cart {
            color: #fff; /* Change color on hover */
            transform: scaleX(1.1); /* Increase size on hover */
        }
        .footer-background {
    background-color: whitesmoke; /* This is a light grey color that will appear as off-white */
    padding: 50px 0; /* Add some padding to give space inside the container */
}

.product-img {
        width: 280px;
        height: 270px;
        object-fit: cover; /* This will ensure the aspect ratio is maintained */
    }

        </style>
</head>
<body class="goto-here">
<div class="loader_bg">
      <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
    </div>

    <!-- Your existing body content here -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo1.png " width="150px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="../index1.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="../about.html" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
              <a href="../service.html" class="nav-link dropdown-toggle">Service</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../Weather Folder/weather.html">Weather Forcast</a>
              <a class="dropdown-item" href="https://www.india.gov.in/topics/agriculture">Government policies</a>
            </div>
            </li>
                <li class="nav-item"><a href="../blogwithoutlogin.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="../contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item active"><a href="shopwithoutlogin.php" class="nav-link">Shop</a></li>
                
                <li class="nav-item"><a href="../login_form.php" class="nav-link"><span>Login</span></a></li>
            </ul>
        </div>
    </div>
</nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>
   
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            $pdo = pdo_connect_mysql();
            function pdo_connect_mysql() {
                $DATABASE_HOST = 'localhost';
                $DATABASE_USER = 'root';
                $DATABASE_PASS = '';
                $DATABASE_NAME = 'farmconnect';
                try {
                    return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
                } catch (PDOException $exception) {
                    exit('Failed to connect to database!');
                }
            }

            if (isset($_GET['id'])) {
                $stmt = $pdo->prepare('SELECT * FROM product WHERE product_id = ?');
                $stmt->execute([$_GET['id']]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (!$row) {
                    exit('Product does not exist!');
                }
            } else {
                exit('Product ID not specified!');
            }
            ?>

             <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/<?php echo $row['product_image']; ?>" class="image-popup"><img src="images/<?php echo $row['product_image']; ?>" class="img-fluid" alt="images/<?php echo $row['product_image']; ?>"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?php echo $row['product_name']; ?></h3>
                <p class="price">
                    <?php if ($row["rrp"] != 0 && $row["rrp"] < $row["price"]) {
                        echo "<p class='price'><span class='price-sale'> &#8377;" . $row["rrp"] . "</span></p>";
                    } else {
                        echo "<p class='price'><span class='mr-2'>&#8377 " . $row["price"] . "</span></p>";
                    }?>
                </p>
                <p><?php echo $row['product_des']; ?></p>
                <form action="cart.php" method="post" id="add-to-cart-form">
                    <div class="input-group col-md-6 d-flex mb-3">
                        <span class="input-group-btn mr-2">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="ion-ios-remove"></i>
                            </button>
                        </span>
                        <input type="number" class="form-control input-number" name="quantity" value="1" min="1" max="<?php echo $row['product_qty']; ?>" placeholder="Quantity" required>
                        <span class="input-group-btn ml-2">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="ion-ios-add"></i>
                            </button>
                        </span>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <input type="submit" class="btn btn-black py-3 px-5" value="Add To Cart">
                </form>
            </div>
        </div>
    </div>
</section>



         
    <!-- End of PHP code -->
    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="submit" name="submit" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section footer-background">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="../index1.php" class="py-2 d-block">Home</a></li>
               <li><a href="../about.html" class="py-2 d-block">About</a></li>
               <li><a href="../service.html" class="py-2 d-block">Service</a></li>
               <li><a href="../blogwithoutlogin.php" class="py-2 d-block">Blog</a></li>
              
                <li><a href="../contact.html" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="shipping.html" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="return.html" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="terms.html" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="privacy.html" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	             
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">ST ALOYSIUS(DEEMED TO BE UNIVERSITY) MANGALURU</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9633389789</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">dreamepic25@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="../WEB.html" target="_blank">DreamEpic</a>
						  
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function(){
      // Plus and minus buttons functionality
      $('.quantity-right-plus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the input field that is just above the plus button
        var quantityInput = $(this).parent().prev('input');
        // Get its current value
        var currentValue = parseInt(quantityInput.val());
        // Increment the value
        quantityInput.val(currentValue + 1);
      });
      $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the input field that is just below the minus button
        var quantityInput = $(this).parent().next('input');
        // Get its current value
        var currentValue = parseInt(quantityInput.val());
        // Decrement the value if it's greater than 1, otherwise do nothing
        if (currentValue > 1) {
          quantityInput.val(currentValue - 1);
        }
      });
    });
  </script>
  <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.loader_bg').fadeToggle();
            }, 1500);
        });
    </script>

    <script>
    document.getElementById('add-to-cart-form').addEventListener('submit', function(event) {
        <?php if (!isset($_SESSION['user_id'])): ?>
            event.preventDefault();
            alert('You need to login first');
            window.location.href = 'login_form.php';
        <?php endif; ?>
    });
</script>



    <!-- Your existing footer and script tags here -->
</body>
</html>
