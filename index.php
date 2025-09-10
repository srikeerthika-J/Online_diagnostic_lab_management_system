<?php
session_start();
$showLoginForm = isset($_SESSION['show_login']) && $_SESSION['show_login'];
$loginErrorMessage = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
unset($_SESSION['show_login'], $_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php
   include("header.php");
?>
   
    <section id="home">
        <div class="home">
            <h1>Effortless Lab Management at Your Fingertips</h1>
            <h3>Manage lab resources, track inventory, monitor experiments, and streamline operations with ease.</h3>
            <button onclick="openPopup('loginPopup')">Login / Register</button> 
        </div>
    </section>


    <div id="authPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <img src="assets/user.png" alt="User Icon" class="icon">
            <!-- Error messages (Display here) -->
            <?php
            // Display error message for login or registration failure
            if (isset($_SESSION['login_error'])) {
                echo "<p style='color: red; font-weight: bold;'>" . $_SESSION['login_error'] . "</p>";
                unset($_SESSION['login_error']); // Clear the error message after displaying
            }

            if (isset($_SESSION['register_error'])) {
                echo "<p style='color: red;'>" . $_SESSION['register_error'] . "</p>";
                unset($_SESSION['register_error']);
            }
            ?>
      
        <!-- Register Form -->
        <form method="POST" action="register_action.php" enctype="multipart/form-data">
        <div id="registerForm" class="form" style="display: none;">
            <h2>Create an Account</h2>
            <p>Sign up to get started.</p>
            <input type="hidden" name="operation" id="operation" value="insert" />
                <label class="heading">Username</label>
                <input type="text" name="regusername" id="regusername" placeholder="Enter your username" required>

                <label class="heading">Email</label>
                <small id="emailError" style="color: red; display: none;">Invalid email format</small>
                <input type="email" name="regemailid" id="regemailid" placeholder="Enter your email" required>

                <label class="heading">Password</label>
                <div class="password-container">
    <input type="password" name="regpassword" id="regpassword" placeholder="Enter your password" required>
    <span class="toggle-password" id="toggleBtn">👁️</span>
</div>
                <button type="submit" class="form-btn">Register</button>
            <p class="switch-text">Already have an account? <a href="#" onclick="switchToLogin()">Login</a></p>
        </div>


         </form>

         <?php if (isset($_SESSION['login_error'])): ?>
    <div class="error-message" style="color: red;">
        <?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
    </div>
<?php endif; ?>

                 <!-- Login Form -->
        <div id="loginForm" class="form">
            <div>
            <h2>Welcome Back</h2>
            <p>Log in to continue.</p>
            <form action="login_action.php" method="POST">
                <label class="heading">Email-id</label>
                <input type="email" name="email" id="email"  placeholder="Enter your email-id" required>

                <label class="heading">Password</label>
                <div class="password-container">
                    <input type="password" name="password" id="loginPassword" placeholder="Enter your password" required>
                    <span class="toggle-password" onclick="togglePassword('loginPassword')">👁️</span>
                </div>

                <a href="#" class="forgot" onclick="switchToForgotPassword()">Forgot Password?</a>
                <button type="submit" name="login" class="form-btn">Login</button>
             </div>


            </form>
            <p class="switch-text">Don’t have an account? <a href="#" onclick="switchToRegister()">Register here</a></p>
        </div>

        
        <!-- Forgot Password Form -->
        <div id="forgotPasswordForm" class="form" style="display: none;">
            <h2>Reset Password</h2>
            <p>Enter your email to receive reset instructions.</p>
            <form>
                <label class="heading">Email</label>
                <input type="email" placeholder="Enter your email" required>
                <button type="submit" class="form-btn">Send Reset Link</button>
            </form>

            <p class="switch-text"><a href="#" onclick="switchToLogin()">Back to Login</a></p>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const showLogin = <?php echo json_encode($showLoginForm); ?>;
    const loginError = <?php echo json_encode($loginErrorMessage); ?>;

    if (showLogin) {
        // Select the popup and content
        const popup = document.getElementById('authPopup');
        const popupContent = popup.querySelector('.popup-content');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        const forgotPasswordForm = document.getElementById('forgotPasswordForm');

        // Show the popup
        popup.style.display = 'flex';
        popup.style.position = 'fixed';
        popup.style.top = '0';
        popup.style.left = '0';
        popup.style.width = '100vw';
        popup.style.height = '100vh';
        popup.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        popup.style.justifyContent = 'center';
        popup.style.alignItems = 'center';
        popup.style.zIndex = '9999';

        // Style the popup-content for centering
        popupContent.style.maxWidth = '400px';
        popupContent.style.width = '90%';
        popupContent.style.backgroundColor = 'white';
        popupContent.style.padding = '30px';
        popupContent.style.borderRadius = '10px';
        popupContent.style.boxShadow = '0 0 15px rgba(0,0,0,0.3)';
        popupContent.style.position = 'relative';

        // Show login form and hide others
        loginForm.style.display = 'block';
        registerForm.style.display = 'none';
        forgotPasswordForm.style.display = 'none';

        // Show error if available
        if (loginError) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.style.color = 'red';
            errorDiv.style.marginBottom = '10px';
            errorDiv.innerText = loginError;
            loginForm.prepend(errorDiv);
        }
    }
});
</script>


    
    <section>
      <div class="offers">
        <h1>Flash Offer</h1>
        <div class="offer-msg">
        <p id="off"><marquee>12 CHANNEL Home ECG Facility Available. Home GTT Sample collection Facility Available Call us 9566979777</marquee></p>
        </div>
      </div>
    </section>

    <section>
      <div class="lab-tests">
        <h1>Most Popular Tests</h1>
        <div class="test-cards">
        <div class="test">
          <p>Allergy Testing</p>
          <p>Amylase Test</p>
          <P>Anti Hcv Test</P>
          <p>Arthritis Test</p>
          <p>ca125 Test</p>
          <p>CBC Test</p>
          <p>Chikungunya Test</p>
          <p>Cholesterol test</p>
          <p>Vitamin Test</p>
        </div>
        
        <div class="test">    
         <p>DengueTest</p>
         <p>Diabetes Test</p>
         <p>Fever test</p>
         <p>Full Body Checkup</p>
         <p>HbA1c Test</p>
         <p>Hepatitis B Test</p>
         <p>HIV Test</p>
         <p>Hormone Test</p>
         <p>Vitamin D Test</p>
        </div>

        <div class="test">
         <p>Immunity Test</p>
         <p>Iron Studies Test</p>
         <p>Kidney Function Test</p>
         <p>Liver Function Test</p>
         <p>Pancreatitis Test</p>
         <p>Early Pregnancy Checkup</p>
         <p>Stool Test</p>
         <p>Sugar Test</p>
         <p>Typhoid Test</p>
         <p>Vitamin B12 Test</p>
        </div>

        <div class="test">
         <p>Viral Marker Test</p>
         <p>Lipid Profile Test</p>
         <p>Vitamin D Test</p>
         <p>Malaria Test</p>
         <p>PCOS Test</p>
         <p>Uric Acid Test</p>
         <p>PSA Test</p>
         <p>STD Test</p>
         <p>Thyroid Test</p>
         <p>Urine test</p>
        </div>
      </div>
      </div>
    </section>
    
    <section id="lab" class="lab">
        <h1>Explore Our Labs</h1>
        <div class="lab-cards">
        <div class="card">
        <img src="assets/Metropolis.jpg" alt="image">
        <h3>Metropolis Health Care ltd</h3>
        <p>It gives me immense satisfaction to pen down this message as the Chairman of Metropolis Healthcare Ltd. It has been a long and humbling journey for me personally to see Metropolis grow as a reputed and trusted pathology brand all across India and markets in Africa.</p>
        <button onclick="window.location.href='details.php?section=metropolis';" class="read-more-btn">Read More</button>
      </div>
    
      <div class="card">
        <img src="assets/Logo.jpg" alt="image">
        <h3>David Labs and Scans</h3>
        <p>David Labs & Scans, established in the year 2012, is uniquely positioned to more effectively support local pathology for enhanced patient care. It is an ISO & NABL Accredited Lab. It caters Perfect Diagnostic Service throughout Chennai without any hurdle.</p>
        <button onclick="window.location.href='details.php?section=david';" class="read-more-btn">Read More</button>
      </div>
      
      <div class="card">
        <img src="assets/Dr Lal Path.jpg" alt="image">
        <h3>Dr Lal PathLabs</h3>
        <p>Be the most trusted healthcare partner, enabling healthier lives.To be the undisputed market leader by providing accessible, affordable, timely and quality healthcare diagnostics, applying insights and cutting edge technology to create value for all stakeholders.</p>
        <button onclick="window.location.href='details.php?section=Dr-Lal-PathLabs';" class="read-more-btn">Read More</button>
      </div>  
      
    
      <div class="card">
        <img src="assets/Apollo.jpg" alt="image">
        <h3>APOLLO DIAGNOSTICS CENTER</h3>
        <p>Thyrocare is one of the leading Diagnostic industry looking at Preventive healthcare with an aim to provide health checkup at your doorsteps.</p>
        <button onclick="window.location.href='details.php?section=apollo';" class="read-more-btn">Read More</button>
      </div>  
      
      <div class="card">
        <img src="assets/Medall.jpg" alt="image">
        <h3>Medall Diagnostics Center</h3>
        <p>Medall is a chain of medical diagnostic service centers in India, offering a wide range of lab tests, radiology tests including CT & MRI scans, and master health checkup packages.</p>
        <button onclick="window.location.href='details.php?section=medall';" class="read-more-btn">Read More</button>
      </div>
       
      <div class="card">
        <img src="assets/Thyro Care.jpg" alt="image">
        <h3>Thyrocare Aarogyam Center</h3>
        <p>Thyrocare is one of the leading Diagnostic industry looking at Preventive healthcare with an aim to provide health checkup at your doorsteps.</p>
        <button onclick="window.location.href='details.php?section=thyrocare';" class="read-more-btn">Read More</button>
      </div>

      <div class="card">
        <img src="assets/Premier.jpg" alt="image">
        <h3>Premier Health Center</h3>
        <p>Our Excellence of services over 40 years as the finest diagnostic facility in Chennai provides optimal solutions to all hospitals and community centers.</p>
        <button onclick="window.location.href='details.php?section=premier';" class="read-more-btn">Read More</button>
      </div>

      <div class="card">
        <img src="assets/Hi Tech.jpg" alt="image">
        <h3>Hitech Diagnostic Center</h3>
        <p>The objectives have been achieved by the selection of proper equipment, high-quality reagents, and strict internal & external quality assessment and control backed up by well-qualified, dedicated professionals.</p>
        <button onclick="window.location.href='details.php?section=hitech';" class="read-more-btn">Read More</button>
      </div>

      <div class="card">
        <img src="assets/Aarthi.jpg" alt="image">
        <h3>AARTHI SCANS AND LABS</h3>
        <p>We are the largest and most affordable diagnostic provider in India. Aarthi Scans and Labs offers its services to more than 7000 patients a day across India. We have 50 full-fledged diagnostic centers with CT, MRI, Ultrasound scan, Xray, Mammogram, OPG and Lab facilities. We have more than 150 collection centers providing lab services.</p>
        <button onclick="window.location.href='details.php?section=aarthi';" class="read-more-btn">Read More</button>
      </div>

      <div class="card">
        <img src="assets/Neuberg.jpg" alt="image">
        <h3>Neuberg Diagnostics Lab</h3>
        <p>The best-in-class laboratories from across India, UAE & South Africa have united under the banner of Neuberg Diagnostics to bring the latest technology and ...</p>
        <button onclick="window.location.href='details.php?section=neuberg';" class="read-more-btn">Read More</button>
      </div>

        </div>
    </section>

    <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>

      <div class="timeline-container">
        <div class="timeline">
            <div class="event"><div class="inner-circle"></div></div>
            <div class="event"><div class="inner-circle"></div></div>
            <div class="event"><div class="inner-circle"></div></div>
            <div class="event"><div class="inner-circle"></div></div>
        </div>
    </div>

      <div class="package-cards">
      <div class="pack">
        <div class="price">
          <h1>Rs.1200</h1>
          <h3>Price</h3>
        </div>
          <h2>FEVER PANEL(FEVER)</h2>
          <div class="pack-para">
          <p>MALARIA PARASITE (MP)</p>
          <p> C-REACTIVE PROTEIN; CRP</p>
          <p> URINE COMPLETE ANALYSIS</p>
          <p> Erythrocyte Sedimentation Rate (ESR)</p>
          <p> Complete Blood Count(CBC)</p>
          <p> WIDAL (SLIDE AGGLUTINATION)</p>
       </div>
       <div class="booking">
       <button id="booking" onclick="location.href='book.php'">Booking</button>
       </div>
        </div>

        <div class="pack">
        <div class="price">
          <h1>Rs.1500</h1>
          <h3>Price</h3>
        </div>
          <h2>Master Health Check Up</h2>
          <div class="pack-para">
          <p>Calcium ,Serum</p>
           <p>Lipid Profile</p>
           <p> Uric Acid</p>
            <p>Creatinine</p>
            <p>Blood Urea</p>
            <p>ELECTROLYTES</p>
           <p> Blood Glucose (F)(sugar)</p>
           <p> HBA1c (Glycoslated Hb)</p>
           <p>Complete Blood Count(CBC)</p>
           <p> Liver Function Test (LFT)</p>
           <p> Thyroid Profile -TFT</p>
           </div>
           <div class="booking">
           <button id="booking" onclick="location.href='book.php'">Booking</button> 
           </div>
        </div>

        <div class="pack">
          <div class="price">
            <h1>Rs.1500</h1>
            <h3>Price</h3>
          </div>
          <h2>TruHealth Silver</h2>
          <div class="pack-para">
          <p>TSH (THYROID STIMULATING HORMONE)</p>
          <p>LIPID PROFILE</p>
          <p>URIC ACID, SERUM</p>
          <p>CREATININE - SERUM</p>
          <p> UREA, SERUM</p>
          <p> LIVER FUNCTION TESTS</p>
          <p> GLUCOSE - FASTING</p>
          <p>ESR; ERYTHROCYTE 
          <p>EDIMENTATION RATE</p>
          <p> Complete Blood Count (CBC)</p>
          </div>
          <div class="booking">
          <button id="booking" onclick="location.href='book.php'">Booking</button>
          </div>
        </div>

        <div class="pack">
          <div class="price">
            <h1>Rs.1500</h1>
            <h3>Price</h3>
          </div>
          <h2>MASTER HEALTH CHECK UP</h2>
          <div class="pack-para">
          <p>Thyroid function test (TFT)</p>
           <p> Uric Acid - Serum</p>
           <p>Urea - Serum</p>
           <p>Glucose (Fasting)</p>
           <p>Creatinine - Serum</p>
           <p> LIVER FUNCTION TESTS</p>
            <p>HB A1C</p>
            <p>cbc</p>
            <p>Lipid Profile</p>
            </div>
            <div class="booking">
            <button id="booking" onclick="location.href='book.php'">Booking</button>
            </div>
        </div>
        </div>
    </section>
    

    
    <section class="testimonial-container">
    <div class="container">
        
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <h3> 💉Testimonials</h3>
            <h1>What our patients say?<h1>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-wrapper">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                                <p>"Affordable pricing with high-quality service. The lab team was knowledgeable and explained everything clearly."</p>
                                <h4>- Sarah Smith</h4>
                            </div>
                        </div>
                        <!-- Testimonial Image -->
                        <div class="testimonial-image">
                            <img src="assets/test1.jpg" class="img-fluid rounded" alt="Testimonial Image 1">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                                <p>"Very clean and well-organized lab. The technicians were friendly and ensured a smooth blood test experience."</p>
                                <h4>- Lokesh</h4>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="assets/test2.avif" class="img-fluid rounded" alt="Testimonial Image 2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                                <p>"Excellent service! The staff was professional, and the test results were delivered on time. Highly recommended!"</p>
                                <h4>- Emily </h4>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="assets/test3.jpg" class="img-fluid rounded" alt="Testimonial Image 3">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                                <p>"Great experience! The lab was hygienic, and the staff followed proper safety protocols. Will definitely use their services again."</p>
                                <h4>- Emma Brown</h4>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="assets/test4.jpg" class="img-fluid rounded" alt="Testimonial Image 4">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
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
document.getElementById('regemailid').addEventListener('input', function () {
    let emailInput = this.value;
    let emailError = document.getElementById('emailError');
    
    // Only accept emails ending with @gmail.com
    let emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    
    if (!emailPattern.test(emailInput)) {
        emailError.style.display = 'block'; // Show error message
    } else {
        emailError.style.display = 'none'; // Hide error if valid
    }
});

