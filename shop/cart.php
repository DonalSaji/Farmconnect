<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login-form.php");
    exit();
}

$pdo = pdo_connect_mysql();

function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'farmconnect';

    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to the database!');
    }
}

if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    $stmt = $pdo->prepare('SELECT * FROM product WHERE product_id = ?');
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product && $quantity > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            $_SESSION['cart'] = array($product_id => $quantity);
        }
        header('Location: cart.php');
        exit;
    }
}

if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    unset($_SESSION['cart'][$_GET['remove']]);
}

if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    header('location: cart.php');
    exit;
}

if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $user_id = $_SESSION['user_id'];

    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $stmt = $pdo->prepare('INSERT INTO order_db (order_qty, product_id, id, date) VALUES (?, ?, ?, NOW())');
        $stmt->execute([$quantity, $product_id, $user_id]);
    }

    header('Location: cart_success.php');
    exit;
}

$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;

if ($products_in_cart) {
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM product WHERE product_id IN (' . $array_to_question_marks . ')');
    $stmt->execute(array_keys($products_in_cart));
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['product_id']];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>cart</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body {
            font-family: Arial, sans-serif;
        }
        .hero-wrap {
            padding: 50px 0;
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            text-align: center;
        }
        .container {
            margin-top: 30px;
        }
        table {
            margin-bottom: 20px;
        }
        th, td {
            vertical-align: middle !important;
        }
        .btn {
            margin-top: 10px;
        }
        .subtotal {
            margin-top: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .proceed-btn {
            margin-top: 30px;
            text-align: right;
        }
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
    </style>
  </head>
  <body class="goto-here">
<div class="loader_bg">
    <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo1.png" width="170px" height="50px"></a>
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
                <li class="nav-item active"><a href="index.php" class="nav-link">Shop</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item">Name: <span><?php echo $_SESSION['user_name'] ?></span></a>
                        <a class="dropdown-item">ID:FC<span><?php echo $_SESSION['user_id'] ?></span></a>
                        <a class="dropdown-item" href="../profile.php">Profile</a>
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                </li>
                <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span><?php echo count($products_in_cart); ?></a></li>
                <li class="nav-item cta cta-colored"><a href="../index.html" class="nav-link"><span>Logout</span></a></li>
            </ul>
        </div>
    </div>
</nav>
    <!-- END nav -->

    <section class="ftco-section">
    <div class="container mt-5">
      
        <h2 class="mb-4 text-center">Shopping Cart</h2>

        <form action="cart.php" method="post">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $product['product_name'] ?></td>
                                <td>&#8377;<?= $product['price'] ?></td>
                                <td>
                                    <input type="number" name="quantity-<?= $product['product_id'] ?>" value="<?= $products_in_cart[$product['product_id']] ?>" min="1" class="form-control">
                                </td>
                                <td>&#8377;<?= number_format($product['price'] * $products_in_cart[$product['product_id']], 2) ?></td>
                                <td>
                                    <a href="cart.php?remove=<?= $product['product_id'] ?>" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-4">
                    <input type="submit" value="Update Cart" name="update" class="btn btn-primary btn-block">
                    <input type="submit" value="Place Order" name="placeorder" class="btn btn-success btn-block mt-2">
                </div>
                <div class="col-md-4 text-right">
                    <p><strong>Subtotal:</strong> &#8377;<?= number_format($subtotal, 2) ?></p>
                </div>
            </div>
        </form>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-4">
                <a href="checkout.php" class="btn btn-warning btn-lg btn-block">Proceed to Checkout</a>
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
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserived | This is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="../WEB.html" target="_blank">Dream Epic</a>
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
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
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

    
  </body>
</html>