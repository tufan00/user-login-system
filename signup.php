<?php
// Include database connection file
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (email, mobile, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $mobile, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        echo "Sign up successful!";
        header("Location: index.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