</script>

<script>

document.addEventListener("DOMContentLoaded", function () {
    var passwordField = document.getElementById("regpassword");
    var toggleButton = document.getElementById("toggleBtn");

    toggleButton.addEventListener("click", function () {
        console.log("Toggle button clicked!"); // Debugging log
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    });
});


function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }

// Function to open authentication popup when button is clicked
function openPopup() {
    document.getElementById("authPopup").style.display = "flex";
    document.body.style.overflow = "hidden"; // Prevent scrolling
}

// Function to close authentication popup
function closePopup() {
    document.getElementById("authPopup").style.display = "none";
    document.body.style.overflow = "auto"; // Allow scrolling
}

// Toggle password visibility
function togglePassword(fieldId) {
    let passwordInput = document.getElementById(fieldId);
    passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
}

// Switch to Register Form
function switchToRegister() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registerForm").style.display = "block";
    document.getElementById("forgotPasswordForm").style.display = "none";
}

// Switch to Login Form
function switchToLogin() {
    document.getElementById("registerForm").style.display = "none";
    document.getElementById("forgotPasswordForm").style.display = "none";
    document.getElementById("loginForm").style.display = "block";
}

// Switch to Forgot Password Form
function switchToForgotPassword() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("forgotPasswordForm").style.display = "block";
}



