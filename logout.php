<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Also clear the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/'); // Expire the session cookie
}

// Redirect to index page after logout so the form will be visible
header("Location: index.php");
exit();
?>
