<?php
session_start();
include("dbconfig.php");

// Retrieve form data
$operation = isset($_POST['operation']) ? $_POST['operation'] : null;
$reg_user = trim($_POST['regusername']);
$reg_mail = trim($_POST['regemailid']);
$reg_pwd = trim($_POST['regpassword']); // Password will be stored as plain text

// Check if the email already exists
$checksql = "SELECT * FROM lab_register WHERE email = '$reg_mail'";
$result = mysqli_query($connection, $checksql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['register_error'] = "This email is already registered. Please login.";
    header("Location: index.php"); // Redirect back to index page
    exit();
}

if ($operation === 'insert') {
    // Insert user into database with plain text password
    $insertsql = "INSERT INTO lab_register (username, email, password) 
                  VALUES ('$reg_user', '$reg_mail', '$reg_pwd')";

    if (mysqli_query($connection, $insertsql)) {
        // Fetch the last inserted ID
        $user_id = mysqli_insert_id($connection);

        // Set session for the new user
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $reg_user;
        $_SESSION['email'] = $reg_mail;

        // Redirect to the index page where the dashboard is shown
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['register_error'] = "Registration failed. Please try again.";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['register_error'] = "Invalid operation.";
    header("Location: index.php");
    exit();
}

mysqli_close($connection);
?>
