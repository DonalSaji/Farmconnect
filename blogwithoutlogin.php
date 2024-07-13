<?php

@include 'config.php';

session_start();


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
    <link rel="shortcut icon" type="image/png" href="images/logo.jpg">
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
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
  <!-- body -->
  <body class="main-layout inner_page blog_page">
    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="full_bg">
      
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
                                <li><a href="index1.php">Home</a>
                                    <!--<ul class="sub-menu">
                                        <li><a href="index.html">Home</a></li>
                                    
                                    </ul>-->
                                </li>
                                <li ><a href="about.html">About</a></li>
                                <li><a href="service.html">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="Weather Folder/weather.html">Wether Forcast</a></li>
                                        <li><a href="https://www.india.gov.in/topics/agriculture">Government Polices</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="current-list-item"><a href="#">Blog</a>
                                   <!-- <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        
                                    </ul>-->
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="shop/shopwithoutlogin.php">Shop</a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="login_form.php">Cart</a></li>
                                    </ul>
                                </li>
                                <li>                                   
                                  <li ><a href="login_form.php">Login</a></li>
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
    </div>
    <!-- news -->
    <div class="news">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage text_align_left">
        
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <?php include 'bloogwithoutlogin.php'; ?>
      </div>
    </div>
    <!-- end news -->
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
                  <li><a href="index1.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="service.html">Service</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 text_align_left">
                <h3>Recent Posts</h3>
                <ul class="recent">
                  <li>
                    <img src="images/modern.jpg" alt="#" />Modern farmer - Farm.Food.life
                  </li>
                  <li>
                    <img src="images/nat.jpg" alt="#" />The National Sustainable Agriculture Coalition is an alliance of grassroots organizations that advocates for federal policy reform to advance the sustainability of agriculture.
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="hedingh3 flot_right text_align_left">
                <h3>Contact</h3>
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
