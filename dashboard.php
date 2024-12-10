<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}

// Display a welcome message
echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
echo "<p>You are logged in.</p>";
echo "<a href='logout.php'>Logout</a>";
?>
