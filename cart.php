<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Change this if you have a different username
$password = ""; // Change this if you have a password
$dbname = "unihub"; // Use the unihub database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if (isset($_POST['transmitv_item']) && isset($_POST['amount'])) {
    $item_name = $_POST['transmitv_item'];
    $amount = $_POST['amount'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO cart_items (item_name, amount) VALUES (?, ?)");
    $stmt->bind_param("sd", $item_name, $amount);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Item added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
} else {
    echo "No item data received.";
}

$conn->close();
?>
