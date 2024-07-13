<?php
  include '../connection.php';
  session_start();
$id=$_SESSION['user_id'];
$query=mysqli_query($db,"SELECT * FROM user where id='$id'")or die(mysqli_error($db));
$row=mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="pstyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
            <form method="post" action="#" >
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="images/<?=$row['image']?>" alt="" class="d-block ui-w-80">
                                    
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" name="image" id="image" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control mb-1" name="fname" placeholder="Enter your Fullname" value="<?php echo $row['name']; ?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter your Fullname" value="<?php echo $row['email']; ?>" required />
                                    

                                   <!-- //<?php
                                     // Assuming $email_confirmed is a boolean variable that is true if the email is confirmed
                                       // if (!$email_confirmed) {
                                       // ?>




                                    //<div class="alert alert-warning mt-3">
                                       // Your email is not confirmed. Please check your inbox.<br>
                                       // <a href="javascript:void(0)">Resend confirmation</a>
                                   // </div>

                                    //<?php
                                    //}
                                    ?>!-->

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control mb-1" name="phone" placeholder="Enter your Contact No" value="<?php echo $row['phone']; ?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" required placeholder="Enter your Address" value="<?php echo $row['address']; ?>"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Pin</label>
                                    <input type="text" class="form-control " name="pin"  placeholder="Enter your Pin" value="<?php echo $row['pin']; ?>" required />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="SUBMIT" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
                                </div>
                            </div>
                        </div>

                                       </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container light-style flex-grow-1 container-p-y">
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Submit</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>