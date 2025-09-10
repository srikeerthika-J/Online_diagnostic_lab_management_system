<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/term.css">
    
</head>

<?php
   include("header.php");
?>

<?php
session_start();
include("dbconfig.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Fetch user bookings
$booking_sql = "SELECT * FROM bookings WHERE user_id = '$user_id' ORDER BY booking_date DESC";
$booking_result = mysqli_query($connection, $booking_sql);

// Fetch test results
$test_sql = "SELECT * FROM test_results WHERE user_id = '$user_id' ORDER BY test_date DESC";
$test_result = mysqli_query($connection, $test_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <style>
        .dash {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            padding-top: 100px;
        }
        .dashboard {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <section class="dash">
    <div class="dashboard">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
    </section>
</body>
</html>

<?php
    include("footer.php");
?>