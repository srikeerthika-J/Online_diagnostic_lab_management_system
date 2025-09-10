<?php
session_start();
include('dbconfig.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['username'])) {
    echo "<script>alert('Please login to view your bookings'); window.location.href='index.php';</script>";
    exit();
}

$userEmail = $_SESSION['email'];
$userName = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Bookings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
        }

        .user-booking-container {
            padding: 120px 20px 60px;
            max-width: 1100px;
            margin: auto;
        }

        .booking-wrapper h2 {
            font-weight: 600;
            font-size: 26px;
            color: #333;
            text-align: center;
            margin-bottom: 40px;
        }

        .booking-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .booking-card:hover {
            transform: translateY(-4px);
        }

        .card-header {
            background-color:#003366;
            color: #fff;
            padding: 18px 24px;
            font-size: 18px;
            font-weight: 500;
        }

        .card-body {
            padding: 20px 24px;
        }

        .card-body p {
            margin: 10px 0;
            font-size: 15px;
            color: #444;
        }

        .card-body strong {
            color: #222;
        }

        .status-badge {
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 500;
            background-color: #e0f7fa;
            color: #007b83;
        }

        .btn-primary {
            background-color:#003366;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-primary:hover {
            background-color:#003366;
        }

        .report-link {
            color: #003366;
            font-weight: 500;
            text-decoration: none;
        }

        .report-link:hover {
            text-decoration: underline;
        }

        .no-booking-msg {
            text-align: center;
            padding: 40px;
            font-size: 18px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        }
    </style>
</head>

<body>

<?php include("header.php"); ?>

<div class="user-booking-container">
    <div class="booking-wrapper">
        <h2>Welcome, <?php echo htmlspecialchars($userName); ?>! Here are your bookings:</h2>

        <?php
        $query = "SELECT * FROM lab_booking WHERE email_id = '$userEmail' ORDER BY id DESC";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="booking-card">
                <div class="card-header">
                    Booking ID: #<?php echo $row['id']; ?>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
                    <p><strong>Email:</strong> <?php echo $row['email_id']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $row['number']; ?> &nbsp;&nbsp; | &nbsp;&nbsp; <strong>Age:</strong> <?php echo $row['age']; ?> &nbsp;&nbsp; | &nbsp;&nbsp; <strong>Gender:</strong> <?php echo $row['gender']; ?></p>
                    <p><strong>Address:</strong> <?php echo $row['door_no'] . ', ' . $row['address'] . ', ' . $row['city'] . ', ' . $row['state'] . ' - ' . $row['pincode']; ?></p>
                    <p><strong>Lab:</strong> <?php echo $row['lab']; ?> &nbsp;&nbsp; | &nbsp;&nbsp; <strong>Test:</strong> <?php echo $row['test']; ?></p>
                    <p><strong>Date:</strong> <?php echo $row['date']; ?> &nbsp;&nbsp; | &nbsp;&nbsp; <strong>Time:</strong> <?php echo $row['time']; ?></p>
                    <p><strong>Operator:</strong> <?php echo $row['operator']; ?> &nbsp;&nbsp; | &nbsp;&nbsp; <strong>Status:</strong> 
                        <span class="status-badge"><?php echo $row['cur_status']; ?></span>
                    </p>
                    <p><strong>Report:</strong>
                        <?php if (!empty($row['file'])) { ?>
                            <a href="http://localhost/lab_project/admin/uploads/<?php echo $row['file']; ?>" target="_blank" class="report-link">View Report</a>
                        <?php } else { echo "Not uploaded"; } ?>
                    </p>
                    
                </div>
            </div>
        <?php
            }
        } else {
            echo "<div class='no-booking-msg'>No bookings found for your account.</div>";
        }
        ?>
    </div>
</div>

</body>
</html>

<?php
    include("footer.php");
?>