// Close popup when clicking outside
window.onclick = function(event) {
    let popup = document.getElementById("authPopup");
    if (event.target === popup) {
        closePopup();
    }
};


</script>

</html>

<style>

    /* Fix unwanted horizontal scrolling issue */
    html, body {
    max-width: 100vw;
    overflow-x: hidden;
}

/* -----------------------------------------lab------------------------------------------- */
 /* 🔹 For Laptops & Tablets */
 @media (max-width: 1024px) {
    .lab h1 {
        font-size: 2.5rem;
    }

    .lab-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }

    .card {
        max-width: 320px; /* Adjusted for better layout */
        min-height: 420px; /* Increased height for proper content spacing */
        padding: 20px;
    }

    .card h3 {
        font-size: 1.3rem;
    }

    .card p {
        font-size: 1rem;
        padding: 0 10px;
    }

    .card button {
        font-size: 1rem;
        padding: 12px 25px;
    }
}

/* 🔹 For Mobile Devices */
@media (max-width: 768px) {
    .lab {
        padding: 40px 5%;
    }

    .lab h1 {
        font-size: 2rem;
        text-align: center;
    }

    .lab-cards {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .card {
        width: 90%;
        max-width: 800px; /* Larger card size for better mobile readability */
        min-height: 450px; /* More height for better spacing */
        padding: 40px;
    }

    .card img {
        max-width: 150px;
        max-height: 120px;
    }

    .card h3 {
        font-size: 1.6rem;
        margin-top: 15px;
    }

    .card p {
        font-size: 1.2rem;
        line-height: 1.5;
        text-align: center;
    }

    .card button {
        padding: 8px 16px; /* Slightly smaller padding */
        font-size: 0.9rem;
        width:40%;
        height:60% /* Adjust font size */
    }
}

/* 🔹 For Small Mobile Screens */
@media (max-width: 480px) {
    .lab {
        padding: 30px 5%;
    }

    .lab h1 {
        font-size: 1.8rem;
    }

    .card {
        width: 95%;
        max-width: 380px;
        min-height: 470px;
    }

    .card img {
        max-width: 140px;
        max-height: 110px;
    }

    .card h3 {
        font-size: 1.3rem;
    }

    .card p {
        font-size: 0.95rem;
    }

    .card button {
        padding: 6px 14px; /* More compact padding */
        font-size: 0.85rem; /* Reduce font size */
        border-radius: 25px;
        width:60%;
        height:60%/* Slightly smaller border-radius */
    }
}

@media (max-width: 360px) {
    .card button {
        padding: 5px 12px; /* Minimal padding for small screens */
        font-size: 0.8rem; /* Smaller font */
        border-radius: 20px; /* Adjusted roundness */
    }
}
/*------------------------------------- Packages -----------------------------*/

.pack-para {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: top; /* Centers text if there's less content */
}

.pack-para p {
    font-size: 0.95rem;
    line-height: 1;
    font-weight: 400;
    font-weight: bold;
}
.pack {
    background-color: #6e0a0a;
    color: #fff;
    padding: 20px;
    border-radius: 80px;
    width: 300px;
    text-align: center;
    box-shadow: rgba(255, 0, 0, 0.052) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    transition: transform 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 500px; /* Adjust this based on your tallest box */
    padding-bottom: 40px;
}

.pack h2 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 30px;
}
button#booking {
    background-color: #fff5f5;
    color: #D32F2F;
    padding: 12px 25px; /* Reduce padding */
    border: none;
    border-radius: 50px; /* Adjust border-radius */
    font-size: 1rem; /* Reduce font size */
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    margin-top: 20px; 
    display: block; /* Ensures centering */
    margin-left: auto;
    margin-right: auto;
}


