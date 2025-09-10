<?php
include("dbconfig.php"); // Your DB connection
include("header.php");



// Retrieve form data
$operation = isset($_POST['operation']) ? $_POST['operation'] : null;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$file = $_FILES['file']['name'] ?? '';



if ($operation === 'insert') {
    // Insert operation
    $insertsql = "INSERT INTO lab_enquiry (name, email_id, phn_no, subject, message, file) 
                  VALUES ('$name', '$email', '$phone', '$subject', '$message', '$file')";
    if (mysqli_query($connection, $insertsql)) {
        echo "<div style='text-align:center; font-family:sans-serif; padding: 40px;  padding-top: 150px;'>
                <h2 style='color:green; padding-bottom: 40px;'>🎉 Thank you! We’ve received your enquiry and will respond respond as soon as possible, $name!</h2>
                <p style='font-size:18px;'>Our lab team will reach out to you soon at <strong>$email</strong>.</p>
                <a href='index.php' style='display:inline-block; margin-top:20px; background:#28a745; color:white; padding:10px 20px; border-radius:5px; text-decoration:none;'>Back to Home</a>
            </div>";
    } 
    else {
        echo "Insert Failed: " . mysqli_error($connection);
    }
} 
else {
    echo "Invalid operation.";
}



// Close connection
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