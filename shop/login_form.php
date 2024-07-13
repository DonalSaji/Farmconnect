<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

  
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
  

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
 

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id']=$row['id'];
         $_SESSION['user_email']=$row['email'];
         $_SESSION['user_phone']=$row['phone'];
         $_SESSION['user_address']=$row['address'];
         $_SESSION['user_pin']=$row['pin'];
         header('location:index.php');

      
     
   }else{
      $error[] = 'incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="shortcut icon" type="image/png" href="../images/logo.jpg">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="cs/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <select name="user_type" required>
         <option value="">Select User Type</option>
         <option value="user">User</option>
         <option value="co_admin">Co-Admin</option>
      </select>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>