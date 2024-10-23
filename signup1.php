<?php
// Include database connection file
include 'connect.php';

// Check if the form is submitted
if (isset($_POST['signup'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for security

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // If email already exists, show an error message
        echo "Email Address Already Exists!";
    } else {
        // Insert the new user into the database
        $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            // Redirect to the home page on successful registration
            header("Location: login.php");
            exit(); // Always call exit after header redirection
        } else {
            // Show an error message if the insertion fails
            echo "Error: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
