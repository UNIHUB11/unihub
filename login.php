<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('connection.inc.php');
include_once 'functions.inc.php';
session_start();
$msg = '';

// Handle form submission
if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Customer login
        $email = get_safe_value($conn, $_POST['email']);
        $password = get_safe_value($conn, $_POST['password']);

        // Check if email and password are provided
        if (empty($email) || empty($password)) {
            $msg = "<span style='font-size: 24px;'>Both email and password are required.</span>";
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
                    $msg = "<span style='font-size: 40px; color: green;'>Login successful! Redirecting...&#9203</span>";
                    // Redirect after a short delay to show the success message
                    header("refresh:3;url=index.php");
                } else {
                    $msg = "<span style='font-size: 24px; color: red;'>Incorrect password.</span>";
                }
            } else {
                $msg = "<span style='font-size: 40px; color: red;'>User not found. Please register first.</span>";
            }

            $checkUser->close();
        }
    } elseif (isset($_POST['user']) && isset($_POST['passcode']) && isset($_POST['role'])) {
        // Merchant/Admin login
        $user = get_safe_value($conn, $_POST['user']);
        $passcode = get_safe_value($conn, $_POST['passcode']);
        $role = get_safe_value($conn, $_POST['role']);

        error_log("Attempting to authenticate user: $user with role: $role");
        $authenticatedUser = authenticateUser($user, $passcode, $role, $conn);

        if ($authenticatedUser) {
            $_SESSION['user_id'] = $authenticatedUser['id'];
            $_SESSION['user_email'] = $authenticatedUser['user_email'];
            $_SESSION['user_role'] = $authenticatedUser['role'];

            // Debugging output
            error_log("Authenticated user: " . print_r($authenticatedUser, true));
            error_log("Session variables set: " . print_r($_SESSION, true));

            // Redirect based on user role
            if ($role === 'admin') {
                header("Location: admin_dashboard.php");
                exit();
            } elseif ($role === 'merchant') {
                header("Location: merchant_dashboard.php");
                exit();
            } else {
                $msg = "Invalid role.";
            }
        } else {
            $msg = "Invalid email, password, or role.";
        }
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
    <link rel="icon" href="Logo with bg.png" type="image/x-icon">
    <link rel="stylesheet" href="Sign.css" />
    <link href="Stylessheet.css" rel='stylesheet' type='text/css' media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="fonts.css" rel="stylesheet">
    <script src="Sign.js" type="text/javascript"></script>
    <style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
.container {
    display: flex;
    justify-content: center; /* Center align the child elements horizontally */
  }
@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }

  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
</head>
<body>
    <h1 class="header-w3ls"><a href="index.php"><img src="Logo.png" style="height: 80px; width: 150px;"></a> Login</h1>
    <?php if (!empty($msg)) { echo '<div style="text-align: center;">' . $msg . '</div>'; } ?>
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
                        <h4>Management Login</h4>
                    </div>
                    <div class="form-left-w3l">
                        <input type="email" name="user" placeholder="User" required>
                    </div>
                    <div class="form-right-w3ls">
                        <input type="password" name="passcode" placeholder="Passcode" required>
                    </div>
                    <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="merchant">Merchant</option>
                <option value="admin">Admin</option>
            </select>
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
</body>
</html>
