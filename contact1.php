<?php
session_start();

if(!isset($_SESSION['user_name'], $_SESSION['user_id'])){
   header('location:login_form.php');
}

$message_sent = false;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "dreamepic25@gmail.com";
    $subject = "New Contact Request";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if(mail($to, $subject, $body, $headers)){
        $message_sent = true;
    }
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
<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="full_bg">
        <!-- header nav -->
        <?php 
        $user_type = $_SESSION['user_type'];
        if(isset($_SESSION['user_name'])){ 
            include 'nav.php';
        } else {
            include 'nav.html';
        }
        ?>
        <!-- end header nav -->
    </div>
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <span>Our Contact</span>
                        <h2>Request A Call Back</h2>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <form id="request" class="main_form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Your Name" type="text" name="name" required />
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Phone Number" type="tel" name="phone" required />
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Your Email" type="email" name="email" required />
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="group_btn">
                                    <button type="submit" name="submit" class="send_btn">Send</button>
                                    <button class="send_btn">location</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php if($message_sent): ?>
                        <script>alert('Message Sent Successfully');</script>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.537458475236!2d74.84373401448302!3d12.873124120515355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a499fbec1b5%3A0xe5c391506b7a1a96!2sSt%20Aloysius%20College%20(Autonomous)!5e0!3m2!1sen!2sin!4v1651755587404!5m2!1sen!2sin" width="600" height="430" frameborder="0" style="border: 0; width: 100%" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <!-- Footer content -->
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
                                    <li><a href="about1.html">About</a></li>
                                    <li><a href="service1.html">Service</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="hedingh3 text_align_left">
                                <h3>Recent Posts</h3>
                                <ul class="recent">
                                    <li>
                                        <img src="images/mustard.jpg" alt="#" />The Solvent Extractors’ Association (SEA) has
                                        undertaken a Mustard Mission alongwith Solidaridad to help increase India’s rapeseed
                                        production to 200 lakh tons by 2025.
                                    </li>
                                    <li>
                                        <img src="images/cow.jpg" alt="#" /> US based Corteva Agriscience, has announced the
                                        introduction of a new rice seed brand known as ‘Brevant seeds’ for farmers in India.
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
