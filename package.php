<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/package.css"> 
</head>
<body>
<?php
   include("header.php");
?>

  <div class="h1-design">
    <h1>PACKAGES</h1>
    <h3>Home - Packages</h3>
  </div>

  <section id="packages" class="packages">
    <h1 style="padding-bottom:70px;"><center>PACKAGES</center></h1>

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
     <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>

      <div class="pack">
      <div class="price">
        <h1>Rs.1500</h1>
        <h3>Price</h3>
      </div>
        <h2>Master Health Check Up</h2>
        <div class="pack-para">
         <p>Calcium, Serum</p>
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
         <button id="booking" onclick="location.href='book.php'">Booking</button> 
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
        <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>
      
      <div class="pack">
        <div class="price">
          <h1>Rs.2000</h1>
          <h3>Price</h3>
        </div>
        <h2>TruHealth Gold</h2>
        <div class="pack-para">
        <p>FREE T3 FREE T4 & TSH / FREE TFT</p>
        <p>SODIUM (NA+)</p>
        <p>POTASSIUM (K+)</p>
        <p>LIPID PROFILE</p>
        <p>URIC ACID, SERUM</p>
        <p>CREATININE - SERUM</p>
        <p>UREA, SERUM</p>
        <p>LIVER FUNCTION TESTS</p>
        <p>GLUCOSE - FASTING</p>
        <p>ESR; ERYTHROCYTE SEDIMENTATION RATE</p>
        <p>Complete Blood Count (CBC)</p>
        </div>
        <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>

      <div class="pack">
        <div class="price">
          <h1>Rs.4000</h1>
          <h3>Price</h3>
        </div>
        <h2>TruHealth Dimond</h2>
        <div class="pack-para">
        <p>Vitamin B12</p>
        <p>IRON STUDIES</p>
        <p>CALCIUM -SERUM</p>
        <p>VITAMIN D (25-OH)</p>
        <p>CHLORIDE</p>
        <p>HBA1c (Glycated Hb)</p>
        <p>FREE T3 FREE T4 & TSH / FREE TFT</p>
        <p>LIVER FUNCTION TESTS</p>
        <p>GLUCOSE - FASTING</p>
        <p>ESR; ERYTHROCYTE SEDIMENTATION RATE</p>
        <p>Complete Blood Count (CBC)</p>
        </div>
        <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>


      <div class="pack">
        <div class="price">
          <h1>Rs.5000</h1>
          <h3>Price</h3>
        </div>
        <h2>Xpert Health Cancer Screening Female(54 Tests)</h2>
        <div class="pack-para">
        <p>AFP (ALPHA FETO PROTEINS)</p>
        <p>RENAL FUNCTION TEST</p>
        <p>LIVER FUNCTION TESTS</p>
        <p>CA 19.9; PANCREATIC CANCER MARKER</p>
        <p>CEA (CARCINO EMBRYONIC ANTIGEN)</p>
        <p>Complete Blood Count(CBC)</p>
        <p>VITAMIN D (25-OH)G</p>
        </div>
        <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>

      <div class="pack">
        <div class="price">
          <h1>Rs.2999</h1>
          <h3>Price</h3>
        </div>
        <h2>Xpert Health Cardiac Comprehensive (47 Tests)</h2>
        <div class="pack-para">
        <p>Homocysteine</p>
        <p>GLUCOSE - FASTING</p>
        <p>APOLIPOPROTEIN RATIO</p>
        <p>APOLIPOPROTEIN B</p>
        <p>APOLIPOPROTEIN A1</p>
        <p>LIPOPROTEIN A</p>
        <p>CREATININE KINASE (CK)</p>
        <p>LIPID PROFILE</p>
        <p>hs CRP</p>
        <p> Complete Blood Count (CBC)</p>
        </div>
        <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>

      <div class="pack">
        <div class="price">
          <h1>Rs.2500</h1>
          <h3>Price</h3>
        </div>
        <h2>Xpert Health Depression Package (46 Tests)</h2>
        <div class="pack-para">
        <p>CORTISOL ( R)</p>
        <p>THYROID PROFILE</p>
        <p>ESR; ERYTHROCYTE SEDIMENTATION RATE</p>
        <p>GLUCOSE - RANDOM</p>
        <p>LIPID PROFILE</p>
        <p>Complete Blood Count(CBC)</p>
        <p>VITAMIN D (25-OH)</p>
        </div>
        <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>

      <div class="pack">
        <div class="price">
          <h1>Rs.3000</h1>
          <h3>Price</h3>
        </div>
        <h2>Xpert Health Diabetes Comprehensive (57 Tests)</h2>
        <div class="pack-para">
        <p>MICROALBUMIN - URINE</p>
         <p>C - PEPTIDE ( FASTING)</p>
         <p>HOMA-IR</p>
         <p>URINE COMPLETE ANALYSIS</p>
         <p>LIPID PROFILE</p>
         <p>RENAL FUNCTION TEST</p>
          <p>LIVER FUNCTION TESTS</p>
          <p>Vitamin B12</p>
          </div>
          <button id="booking" onclick="location.href='book.php'">Booking</button>
      </div>

      <div class="pack">
      <div class="price">
        <h1>Rs.5000</h1>
        <h3>Price</h3>
      </div>
        <h2>PREMARITAL HEALTH CHECK UP (FEMALE)</h2>
        <div class="pack-para">
         <p>HAEMOGLOBIN ELECTROPHORESIS</p>
         <p>ULTRASOUND ABDOMEN AND PELVIS(FEMALE)</p>
         <p>Blood Group and Rh</p>
         <p>VDRL</p>
         <p>ANTI HCV ( ELISA)</p>
         <p>HBsAg ( CMIA )</p>
         <p>HIV 1 & 2 Antibody & p24 Antigen Serum</p>
         <p>Blood Glucose (R)(sugar)</p>
         <p>HBA1c (Glycoslated Hb)</p>
         <p>URINE COMPLETE ANALYSIS</p>
         <p>Complete Blood Count(CBC)</p>
         <p>Thyroid Profile -TFT</p>
         </div>
         <button id="booking" onclick="location.href='book.php'">Booking</button> 
      </div>

      <div class="pack">
      <div class="price">
        <h1>Rs.4000</h1>
        <h3>Price</h3>
      </div>
        <h2>PREMARITAL HEALTH CHECK UP (MALE)</h2>
        <div class="pack-para">
        <p>HAEMOGLOBIN ELECTROPHORESIS</p>
         <p>SEMEN ANALYSIS</p>
         <p>Blood Group and Rh</p>
         <p>VDRL</p>
         <p>ANTI HCV ( ELISA)</p>
         <p>HBsAg ( CMIA )</p>
         <p>HIV 1 & 2 Antibody & p24 Antigen Serum</p>
         <p>Blood Glucose (R)(sugar)</p>
         <p>HBA1c (Glycoslated Hb)</p>
         <p>Liver Function Test (LFT)</p>
         <p>Complete Blood Count(CBC)</p>
         <p>Thyroid Profile -TFT</p>
         </div>
         <button id="booking" onclick="location.href='book.php'">Booking</button> 
      </div>
    
      </div>
  </section>

<script>
  function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }
</script>
</body>
<?php
  include("footer.php");
?>

<style>
      /* Fix unwanted horizontal scrolling issue */
html, body {
    max-width: 100vw;
    overflow-x: hidden;
}

.pack-para {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: top; /* Centers text if there's less content */
}

.pack-para p {
    font-size: 0.95rem;
    line-height: 2;
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
    color:#D32F2F;
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
</style>