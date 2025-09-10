<?php
$host = "localhost"; 
$dbuser = "root"; 
$dbpwd = ""; 
$dbname = "lab_project"; 

$connection = mysqli_connect($host, $dbuser, $dbpwd, $dbname);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>

<?php
$host = "localhost";
$user = "root"; // or your DB username
$pass = ""; // or your DB password
$dbname = "lab_project"; // replace with your actual database name

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
