<?php
include("dbconfig.php"); // Your DB connection
include("header.php");

// Retrieve form data safely
$operation = $_POST['operation'] ?? null;
$pincode = $_POST['user-pincode'] ?? '';
$labs = $_POST['labs'] ?? '';
$tests = $_POST['tests'] ?? '';
$name = $_POST['username'] ?? '';
$number = $_POST['phnnumber'] ?? '';
$email = $_POST['user-email'] ?? '';
$age = $_POST['user-age'] ?? '';
$gender = $_POST['user-gender'] ?? '';
$doorno = $_POST['user-door'] ?? '';
$address = $_POST['user-address'] ?? '';
$city = $_POST['user-city'] ?? '';
$state = $_POST['user-state'] ?? '';
$file = $_FILES['file']['name'] ?? ''; // Assuming file name is stored
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';

// Check if operation is 'insert'
if ($operation === 'insert') {
    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($connection, 
        "INSERT INTO lab_booking (name, number, email_id, age, gender, door_no, address, city, pincode, state, lab, test, file, date, time) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssssssssssss", 
            $name, $number, $email, $age, $gender, $doorno, $address, $city, $pincode, $state, $labs, $tests, $file, $date, $time
        );

        if ($stmt->execute()) {
            echo "
            <div style='text-align:center; font-family:sans-serif; padding: 40px;'>
                <h2 style='color:green; padding-top: 100px;'>🎉 Thanks for booking, $name!</h2>
                <p style='font-size:18px; padding-top: 40px;'>Our lab team will reach out to you soon at <strong>$email</strong>.</p>
                <a href='index.php' style='display:inline-block; margin-top:20px; background:#28a745; color:white; padding:10px 20px; border-radius:5px; text-decoration:none;'>Back to Home</a>
            </div>";
        } else {
            echo "<p style='color:red;'>Booking failed. Please try again.</p>";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Database Error: Unable to prepare statement.";
    }
} else {
    echo "Invalid operation.";
}

// Close database connection
mysqli_close($connection);


// Define the upload directory
$uploadDir = "uploads/"; 

// Ensure the folder exists; create if it doesn't
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle file upload
$filePath = ""; // Default empty path
$fileName = ""; // Default empty file name
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $fileName = basename($_FILES["file"]["name"]);
    $filePath = $uploadDir . time() . "_" . $fileName; // Unique filename
    move_uploaded_file($_FILES["file"]["tmp_name"], $filePath);
}

// Now, store the file name and file path in your variables
$file = $fileName; // This will store only the file name
$filePath = $filePath; // This will store the full file path

include("footer.php");
?>
