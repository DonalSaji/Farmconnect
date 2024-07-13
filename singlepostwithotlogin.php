<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmConnect Post</title>
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 15px; /* Smaller padding */
        }
        .container {
            flex: 1;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post img {
            width: 100%;
            height: auto;
            max-width: 1280px;
            border-radius: 8px;
            margin-bottom: 20px;
            object-fit: cover;
        }
        .post {
            text-align: center;
        }
        .post h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .post h5 {
            font-size: 1.25rem;
            margin-bottom: 20px;
            color: #6c757d;
        }
        .post p {
            font-size: 1.125rem;
            line-height: 1.6;
            text-align: justify;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="blogwithoutlogin.php">Back to Home</a>
    </div>
</nav>

<div class="container">
    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farmconnect";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Check if the post ID is provided in the URL
    if (isset($_GET['id'])) {
        $post_id = $_GET['id'];

       
        // Fetch the specific blog post and author from the database based on the post ID
        $sql = "SELECT bp.*, u.name AS author_name 
                FROM blog_posts bp 
                LEFT JOIN user u ON bp.user_id = u.id 
                WHERE bp.id = ?";
        
        $stmt = $connection->prepare($sql);
        if (!$stmt) {
            echo "<p>Debug: Prepare failed: " . $connection->error . "</p>";
        } else {
            $stmt->bind_param('i', $post_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Display the post details
                $row = $result->fetch_assoc();
                echo "<div class='post'>";
                echo "<h2>{$row['title']}</h2>";

                
                // Convert date to display month name
    $date = date_create($row['date']);
    $formatted_date = date_format($date, 'F j, Y'); // Format date with month name (e.g., "July 10, 2024")
    
    echo "<p>Date: $formatted_date</p>"; // Display formatted date with month name
                echo "<p>Author: " . (!empty($row['author_name']) ? $row['author_name'] : "Unknown") . "</p>";
                echo "<h5>Subject: {$row['sub']}</h5>";
                echo "<div class='text-center'>";
                echo "<img src='images/{$row['img']}' class='img-fluid' alt='#' />";
                echo "<p>{$row['content']}</p>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger'>Post not found.</div>";
            }
        }
    } else {
        echo "<div class='alert alert-danger'>Post ID not provided.</div>";
    }

    // Close connection
    $connection->close();
    ?>
</div>

<div class="footer">
    &copy; 2024 FarmConnect. All rights reserved.
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
