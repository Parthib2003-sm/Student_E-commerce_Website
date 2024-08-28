<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Change this if necessary
$password = ""; // Change this if necessary
$database = "myapp_db"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
