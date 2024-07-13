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
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
        
         <!-- bootstrap--> 
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        
        <!-- mean menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="css/main.css">
        
    </head>
    
    <!-- body -->
    <body class="main-layout inner_page about_page">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        </div>
        <!-- end loader -->
       
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
        <!-- end banner -->
        <!-- about -->
        <div class="about">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-lg-6 col-md-12">
                        <div class="titlepage text_align_left">
                            <span>About Us</span>
                            <h2>FARMCONNECT</h2>
                            <p>
                                We are the people behind the india's largest agricultural information business. Since 2021
                                we have been trusted source of information to farmers.Today we continue this legacy of quality
                                informatio,while also serving as connection hub for people,ideas and inspiration for the
                                entire agriculture industry.Through our information,events and digital platforms,we bring
                                together the Indian farming community.We keep the agricultural community up-to-date with the
                                latest news and information,and we bring people together to meet,to share and to grow their
                                business.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row d_flex">
                            <div class="col-md-7">
                                <div class="about_img">
                                    <figure><img src="images/farm6.jpg" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="about_img">
                                    <figure><img src="images/farm1.jpg" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->
        <!--  footer -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="hedingh3 text_align_left">
                                <h3>Newsletter</h3>
                                <form id="colof" class="form_subscri">
                                    <input class="newsl" placeholder="Enter Email" type="text" name="Email" />
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
                                    <li><a href="#">About</a></li>
                                    <li><a href="service1.php">Service</a></li>
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
                                        <img src="images/agriculture.jpg" alt="#" />Indian Agriculture in post-reform period
                                    </li>
                                    <li>
                                        <img src="images/iot.jpg" alt="#" />The use of the Internet of Things is the new
                                        technology trend of modern day agriculture.
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
                                    <a href="WEB.html">Dream epic </a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <ul class="social_icon">
                                    <li>
                                        <a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
