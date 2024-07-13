<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or show a message
    header("Location: ../login-form.php");
    exit();
}

// Include database connection
$conn=mysqli_connect( "localhost", "root","", "farmconnect" ); 

// Check if the form is submitted
if (isset($_POST['add_to_cart'])) {
    // Get the user ID
    $user_id = $_SESSION['user_id'];
    // Get the product ID and quantity from the form
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Insert into the cart table
    $sql = "INSERT INTO cart (id, product_id, qty) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $user_id, $product_id, $quantity);
    $stmt->execute();
    $stmt->close();

    // Redirect the user to the cart page or show a message
    header("Location: cart.php");
    exit();
}
?>
