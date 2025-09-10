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

        <div class="h1-design">
        <h1>TERMS & CONDITIONS</h1>
        <h3>Home - Terms & Conditions</h3>
        </div>
    <section>

        <div class="terms" id="terms">
            <h1>Terms for use of the Diagnostic Services:</h1>
            <p><b>1. Nature of Services</b><br>
            • A Square Blood Testing Services operates as a marketplace and facilitates Users to avail diagnostic tests/packages offered by Third Party Labs.<br>
            • The company does not collect samples, conduct tests, or generate reports; these are handled by the Third Party Labs.<br>
            • A Square Blood Testing Services only provides facilitation services through the Website and is not responsible for patient management by Third Party Labs.<br><br>
            <b>2. Software and Access Restrictions</b><br>
            • Third Party Labs may be required to procure software from the relevant providers to use the Website.<br>
            • Direct competitors of A Square Blood Testing Services cannot access the Services without prior written consent.<br>
            • Third Party Labs must not use the Website for monitoring performance, benchmarking, or any competitive analysis.<br><br>
            <b>3. Support and Service Availability</b><br>
            • Basic support is provided for free, while upgraded support can be purchased separately.<br>
            • A Square Blood Testing Services aims to make the Website available 24/7, except for:<br>
                • Planned downtime<br>
                • Uncontrollable circumstances such as force majeure events (natural disasters, government actions, etc.)<br><br>
            <b>4. Limitations on Usage</b><br>
            • Services may be subject to certain limitations, including:<br>
            • Disk storage limits<br>
            • API call restrictions<br>
            • Limits on SMS or number of Users based on the Third Party Labs' plan<br>
            • Real-time monitoring is available to ensure compliance with these limitations.<br><br>
           <b>5. Third-Party Lab Responsibilities</b><br>
            • Third Party Labs are solely responsible for their interactions with Users availing services via the Website.<br>
            • A Square Blood Testing Services is not responsible for:<br>
                • The accuracy or completeness of information provided by Users, Third Party Labs, or diagnostic centers.<br>
                • The correctness of tests conducted and reports generated.<br><br>
           <b>6. Restrictions on Use</b><br>
            • The Website must not be used for emergency appointments.<br>
            • A Square Blood Testing Services may suspend access to Third Party Labs or Users while investigating complaints or violations of the Terms of Use.<br><br>
           <b>7. Profile Editing and Corrections</b><br>
            • A Square Blood Testing Services may edit Third Party Labs’ profiles to optimize package searches.<br>
            • If incorrect information is found, Third Party Labs and Users:<br>
                • Can correct it themselves.<br>
                • Must contact A Square Blood Testing Services for necessary corrections.<br>
                • The company holds no liability for incorrect information displayed on the Website.<br><br>
           <b>8. Rights to Suspend or Modify Services</b><br>
            • A Square Blood Testing Services reserves the right to:<br>
            • Suspend or terminate access if Terms of Use are violated.<br>
            • Modify profiles to improve search results.<br>
</p>
        </div>
    </section>
<script>
  function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }
</script>

<?php
    include("footer.php");
?>

<style>

    /* Fix unwanted horizontal scrolling issue */
    html, body {
    max-width: 100vw;
    overflow-x: hidden;
}

/*-------------------------------------------- Terms -------------------------------------*/
.terms {
    padding: 30px 10% 30px 15%;
}

/* Heading Styling */
.terms h1 {
    padding-bottom: 20px;
    padding-top: 20px;
    font-size: 40px;
    color: #003366; /* Professional dark blue shade */
    text-align: left;
}

/* Paragraph Styling */
.terms p {
    line-height: 1.8;
    font-size: 18px;
    padding-bottom: 50px;
    color: #444; /* Dark grey for better readability */
    text-align: justify;
}

/* Responsive Design */
@media (max-width: 1024px) { /* Tablets */
    .terms {
        padding: 30px 8%;
    }
    .terms h1 {
        font-size: 36px;
    }
    .terms p {
        font-size: 16px;
    }
}

@media (max-width: 768px) { /* Mobile */
    .terms {
        padding: 20px;
        text-align: center;
    }
    .terms h1 {
        font-size: 30px;
    }
    .terms p {
        font-size: 15px;
        line-height: 1.6;
    }
}


</style>