.price{
    color: #fff;
    border-radius: 80px;
    padding: 10px 0px 10px 0px;
    background-color: #ffffff;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    margin-bottom: 40px;
    padding-top: 30px;
}
h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #003366;
}
h3{
    padding-bottom: 10px;
}

/* Responsive Design for Packages Section */
@media (max-width: 1200px) {
    .package-cards {
        gap: 40px;
        padding: 15px;
    }

    .pack {
        width: 280px;
        padding: 25px;
    }

    .pack h1 {
        font-size: 1.8rem;
    }

    .pack h2 {
        font-size: 1.3rem;
    }

    .pack-para p {
        font-size: 1rem;
    }

    button#booking {
        font-size: 1rem;
    }
}

@media (max-width: 1024px) {
    .package-cards {
        gap: 30px;
    }

    .pack {
        width: 260px;
        padding: 22px;
    }

    .pack h1 {
        font-size: 1.7rem;
    }

    .pack h2 {
        font-size: 1.2rem;
    }

    .pack-para p {
        font-size: 0.95rem;
    }

    button#booking {
        font-size: 0.95rem;
        padding: 10px 22px;
    }
}

@media (max-width: 900px) {
    .packages {
        padding: 40px 0;
    }

    .package-cards {
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }

    .pack {
        width: 240px;
        padding: 20px;
        border-radius: 60px;
    }

    h1 {
        font-size: 2rem;
    }

    .pack h1 {
        font-size: 1.6rem;
    }

    .pack h2 {
        font-size: 1.1rem;
    }

    .pack-para p {
        font-size: 0.9rem;
    }

    button#booking {
        font-size: 0.9rem;
        padding: 9px 20px;
    }
    .price {
        padding: 20px 0px; /* Adjust padding */
        border-radius: 50px; /* Reduce border-radius */
        margin-bottom: 30px;
    }

    .price h1 {
        font-size: 2.2rem; /* Slightly smaller font */
        padding-top: 10px;
    }

    .price h3 {
        font-size: 1.2rem;
    }
}

