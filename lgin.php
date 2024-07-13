<?php
// Connect to the database
$servername = "localhost";
$username = "db_user";
$password = "db_password";
$dbname = "db_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  // Hash the password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user into the database
  $sql = "INSERT INTO users (username, email, password)
          VALUES ('$username', '$email', '$password')";
  mysqli_query($conn, $sql);

  // Redirect to the login page
  header("Location: login.php");
  exit;
}
?>
