<?php
session_start();
include("dbconfig.php");

// Check if user is logged in
$is_logged_in = isset($_SESSION['user_id']);
$username = $is_logged_in ? $_SESSION['username'] : '';
$email = $is_logged_in ? $_SESSION['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/book.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/enquiry.css">
    <link rel="stylesheet" href="css/lab.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/refund.css">
    <link rel="stylesheet" href="css/terms.css">
</head>
<body>
<header>
    <img src="assets/Logo1.png" alt="Company Logo" class="company-logo">
    <nav>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="lab.php">Lab</a></li>
            <li><a href="package.php">Packages</a></li>
            <li><a href="book.php">Booking</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="enquiry.php">Enquiry</a></li>
        </ul>
    </nav>
    <button class="contact-button" onclick="location.href='book.php'">Booking</button>
    
    <!-- Profile Dropdown -->
    <div class="profile-container">
        <?php if(isset($_SESSION['user_id'])): ?>
            <div class="profile-icon" onclick="toggleProfileDropdown()">
                <i class="fa fa-user-circle"></i>
                <span><?php echo $_SESSION['username']; ?></span>
            </div>
            <div id="profileDropdown" class="profile-dropdown">
                <div class="profile-info">
                    <i class="fa fa-user-circle"></i>
                    <p><strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p><?php echo $_SESSION['email']; ?></p>
                </div>
                <a href="dashboard.php"><i class="fa fa-user"></i> Your Profile</a>
                <!-- <a href="#"><i class="fa fa-coins"></i> Derma Cash ₹0</a> -->
                <a href="yourbooking.php"><i class="fa fa-shopping-cart"></i> Your bookings</a>
                <!-- <a href="#"><i class="fa fa-list-alt"></i> My Assessments</a>
                <a href="#"><i class="fa fa-map-marker-alt"></i> Manage Address</a> -->
                <a href="contact.php"><i class="fa fa-phone"></i> Contact Us</a>
                <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
            </div>
        <?php endif; ?>
    </div>

    <div class="hamburger" onclick="toggleMenu()">☰</div>
</header>
  

<script>
  function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }

  function toggleMenu() {
          document.querySelector('.nav-links').classList.toggle('active');
      }
      
      function toggleProfileDropdown() {
          document.getElementById("profileDropdown").classList.toggle("show");
      }
      
      window.onclick = function(event) {
          if (!event.target.matches('.profile-icon')) {
              var dropdowns = document.getElementsByClassName("profile-dropdown");
              for (var i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                  }
              }
          }
      }
</script>

<style>
.company-logo {
    width: 100px;
   height:50px;
}


/* For tablets (900px - 1024px) */
@media (max-width: 1024px) {
    h1 {
        font-size: 2.2rem;
    }
}

/* For small tablets (768px - 900px) */
@media (max-width: 900px) {
    h1 {
        font-size: 2rem;
    }
}

/* For mobile screens (480px - 768px) */
@media (max-width: 768px) {
    h1 {
        font-size: 1.8rem;
        text-align: center; /* Center align on small screens */
    }
}

/* For very small screens (below 480px) */
@media (max-width: 480px) {
    h1 {
        font-size: 1.5rem;
        text-align: center;
    }
}


    /*----------------------------- Header ----------------------------*/
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #fff;
    color: #003366;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.contact-button{
    padding: 12px 18px;
    background-color: #003366;
    color: #fff;
    border: none;
    border-radius: 30px;
}

.contact-button:Hover{
    background: transparent;
    border: 1px solid #003366;
    color: #003366;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links li {
    position: relative;
}

.nav-links a {
    text-decoration: none;
    color: #003366;
    padding: 10px 15px;
    display: block;
}
.nav-links a:hover{
    color: #ff6600;
}

.hamburger {
    display: none;
    font-size: 26px;
    cursor: pointer;
}
.h1-design { 
    text-align: center;
    padding: 30px 0px 20px 0px;
    height: 200px;
    margin-top: 80px;
    background-image: assets/lab/avif ;
    background-repeat: no-repeat;
    background-size: 100% 160%;
}

