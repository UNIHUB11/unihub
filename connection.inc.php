<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "unihub";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect to database: " . $conn->connect_error);
}
?>
