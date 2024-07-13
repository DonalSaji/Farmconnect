<?php
//  include 'connection.php';
//  session_start();
//$id=$_SESSION['user_id'];
//$query=mysqli_query($db,"SELECT * FROM user where id='$id'")or die(mysqli_error($db));
//$row=mysqli_fetch_array($query);
//session_abort();
 // ?>
 
<html>
    <head>
        
                <!-- style css -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href=".css/responsive.css" />
    <!-- fevicon -->
    <link rel="shortcut icon" type="image/png" href="../images/logo.jpg"/>
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css" />
    <!-- bootstrap --> 
         <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        
        <!-- mean menu css -->
        <link rel="stylesheet" href="../css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="../css/main.css">
  </head>
  <style>/* CSS for NavBar */
   
.stickyI {
  padding: 10px;
  text-align: center;
  width: 100%;
  position: fixed;
  top: 0px;
}
.pad{
    padding:100px;
}
    </style>

      <!-- header nav -->
      <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            
                                <img src="images/logo1.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="index.php">Home</a>
                                    <!--<ul class="sub-menu">
                                        <li><a href="index.html">Home</a></li>
                                    
                                    </ul>-->
                                </li>
                                <li ><a href="about1.php">About</a></li>
                                <li><a href="service1.php">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="Weather Folder/weather.html">Wether Forcast</a></li>
                                        <li><a href="https://www.india.gov.in/topics/agriculture">Government Polices</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="blog.php">Blog</a>
                                   <!-- <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        
                                    </ul>-->
                                </li>
                                <li><a href="contact1.php">Contact</a></li>
                                <li><a href="shop/index.php">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop/index.php">Shop</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="cart.html">Cart</a></li>                                       
                                    </ul>
                                </li>
                                <li>                                   
                                      <a class="shopping-cart" href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                      <ul class="sub-menu">
                                        <li><a >Name: <span><?php echo $_SESSION['user_name'] ?></span></a></li>
                                        <li><a>ID:FC<span><?php echo $_SESSION['user_id'] ?></span></a></li>
                                        <li><a href="profile.php" >Profile</a></li>
                                        <li><a href="logout.php"> Logout</a></li>
                                      </ul>
                                </li>
                            </ul>
                        </nav>
                        
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- end header nav -->
    
    <body>
    <?php include "checkout.html"?>
    <?php include "blog-form1.php"?>
        
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
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="service.html">Service</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Recent Posts</h3>
                <ul class="recent">
                  <li>
                    <img src="images/farmer.jpg" alt="#" />The Female Farmer
                    Project” is a multi-platform documentary project that
                    chronicles the rise of women working in agriculture around
                    the world.
                  </li>
                  <li>
                    <img src="images/farm3.jpg" alt="#" /> Overview The
                    agriculture sector, currently valued at US$ 370 billion, is
                    one of the major sectors in the Indian economy.According to
                    the Economic Survey 2020-21
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
                  <a href="WEB.html">Dream Epic</a>
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
              
    