@media (max-width: 768px) {
    .package-cards {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .pack {
        width: 90%;
        max-width: 320px;
        padding: 18px;
        border-radius: 50px;
        padding-top: 30px;
    }

    h1 {
        font-size: 1.8rem;
    }

    .pack h1 {
        font-size: 1.5rem;
    }

    .pack h2 {
        font-size: 1rem;
    }

    .pack-para p {
        font-size: 0.85rem;
    }

    button#booking {
        font-size: 0.85rem;
        padding: 8px 18px;
    }
    .price {
        padding: 15px 0px;
        border-radius: 40px;
    }

    .price h1 {
        font-size: 2rem;
        padding-top: 8px;
    }

    .price h3 {
        font-size: 1.1rem;
    }
}

@media (max-width: 600px) {
    .pack {
        width: 95%;
        max-width: 300px;
        padding: 30px;
        border-radius: 40px;
        padding-top: 30px;
    }

    .pack h1 {
        font-size: 1.4rem;
        padding-top: 8px;
    }

    .pack h2 {
        font-size: 1rem;
    }

    .pack-para p {
        font-size: 0.8rem;
    }

    button#booking {
        font-size: 0.8rem;
        padding: 7px 16px;
    }
}

@media (max-width: 480px) {
    .packages {
        padding: 30px 0;
    }

    .package-cards {
        gap: 15px;
    }

    .pack {
        width: 95%;
        max-width: 280px;
        padding: 30px;
        border-radius: 50px;
        padding-top: 10px;
    }

    h1 {
        font-size: 1.6rem;
    }

    .pack h1 {
        font-size: 1.3rem;
    }

    .pack h2 {
        font-size: 0.95rem;
    }

    .pack-para p {
        font-size: 0.75rem;
    }

    button#booking {
        font-size: 0.75rem;
        padding: 6px 14px;
    }
    .price {
        padding: 10px 0px;
        border-radius: 40px;
        margin-bottom: 20px;
        padding-top: 30px;
    }

    .price h1 {
        font-size: 1.8rem;
        padding-top: 8px;
    }

    .price h3 {
        font-size: 1rem;
    }

}

