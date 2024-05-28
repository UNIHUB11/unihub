<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('connection.inc.php');
require('functions.inc.php');
session_start();
$msg = '';

// Handle form submission
if (isset($_POST['login'])) {
    $email = get_safe_value($conn, $_POST['email']);
    $password = get_safe_value($conn, $_POST['password']);

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        $msg = "Both email and password are required.";
    } else {
        // Check if the user exists in the database
        $checkUser = $conn->prepare("SELECT * FROM registration WHERE email = ?");
        if (!$checkUser) {
            die("Prepare failed: " . $conn->error);
        }
        $checkUser->bind_param("s", $email);
        $checkUser->execute();
        $result = $checkUser->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Password is correct, set session and redirect
                $_SESSION['USER_LOGIN'] = 'yes';
                $_SESSION['USER_ID'] = $row['id'];
                $_SESSION['USER_NAME'] = $row['firstName'] . ' ' . $row['lastName'];
                $msg = "Login successful! Redirecting...";
                // Redirect after a short delay to show the success message
                header("refresh:3;url=main.php");
            } else {
                $msg = "Incorrect password.";
            }
        } else {
            $msg = "User not found. Please register first.";
        }

        $checkUser->close();
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UNI HUB LOGIN</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Login Form" />
    <link rel="icon" href="images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/W3Sign.css" />
    <link href="css/Stylessheet.css" rel='stylesheet' type='text/css' media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="fonts.css" rel="stylesheet">
    <script src="js/W3Sign.js" type="text/javascript"></script>
</head>
<body>
    <h1 class="header-w3ls"><a href="index.php"><img src="Logo.png" style="height: 80px; width: 150px;"></a> Login</h1>
    <div class="mid-cls">
        <div class="swm-right-w3ls">
            <form action="login.php" method="post">
                <div class="main">
                    <div class="icon-head-wthree">
                        <h4>Customer Login</h4>
                    </div>
                    <div class="form-left-w3l">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-right-w3ls">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="btnn">
                        <button type="submit" name="login">Login</button><br>
                        <a href="#" class="for">Forgot password?</a>
                    </div>
                </div>
            </form>
            <div class="header-side">
                <h4>Or Login With</h4>
                <div class="buttom-social-grids">
                    <ul>
                        <li><a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://myaccount.google.com/"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="swm-right-w3ls">
            <form action="login.php" method="post">
                <div class="main">
                    <div class="icon-head-wthree">
                        <h4>Merchant Login</h4>
                    </div>
                    <div class="form-left-w3l">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-right-w3ls">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="btnn">
                        <button type="submit" name="login">Login</button><br>
                        <a href="#" class="for">Forgot password?</a>
                    </div>
                </div>
            </form>
            <div class="header-side">
                <h4>Or Login With</h4>
                <div class="buttom-social-grids">
                    <ul>
                        <li><a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://myaccount.google.com/"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="btnn">
            <h4 align="center">No Account?<button type="submit"><a href="Signup.php">Sign-Up</a></button></h4>
        </div>
    </div>
    <?php if (!empty($msg)) { echo '<p style="color:red; text-align:center;">' . $msg . '</p>'; } ?>
</body>
</html>
