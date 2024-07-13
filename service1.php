<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'],$_SESSION['user_id'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>FarmConnect</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- fevicon -->
    <link rel="shortcut icon" type="image/png" href="images/logo.jpg">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <!-- bootstrap--> 
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        
        <!-- mean menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="css/main.css">
  </head>
  <style>/* CSS for NavBar */
   
    .stickyI {
      padding: 10px;
      text-align: center;
      width: 100%;
      position: fixed;
      top: 0px;
    }
    </style>
  <!-- body -->
  <body class="main-layout inner_page service_page">
    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="full_bg">
      
        <!-- header nav -->
        <?php 
       $user_type=$_SESSION['user_type'];
       if(isset($_SESSION['user_name'])){ 
       
          include 'nav.php';
       }else{
        include 'nav.html';
       }
        ?>
            <!-- end header nav -->
    </div>
    <!-- services -->
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage text_align_left">
              <span>What We Do</span>
              <h2>SERVICES WE OFFER</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="services_box_main">
              <div class="services_box text_align_left">
                <figure><img src="images/service2.jpg" alt="#" /></figure>
                <div class="veget">
                  <h3>FRESH<br />VEGETABLES</h3>
                  <p>
                    Fresh vegetables have a specific color, firmness and
                    smell.It is important to look for freshness in all
                    vegetables we consume. Check the characteristic signs of
                    freshness such as bright, lively color in the vegetable and
                    look to see if the vegetable is crisp and free of soft
                    spots. Vegetables are at their peak during their harvest
                    season, this is also when vegetables are the most affordable
                    to purchase. A seasonal vegetable also helps to ensure
                    freshness, and chances are, they have not traveled too far
                    to reach the market. One of the most important reasons for
                    purchasing fresh is the nutritional value that freshness
                    brings to you as a consumer. Vegetables are low in fa, high
                    in fiber and provide key nutrients for our day. One of the
                    places that majority of people recommends for shopping fresh
                    vegetables is Farmconnect. Farmconnect provides an
                    opportunity for consumers to purchase locally grown
                    vegetables.
                  </p>
                </div>
              </div>
             
            </div>
          </div>
          <div class="col-md-4">
            <div class="services_box_main">
              <div class="services_box text_align_left">
                <figure><img src="images/product.jpg" alt="#" /></figure>
                <div class="veget">
                  <h3>AGRICULTURE<br />PRODUCTS</h3>
                  <p>Agriculture items include a wide variety of food products consumed by both humans and animals.  Agriculture produce can mean raw or processed commodities.
                     Here is the list of agricultural products we offer
                     <ul><li>Livestock (cattle, poultry, hogs, etc.)</li>
<li>Crops (corn, soybeans, hay, etc.)</li>
<li>Edible forestry products (almonds, walnuts, etc.)</li>
<li>Dairy (milk products)</li>
<li>Fish farming</li>
<li>Miscellaneous ag products (i.e., honey)</li>


</ul>
                  </p>
                </div>
              </div>
             
            </div>
          </div>
          <div class="col-md-4">
            <div class="services_box_main">
              <div class="services_box text_align_left">
                <figure><img src="images/op.jpg" alt="#" /></figure>
                <div class="veget">
                  <h3>ORGANIC<br />PRODUCTS</h3>
                  <p>
                    The best organic products are mostly dependent upon the quality of raw organic ingredients used in their making. Here at FarmConnect,we will provide you the information about the best organic products.We deal in a wide variety of trusted ayurvedic & herbal product manufactures.We also provide guidance to start your Own ayurvedic products business and also to get products in your own name.The quality testing of the organic food products is carried in our own QC LAB by our experienced R&D team to ensure their purity & efficacy. Labeling is done by our own DESIGNING TEAM to make the product a trendsetter with its eye-catching & market-sensitive appeal.</p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end services -->
    <!--  footer -->
    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Newsletter</h3>
                <form id="colof" class="form_subscri">
                  <input
                    class="newsl"
                    placeholder="Enter Email"
                    type="text"
                    name="Email"
                  />
                  <button class="subsci_btn">
                    <img src="images/new.png" alt="#" />
                  </button>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Menu</h3>
                <ul class="menu_footer">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about1.php">About</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="blog.php">News</a></li>
                  <li><a href="contact1.php">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Recent Posts</h3>
                <ul class="recent">
                  <li>
                    <img src="images/resent.jpg" alt="#" />Kerala Govt to Start Climate Smart Coffee Project.
                  </li>
                  <li>
                    <img src="images/wheat.jpg" alt="#" />Govt Reduces Wheat Allocation for 12 states under PMGKAY.
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 flot_right text_align_left">
                <h3>ContacT</h3>
                <ul class="top_infomation">
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    +91 9876543210
                  </li>
                  <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="Javascript:void(0)">farmconnect@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="copyright">
          <div class="container">
            <div class="row d_flex">
              <div class="col-md-8">
                <p>
                  © 2022 All Rights Reserved. Design by
                  <a href="WEB.html"> Dream Epic</a>
                </p>
              </div>
              <div class="col-md-4">
                <ul class="social_icon">
                  <li>
                    <a href="Javascript:void(0)"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="Javascript:void(0)"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="Javascript:void(0)"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
