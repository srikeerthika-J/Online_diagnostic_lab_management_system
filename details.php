
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<?php
   include("header.php");
?>

        <div class="h1-design">
            <h1 id="typing-text">DETAILS</h1>
            <h3 class="blinking-text">Home - Details</h3>
        </div>

<?php
// Check if 'section' is set in URL, otherwise set it to an empty value
$section = isset($_GET['section']) ? $_GET['section'] : '';

if ($section === "metropolis") { ?>

<!-------------------------------------------------- Metropolis Health Care Ltd Lab ---------------------------------------------------------->

<section id="metropolis" style="display: <?php echo ($section == 'metropolis') ? 'block' : 'none'; ?>;">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Metropolis.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Metropolis Health Care Ltd Lab</h1>
            <h3>About</h3>
            <p>It gives me immense satisfaction to pen down this message as the Chairman of Metropolis Healthcare Ltd. It has been a long and humbling journey for me personally to see Metropolis grow as a reputed and trusted pathology brand all across India and markets in Africa. I started out with a single minded focus on putting our patients’ first and a relentless pursuit in delivering accurate results and quality reports. Our promise to the patient is very simple; reliable pathology reports and for that we walk the extra mile for recheck and reflex at no additional cost to our patients.It gives me immense satisfaction to pen down this message as the Chairman of Metropolis Healthcare Ltd. It has been a long and humbling journey for me personally to see Metropolis grow as a reputed and trusted pathology brand all across India and markets in Africa. I started out with a single minded focus on putting our patients’ first and a relentless pursuit in delivering accurate results and quality reports. Our promise to the patient is very simple; reliable pathology reports and for thatwalk the extra mile for recheck and reflex at no additional cost to our patients.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
 </section>


 <!------------------------------------------------- David Labs and Scans Lab -------------------------------------------->

<?php
} elseif ($section === "david") { ?>

  <section id="david">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/logo.png" alt="image">
            </div>
        <div class="about" id="about">
            <h1>David Labs and Scans Lab</h1>
            <h3>About</h3>
            <p>David Labs & Scans, established in the year 2012, is uniquely positioned to more effectively support local pathology for enhanced patient care. David Labs & Scans, with complementary areas of expertise and service offerings, allows us to build on the company's leadership positions, provide access to medical and scientific expertise, expand geographical presence to better serve customers and emerge as the most valued company in the healthcare industry.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

 <?php
    include("test.php");
?>
  </section>

  <!------------------------------------------------------- Dr Lal PathLabs ---------------------------------------------------->

  <?php
} elseif ($section === "Dr-Lal-PathLabs") { ?>

  <section id="Dr-Lal-PathLabs">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Dr Lal Path.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Dr Lal PathLabs</h1>
            <h3>About</h3>
            <p>Dr Lal PathLabs is successfully delivering medical excellence in diagnostic services from the last 70+ years. Through an efficient network of collection centres, labs and stringent quality checks, we ensure that we are able to provide customers accurate and timely reports.

             For more than 75 years, Dr. Lal PathLabs has been unwavering in its commitment to delivering medical excellence in diagnostics services. Our success lies in our efficient network of collection centers, state-of-the-art laboratories, and rigorous quality checks. We leave no stone unturned to ensure that our customers receive nothing short of accurate and timely reports.

             We have expansive pan India presence, with over 11,000+ hospitals and clinical partners. Our commitment to delivering excellence is further evident through our network of 5,500+ patient service centers. On a daily basis, we conduct over 12 lakhs tests, ensuring that each test undergoes more than 50 quality and process checks. This meticulous attention to detail serves as a true reflection of our unwavering dedication to providing accurate services and delivering reports in a timely manner.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
  </section>


  <!------------------------ APOLLO DIAGNOSTICS CENTER -------------------------------->

  <?php
} elseif ($section === "apollo") { ?>

  <section id="apollo">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Apollo.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>APOLLO DIAGNOSTICS CENTER</h1>
            <h3>About</h3>
            <p>Apollo Diagnostics Center is a trusted healthcare facility offering a comprehensive range of diagnostic and pathology services. Backed by Apollo Hospitals, it provides high-quality medical testing, including blood tests, diabetes screening, thyroid profiles, lipid panels, and advanced imaging services like X-rays and ultrasounds. With state-of-the-art technology and automated lab processes, Apollo Diagnostics ensures accurate and timely results. The center focuses on patient convenience with home sample collection, online report access, and affordable health checkup packages, making quality diagnostics accessible to all.
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
  </section>

  <!--------------------------------- Medall Diagnostics Center --------------------------------------->

  <?php
} elseif ($section === "medall") { ?>

  <section id="medall">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Medall.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Medall Diagnostics Center</h1>
            <h3>About</h3>
            <p>Medall Diagnostics Center is a leading healthcare provider offering a wide range of diagnostic and pathology services. It specializes in blood tests, full-body health checkups, imaging services like MRI, CT scans, X-rays, and ultrasounds, as well as specialized tests for heart, liver, kidney, and thyroid health. Equipped with modern technology and automated laboratory systems, Medall ensures accurate and timely results. The center prioritizes patient convenience with home sample collection, digital report access, and affordable health packages, making quality diagnostics accessible to individuals and families.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
  </section>

  <!------------------------------------------- Thyrocare Aarogyam Center ----------------------------------->

  <?php
} elseif ($section === "thyrocare") { ?>

  <section id="thyrocare">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Thyro Care.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Thyrocare Aarogyam Center</h1>
            <h3>About</h3>
            <p>Thyrocare Aarogyam Center is a diagnostic laboratory specializing in preventive healthcare and wellness testing. It offers a wide range of health checkups, including thyroid profiles, diabetes screening, lipid profiles, liver and kidney function tests, and comprehensive full-body checkups. Known for its accuracy and efficiency, Thyrocare utilizes advanced technology and automated lab processes to ensure reliable results. The lab provides affordable health packages and convenient home sample collection services, making preventive healthcare accessible to all.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
</section>

  <!--------------------------------------- Premier Health Center ---------------------------------->

  <?php
} elseif ($section === "premier") { ?>

  <section id="premier">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Premier.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Premier Health Center</h1>
            <h3>About</h3>
            <p>Premier Health Center is a state-of-the-art diagnostic laboratory offering a wide range of medical testing services. It specializes in comprehensive health checkups, pathology tests, and preventive screenings, including blood tests, hormone analysis, and chronic disease monitoring. Equipped with modern technology and automated testing systems, Premier Health Center ensures accurate and timely results. The lab prioritizes patient convenience with online report access, home sample collection, and affordable health packages, making quality healthcare more accessible.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
  </section>

  <!---------------------------------------- Hitech Diagnostic Center ---------------------------------->

  <?php
} elseif ($section === "hitech") { ?>

  <section id="hitech">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/hitech.png" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Hitech Diagnostic Center</h1>
            <h3>About</h3>
            <p>Hitech Diagnostic Centre was started in the year 1986, by Dr SP. Ganesan MBBS, DCP with the objective of providing quality and reliable laboratory service at an affordable cost.

               The objectives have been achieved by the selection of proper equipment, high-quality reagents, and strict internal & external quality assessment and control backed up by well-qualified, dedicated professionals.

               Because of these reasons, Hitech became accepted as a leading laboratory in South India. Not only Doctors & Hospitals in Chennai but over 853 labs and hospitals all over India use our services.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
  </section>

  <!------------------------------------ AARTHI SCANS AND LABS ------------------------------------>

  <?php
} elseif ($section === "aarthi") { ?>

  <section id="aarthi">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Aarthi.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>AARTHI SCANS AND LABS</h1>
            <h3>About</h3>
            <p>Aarthi Scans and Labs is a leading diagnostic center offering a wide range of radiology and pathology services. It specializes in advanced imaging techniques such as MRI, CT scans, ultrasound, X-ray, and mammography, along with comprehensive lab tests, including blood tests, thyroid profiles, and full-body health checkups. Known for its affordability and high-quality diagnostics, Aarthi Scans and Labs uses state-of-the-art equipment and automated lab processes to ensure accurate results. The lab provides patient-friendly services like online report access, home sample collection, and 24/7 support, making healthcare more accessible and efficient.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>

<?php
    include("test.php");
?>
  </section>

  <!-------------------------------- Neuberg Diagnostics Lab ----------------------------->

  <?php
} elseif ($section === "neuberg") { ?>

  <section id="neuberg">

        <section>
        <div class="about-us">
            <div class="image-container">
            <img src="assets/Neuberg.jpg" alt="image">
            </div>
        <div class="about" id="about">
            <h1>Neuberg Diagnostics Lab</h1>
            <h3>About</h3>
            <p>Neuberg Diagnostics Lab is a leading healthcare provider specializing in advanced diagnostics and pathology services. It offers a wide range of medical tests, including blood tests, hormone analysis, genetic testing, cancer screening, and preventive health checkups. Equipped with cutting-edge technology and automated laboratory systems, Neuberg ensures high accuracy and fast turnaround times. The lab is known for its patient-centric approach, offering home sample collection, digital report access, and affordable health packages, making quality diagnostics accessible and convenient for all.</p>
        </div>
        </section>
        
        <section id="packages" class="packages">
      <h1><center>PACKAGES</center></h1><br><br>
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
            <button id="booking" onclick="location.href='book.php'">Booking</button>
        </div>
        </div>
    </section>


<?php
    include("test.php");
?>
  </section>


<?php
} else {
    echo "<p style='text-align: center; font-weight: bold;'>No details available. Please select a valid section.</p>";
}
?>

