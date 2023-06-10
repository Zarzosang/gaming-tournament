<?php
// Retrieve form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$game = $_POST['game'];

// Establish database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "gaming_tournament";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the registrations table
$sql = "INSERT INTO registrations (full_name, email, game) VALUES ('$fullName', '$email', '$game')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