@media (max-width: 360px) {
    .pack {
        max-width: 260px;
        padding: 25px;
        border-radius: 50px;
        padding-top: 8px;
    }

    h1 {
        font-size: 1.5rem;
    }

    .pack h1 {
        font-size: 1.2rem;
    }

    .pack h2 {
        font-size: 0.9rem;
    }

    .pack-para p {
        font-size: 0.7rem;
    }

    button#booking {
        font-size: 0.7rem;
        padding: 5px 12px;
    }
    .price {
        padding: 8px 0px;
        border-radius: 40px;
        margin-bottom: 15px;
        margin-top: 15px;
    }

    .price h1 {
        font-size: 1.6rem;
        padding-top: 10px;
    }

    .price h3 {
        font-size: 0.9rem;
    }
}


.timeline-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 20px 0;
        }
        .timeline {
            position: relative;
            width: 70%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .timeline::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 3px;
            background-color:rgb(127, 11, 29);
            transform: translateY(-50%);
        }
        .event {
            position: relative;
            background-color:rgb(124, 9, 26);
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .event::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            width: 2px;
            height: 20px;
            background-color: #6e0a0a;
            transform: translateX(-50%);
        }
        .inner-circle {
            width: 10px;
            height: 10px;
            background-color:rgb(255, 255, 255);
            border-radius: 50%;
        }

        
