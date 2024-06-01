<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include required files
require('connection.inc.php');
require('functions.inc.php');

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Assuming you have a role selection in your form

    $user = authenticateUser($email, $password, $role, $conn);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['user_email'];
        $_SESSION['user_role'] = $user['user_role'];
        
        // Redirect based on user role
        if ($role === 'admin') {
            header("Location: admin_dashboard.php");
        } elseif ($role === 'merchant') {
            header("Location: merchant_dashboard.php");
        } else {
            $msg = "Invalid role.";
        }
        exit();
    } else {
        $msg = "Invalid email, password, or role.";
    }
}
?>
