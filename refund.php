<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <!-- Swiper.js CDN -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/refund.css">
    
</head>

<?php
   include("header.php");
?>

        <div class="h1-design">
        <h1>REFUND</h1>
        <h3>Home - Refund</h3>
        </div>
    
    <section>

        <div class="refund" id="refund">
            <h1>Refund Policy:</h1>
            <p>If you are unhappy with the tests or reports, you may raise a complaint by emailing us on info@labtestchennai.com or calling in on our customer support numbers. All complaints must be made within a 7 days period from the test date.

               <b>The customer support team will evaluate your complaint and take relevant action, which could be any of the below:</b>
                Offer you a 100% refund
                
                Offer you a re-test at the same diagnostic center or a different diagnostic center
                
                If the evaluation leads to us finding that there was no issue with either the test conducted or the reports, we may choose not to refund the sale amount.
                
                Refunds will be made to the original payment method or via bank transfer to your personal bank account.</p>
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
/* -------------------------------------Refund------------------------------------------- */
/* Paragraph Styling */

.refund {
    padding: 30px 10% 30px 15%;
}

/* Heading Styling */
.refund h1 {
    padding-bottom: 20px;
    padding-top: 20px;
    font-size: 40px;
    color: #003366; /* Professional dark blue shade */
    text-align: left;
}

.refund p {
    line-height: 1.8;
    font-size: 18px;
    padding-bottom: 50px;
    color: #444; /* Dark grey for better readability */
    text-align: justify;
}

/* Responsive Design */
@media (max-width: 1024px) { /* Tablets */
    .refund {
        padding: 30px 8%;
    }
    .refund h1 {
        font-size: 36px;
    }
    .refund p {
        font-size: 16px;
    }
}

@media (max-width: 768px) { /* Mobile */
    .refund {
        padding: 20px;
        text-align: center;
    }
    .refund h1 {
        font-size: 30px;
    }
    .refund p {
        font-size: 15px;
        line-height: 1.6;
    }
}

</style>