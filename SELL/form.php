
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css" type="text/css">
    <title>FarmConnect</title>
</head>
<body>
    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="tractor.jpg" alt="image">
            </div>
            <form method="POST">
                <h3>Fill out All Details</h3>
                <div class="form-group">
                    <input type="text" placeholder="Enter the product" name="name" class="form-control" required/>

                    <input type="text" placeholder="Enter the quantity(e.g., 500g or 2kg)" name="qty" class="form-control" required pattern="[0-9]+(g|kg"/>
                </div>

                <div class="form-wrapper">
                    <select name="category" id="mySelect" onchange="myFunction()" class="form-control" data-msg-required="This field is required.">
                        <option value="" disabled selected>Product Category</option>
                        <option value="">-- Choose --</option>
                        <option value="land">Land Rent</option>
                        <option value="machine">Machine Rent</option>
                        <option value="vegetable">Vegetable</option>
                        <option value="fruit">Fruits</option>
                        <option value="seed">Seeds</option>
                        <option value="fertilizer">Fertilizer</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Enter the price" name="price" class="form-control">
                    <input type="text" placeholder="Enter the Retail price" name="rrp" class="form-control">
                   
                </div>  

                <div class="form-wrapper">
                    <textarea required placeholder="Enter the description" name="desc" class="form-control"></textarea>
                </div>

                <div class="form-wrapper"><label style="width:5em;">Upload</label>
                    <input type="file" title="upload" name="image" class="form-control" required/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0">
            </form>
        </div>
    </div>

    <!--js-->

    <script>
        function myFunction() {
            var x = document.getElementById("mySelect").value;
            if(x=== ""){
                alert("Please Choose a Category");
            }
        }
    </script>
    
</body>
                  <?php
                  include 'connection.php';
            if(isset($_POST['submit'])){
            $user_id=$_SESSION['user_id'];
            $name= $_POST['name'];
            $category=$_POST['category'];
            $qty = $_POST['qty'];
            $price = $_POST['price'];
            $rrp = $_POST['rrp'];
            $description = $_POST['desc'];
            $image = $_POST['image'];
            $date =date("Y-m-d H:i:s");
            $sql= "SELECT cat_id FROM category where cat_name='$category'";
            $res=mysqli_query($db,$sql)or die ('Error in updating Database');
            if(mysqli_num_rows($res) > 0){

                $row = mysqli_fetch_array($res);
                $cat_id=$row['cat_id'];
            }
            else{
                ?>
                            <script type="text/javascript">
                        alert("INVALID CATEGORY");
                        window.location = "sell.php";
                    </script>
                            <?php
            }

            $query = "INSERT INTO `product` (`product_name`, `product_image`, `price`, `rrp`, `product_qty`, `product_des`, `cat_id`, `id`, `date_added`) VALUES ('".$name."','".$image."','".$price."','".$rrp."','".$qty."','".$description."','".$cat_id."','".$user_id."','".$date."')";
            mysqli_query($db,$query)or die ('Error in updating Database');
                            ?>
                            <script type="text/javascript">
                        alert("Successfull Added.");
                        window.location = "../index.php";
                    </script>
                            <?php
            }
                  ?>
  