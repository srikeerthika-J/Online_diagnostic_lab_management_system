<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
<?php
   include("header.php");
?>
    
    
        <div class="h1-design">
          <h1>CONTACT</h1>
          <h3>Home - Contact</h3>
        </div>
    <section class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195007.15408593098!2d80.09958126699524!3d13.047473080060362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52660be5b5e8df%3A0x56f2c5fd6d166348!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1616147862831!5m2!1sen!2sin" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>

    <!-- Contact Details Box -->
    <section class="contact-details">
        <div class="contact-box">
            <div class="contact-item">
                <i class='fas fa-map-marker-alt'style="color:white"></i>
                <h3>Office Location</h3>
                <p>#1503, 1st Floor, 1st Main Road, T.S.Krishna Nagar (School Road), Mogappair East, Chennai - 37</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone-square"style="color:white"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+918220052520">+91 82200 52520</a> | <a href="tel:+919884214440">+91 98842 14440</a></p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"style="color:white"></i>
                <h3>Email Address</h3>
                <p>support@optimista.co.in</p>
            </div>
        </div>
    </section>


<script>
  function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
  }
</script>

</body>
</html>

<?php
    include("footer.php");
?>

<style>
        /* Fix unwanted horizontal scrolling issue */
html, body {
    max-width: 100vw;
    overflow-x: hidden;
}

@media (max-width: 1024px) {
    .contact-box {
        width: 90%;
        padding: 25px;
        flex-wrap: wrap;
        gap: 20px;
    }
    .contact-item {
        width: 45%;
    }
}

@media (max-width: 900px) {
    .contact-box {
        width: 95%;
        padding: 20px;
        flex-direction: column;
        text-align: center;
    }
    .contact-item {
        width: 100%;
        margin-bottom: 20px;
    }
}

@media (max-width: 768px) {
    .contact-details {
        padding-left: 50px;
        padding-right: 50px;
    }
    .contact-box {
        width: 100%;
        border-radius: 30px;
    }
    .contact-item i {
        font-size: 25px;
    }
    .contact-item h3 {
        font-size: 16px;
    }
    .contact-item p, .contact-item a {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .contact-details {
        padding-left: 20px;
        padding-right: 20px;
    }
    .contact-box {
        padding: 15px;
        border-radius: 20px;
    }
    .contact-item i {
        font-size: 22px;
    }
    .contact-item h3 {
        font-size: 14px;
    }
    .contact-item p, .contact-item a {
        font-size: 13px;
    }
}


</style>