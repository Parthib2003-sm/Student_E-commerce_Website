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
        $sql = "INSERT INTO students (username, password) VALUES ('$username', '$hashedPassword')";
    } elseif ($userType == "teacher") {
        $sql = "INSERT INTO teachers (username, password) VALUES ('$username', '$hashedPassword')";
    }

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        $_SESSION["registrationSuccess"] = "Registration successful. Please log in.";
        header("Location: login.html"); // Redirect to login page
        exit();
    } else {
        $_SESSION["registrationError"] = "Registration failed. Please try again.";
        header("Location: register.html"); // Redirect to registration page
        exit();
    }
} else {
    // Redirect to registration page if form was not submitted
    header("Location: register.html"); // Redirect to registration page
    exit();
}

