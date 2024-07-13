<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'],$_SESSION['user_id'],$_SESSION['user_email'],$_SESSION['user_phone'],$_SESSION['user_address'],$_SESSION['user_pin'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
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
    <!-- bootstrap --> 
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        
        <!-- mean menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="css/main.css">
        
  </head>
  <style>/* CSS for NavBar */
  body{
    background-image:url('images/pro.jpg');
    background-size:cover;
  }
  .pro{
    padding:150px;
    
  }
  .cv{
    
    background-color:rgba(255,252,253,0.50);
    border-radius:10px;
    width:350px;
    height:550px;
   
  }
  label{
    font-size:18px;
  }
  .sub{
    text-align:center;
  }
 

  input[type=submit]{
    background-color:green;
    width:110px;
    height:50px;
  }
  

  td{padding:5px;}
.stickyI {
  padding: 10px;
  text-align: center;
  width: 100%;
  position: fixed;
  top: 0px;
}
.user{
    display:inline-block;
    width:150px;
    height:150px;
    border-radius:50%;
    background-image:url('images/pro.jpg');
    background-repeat:no-repeat;
    background-position:center center;
    background-size:cover;
}

.use img{
  border-radius: 50%;
  border: 8px solid #DCDCDC;
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
    </style>
  <!-- body -->
  <body class="main-layout">
   
     
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
                                <li><a href="blog1.php">Blog</a>
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
            
            <div class=pro width=10% height=10%>
    <center>
        <div class="cv" ><br><br>
        <div class=user>
        
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
      
        
</div>
</div>
</center>
</div>



<div class="content py-5 mt-3">
    <div class="container">
        <div class="card card-outline card-dark shadow rounded-0">
            <div class="card-header">
                <h4 class="card-title"><b>Manage Account Details/Credentials</b></h4>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form id="register-frm" action="" method="post">
                        <input type="hidden" name="id" value="<?= isset($id) ? $id : "" ?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" autofocus class="form-control form-control-sm form-control-border" value="<?= isset($user_name) ? $user_name : "" ?>" required>
                                <small class="ml-3">First Name</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="middlename" id="middlename" placeholder="Enter Middle Name (optional)" class="form-control form-control-sm form-control-border" value="<?= isset($middlename) ? $middlename : "" ?>">
                                <small class="ml-3">Middle Name</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" class="form-control form-control-sm form-control-border" required value="<?= isset($lastname) ? $lastname : "" ?>">
                                <small class="ml-3">Last Name</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select name="gender" id="gender" class="custom-select custom-select-sm form-control-border" required>
                                    <option <?= isset($gender) && $gender == 'Male' ? "selected" : "" ?>>Male</option>
                                    <option <?= isset($gender) && $gender == 'Female' ? "selected" : "" ?>>Female</option>
                                </select>
                                <small class="ml-3">Gender</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="contact" id="contact" placeholder="Enter Contact #" class="form-control form-control-sm form-control-border" required value="<?= isset($contact) ? $contact : "" ?>">
                                <small class="ml-3">Contact #</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                            <small class="ml-3">Address</small>
                            <textarea name="address" id="address" rows="3" class="form-control form-control-sm rounded-0" placeholder="Block 6 Lot 23, Here Subd., There City, Anywhere, 2306"><?= isset($address) ? $address : "" ?></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" id="email" placeholder="jsmith@sample.com" class="form-control form-control-sm form-control-border" required value="<?= isset($email) ? $email : "" ?>">
                                <small class="ml-3">Email</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                <input type="password" name="password" id="password" placeholder="" class="form-control form-control-sm form-control-border">
                                <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                                </div>
                                </div>
                                <small class="ml-3">New Password</small>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                <input type="password" id="cpassword" placeholder="" class="form-control form-control-sm form-control-border">
                                <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                                </div>
                                </div>
                                <small class="ml-3">Confirm New Password</small>
                            </div>
                            <div class="col-12"><small class="text-muted"><em>Fill the password fields above only if you want to update your password.</em></small></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                <input type="password" name="oldpassword" id="oldpassword" placeholder="" class="form-control form-control-sm form-control-border" required>
                                <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                                </div>
                                </div>
                                <small class="ml-3">Current Password</small>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-8">
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-sm btn-flat btn-block">Update Details</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.pass_type').click(function(){
            var type = $(this).attr('data-type')
            if(type == 'password'){
                $(this).attr('data-type','text')
                $(this).closest('.input-group').find('input').attr('type',"text")
                $(this).removeClass("fa-eye-slash")
                $(this).addClass("fa-eye")
            }else{
                $(this).attr('data-type','password')
                $(this).closest('.input-group').find('input').attr('type',"password")
                $(this).removeClass("fa-eye")
                $(this).addClass("fa-eye-slash")
            }
        })
        $('#register-frm').submit(function(e){
            e.preventDefault()
            var _this = $(this)
                    $('.err-msg').remove();
            var el = $('<div>')
                    el.hide()
            if($('#password').val() != $('#cpassword').val()){
                el.addClass('alert alert-danger err-msg').text('Password does not match.');
                _this.prepend(el)
                el.show('slow')
                return false;
            }
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Users.php?f=save_client",
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
                error:err=>{
                    console.log(err)
                    alert_toast("An error occured",'error');
                    end_loader();
                },
                success:function(resp){
                    if(typeof resp =='object' && resp.status == 'success'){
                        location.reload();
                    }else if(resp.status == 'failed' && !!resp.msg){   
                        el.addClass("alert alert-danger err-msg").text(resp.msg)
                        _this.prepend(el)
                        el.show('slow')
                    }else{
                        alert_toast("An error occured",'error');
                        end_loader();
                        console.log(resp)
                    }
                    end_loader();
                    $('html, body').scrollTop(0)
                }
            })
        })
    })
</script>



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
