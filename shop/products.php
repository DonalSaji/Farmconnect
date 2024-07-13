<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmConnect - Products</title>
    <link rel="icon" type="image/png" href="../images/logo.jpg">
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

    <style>
		.loader_bg {
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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo1.png " with="70px" height="50px"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="../about1.php" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
              <a href="../service1.php" class="nav-link dropdown-toggle">Service</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../Weather Folder/weather.html">Weather Forcast</a>
              <a class="dropdown-item" href="https://www.india.gov.in/topics/agriculture">Government policies</a>
            </div>
            </li>
	          <li class="nav-item"><a href="../blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="../contact1.php" class="nav-link">Contact</a></li>
	          <li class="nav-item active dropdown"><a href=" index.php" class="nav-link">Shop</a></li>
            <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item"  >Name: <span><?php echo $_SESSION['user_name'] ?></span></a>
					<a class="dropdown-item" >ID:FC<span><?php echo $_SESSION['user_id'] ?></span></a>
				  <a class="dropdown-item" href="../profile.php" >Profile</a>
				  <a class="dropdown-item" href="../logout.php"> Logout</a>
				</div>
		  </li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            
            <div class="row">
                <?php
                // Database connection details
                $DATABASE_HOST = 'localhost';
                $DATABASE_USER = 'root';
                $DATABASE_PASS = '';
                $DATABASE_NAME = 'farmconnect';

                // Create connection
                $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL query to retrieve data from the 'products' table in the desired order
                $sql = "SELECT * FROM product ORDER BY date_added DESC LIMIT 12"; // Replace 'date_column' with the actual column name containing the date

                $result = $conn->query($sql);

          
                if ($result->num_rows > 0) {
                  // Output data of each row
                  while ($row = $result->fetch_assoc()) {
                      // Display data as needed within your product card structure
                      echo "<div class='col-md-6 col-lg-3 ftco-animate'>";
                      echo "<div class='product'>";
                      // Change the href to use 'product_id' instead of 'id'
                      echo "<a href='product.php?id=" . $row["product_id"] . "' class='img-prod'><img class='img-fluid product-img' src='images/" . $row["product_image"] . "' alt='Product Image'>";
                      if ($row["rrp"] != 0 ) {
                          echo "<span class='status'>" . $row["rrp"] . "%</span>";
                      }
                      echo "<div class='overlay'></div>";
                      echo "</a>";
                      echo "<div class='text py-3 pb-4 px-3 text-center'>";
                      echo "<h3><a href='product.php?id=" . $row["product_id"] . "'>" . $row["product_name"] . "</a></h3>";
                      echo "<div class='d-flex'>";
                      echo "<div class='pricing'>";
                      
                      // Check if rrp is not 0 and less than the price
                      if ($row["rrp"] != 0 && $row["rrp"] < $row["price"]) {
                          echo "<p class='price'><span class='mr-2 price-dc'> &#8377; " . $row["price"] . "</span><span class='price-sale'> &#8377;" . $row["rrp"] . "</span></p>";
                      } else {
                          // Display only the actual price
                          echo "<p class='price'><span class='mr-2'>&#8377 " . $row["price"] . ";</span></p>";
                      }
                      
                      echo "</div>";
                      echo "</div>";
                      echo "<div class='bottom-area d-flex px-3'>";
                      echo "<div class='m-auto d-flex'>";
                      echo "<a href='#' class='add-to-cart d-flex justify-content-center align-items-center text-center'><span><i class='ion-ios-menu'></i></span></a>";
                      echo "<a href='#' class='buy-now d-flex justify-content-center align-items-center mx-1'><span><i class='ion-ios-cart'></i></span></a>";
                      echo "<a href='#' class='heart d-flex justify-content-center align-items-center'><span><i class='ion-ios-heart'></i></span></a>";
                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                  }
              } else {
                  echo "<p>No products found</p>";
              }
              

                $conn->close();
                ?>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <!-- Add dynamic pagination here if needed -->
                            
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<!--footer!-->

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
                <li><a href="../index.php" class="py-2 d-block">Home</a></li>
                <li><a href="../about1.php" class="py-2 d-block">About</a></li>
                <li><a href="../service1.php" class="py-2 d-block">Service</a></li>
                <li><a href="../blog.php" class="py-2 d-block">Blog</a></li>
                <li><a href="../contact1.php" class="py-2 d-block">Contact Us</a></li>
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

            <p><!-- Link back to Dream Epic can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="../WEB.html" target="_blank">Dream Epic</a>
						  <!-- Link back to Dream Epic can't be removed. Template is licensed under CC BY 3.0. -->
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
        $(document).ready(function () {
            setTimeout(function () {
                $('.loader_bg').fadeToggle();
            }, 1500);
        });
    </script>
            </body>
</html>
