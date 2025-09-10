<?php
session_start();
include('dbconfig.php');

if(isset($_POST['login'])) {
    $emp_email = trim($_POST['email']);
    $emp_pwd = trim($_POST['password']);

    // Fetch the hashed password from the database
    $checksql = "SELECT id, username, email, password FROM lab_register WHERE email = ?";
    $stmt = mysqli_prepare($connection, $checksql);
    mysqli_stmt_bind_param($stmt, "s", $emp_email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        session_start();
        $_SESSION['username'] = $email;
        // Verify the password
        if ($emp_pwd === $row['password']) {  // Store password in text format (Not Secure)
            // Regenerate session ID to avoid session fixation
            session_regenerate_id(true);  // Regenerate session ID to prevent session hijacking

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            // Redirect to dashboard
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Incorrect password!";
        }
    } else {
        $_SESSION['login_error'] = "User not found!";
    }

    // Redirect back to login page
    header("Location: index.php");
    exit();
}

mysqli_close($connection);
?>
