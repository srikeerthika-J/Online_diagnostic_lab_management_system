<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/enquiry.css">

</head>
<body>
<?php
   include("header.php");
?>
    
    
        <div class="h1-design">
          <h1>ENQUIRY</h1>
          <h3>Home - Enquiry</h3>
        </div>

        
    <section class="enquir-section">
    <!-- enquir Form -->
       <div class="enquir-form">
        <h2>Get Started</h2>
        <form action="enquiry_action.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="operation" id="operation" value="insert" />
            <input type="text" name="name" id="name" placeholder="Name" required>
            <div>
            <small id="emailError" style="color: red; display: none;">Please enter a valid Gmail address (e.g., example@gmail.com)</small>
            <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div>
            <small id="phoneError" style="color: red; display: none;">Enter a valid 10-digit phone number</small>
            <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
            </div>
            <input type="text" name="subject" id="subject" placeholder="Subject" required>
            <textarea name="message" id="message" placeholder="Message" rows="4" required></textarea>
            <div class="enquiry-file-upload">
            <input type="file" id="file" name="file" class="enquiry-file">
            </div>
            <button type="submit" name="operation" value="insert">Let's Connect</button>
        </form>
    </div>
    </section>

      <section >
        <div class="expert-team">
          <h1>Accurate Lab Testing by Expert Team</h1>
          <button onclick="location.href='book.php'">Book your test here</button>
        </div>
      </section>
      <?php
      include("footer.php");
?>
</body>

<script>
  function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }
</script>

<script>
document.getElementById('email').addEventListener('input', function () {
    let emailInput = this.value.trim();
    let emailError = document.getElementById('emailError');
    
    // Gmail-specific regex pattern
    let emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    
    // Show or hide error based on validation
    if (emailInput === "" || emailPattern.test(emailInput)) {
        emailError.style.display = 'none'; // Hide error if valid or empty
    } else {
        emailError.style.display = 'block'; // Show error message
    }
});

document.getElementById('phone').addEventListener('input', function () {
    let phoneInput = this.value.trim();
    let phoneError = document.getElementById('phoneError');
    
    // 10-digit phone number pattern (only numbers)
    let phonePattern = /^[0-9]{10}$/;
    
    // Show or hide error based on validation
    if (phonePattern.test(phoneInput)) {
        phoneError.style.display = 'none'; // Hide error if valid
    } else {
        phoneError.style.display = 'block'; // Show error message
    }
});

</script>


<style>
    /* Fix unwanted horizontal scrolling issue */
    html, body {
    max-width: 100vw;
    overflow-x: hidden;
}
/* ---------------------------------------Enquiry---------------------------- */
 /* Container Styling */
 .enquir-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 20px;
    
}

/* enquir Form */
.enquir-form {
    width: 100%;
    max-width: 500px;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(27, 32, 81, 0.36);
    text-align: center;
}

/* Form Title */
.enquir-form h2 {
    color: #0A1931;
    font-size: 28px;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Input Fields */
.enquir-form input,
.enquir-form textarea {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    font-family: "Arial", sans-serif;
    transition: all 0.3s ease-in-out;
}

/* Focus Effect */
.enquir-form input:focus,
.enquir-form textarea:focus {
    border-color: #0A1931;
    outline: none;
    box-shadow: 0px 0px 8px rgba(10, 25, 49, 0.2);
}

/* Submit Button */
.enquir-form button {
    width: 100%;
    background: #0A1931;
    color: white;
    border: none;
    padding: 12px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.enquir-form button:hover {
    background: #0D274D;
    transform: scale(1.05);
}

/* Responsive Design */
@media screen and (max-width: 1024px) { /* Tablets */
    .enquir-section {
        padding: 40px 10px;
    }
    .enquir-form {
        max-width: 450px;
    }
    .enquir-form h2 {
        font-size: 24px;
    }
}

@media screen and (max-width: 768px) { /* Mobile Devices */
    .enquir-section {
        padding: 30px 10px;
    }
    .enquir-form {
        max-width: 90%;
        padding: 25px;
    }
    .enquir-form h2 {
        font-size: 22px;
    }
    .enquir-form input,
    .enquir-form textarea {
        font-size: 14px;
        padding: 10px;
    }
    .enquir-form button {
        font-size: 16px;
        padding: 10px;
    }
}

@media screen and (max-width: 480px) { /* Small Phones */
    .enquir-form {
        max-width: 100%;
        padding: 20px;
    }
    .enquir-form h2 {
        font-size: 20px;
    }
    .enquir-form input,
    .enquir-form textarea {
        font-size: 14px;
        padding: 8px;
    }
    .enquir-form button {
        font-size: 14px;
        padding: 10px;
    }
}

/*------------------------------------- Expert Team Section -----------------------------*/
.expert-team {
    text-align: center;
    padding: 70px 20px;
    background-image:assets/bg/jpg;
    background-color: #003366;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Heading Styling */
.expert-team h1 {
    margin-bottom: 20px;
    padding: 10px 0 20px 0;
    color: #ffffff;
    font-size: 40px;
    font-weight: bold;
}

/* Button Styling */
.expert-team button {
    padding: 15px 35px;
    border-radius: 30px;
    background-color: #ff3700;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s ease-in-out;
}

.expert-team button:hover {
    background-color: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
}

/* Responsive Styles */
@media (max-width: 1024px) { /* Tablets */
    .expert-team {
        padding: 50px 15px;
        background-size: contain;
    }
    .expert-team h1 {
        font-size: 30px;
    }
    .expert-team button {
        font-size: 16px;
        padding: 12px 30px;
    }
}

@media (max-width: 768px) { /* Mobile */
    .expert-team {
        padding: 40px 10px;
        background-size: cover;
    }
    .expert-team h1 {
        font-size: 28px;
    }
    .expert-team button {
        font-size: 14px;
        padding: 10px 25px;
    }
}


</style>