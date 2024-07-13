 <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['user_id'];
$query=mysqli_query($db,"SELECT * FROM admin where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <!DOCTYPE html>
<html lang="en-US">
  <head>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- fevicon -->
    <link rel="shortcut icon" type="image/png" href="images/logo.jpg">
    <!-- Tweaks for older IEs-->
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
   .fc{
    color:black;
    padding:10px;
    
   }
   
   
.user{
    display:inline-block;
    width:150px;
    height:150px;
    border-radius:50%;
   
    background-repeat:no-repeat;
    background-position:center center;
    background-size:cover;
}


.user img{
  width:150px;
  height:150px;
  border-radius: 100%;
  border: 2px solid black;
}
.use .round{
  position: absolute;
  bottom: 0;
  right: 0;
  background: #00B4FF;
  width: 32px;
  height: 32px;
  line-height: 33px;
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
  
}


.user input[type = "file"]{
  position: absolute;
  transform: scale(2);
  opacity: 0;
}

input[type=file]::-webkit-file-upload-button{
    cursor: pointer;
}
.stickyI {
  padding: 10px;
  text-align: center;
  width: 100%;
  position: fixed;
  top: 0px;
}
label{font-weight:bold;}
.pad{
  padding:100px;
}
    </style>
  <!-- body -->
  <body class="main-layout">
    <!-- loader  -->
    
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
                            
                                <img src="../images/logo1.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="../index2.php">Home</a>
                                    <!--<ul class="sub-menu">
                                        <li><a href="index.html">Home</a></li>
                                    
                                    </ul>-->
                                </li>
                                <li ><a href="../about1.php">About</a></li>
                                <li><a href="../service1.php">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="Weather Folder/weather.html">Wether Forcast</a></li>
                                        <li><a href="https://www.india.gov.in/topics/agriculture">Government Polices</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="../blog.php">Blog</a>
                                   <!-- <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        
                                    </ul>-->
                                </li>
                                <li><a href="../contact1.php">Contact</a></li>
                                <li><a href="../shop/index.php">Shop</a>
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
                                        <li><a href="../logout.php"> Logout</a></li>
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
   <center>
    <div class="pad">
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
        <div class="cv" >
        <div class=user>
        <img src="images/<?=$row['image']?>"><br><i class="fa fa-camera" aria-hidden="true"></i>
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png"> 
          
        
</div>
</div><br>

          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['name']; ?>" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your Email" value="<?php echo $row['email']; ?>" required />
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" style="width:20em;" placeholder="Enter your Phone" value="<?php echo $row['phone']; ?>" required />
          </div>
          
          
          
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['address']; ?>"></textarea>
          </div>
          <div class="form-group">
            <label>Pin</label>
            <input type="text" class="form-control" name="pin" style="width:20em;" placeholder="Enter your Pin" value="<?php echo $row['pin']; ?>" required />
          </div>
          <div class="form-group">
            <input type="submit" name="SUBMIT" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
           
</div>
           </center>
          </div>
        </form>
      </div>
</div>
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
      <?php
      if(isset($_POST['SUBMIT'])){
        $name = $_POST['fname'];
        $phone= $_POST['phone'];
        $pin = $_POST['pin'];
        $email = $_POST['email'];
        $image=$_POST['image'];
    
        $address = $_POST['address'];
      $query = "UPDATE admin SET name = '$name', 
      email= '$email',
      pin= '$pin', phone='$phone',image='$image',

                       address = '$address'
                      WHERE id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "../index2.php";
        </script>
        <?php
             }               
?>  