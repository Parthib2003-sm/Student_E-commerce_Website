<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    require_once "db_config.php";

    // Get username, password, and user type from form submission
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userType = $_POST["userType"];

    // Sanitize user inputs (prevent SQL injection)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password (you can use a stronger hashing algorithm)
    $hashedPassword = md5($password);

    // Prepare SQL statement based on user type
    if ($userType == "student") {
        $sql = "SELECT * FROM students WHERE username='$username' AND password='$hashedPassword'";
    } elseif ($userType == "teacher") {
        $sql = "SELECT * FROM teachers WHERE username='$username' AND password='$hashedPassword'";
    }

    // Execute SQL query
    $result = mysqli_query($conn, $sql);

    // Check if query returned any rows
    if (mysqli_num_rows($result) == 1) {
        // User authenticated, set session variables and redirect
        $_SESSION["username"] = $username;
        $_SESSION["userType"] = $userType;
        header("Location: googl.com"); // Redirect to dashboard page
        exit();
    } else {
        // Invalid credentials, redirect back to login page with error message
        $_SESSION["loginError"] = "Invalid username or password.";
        header("Location: login.html"); // Redirect to login page
        exit();
    }
} else {
    // Redirect to login page if form was not submitted
    header("Location: login.html"); // Redirect to login page
    exit();
}
?>
