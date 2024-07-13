<?php require_once('header.php'); ?>

<section class="content-header">
	<h1>Dashboard</h1>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM category");
$statement->execute();
$total_category = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM product");
$statement->execute();
$total_product = $statement->rowCount();


$statement = $pdo->prepare("SELECT * FROM user WHERE user_type='user'");
$statement->execute();
$total_customers= $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM user WHERE user_type='co-admin'");
$statement->execute();
$total_coadmin= $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM subscriber WHERE subs_active='1'");
$statement->execute();
$total_subscriber = $statement->rowCount();

// $statement = $pdo->prepare("SELECT * FROM tbl_shipping_cost");
// $statement->execute();
// $available_shipping = $statement->rowCount();

// $statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
// $statement->execute(array('Completed'));
// $total_order_completed = $statement->rowCount();

// $statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE shipping_status=?");
// $statement->execute(array('Completed'));
// $total_shipping_completed = $statement->rowCount();

// $statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
// $statement->execute(array('Pending'));
// $total_order_pending = $statement->rowCount();

// $statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=? AND shipping_status=?");
// $statement->execute(array('Completed','Pending'));
// $total_order_complete_shipping_pending = $statement->rowCount();
?>

<section class="content">
<div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php echo $total_product; ?></h3>
                  
                  <p>Products</p>
                </div>
                <div class="icon">
                  <a href="product.php"><i class="ionicons ion-android-cart"></i></a>
                </div>
                
              </div>
            </div>
            <!-- <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-maroon">
                <div class="inner">
                	<h3>0</h3>
                  <h3><?php echo $total_order_pending; ?></h3>

                  <p>Pending Orders</p>
                </div>
                <div class="icon">
                  <a href="order.php"><i class="ionicons ion-clipboard"></i></a>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                	<h3>0</h3>
                  <h3><?php echo $total_order_completed; ?></h3>

                  <p>Completed Orders</p>
                </div>
                <div class="icon">
                  <a href="order.php"><i class="ionicons ion-android-checkbox-outline"></i></a>
                </div>
               
              </div>
            </div> -->
           
			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
				  <div class="inner">
					<h3><?php echo $total_customers; ?></h3>
  
					<p>Total Customers</p>
				  </div>
				  <div class="icon">
				  	<a href="customer.php">
					<i class="ionicons ion-person-stalker"></i></a>
				  </div>
				  
				</div>
			  </div>

			   
			  
			  <div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-olive">
				  <div class="inner">
					<h3><?php echo $total_category; ?></h3>
  
					<p>Categories</p>
				  </div>
				  <div class="icon">  <a href="top-category.php">
					<i class="ionicons ion-arrow-up-b"></i></a>
				  </div>
				  
				</div>
			  </div>
<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
				  <div class="inner">
					<h3><?php echo $total_subscriber; ?></h3>
  
					<p>Subscriber</p>
				  </div>
				  <div class="icon"> <a href="subscriber.php">
					<i class="ionicons ion-person-add"></i></a>
				  </div>
				  
				</div>
			  </div>


		  
</section>

<?php require_once('footer.php'); ?>