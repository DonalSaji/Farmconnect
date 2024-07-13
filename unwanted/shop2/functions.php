<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
    
}
// Template header, feel free to customize this
function template_header($title) {
    // Get the number of items in the shopping cart, which will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="style.css" rel="stylesheet" type="text/css">
   
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>   
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
        #search-container {
            position: relative;
            display: inline-block;
          }
          
          #search-icon {
            cursor: pointer;
            font-size: 20px;
            color: #333;
            transition: color 0.3s;
          }
          
          #search-icon:hover {
            color: #555;
          }
          
          #search-box-container {
            display: none;
            position: absolute;
            top: 37px;
            right: 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            border:1;
          }
          
          #search-box {
            width: 200px;
            padding: 10px;
            border: 1;
            border-radius: 4px 0 0 4px;
            outline: none;
          }
          
          #search-button {
            padding: 10px 15px;
            position: absolute;
            background-color: #555;
            width:70px;
            height:38px;
            color: #fff;
            border: 1;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            outline: none;
            transition: background-color 0.3s;
          }
          
          #search-button:hover {
            background-color: #333;
          }
          
          </style>
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <img src="imgs/logo1.png" height="50px" width="150px">
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                <div id="search-container">
  <div id="search-icon" onclick="showSearchBox()"><i class="fas fa-search"></i></div>
  <div id="search-box-container">
    <input type="text" id="search-box" placeholder="Enter your search term">
    <button id="search-button" onclick="performSearch()">Search</button>
  </div>
</div>

               
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        <span>$num_items_in_cart</span>
                        
					</a>
                    
                </div>
            </div>
        </header>
        <script>
        function showSearchBox() {
            var searchBoxContainer = document.getElementById('search-box-container');
            searchBoxContainer.style.display = 'block';
          }
          
          function performSearch() {
            var searchBox = document.getElementById('search-box');
            var searchTerm = searchBox.value;
          
            // Perform your search logic here
            // ...
          }
          </script>
        <main>
EOT;
}
// Template footer
function template_footer() {
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
            <p>
            © 2022 All Rights Reserved. Design by
            <a href="../WEB.html"> Dream Epic</a>
          </p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>


