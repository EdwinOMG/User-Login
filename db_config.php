<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
