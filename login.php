<?php
// Start the session
session_start();

// Dummy user credentials (replace with actual database validation)
$valid_username = "admin";
$valid_password = "123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct
    if ($username == $valid_username && $password == $valid_password) {
        // Set session variables
        $_SESSION['username'] = $username;

        // Redirect to a dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // If login fails
        echo "Invalid username or password.";
    }
}
?>
