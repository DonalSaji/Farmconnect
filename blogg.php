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

// Fetch blog posts from the database
$sql = "SELECT * FROM blog_posts ORDER BY date DESC ";
$result = $connection->query($sql);

// Check if there are any blog posts
if ($result->num_rows > 0) {
    // Counter for tracking the number of posts displayed
    $post_count = 0;
    
    // Output opening row div
    echo "<div class='row'>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Output each blog post
        echo "<div class='col-md-4'>";
        echo "<div class='latest'>";
        echo "<figure><img src='images/{$row['img']}' alt='#' width=250px heigth=250px/></figure>";
        echo "<span>{$row['date']}</span>";
        echo "<div class='nostrud'>";
        echo "<a href='single-post.php?id={$row['id']}'><h3>{$row['title']}</h3></a>";
        echo "<p>{$row['sub']}</p>";
        echo "<a class='read_more' href='single-post.php?id={$row['id']}'>Read More</a>";
        echo "</div></div></div>";
        
        // Increment post count
        $post_count++;
        
        // Check if three posts have been displayed
        if ($post_count % 3 == 0) {
            // Close current row div and output opening row div
            echo "</div><div class='row'>";
        }
    }
    
    // Output closing row div
    echo "</div>";
} else {
    echo "0 results";
}

// Close connection
$connection->close();
?>
