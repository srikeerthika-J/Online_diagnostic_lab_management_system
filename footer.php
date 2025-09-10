<footer class="footer">
      <div class="container">
          <div class="footer-sections">
              <!-- Contact Info -->
              <div class="footer-column contact-info">
                  <img src="assets/Logo1.png" alt="Company Logo" class="footer-logo">
                  <ul class="footer-lists">
                      <li><i class="fas fa-map-marker-alt"></i> #1503, 1st Floor, 1st Main Road, T.S.Krishna Nagar, Mogappair East, Chennai - 37</li>
                      <li><i class="fas fa-phone-alt"></i> Call Us: <a href="tel:+918220052520">+91 82200 52520</a> | <a href="tel:+919884214440">+91 98842 14440</a></li>
                      <li><i class="fas fa-envelope"></i> <a href="mailto:support@optimista.co.in">support@optimista.co.in</a></li>
                  </ul>
              </div>
  
              <!-- Our Labs -->
              <div class="footer-column">
                  <h4>Our Labs</h4>
                  <ul class="footer-list">
                      <li><a href="details.php?section=thyrocare">Thyrocare Aarogyam Center</a></li>
                      <li><a href="details.php?section=premier">Premier Health Center</a></li>
                      <li><a href="details.php?section=neuberg">Neuberg Diagnostics Lab</a></li>
                      <li><a href="details.php?section=medall">Medall Diagnostics Center</a></li>
                      <li><a href="details.php?section=hitech">Hitech Diagnostic Center</a></li>
                      <li><a href="details.php?section=Dr-Lal-PathLabs">Dr Lal PathLabs</a></li>
                      <li><a href="details.php?section=aarthi">AARTHI SCANS AND LABS</a></li>
                      <li><a href="details.php?section=apollo">Apollo diagnostics center</a></li>
                      <li><a href="details.php?section=metropolis">Metropolis Health Care ltd</a></li>
                      <li><a href="details.php?section=david">David Labs and Scans</a></li>

                  </ul>
              </div>
  
              <!-- Useful Links -->
              <div class="footer-column">
                  <h4>Useful Links</h4>
                  <ul class="footer-list">
                    <li><a href="about.php">About Company</a></li>
                    <li><a href="lab.php">Labs</a></li>
                    <li><a href="package.php">Packages</a></li>
                    <li><a href="refund.php">Refund Policy</a></li>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul>
              </div>
          </div>
      </div>
  
      <div class="footer-bottom">
          <p>A lab management Services © 2023 All Rights Reserved | Designed by <strong>Optimista</strong></p>
      </div>
      
      <!-- WhatsApp Floating Icon -->
    <a href="https://wa.me/1234567890?text=Hello,%20I%20need%20assistance!" class="whatsapp-float" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

      <!-- Floating Call Us Button -->
    <a href="tel:+1234567890" class="call-float">
      <div class="call-btn">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Phone_icon.png" alt="Phone">
          <span>Call Us</span>
      </div>
    </a>


      <!-- Scroll to Top Button -->
<!-- <button class="scroll-top-button" onclick="scrollToTop()">↑</button> -->

<button id="scrollToTop" onclick="scrollToTop()">⇪</button> 

  </footer>
    
     </div>
    </section>
</body>

<!-- Scroll to Top Button -->
<button class="scroll-top-button" onclick="scrollToTop()">↑</button>

<!-- JavaScript to Enable Scroll-to-Top Functionality -->
<script>
     const scrollToTopButton = document.getElementById("scrollToTop");

// Show/hide button on scroll
window.onscroll = function() {
    if (document.documentElement.scrollTop > 300) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
};

// Smooth Scroll to Top
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

</script>
</html>

<style>
    #scrollToTop {
            position: fixed;
            bottom: 100px;
            right: 30px;
            display: none;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: opacity 0.3s ease-in-out;
        }

        #scrollToTop:hover {
            background-color: #0056b3;
        }
/* Responsive Design */
@media (max-width: 768px) {
    #scrollToTop {
        bottom: 70px; /* Adjusted for better mobile placement */
        right: 20px; /* Slightly adjusted for smaller screens */
        width: 45px; /* Slightly smaller button */
        height: 45px;
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    #scrollToTop {
        bottom: 60px; /* Higher to avoid blocking mobile UI */
        right: 15px;
        width: 40px; /* Further reduced size for compact devices */
        height: 40px;
        font-size: 16px;
    }
}


/*------------------------------------------- Footer ----------------------------------- */

.footer {
    background: #1a1a1a;
    color: #ffffff;
    padding: 50px 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    padding-left: 100px;
    padding-top: 20px;
}

.footer-sections {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 150px;
}

.footer-column {
    flex: 1;
    min-width: 250px;
}