<?php
    include("footer.php");
?>

<style>

      /* Fix unwanted horizontal scrolling issue */
      html, body {
    max-width: 100vw;
    overflow-x: hidden;
}
    .about-us {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

/* Image Container */
.image-container {
    flex: 1;
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: center;
}
.image-container img{
    size:70% 30%;
}
.image {
    width: 45%;
    height: auto;
    max-width: 230px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.image:hover {
    transform: scale(1.05);
}

/* About Text */
.about {
    flex: 1;
    padding: 20px;
    padding-top: 100px;
}

.about h1 {
    font-size: 2rem;
    color: #2c3e50;
}

.about h1::before {
    content: "~~";
    color: #d83423;
}
.about h3 {
    font-size: 1.3rem;
    color: #2980b9;
    margin: 15px 0;
    font-weight: 600;
    text-align: left;
    padding: 30px 0 10px 0;
}

.about p {
    font-size: 1rem;
    color: #444;
    line-height: 1.7;
    text-align: justify;
    padding-bottom: 100px;
}


/* Responsive Design */
@media (max-width: 1024px) {
    .about-us {
        flex-direction: column;
        text-align: center;
        padding: 40px 5%;
    }

    .image-container {
        order: 1;
    }

    .about {
        order: 2;
        max-width: 100%;
    }

    .about h1 {
        font-size: 2rem;
    }

    .about h3 {
        font-size: 1.2rem;
    }
}

@media (max-width: 768px) {
    .about-us {
        flex-direction: column;
        text-align: center;
        padding: 30px 5%;
    }

    .image-container img {
        max-width: 300px;
    }

    .about h1 {
        font-size: 1.8rem;
    }

    .about h3 {
        font-size: 1.1rem;
    }

    .about p {
        font-size: 0.95rem;
    }
}

@media (max-width: 480px) {
    .about-us {
        padding: 20px 5%;
    }

    .image-container img {
        max-width: 250px;
    }

    .about h1 {
        font-size: 1.6rem;
    }

    .about h3 {
        font-size: 1rem;
    }

    .about p {
        font-size: 0.9rem;
    }
}

@media (max-width: 360px) {
    .about-us {
        padding: 15px 5%;
    }

    .image-container img {
        max-width: 200px;
    }

    .about h1 {
        font-size: 1.4rem;
    }

    .about h3 {
        font-size: 0.9rem;
    }

    .about p {
        font-size: 0.85rem;
    }
}


.packages {
    text-align: center;
    padding: 50px 0;
    position: relative;
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

.package-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 50px;
    padding: 20px;
   
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

.pack:hover {
    transform: translateY(-10px);
}

.pack h1 {
    color: #D32F2F;
    font-size: 2rem;
    margin-bottom: 5px;
}

.pack h2 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 30px;
}

.pack h3{
    color: #D32F2F;
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


button#booking:hover {
    background-color: transparent;
    color: #fffcfc;
    border:1.5px solid #ffffff;
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

</style>