
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
<body>
<?php
   include("header.php");
?>

     
       <div class="h1-design">
            <h1 id="typing-text">ABOUT</h1>
            <h3 class="blinking-text">Home - About</h3>
        </div>
 
    <section>
        
        <div class="about-us">
            <div class="image-container">
                <img src="assets/about-1.jpg" alt="Scientist working" class="image image-left">
                <img src="assets/about-2.jpg" alt="Lab dropper experiment" class="image image-right">
            </div>
        <div class="about" id="about">
            <h1>ABOUT US</h1>
            <h2><b><q>Our quality services set the standard for excellence, delivering exceptional value and customer satisfaction.</q></b></h2>
            <p>Our commitment to quality services is the foundation of our success. We understand the importance of accurate and reliable diagnostic results in healthcare, which is why we have established tie-ups with multiple reputed labs. These partnerships enable us to offer a wide range of tests and ensure that our customers have access to the latest advancements in medical diagnostics. One of our key priorities is convenience for our customers. We recognize that timely sample collection is crucial, and we have designed our services to meet this requirement. Our dedicated team of professionals is available round the clock, providing 24x7 sample collection services. Whether it's during regular working hours or in emergency situations, we are committed to being there for our customers whenever they need us. Moreover, our tie-ups with multiple labs not only enhance the accessibility of our services but also contribute to the accuracy and reliability of our results. We collaborate with renowned laboratories that adhere to stringent quality standards, ensuring that our customers receive the most precise diagnostic information available. At our organization, quality, convenience, and customer satisfaction are at the core of everything we do. We strive to continually improve our services, explore new partnerships, and stay updated with the latest advancements in the field of medical diagnostics. Our aim is to provide our customers with the highest level of care, ensuring their well-being and peace of mind.</p>
        </div>
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

</body>

<style>
    /* Fix unwanted horizontal scrolling issue */
html, body {
    max-width: 100vw;
    overflow-x: hidden;
}

/* About Section - Fully Responsive */
@media (max-width: 1024px) {
    .about-us {
        flex-direction: column;
        text-align: center;
    }

    .image-container {
        flex-direction: column;
        gap: 10px;
    }

    .image {
        width: 90%;
    }

    .about h1 {
        font-size: 1.8rem;
    }

    .about h2 {
        font-size: 1.2rem;
    }

    .about p {
        font-size: 0.95rem;
    }
}

@media (max-width: 768px) {
    .about-us {
        flex-direction: column;
        text-align: center;
    }

    .image-container {
        gap: 10px;
    }

    .image {
        width: 90%;
    }

    .about h1 {
        font-size: 1.8rem;
    }

    .about h2 {
        font-size: 1.2rem;
    }

    .about p {
        font-size: 0.95rem;
    }
}


@media (max-width: 480px) {
    .about h1 {
        font-size: 1.6rem;
    }

    .about h2 {
        font-size: 1.1rem;
    }

    .about p {
        font-size: 0.9rem;
    }
}



</style>