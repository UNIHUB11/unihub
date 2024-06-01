<?php
require('connection.inc.php'); // Include database connection file
require('functions.inc.php'); // Include functions file for utility functions
session_start(); // Start the session
$msg = ''; // Initialize the message variable

if (isset($_POST['signUp'])) { // Check if the signup form is submitted
    // Get form data and sanitize using the get_safe_value function
    $firstName = get_safe_value($conn, $_POST['firstName']);
    $lastName = get_safe_value($conn, $_POST['lastName']);
    $email = get_safe_value($conn, $_POST['email']);
    $password = get_safe_value($conn, $_POST['password']);

    // Check if all fields are filled
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        $msg = "All fields are required.";
    } else {
        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Check if email already exists in the database
        $checkEmail = $conn->prepare("SELECT * FROM registration WHERE email = ?");
        if (!$checkEmail) {
            die("Prepare failed: " . $conn->error);
        }
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $result = $checkEmail->get_result();

        if ($result->num_rows > 0) {
            $msg = "Email Address Already Exists!";
        } else {
            // Insert new user into the database
            $insertQuery = $conn->prepare("INSERT INTO registration (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
            if (!$insertQuery) {
                die("Prepare failed: " . $conn->error);
            }
            $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

            if ($insertQuery->execute()) {
                $msg = "User registered successfully!";
                // Uncomment the following line to redirect after successful registration
                header("Location: index.php");
                exit();
            } else {
                $msg = "Error: " . $insertQuery->error;
            }
        }

        $checkEmail->close(); // Close the prepared statement
    }
}

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>UNI HUB SIGNUP </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Stunning sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
    <link rel="icon" href="Logo with bg.png" type="image/x-icon">
	<script>
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
		<!-- font-awesome icons -->
	<link rel="stylesheet" href="s2.css" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="s1.css" rel='stylesheet' type='text/css' media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!--//style sheet end here-->

<link href="s3.css" rel="stylesheet">
</head>

<body>
<script src="s1.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-98H8KRKT85');
</script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="Stylesbg.css">
<!-- New toolbar-->
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
	<h1 class="header-w3ls">
		 Sign-Up </h1>
		<!---728x90--->

			<div class="mid-cls">
			<!---728x90--->
 <div class="swm-left-w3ls">
 <form action="Signup.php" method="post">
    <div class="main">
        <div class="icon-head-wthree">
            <h4>Sign Up</h4>
        </div>
        <div class="form-left-to-w3l">
            <input type="text" name="firstName" placeholder="First Name" required="">
        </div>
        <div class="form-left-to-w3l">
            <input type="text" name="lastName" placeholder="Last Name" required="">
        </div>
        <div class="form-left-w3l">
            <input type="email" name="email" placeholder="Email" required="">
        </div>
        <div class="form-right-w3ls ">
            <input type="password" name="password" placeholder="Password" required="">
        </div>
        <div class="btnn">
            <button type="submit" name="signUp">Sign Up</button><br>
            <div class="clear"></div>
        </div>
    </div>
</form>

		<div class="col-md-2 header-side">
		<h4>Or Signup With</h4>
        <div class="buttom-social-grids">
            <ul>
              <li><a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://myaccount.google.com/"><i class="fab fa-google"></i></a></li>
            </ul>
        </div><?php if (!empty($msg)) : ?>
                        <div><?php echo $msg; ?></div>
                    <?php endif; ?>
        
			</div>
        </div>
        <div class="my-custom-class">
        <div class="container">
            <div class="btnn">
              <h4 align="center">Have Account?<button type="submit"><a href="login.php">Login</a></button></h4>
            </div>
            </div>
        </div>
</div>
</body>
</html>