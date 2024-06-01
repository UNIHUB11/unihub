<?php
function get_safe_value($conn, $str) {
    if ($str != '') {
        $str = trim($str);
        return mysqli_real_escape_string($conn, $str);
    }
    return '';
}

function authenticateUser($user, $passcode, $role, $conn) {
    // Determine the table and role field based on the provided role
    $table = '';
    $roleField = '';
    if ($role === 'merchant') {
        $table = 'merchants';
        $roleField = 'merchant_role';
    } elseif ($role === 'admin') {
        $table = 'admins';
        $roleField = 'admin_role';
    } else {
        error_log("Invalid role provided: " . $role);
        return null; // Invalid role
    }

    // Prepare and execute the query
    $query = "SELECT id, user_email, user_password, $roleField FROM $table WHERE user_email = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists and password matches
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            error_log("User found: " . print_r($row, true));
            if ($passcode === $row['user_password']) {
                return $row; // Return user details if authentication is successful
            } else {
                error_log("Password verification failed for user: " . $user);
            }
        } else {
            error_log("No user found with email: " . $user);
        }
        $stmt->close();
    } else {
        // Log the error message
        error_log("Prepare failed: " . $conn->error);
    }

    return null; // Return null if authentication fails
}
?>
