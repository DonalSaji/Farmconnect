
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
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php') ? 'current-list-item' : ''; ?>"><a href="index.php">Home</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/about1.php') ? 'current-list-item' : ''; ?>"><a href="about1.php">About</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/service1.php') ? 'current-list-item' : ''; ?>">
            <a href="service1.php">Service</a>
            <ul class="sub-menu">
                <li><a href="Weather Folder/weather.html">Weather Forecast</a></li>
                <li><a href="https://www.india.gov.in/topics/agriculture">Government Policies</a></li>
            </ul>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/blog.php' || $_SERVER['PHP_SELF'] == '/blog/blog-form.php') ? 'current-list-item' : ''; ?>">
            <a href="#">Blog</a>
            <ul class="sub-menu">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="blog/blog-form.php">Upload</a></li>
            </ul>
        </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/contact1.php') ? 'current-list-item' : ''; ?>"><a href="contact1.php">Contact</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/shop/index.php' || $_SERVER['PHP_SELF'] == '/sell/SELL.php' || $_SERVER['PHP_SELF'] == '/shop/checkout.html' || $_SERVER['PHP_SELF'] == '/shop/cart.php') ? 'current-list-item' : ''; ?>">
            <a href="shop/index.php">Shop</a>
            <ul class="sub-menu">
                <li><a href="sell/SELL.php">Sell</a></li>
                <li><a href="shop/index.php">Shop</a></li>
                 
                <li><a href="shop/cart.php">Cart</a></li>
            </ul>
        </li>
        <li>
            <a class="shopping-cart" href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a>Name: <span><?php echo $_SESSION['user_name'] ?></span></a></li>
                <li><a>ID:FC<span><?php echo $_SESSION['user_id'] ?></span></a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
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