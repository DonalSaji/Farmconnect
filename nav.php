
 <head>
    <style>
        /* Style for active menu item */
nav.main-menu ul li.active > a {
  color: #F28123;
}

/* Style for the sub-menu */
.sub-menu a {
    background-color: transparent;
    border: none;
    border-radius: none;
    color: black;
}

/* Ensure sub-menu active items don't inherit the style */
.sub-menu .active a {
    background-color: transparent;
    border: none;
    border-radius: none;
    color: black;
}

    </style>
 </head>
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
<?php

// Define a variable to store the current page name
$current_page = basename($_SERVER['PHP_SELF']);

// Define $user_type and $_SESSION['user_name'], $_SESSION['user_id'] here
?>
                        <!-- menu start -->
                        <nav class="main-menu">
    <ul>
    <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
<li class="<?php echo ($current_page == 'about1.php') ? 'active' : ''; ?>"><a href="about1.php">About</a></li>
<li class="<?php echo ($current_page == 'service1.php') ? 'active' : ''; ?>"><a href="service1.php">Service</a>


            <ul class="sub-menu">
                <li><a href="Weather Folder/weather.html">Weather Forecast</a></li>
                <li><a href="https://www.india.gov.in/topics/agriculture">Government Policies</a></li>
            </ul>
        </li>
        <li class="<?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>"><a href="blog.php">Blog</a>
        
        <?php
                if ($user_type == 'co-admin') {
                    echo "<ul class='sub-menu'>";
                    echo "<li><a href='blog/blog-form.php'>Upload</a></li>";
                    echo "</ul>";
                }
                ?>
            
        </li>
        <li class="<?php echo ($current_page == 'contact1.php') ? 'active' : ''; ?>"><a href="contact1.php">Contact</a></li>
        <li class="<?php echo ($current_page == '/shop/index.php' || $current_page == '/sell/SELL.php' || $current_page == '/shop/checkout.html' || $current_page == '/shop/cart.php') ? 'current-list-item' : ''; ?>">
            <a href="shop/index.php">Shop</a>
            <ul class="sub-menu">
                <?php
                if ($user_type == 'co-admin') {
                    echo "<li><a href='sell/sell.php'>Sell</a></li>";
                }
                ?>
                
                 
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