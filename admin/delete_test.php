<?php
include('dbconfig.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Ensure the query is correct
    $query = "DELETE FROM lab_tests WHERE id = '$id'";

    if (mysqli_query($con, $query)) {
        echo 'success';
    } else {
        echo 'failure';
    }
} else {
    echo 'failure';
}
?>