/*------------------------------------- Expert Team Section -----------------------------*/
  .expert-team {
    text-align: center;
    padding: 70px 20px;
    background-image: assets/bg/webp;
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


/*------------------------------------- Testimonials -----------------------------*/
.testimonial-container {
    padding: 50px 0;
    background: #f9f9f9;
}
.testimonial-container h3{
    color:rgb(227, 0, 0);
    
}
.testimonial-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.testimonial-content {
    flex: 1;
}

.testimonial-image {
    flex: 1;
    display: flex;
    justify-content: center;
}

.testimonial-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

.testimonial {
    text-align: center;
    background: white;
    padding: 30px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.testimonial p {
    font-size: 1.2rem;
    color: #555;
}

.testimonial h4 {
    margin-top: 10px;
    color: #ff6200;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #ff6200;
    border-radius: 50%;
    padding: 10px;
}

.carousel-control-prev,
.carousel-control-next {
    width: auto;
}

@media (max-width: 900px) {
    .testimonial-wrapper {
        flex-direction: column; /* Stack items vertically */
        gap: 30px;
        text-align: center;
    }

    .testimonial-image {
        order: -1; /* Moves image to the top */
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .testimonial-content {
        width: 100%;
    }

    .testimonial-image img {
        max-width: 80%; /* Adjust image size */
        border-radius: 10px;
    }
}

@media (max-width: 768px) {
    .testimonial {
        padding: 25px;
    }

    .testimonial p {
        font-size: 1rem;
    }

    .testimonial-image img {
        max-width: 70%; /* Further reduce image size */
    }
}

@media (max-width: 480px) {
    .testimonial-container {
        padding: 30px 0;
    }

    .testimonial-wrapper {
        flex-direction: column;
    }

    .testimonial-image {
        order: -1; /* Ensures image stays at the top */
    }

    .testimonial {
        padding: 20px;
        border-radius: 8px;
    }

    .testimonial p {
        font-size: 0.9rem;
    }

    .testimonial h4 {
        font-size: 1rem;
    }

    .testimonial-image img {
        max-width: 90%;
        border-radius: 8px;
    }
}

@media (max-width: 360px) {
    .testimonial {
        padding: 15px;
    }

    .testimonial p {
        font-size: 0.85rem;
    }

    .testimonial h4 {
        font-size: 0.9rem;
    }

    .testimonial-image img {
        max-width: 95%;
        border-radius: 6px;
    }
}

/*------------------------------------- login form -----------------------------*/

body.popup-open {
    overflow: hidden;
    height: 100vh; /* Prevents scrolling */
}
body.popup-open #home {
    filter: blur(5px); /* Blurs the background content */
    opacity: 0.3; /* Makes the background slightly transparent */
    pointer-events: none; /* Prevents clicking on the background */
}

.popup-content {
    z-index: 1001;
}
#authPopup {
    display: none; /* Ensures the popup is hidden initially */
    z-index: 1000;
}


/* Popup Background */
.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Popup Content */
.popup-content {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    width: 380px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: relative;
}

/* Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 20px;
    cursor: pointer;
    color: #333;
    transition: 0.3s;
}

.close:hover {
    color: red;
}

/* User Icon */
.icon {
    width: 60px;
    margin-bottom: 15px;
}

/* Headings */
.form h2 {
    font-size: 22px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

/* Description Text */
.form p {
    color: #555;
    font-size: 14px;
    padding-bottom: 15px;
}

/* Input Fields */
.form input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    outline: none;
    background: white; /* Ensures input field is white */
    color: black; /* Ensures text inside input field is black */

}
.form label{
    text-align: left;
}
.form input::placeholder {
    color: #666; /* Optional: Adjust placeholder color for better contrast */
}

.form input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

/* Password Input with Eye Icon */
.password-container {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #888;
    font-size: 14px;
}

.toggle-password:hover {
    color: #007bff;
}

/* Buttons */
.form-btn {
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    transition: 0.3s;
}

.form-btn:hover {
    background: #0056b3;
}

/* Forgot Password */
.forgot {
    display: block;
    margin: 10px 0;
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
}

.forgot:hover {
    text-decoration: underline;
}

/* Switch Between Forms */
.switch-text {
    color: #555;
    font-size: 14px;
    margin-top: 15px;
}

.switch-text a {
    color: #007bff;
    text-decoration: none;
    font-weight: 600;
}

.switch-text a:hover {
    text-decoration: underline;
}
/* Responsive Popup */
@media (max-width: 768px) {
    .popup-content {
        width: 90%;
        max-width: 320px;
        padding: 20px;
    }

    .form h2 {
        font-size: 20px;
    }

    .form p {
        font-size: 13px;
    }

    .form input {
        font-size: 14px;
        padding: 8px;
    }

    .form-btn {
        font-size: 14px;
        padding: 8px;
    }
}

@media (max-width: 480px) {
    .popup-content {
        width: 95%;
        max-width: 280px;
        padding: 15px;
    }

    .close {
        top: 10px;
        right: 15px;
        font-size: 18px;
    }

    .form h2 {
        font-size: 18px;
    }

    .form p {
        font-size: 12px;
    }

    .form input {
        font-size: 13px;
        padding: 7px;
    }

    .form-btn {
        font-size: 13px;
        padding: 7px;
    }
}

.test p::before {
    content: "✔";
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 18px;
    height: 18px;
    margin-right: 10px;
    border-radius: 50%;
    padding: 3px;
    border: 2px solid rgb(217, 51, 51);
    color: rgb(217, 51, 51);
    font-size: 10px;
    font-weight: bold;
}

        /* Right Side Dashboard */
        .dashboard {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 250px;
            padding: 15px;
            background: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: <?php echo isset($_SESSION['user_id']) ? 'block' : 'none'; ?>;
        }
        .logout-btn {
            display: block;
            margin-top: 10px;
            padding: 8px;
            background: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
</style>



