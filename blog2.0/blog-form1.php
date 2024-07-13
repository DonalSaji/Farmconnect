
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
            <form method="POST" action="blog-form.php">
                <h3>Fill out All Details</h3>
                <div class="form-group">
                    <input type="text" placeholder="Title" name="title" id="titile" class="form-control" required/>
                </div>                
                <div class="form-wrapper">
                    <textarea required placeholder="Enter the description" id="content" name="content" class="form-control"></textarea>
                </div>
                <div class="form-wrapper"><label style="width:5em;">Upload</label>
                    <input type="file" title="upload" name="img" id="img" class="form-control" required/>
                </div>

                <input type="submit" name="submit" value="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0">
            </form>
        </div>
    </div>
    </body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmconnect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $date = date("Y-m-d H:i:s");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $img = $_FILES['img']['name'];
    $target = "uploads/" . basename($img);

    $sql = "INSERT INTO blog_posts (date, title, content, img) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $date, $title, $content, $img);

    if ($stmt->execute()) {
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "The file " . basename($img) . " has been uploaded.";
            ?><script type="text/javascript">
            alert("Update Successfull.");
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
</html>
