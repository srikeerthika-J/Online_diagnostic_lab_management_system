<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/lab.css">
    
</head>
</body>
<?php
   include("header.php");
?>

    <div class="h1-design">
      <h1>LAB</h1>
      <h3>Home - lab</h3>
    </div>

    <section id="lab" class="lab">
      <h1><center>Explore Our Labs</center></h1>
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


<?php
    include("footer.php");
 ?>

</body>    

<script>
  function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }
</script>
</html>



<style>

    /* Fix unwanted horizontal scrolling issue */
    html, body {
    max-width: 100vw;
    overflow-x: hidden;
}
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
</style>