.h1-design h1 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #fff;
    padding: 18px;
    overflow: hidden;
    white-space: nowrap;
    border-right: 0px solid #333;
    width: 0;
    display: inline-block;
    animation: typing 3s steps(30, end) forwards;
}

.h1-design h3 {
    font-size: 1.2rem;
    font-weight: 400;
    color: #fff;
    animation: blink 1s infinite;
}


.h1-design .hide-cursor {
    border-right: none !important;
}

/* Responsive Design for h1 */
@media (max-width: 1024px) {
    .h1-design h1 {
        font-size: 2.2rem;
    }
}

@media (max-width: 900px) {
    .h1-design h1 {
        font-size: 2rem;
    }
}

@media (max-width: 768px) {
    .h1-design h1 {
        font-size: 1.8rem;
        width: 100%; /* Allow full width */
    }
}

@media (max-width: 480px) {
    .h1-design h1 {
        font-size: 1.5rem;
        width: 100%;
    }

    .h1-design h3 {
        font-size: 1rem;
    }
}

/* Ensure typing effect width adjusts dynamically */
@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

/* Responsive Styles */
@media (max-width: 1024px) {
    header {
        padding: 12px 25px;
    }

    .logo {
        font-size: 22px;
    }

    .nav-links {
        gap: 15px;
    }

    .contact-button {
        padding: 10px 16px;
    }
}

@media (max-width: 900px) {
    .hamburger {
        display: block;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background: #fff;
        text-align: center;
        padding: 15px 0;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links li {
        padding: 10px 0;
    }

    .nav-links a {
        font-size: 18px;
        padding: 12px;
        width: 100%;
    }

    .contact-button {
        display: block;
        margin: 10px auto;
    }
}

@media (max-width: 768px) {
    header {
        padding: 10px 20px;
    }

    .logo {
        font-size: 20px;
    }

    .hamburger {
        font-size: 26px;
    }

    .nav-links {
        top: 55px;
    }

    .nav-links a {
        font-size: 16px;
        padding: 10px;
    }

    .contact-button {
        padding: 8px 14px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    header {
        padding: 8px 15px;
    }

    .logo {
        font-size: 18px;
    }

    .hamburger {
        font-size: 24px;
    }

    .nav-links {
        top: 50px;
    }

    .nav-links a {
        font-size: 15px;
        padding: 8px;
    }

    .contact-button {
        padding: 7px 12px;
        font-size: 12px;
    }
}

.profile-container {
          position: relative;
          display: inline-block;
          margin-left: 15px;
      }
      
      .profile-icon {
          font-size: 28px;
          cursor: pointer;
          color: #003366;
      }
      
      .profile-dropdown {
          display: none;
          position: absolute;
          right: 0;
          background: white;
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
          padding: 10px;
          min-width: 150px;
          text-align: center;
          border-radius: 5px;
      }
      
      .profile-dropdown.show {
          display: block;
      }
      
      .profile-dropdown p {
          margin: 5px 0;
      }
      
      .profile-dropdown a {
          text-decoration: none;
          color: #003366;
          font-weight: bold;
      }
</style>

<style>
.profile-container {
    position: relative;
    display: inline-block;
    margin-left: 15px;
    cursor: pointer;
}

.profile-icon {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 18px;
    color: #003366;
}

.profile-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 40px;
    background: white;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px;
    min-width: 200px;
    border-radius: 5px;
    z-index: 1000;
}

.profile-dropdown a {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #003366;
    padding: 8px 10px;
    font-size: 14px;
    border-bottom: 1px solid #eee;
}

.profile-dropdown a:last-child {
    border-bottom: none;
}

.profile-dropdown a:hover {
    background: #f1f1f1;
}

.profile-dropdown.show {
    display: block;
}

.profile-info {
    text-align: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.profile-info i {
    font-size: 40px;
    color: #003366;
}
</style>

<script>
function toggleProfileDropdown() {
    document.getElementById("profileDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.closest('.profile-container')) {
        document.getElementById("profileDropdown").classList.remove("show");
    }
}
</script>
