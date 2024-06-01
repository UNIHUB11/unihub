<?php

require('connection.inc.php');
include_once 'functions.inc.php';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $zipCode = trim($_POST['zipCode']);
    $country = trim($_POST['country']);
    $cardNumber = trim($_POST['card']);
    $expDate = trim($_POST['exp']);
    $cvv = trim($_POST['cvv']);

    // Basic validation
    if (empty($fullName)) {
        $errors[] = "Full Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
    if (empty($city)) {
        $errors[] = "City is required.";
    }
    if (empty($zipCode)) {
        $errors[] = "Zip Code is required.";
    }
    if (empty($country)) {
        $errors[] = "Country is required.";
    }
    if (!preg_match("/^[0-9]{16}$/", $cardNumber)) {
        $errors[] = "Invalid card number.";
    }
    if (!preg_match("/^(0[1-9]|1[0-2])\/?([0-9]{2})$/", $expDate)) {
        $errors[] = "Invalid expiration date. Format: MM/YY";
    }
    if (!preg_match("/^[0-9]{3,4}$/", $cvv)) {
        $errors[] = "Invalid CVV.";
    }

    if (empty($errors)) {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            echo "<span style='font-size: 24px;'>Details already exist. Checkout successful!! Continue Shopping 😊</span>";
            header("refresh:4;url=index.php");

        } else {
            // Insert data into database
            $conn->autocommit(FALSE);

            try {
                // Insert user information
                $stmt = $conn->prepare("INSERT INTO users (full_name, email) VALUES (?, ?)");
                $stmt->bind_param("ss", $fullName, $email);
                $stmt->execute();
                $userId = $stmt->insert_id;
                $stmt->close();

                // Insert shipping details
                $stmt = $conn->prepare("INSERT INTO shipping_details (user_id, address, city, zip_code, country) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("issss", $userId, $address, $city, $zipCode, $country);
                $stmt->execute();
                $stmt->close();

                // Insert payment details
                $stmt = $conn->prepare("INSERT INTO payments (user_id, card_number, exp_date, cvv) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("isss", $userId, $cardNumber, $expDate, $cvv);
                $stmt->execute();
                $stmt->close();

                // Commit transaction
                $conn->commit();
                // Redirect to index.php after successful checkout
                echo "<span style='font-size: 24px;'>Checkout successful!! Continue Shopping 😊</span>";
                header("refresh:2;url=index.php");
                exit(); // Make sure to exit after redirection to prevent further execution
            } catch (Exception $e) {
                // Rollback transaction if something goes wrong
                $conn->rollback();
                echo "Error: " . $e->getMessage();
            }
        }
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css">
    <style>
        body {
    background-image: url('https://www.tradegroup.com/wp-content/uploads/2023/02/cameron-80-1056x767.jpg');
    background-repeat:no-repeat;
    background-size: cover;
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

.container {
    max-width: 800px; /* Adjust the max-width as needed */
    margin: 3% auto;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 3rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.wrapper {
    width: 80%;
    display: flex;
    justify-content: center;
    font-family: "Arimo";
    background-color: $coral;
    -webkit-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    -moz-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    animation: slideRightToLeft 2000ms ease; /* Use slideRightToLeft animation */
}
form {
    width: 100%;

    input {
        width: 100%;
        min-height: 25px;
        border: 0;
        font-size: 1rem;
        letter-spacing: .15rem;
        font-family: "Arimo";
        margin-top: 5px;
        color: $maroon;
        border-radius: 4px;
    }

    label {
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 2px;
        color: $maroon;
    }


.form-control, .btn-primary {
    border-radius: 0.375rem;
}

.form-label {
    margin-bottom: 0.75rem;
}
h1 {
    align-self: center;
}
}
.name {
    justify-content: space-between;
    display: flex;
    width: 100%;

    div {
        width: 70%;
    }
}
.btn-primary {
    background-color: #4a3b76; 
    color: #ffffff;
    border: none; 
    border-radius: 5px; 
    padding: 10px 20px; 
    font-size: 16px; 
    cursor: pointer;
    margin: 5px auto;
}

.btn-primary:hover {
    background-color: #574886; 
}

/* Responsive styles */
@media (min-width: 576px) {
    .container {
        max-width: 90%;
    }
}
@keyframes slideRightToLeft {
    0% {
        transform: translateX(100%); /* Start position: fully off-screen to the right */
    }
    100% {
        transform: translateX(0); /* End position: fully visible */
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 80%;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 50%;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 800px;
    }
}
    </style>
</head>
<body>
    <div class="wrapper">
    <div class="container">
        <h1 class="mb-4">Checkout</h1>
        <form id="shippingForm" method="POST" action="checkout.php">
            <div class="mb-5">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="mb-5">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-5">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
                </div>
                <div class="col-md-6 mb-5">
                    <label for="zipCode" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Enter your zip code" required>
                </div>
            </div>
            <div class="mb-5">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" required>
            </div>
            <div class="mb-5">
                <label for="card" class="form-label">Credit Card Number</label>
                <input type="text" class="form-control" id="card" name="card" placeholder="Enter your card number" required>
            </div>
            <div class="mb-5">
                <label for="exp" class="form-label">Expiration Date</label>
                <input type="text" class="form-control" id="exp" name="exp" placeholder="MM/YY" required>
            </div>
            <div class="mb-5">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Enter your CVV" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <button type="button" onclick="window.location.href = 'index.php';" class="btn btn-primary btn-block">Back</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