.footer-column h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    position: relative;
}

.footer-column h4::after {
    content: "";
    width: 50px;
    height: 3px;
    background: #ffcc00;
    position: absolute;
    left: 0;
    bottom: -5px;
}

.footer-list,
.footer-lists {
    list-style: none;
    padding: 0;
}

.footer-list li,
.footer-lists li {
    margin-bottom: 12px;
    font-size: 14px;
}

.footer-list li a,
.footer-lists li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-list li a:hover,
.footer-lists li a:hover {
    color: #ffcc00;
}

.footer-logo {
    width: 150px;
    margin-bottom: 15px;
}

.footer-bottom {
    text-align: center;
    background: #0d0d0d;
    padding: 15px 0;
    margin-top: 30px;
    font-size: 14px;
    border-top: 1px solid #333;
}

/* Floating Buttons */
.floating-button {
    position: fixed;
    right: 20px;
    bottom: 80px;
    background: #ffcc00;
    color: #1a1a1a;
    padding: 10px 15px;
    border-radius: 50px;
    display: flex;
    align-items: center;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.floating-button i {
    margin-right: 8px;
}

.floating-button:hover {
    background: #e6b800;
}

.call-button {
    bottom: 130px;
}

.whatsapp-button {
    background: #25D366;
    color: #fff;
}

.whatsapp-button:hover {
    background: #1ebe57;
}



/* ✅ FULLY RESPONSIVE DESIGN */
@media (max-width: 1024px) {
    .container {
        width: 95%;
        padding-left: 50px;
        padding-right: 50px;
    }
    
    .footer-sections {
        gap: 30px;
    }
}

@media (max-width: 768px) {
    .container {
        width: 100%;
        padding-left: 30px;
        padding-right: 30px;
    }

    .footer-sections {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
        gap: 20px;
    }

    .footer-column {
        width: 100%;
    }

    .footer-column h4 {
        font-size: 18px;
    }

    .footer-column h4::after {
        width: 40px; /* Adjust underline for smaller screens */
    }
}

@media (max-width: 480px) {
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }
    .footer-column {
        
        font-size: 1rem;
    }
    .footer-column h4 {
        font-size: 16px;
    }

    .footer-column h4::after {
        width: 30px; /* Adjust for mobile */
    }

    .footer-bottom {
        font-size: 12px;
    }
}
@media (max-width: 900px) {
    .footer-sections {
        flex-direction: column;
        align-items: flex-start; /* Keep everything left-aligned */
        text-align: left;
        gap: 20px;
    }

    .footer-column {
        width: 100%;
        text-align: left;
        font-size: 1rem;
    }

    .footer-column h4 {
        display: inline-block; /* Prevent full-width issue */
        position: relative;
        margin-bottom: 10px;
    }

    .footer-column h4::after {
        content: "";
        width: 50px;
        height: 3px;
        background: #ffcc00;
        position: absolute;
        bottom: -5px;
        left: 0; /* Ensures underline stays under the text */
    }

    .container {
        width: 100%;
        max-width: 100%;
        padding-left: 20px; /* Reduce left padding for small screens */
        padding-right: 20px; /* Avoid cutting off content on right */
    }
}

/* Footer - Mobile Friendly */
@media (max-width: 768px) {
    .footer-sections {
        flex-direction: column;
        text-align: left;
        gap: 30px;
    }

    .footer-column h4::after {
        left: 50%;
        transform: translateX(-50%);
    }
}

/* Floating Buttons (WhatsApp, Call, Scroll to Top) */
@media (max-width: 768px) {
    .floating-button, .scroll-top-button {
        right: 10px;
    }

    .call-btn {
        font-size: 14px;
        padding: 10px 16px;
    }

    .call-btn img {
        width: 20px;
        height: 20px;
    }
}

@media (max-width: 480px) {
    .floating-button {
        padding: 8px 12px;
    }

    .call-btn {
        font-size: 13px;
        padding: 8px 14px;
    }

    .call-btn img {
        width: 18px;
        height: 18px;
    }
}
@media (max-width: 360px) {
    .container {
        padding-left: 10px;
        padding-right: 10px;
    }

    .footer-column {
        font-size: 0.9rem;
    }

    .footer-column h4 {
        font-size: 15px;
    }

    .footer-column h4::after {
        width: 25px; /* Adjust for small screens */
    }

    .footer-bottom {
        font-size: 11px;
    }

    .floating-button {
        padding: 6px 10px;
    }

    .call-btn {
        font-size: 12px;
        padding: 6px 12px;
    }

    .call-btn img {
        width: 16px;
        height: 16px;
    }

    .scroll-top-button {
        width: 40px;
        height: 40px;
        font-size: 16px;
        bottom: 80px;
        right: 10px;
    }
}

</style>