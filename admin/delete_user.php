<?php
include('dbconfig.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($con, $id);

    // Delete query
    $delsql = mysqli_query($con, "DELETE FROM tbl_register WHERE id='$id'");

    if ($delsql) {
        // Successful delete: Return success message in JavaScript
        echo '<script>
                alert("Deleted successfully");
                window.location.href="user.php"; // Redirect back to the BOOKING LIST page
              </script>';
    } else {
        // Failed delete: Return error message in JavaScript
        echo '<script>
                alert("Failed to delete. Please try again.");
                window.location.href="user.php"; // Redirect back to the BOOKING LIST page
              </script>';
    }
}
