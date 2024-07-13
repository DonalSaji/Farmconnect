<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="1.css"/>
  <link rel="icon" type="image/png" href="../images/logo.jpg">
</head>
<body>
<a href="../index.php"><img src="../images/logo1.png" alt="Logo" style="position: absolute; top: 15px; left: 15px; width: 250px; height: 100px;"></a>
  <?php
session_start(); // Start the session to access user information

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmconnect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
date_default_timezone_set('Asia/Kolkata');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id']; // Assuming user_id is stored in session
    $date = date("Y-m-d");
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $img = $_FILES['img']['name'];
    $target = "uploads/" . basename($img);

    $sql = "INSERT INTO `blog_posts`(`user_id`, `date`, `title`, `sub`, `content`, `img`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("isssss", $user_id, $date, $title, $subject, $content, $img);

    if ($stmt->execute()) {
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "The file " . basename($img) . " has been uploaded.";
            ?><script type="text/javascript">
            alert("Update Successful.");
            window.location = "../blog.php";
        </script><?php
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="login-box">
<form action="blog-form.php" method="post" enctype="multipart/form-data">
  <h2>BLOG FORM</h2>
    <div class="user-box">
      <input type="text" name="title" id="title" required="">
      <label>TITLE</label>
    </div>
    <div class="user-box">
      <input type="text" name="subject" id="subject" required="">
      <label>SUBJECT</label>
    </div>
    <div class="user-box">
      <textarea name="content" id="content" rows="5" cols="30" required=""></textarea>
      <label>CONTENT</label>
    </div>
    <label style="color: #fff;">IMAGE</label> 
    <div class="user-box">
      <label for="imageUpload"></label>
      <input type="file" name="img" id="imageUpload" required="">
    </div>
    <div class="submit-button">
    <input type="submit" name="submit" value="submit">
    </div>
  </form>
</div>

</body>
</html>
