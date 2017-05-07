<?php
$servername = "localhost";
$username = "woweconomy";
$password = "1234";
$dbname = "woweconomy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>