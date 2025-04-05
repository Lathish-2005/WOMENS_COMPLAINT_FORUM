<?php
$host = "127.0.0.1";  // Server (localhost for local development)
$user = "root";  // Default MySQL username
$password = "";  // Leave empty for XAMPP, or add your MySQL password if set
$dbname = "womens_complaints";  // Name of your database

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname, 3307);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
