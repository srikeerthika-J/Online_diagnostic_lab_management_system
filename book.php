<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['login_error'] = "Please login to access the booking.";
    $_SESSION['show_login'] = true;
    header("Location: index.php");
    exit();
}



if (isset($_POST['add_lab'])) {
    $lab_name = mysqli_real_escape_string($con, $_POST['lab_name']);

    // Optional: prevent duplicates
    $check = mysqli_query($con, "SELECT * FROM tbl_category WHERE cat_name = '$lab_name'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Lab already exists.');</script>";
    } else {
        $insert = mysqli_query($con, "INSERT INTO tbl_category (cat_name, cat_status) VALUES ('$lab_name', 'Active')");
        if ($insert) {
            echo "<script>alert('Lab added successfully.');</script>";
        } else {
            echo "<script>alert('Error adding lab.');</script>";
        }
    }
}
?>

<?php
include("dbconfig.php");

$test_query = mysqli_query($con, "SELECT test_name FROM lab_tests ORDER BY test_name ASC");
$package_query = mysqli_query($con, "SELECT * FROM lab_package");
$lab_query = mysqli_query($con, "SELECT names FROM lab_names ORDER BY names ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic lab management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/book.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $("#pincode").on("keyup", function() {
            var pincode = $(this).val();
            if (pincode.length === 6) {
                getLabsFromServer(pincode);
            }
        });

        function getLabsFromServer(pincode) {
            $.ajax({
                url: "fetch_labs.php",
                type: "GET",
                data: {
                    pincode: pincode
                },
                dataType: "json",
                success: function(response) {
                    $("#labs").html('<option value="">Select a Lab</option>'); // Reset dropdown
                    $("#hospitalCount").html(""); // Clear previous count

                    if (response.status === "OK" && response.labs.length > 0) {
                        response.labs.forEach(lab => {
                            $("#labs").append(`<option value="${lab.place_id}">${lab.name}</option>`);
                        });

                        // Show count in green
                        $("#hospitalCount").html(`<span style="color: green; font-weight: bold;">You have ${response.labs.length} labs near you!</span>`);
                    } else {
                        $("#hospitalCount").html(`<span style="color: red; font-weight: bold;">No labs found for this pincode.</span>`);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                    alert("Failed to fetch labs. Try again.");
                }
            });
        }
    });
</script>


<body>
    <?php
    include("header.php");
    ?>

    <div class="h1-design">
        <h1>BOOKING</h1>
        <h3>Home - BOOKING</h3>
    </div>

    <section id="booking" class="booking">
        <div class="booking-wrapper">
            <div class="booker">
                <h2>BOOK YOUR TEST</h2>
                <p>Fill all form fields to go to the next step</p>

                <div class="stepper">
                    <div class="step active"><span class="icon">&#128300;</span> Lab</div>
                    <div class="step"><span class="icon">&#128230;</span> Test Package</div>
                    <div class="step"><span class="icon">&#128100;</span> Personal Details</div>
                    <div class="step"><span class="icon">&#127968;</span> Address</div>
                    <div class="step"><span class="icon">&#127973;</span> Prescription</div>
                    <div class="step"><span class="icon">&#10004;</span> Finish</div>
                </div>

                <div class="progress-bar">
                    <div class="progress"></div>
                </div>

                <form method="POST" action="booking_action.php" enctype="multipart/form-data">
                    <input type="hidden" name="operation" id="operation" value="insert"   />
                    <div class="form-step active">
                        <h3>Select Lab:</h3>
                        <div class="input-group">
                            <select id="labs" name="labs" required>
                                
                                <option value="" selected disabled>-- Select a lab --</option>
                                
                                <option value="Metropolis">Metropolis Health Care</option>
                                <option value="David">David Labs and Scans</option>
                                <option value="DrLal">Dr Lal PathLabs</option>
                                <option value="Thyrocare">Thyrocare Aarogyam Center</option>
                                <option value="Apollo">Apollo Diagnostics Center</option>
                                <option value="Premier">Premier Health Center</option>
                                <option value="Neuberg">Neuberg Diagnostics Lab</option>
                                <option value="Aarthi">AARTHI SCANS AND LABS</option>
                                <option value="Hitech">Hitech Diagnostic Center</option>
                                
                                <option value="Medall">Medall Diagnostics Center</option>
                                
                                <?php while($lab = mysqli_fetch_assoc($lab_query)) { ?>
        <option value="<?= htmlspecialchars($lab['names']) ?>">
            <?= htmlspecialchars($lab['names']) ?>
        </option>
    <?php } ?>
                                <option value="FindLab">🔍 Find a Lab</option> <!-- New option -->
                            </select>
                        </div>




                        <!-- Hidden Pincode Input -->
                        <div class="input-group" id="pincode-group" style="display: none; margin-top: 10px;">
                            <input type="text" id="pincode" name="pincode" placeholder="Enter your pincode" pattern="[0-9]{6}" maxlength="6">
                        </div>

                        <p id="hospitalCount"></p>




                        <!-- for fetch labs from google places API -->




                        <!-- end of google places API -->

                        <script>
                            document.getElementById("labs").addEventListener("change", function() {
                                const pincodeGroup = document.getElementById("pincode-group");
                                if (this.value === "FindLab") {
                                    pincodeGroup.style.display = "block"; // Show pincode input
                                } else {
                                    pincodeGroup.style.display = "none"; // Hide pincode input
                                }
                            });
                        </script>

                        <button class="next-btn">Next</button>
                    </div>

                    <div class="form-step">
                        <h3>Select Test Package:</h3>
                        <div class="input-group">
                            <select id="tests" name="tests" required>
                                <option value="" selected disabled>-- Select a Test --</option>
                                <option value="17-Hydroxy Progesterone Neonatal Screen Dried Blood Spot">17-Hydroxy Progesterone Neonatal Screen Dried Blood Spot</option>
                                <option value="17-Hydroxy-Progesterone">17-Hydroxy-Progesterone</option>
                                <option value="5 Antigen by Latex Agglutination, Serum">5 Antigen by Latex Agglutination, Serum</option>
                                <option value="Abnormal Haemoglobin Studies Hb Variants & CBC">Abnormal Haemoglobin Studies Hb Variants & CBC</option>
                                <option value="Abnormal Haemoglobin Studies Hb Variants Blood">Abnormal Haemoglobin Studies Hb Variants Blood</option>
                                <option value="Absolute Eosinophile Count">Absolute Eosinophile Count</option>
                                <option value="Benzodiazepine Diazepam Urine Spot">Benzodiazepine Diazepam Urine Spot</option>
                                <option value="Blood Group ABO & Rh Typing">Blood Group ABO & Rh Typing</option>
                                <option value="BODY WATCH FITNESS CHECK BELOW 45 (M)">BODY WATCH FITNESS CHECK BELOW 45 (M)</option>
                                <option value="Bone Marrow Aspiration">Bone Marrow Aspiration</option>
                                <option value="Breast IV">Breast IV</option>
                                <option value="C-Peptide, Fasting">C-Peptide, Fasting</option>
                                <option value="CALCIUM - SERUM">CALCIUM - SERUM</option>
                                <option value="Cancer Marker Profile Liver-1">Cancer Marker Profile Liver-1</option>
                                <option value="Cancer Marker Profile Liver-2">Cancer Marker Profile Liver-2</option>
                                <option value="Cardiac Risk Profile">Cardiac Risk Profile</option>
                                <option value="Cervical Screening-1 Conventional PAP & HPV-DNA">Cervical Screening-1 Conventional PAP & HPV-DNA</option>
                                <option value="Chlorides Urine 24H">Chlorides Urine 24H</option>
                                <option value="COVID MONITOR Maintenance">COVID MONITOR Maintenance</option>
                                <option value="Dengue Profile">Dengue Profile</option>
                                <option value="DNA (Double Strand) Antibody NcX DNA Serum">DNA (Double Strand) Antibody NcX DNA Serum</option>
                                <option value="Dopamine, HPLC, 24 hrs Urine">Dopamine, HPLC, 24 hrs Urine</option>
                                <option value="Drugs Of Abuse Panel - 9 Drug">Drugs Of Abuse Panel - 9 Drug</option>
                                <option value="Electrolytes">Electrolytes</option>
                                <option value="Electrolytes Urine Spot">Electrolytes Urine Spot</option>
                                <option value="Fertility Endocrine Panel-Female">Fertility Endocrine Panel-Female</option>
                                <option value="Fertility Endocrine Panel-Male">Fertility Endocrine Panel-Male</option>
                                <option value="Gastrin">Gastrin</option>
                                <option value="GLUCOSE - FASTING">GLUCOSE - FASTING</option>
                                <option value="GLUCOSE - SUGAR (F & PP)">GLUCOSE - SUGAR (F & PP)</option>
                                <option value="Growth Hormone Stimulation Test - Clonidine, Serum">Growth Hormone Stimulation Test - Clonidine, Serum</option>
                                <option value="Haemoglobin">Haemoglobin</option>
                                <option value="HBV DNA Combo, Serum">HBV DNA Combo, Serum</option>
                                <option value="HELICOBACTER IgG">HELICOBACTER IgG</option>
                                <option value="Hepatitis B Virus (HBV)">Hepatitis B Virus (HBV)</option>
                                <option value="Infertility Profile, Female">Infertility Profile, Female</option>
                                <option value="Infertility Profile, Male">Infertility Profile, Male</option>
                                <option value="insulin-fasting">Insulin (Fasting) CMIA Serum</option>
                                <option value="iron-biochemical">Iron biochemical Serum</option>
                                <option value="iron-studies">Iron Studies, Serum</option>
                                <option value="karyotyping">Karyotyping by G-Banding Peripheral Blood**</option>
                                <option value="lead-blood">Lead, Blood by ICPMS**</option>
                                <option value="lead-urine">Lead, Urine Spot by ICPMS**</option>
                                <option value="leukemia-panel">Leukemia -Customised panel, Blood**</option>
                                <option value="lipid-profile-mini">Lipid Profile-Mini</option>
                                <option value="liver-function-mini">Liver Function Test-2 (Mini)</option>
                                <option value="liver-function-tests">LIVER FUNCTION TESTS</option>
                                <option value="lung-marker">Lung Marker Profile**</option>
                                <option value="magnesium-serum">Magnesium Serum</option>
                                <option value="malarial-parasite">Malarial Parasite (WB/QBC)</option>
                                <option value="microalbumin">Microalbumin / Creatinine Ratio</option>
                                <option value="myoglobin-serum">Myoglobin, Serum**</option>
                                <option value="nipple-discharge">Nipple Discharge by Conventional method</option>
                                <option value="nor-metanephrine">Nor-Metanephrine, ELISA, urine 24 hrs**</option>
                                <option value="obesity-profile">Obesity Profile**</option>
                                <option value="osmolality-urine">Osmolality, urine**</option>
                                <option value="pancreatic-profile">Pancreatic (Acute) Profile</option>
                                <option value="parathyroid-panel">Parathyroid Panel</option>
                                <option value="pas-stain">PAS Stain Bone Marrow**</option>
                                <option value="pcod-profile">PCOD Profile</option>
                                <option value="phosphorus-serum">Phosphorus-Inorganic Serum</option>
                                <option value="potassium">POTASSIUM (K+)</option>
                                <option value="pregnancy-test">Pregnancy Test Qualitative Urine Spot</option>
                                <option value="progesterone">Progesterone (P4) CMIA Serum</option>
                                <option value="protein-c">Protein C Activity**</option>
                                <option value="quadruple-marker">Quadruple marker test reflex confirmation</option>
                                <option value="rbc-folate">RBC Folate**</option>
                                <option value="renal-function-tests">Renal (Kidney) Function Tests-1 RFT Maxi</option>
                                <option value="routine-exam-urine">Routine Examination Urine</option>
                                <option value="sars-cov-2">SARS CoV 2 Antigen test for COVID 19*</option>
                                <option value="serum-mannanase">Serum Mannanase</option>
                                <option value="sickling-test">Sickling Test</option>
                                <option value="sodium">SODIUM (NA+)</option>
                                <option value="sperm-antibody">Sperm Antibody-TotalASABserum</option>
                                <option value="stomach-marker">Stomach Marker Profile**</option>
                                <option value="stone-screening">Stone screening profile-2**</option>
                                <option value="t3-total">T3-Total Tri Iodothyronine Serum</option>
                                <option value="t4-total">T4-Total Thyroxine Serum</option>
                                <option value="testicular-marker">Testicular Marker Profile</option>
                                <option value="testosterone-bio">Testosterone Bioavailable**</option>
                                <option value="testosterone-total">Testosterone Total Serum</option>
                                <option value="testosterone-free">TestosteroneFreeSerum</option>
                                <option value="formula-package">THE FORMULA PACKAGE</option>
                                <option value="thyroglobulin-antibody">Thyroglobulin Antibody ATA Serum</option>
                                <option value="thyroid-profile-1">Thyroid Comprehensive Profile-1</option>
                                <option value="thyroid-profile-2">Thyroid Comprehensive Profile-2</option>
                                <option value="thyroid-profile">Thyroid Profile (CLIA)</option>
                                <option value="tissue-transglutaminase">TISSUE TRANSGLUTAMINASE ANTIBODY IgG</option>
                                <option value="toxoplasma">Toxoplasma-IgG & IgM</option>
                                <option value="tpo-antibody">TPO (Thyroid Peroxidase) Antibody (AMA) Microsomal Antibody Serum</option>
                                <option value="troponin">Troponin-ISerum</option>
                                <option value="tsh">TSH (THYROID STIMULATING HORMONE)</option>
                                <option value="urea-urine">Urea Urine Spot</option>
                                <option value="urea-serum">Urea, Serum</option>
                                <option value="vb-hair-package">V B HAIR PACKAGE</option>
                                <option value="vitamin-b12">Vitamin B12</option>
                                <option value="vitamin-b12-adv">Vitamin B12, advanced</option>
                                <option value="vitamin-d-plus">Vitamin D plus profile</option>
                                <option value="wbc-differential">WBC-Total & Differential Counts, Body fluids</option>
                                <option value="wbc-total">WBC-Total Counts, Body fluids</option>
                                <option value="wbc-counts">WBC:Total & Differential Counts</option>
                                <option value="widal-test">Widal Test for Typhoid Serum</option>
                                <option value="zinc">ZINC</option>
                                <?php while($test = mysqli_fetch_assoc($test_query)) { ?>
        <option value="<?= htmlspecialchars($test['test_name']) ?>">
            <?= htmlspecialchars($test['test_name']) ?>
        </option>
    <?php } ?>
                                <option value="" selected disabled>-- Select a package --</option>
                                <option value="17-Hydroxy Progesterone Neonatal Screen Dried Blood Spot">FEVER PANEL(FEVER)</option>
                                <option value="17-Hydroxy-Progesterone">TruHealth Silver</option>
                                <option value="5 Antigen by Latex Agglutination, Serum">TruHealth Gold</option>
                                <option value="Abnormal Haemoglobin Studies Hb Variants & CBC">TruHealth Dimond</option>
                                <option value="Abnormal Haemoglobin Studies Hb Variants Blood">Xpert Health Cancer Screening Female(54 Tests)</option>
                                <option value="Absolute Eosinophile Count">Xpert Health Cardiac Comprehensive (47 Tests)</option>
                                <option value="Benzodiazepine Diazepam Urine Spot">Xpert Health Depression Package (46 Tests)</option>
                                <option value="Blood Group ABO & Rh Typing">Xpert Health Diabetes Comprehensive (57 Tests)</option>
                                <option value="BODY WATCH FITNESS CHECK BELOW 45 (M)">PREMARITAL HEALTH CHECK UP (FEMALE)</option>
                                <option value="Bone Marrow Aspiration">PREMARITAL HEALTH CHECK UP (MALE)</option>
                                <?php while($package = mysqli_fetch_assoc($package_query)) { ?>
    <option value="<?= htmlspecialchars($package['package_name']) ?>">
        <?= htmlspecialchars($package['package_name']) ?>
    </option>
<?php } ?>

          
                            </select>
                            
                        </div>
                        <button class="previous-btn">Previous</button>
                        <button class="next-btn">Next</button>
                    </div>

                    <div class="form-step">
                        <h3>Enter Personal Details:</h3>
                        <div class="input-group">
                            <input type="text" id="username" name="username" placeholder="Enter Your Name" required>
                        </div>

                        <div class="input-group">
                            <small id="phone-error" style="color: red; display: none;">Please enter a valid 10-digit number.</small>
                            <input type="text" id="phnnumber" name="phnnumber" placeholder="Enter Your Contact Number" required>
                        </div>

                        <div class="input-group">
                            <small id="email-error" style="color: red; display: none;">Please enter a valid email.</small>
                            <input type="email" id="user-email" name="user-email" placeholder="Enter Your Email" required>
                        </div>

                        <div class="input-group">
                            <small id="age-error" style="color: red; display: none;">Only 2 digits allowed.</small>
                            <input type="number" id="user-age" name="user-age" placeholder="Enter Your Age" required>

                        </div>
                        <div class="input-group">
                            <select id="user-gender" name="user-gender" required>
                                <option selected disabled>Select a Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <button class="previous-btn">Previous</button>
                        <button class="next-btn">Next</button>
                    </div>

                    <div class="form-step">
                        <h3>Enter Address:</h3>
                        <div class="input-group">
                            <input type="text" id="user-door" name="user-door" placeholder="Enter Your Door No" required>
                        </div>
                        <div class="input-group">
                            <input type="text" id="user-address" name="user-address" placeholder="Enter Your Address" required>
                        </div>
                        <div class="input-group">
                            <input type="text" id="user-city" name="user-city" placeholder="Enter Your City" required>
                        </div>
                        <div class="input-group">
                            <small id="pincode-error" style="color: red; display: none;">Pincode must be exactly 6 digits.</small>
                            <input type="text" id="user-pincode" name="user-pincode" placeholder="Enter Your Pincode" maxlength="6" required>
                        </div>
                        <div class="input-group">
                            <input type="text" id="user-state" name="user-state" placeholder="Enter Your State" required>
                        </div>
                        <button class="previous-btn">Previous</button>
                        <button class="next-btn">Next</button>
                    </div>

                    <div class="form-step">
                        <h3>Upload Prescription:</h3>
                        <div class="input-group">
                            <input type="file" id="file" name="file" accept="image/*, .pdf" placeholder="Upload Prescription">
                        </div>
                        <div class="input-group">
                            <input type="date" id="date" name="date" placeholder="Select Appointment Date" required>
                        </div>
                        <div class="input-group">
                            <select id="time" name="time" required>
                                <option selected disabled>-- Select Appointment time --</option>
                                <option>12:00 AM - 12:30 AM</option>
                                <option>12:30 AM - 1:00 AM</option>
                                <option>1:00 AM - 1:30 AM</option>
                                <option>1:30 AM - 2:00 AM</option>
                                <option>2:00 AM - 2:30 AM</option>
                                <option>3:00 AM - 3:30 AM</option>
                                <option>4:00 AM - 4:30 AM</option>
                                <option>4:30 AM - 5:00 AM</option>
                                <option>5:00 AM - 5:30 AM</option>
                                <option>5:30 AM - 6:00 AM</option>
                                <option>6:00 AM - 6:30 AM</option>
                                <option>6:30 AM - 7:00 AM</option>
                                <option>7:00 AM - 7:30 AM</option>
                                <option>7:30 AM - 8:00 AM</option>
                                <option>8:00 AM - 8:30 AM</option>
                                <option>8:30 AM - 9:00 AM</option>
                                <option>9:00 AM - 9:30 AM</option>
                                <option>9:30 AM - 10:00 AM</option>
                                <option>10:00 AM - 10:30 AM</option>
                                <option>10:30 AM - 11:00 AM</option>
                                <option>11:00 AM - 11:30 AM</option>
                                <option>11:30 AM - 12:00 PM</option>
                                <option>12:00 PM - 12:30 PM</option>
                                <option>12:30 PM - 1:00 PM</option>
                                <option>1:00 PM - 1:30 PM</option>
                                <option>1:30 PM - 2:00 PM</option>
                                <option>2:00 PM - 2:30 PM</option>
                                <option>3:00 PM - 3:30 PM</option>
                                <option>4:00 PM - 4:30 PM</option>
                                <option>4:30 PM - 5:00 PM</option>
                                <option>5:00 PM - 5:30 PM</option>
                                <option>5:30 PM - 6:00 PM</option>
                                <option>6:00 PM - 6:30 PM</option>
                                <option>6:30 PM - 7:00 PM</option>
                                <option>7:00 PM - 7:30 PM</option>
                                <option>7:30 PM - 8:00 PM</option>
                                <option>8:00 PM - 8:30 PM</option>
                                <option>8:30 PM - 9:00 PM</option>
                                <option>9:00 PM - 9:30 PM</option>
                                <option>9:30 PM - 10:00 PM</option>
                                <option>10:00 PM - 10:30 PM</option>
                                <option>10:30 PM - 11:00 PM</option>
                                <option>11:00 PM - 11:30 PM</option>
                                <option>11:30 PM - 12:00 AM</option>
                            </select>
                        </div>
                        <button class="previous-btn">Previous</button>
                        <button class="next-btn">Next</button>
                    </div>
                    <div class="form-step">
                        <h4>Finish:</h4>
                        <p>Would you like to confirm the booking?</p>
                        <button class="previous-btn">Previous</button>
                        <button class="finish-btn" type="submit" name="operation" value="insert">Finish</button>
                    </div>

                    <div class="form-step">
                        <p>congratulation! your text booking is confirmed</p>
                    </div>
            </div>
            </form>
        </div>
    </section>

    <section>
        <div class="accordion-container">
            <h1 class=accordion-h1 style="color: white;  font-size:xx-large">NOTE :</h1>
            <button class="accordion">📌 Test Processing & Reporting <i class="fas fa-chevron-down"></i></button>
            <div class="panel">
                <p>Test processing, reporting, and everything is done by the respective processing laboratory only.</p>
                <p>This offer is available across all the major cities in India.</p>
            </div>

            <button class="accordion">🚫 Exclusions <i class="fas fa-chevron-down"></i></button>
            <div class="panel">
                <p>Any physical tests are NOT included in this package.</p>
            </div>

            <button class="accordion">🏡 Home Service & Fasting <i class="fas fa-chevron-down"></i></button>
            <div class="panel">
                <p>FREE home service is available in selected cities within city limits only.</p>
                <p><b>10 to 12 Hours fasting</b> is required, only normal water after dinner.</p>
            </div>

            <button class="accordion">📄 Report Delivery <i class="fas fa-chevron-down"></i></button>
            <div class="panel">
                <p>Soft copy (PDF) via email within **24 to 72 hours**.</p>
                <p>Hard copy (optional) by courier within **5 to 7 days** (Rs.75 extra).</p>
            </div>

            <button class="accordion">📅 Appointment & Payment <i class="fas fa-chevron-down"></i></button>
            <div class="panel">
                <p><b>Appointment:</b> At least **24 hours prior notice** required.</p>
                <p><b>Payment:</b> At the time of test booking.</p>
            </div>

            <button class="accordion">💰 Tax Benefit <i class="fas fa-chevron-down"></i></button>
            <div class="panel">
                <p>Under **Section 80D**, preventive health check-ups qualify for a **tax deduction of up to INR 5,000** for self, spouse, children, and parents.</p>
            </div>
        </div>
    </section>

    <?php
    include("footer.php");
    ?>
    <script>
        document.getElementById("phnnumber").addEventListener("input", function() {
            let phone = this.value;
            let errorMsg = document.getElementById("phone-error");
            let phonePattern = /^[0-9]{10}$/; // Only 10-digit numbers allowed

            if (phone && !phonePattern.test(phone)) {
                errorMsg.style.display = "block"; // Show error message
            } else {
                errorMsg.style.display = "none"; // Hide error message if valid
            }

            // Ensure only numbers are entered
            this.value = phone.replace(/\D/g, '').slice(0, 10); // Remove non-digits & limit to 10
        });

        document.getElementById("user-age").addEventListener("input", function() {
            let age = this.value;
            let errorMsg = document.getElementById("age-error");

            if (age.length > 2) {
                errorMsg.style.display = "block"; // Show error message
            } else {
                errorMsg.style.display = "none"; // Hide error message
            }

            if (age.length > 2) {
                this.value = age.slice(0, 2); // Restrict input to 2 digits
            }
        });

        document.getElementById("user-email").addEventListener("input", function() {
            let email = this.value;
            let errorMsg = document.getElementById("email-error");
            let emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/; // Must end with @gmail.com

            if (email && !emailPattern.test(email)) {
                errorMsg.style.display = "block"; // Show error message
            } else {
                errorMsg.style.display = "none"; // Hide error message if valid
            }
        });

        document.getElementById("user-pincode").addEventListener("input", function() {
            let pincode = this.value;
            let errorMsg = document.getElementById("pincode-error");
            let pincodePattern = /^[0-9]{6}$/; // Only 6-digit numbers allowed

            if (pincode && !pincodePattern.test(pincode)) {
                errorMsg.style.display = "block"; // Show error message
            } else {
                errorMsg.style.display = "none"; // Hide error message if valid
            }

            // Ensure only numbers are entered and limit to 6 digits
            this.value = pincode.replace(/\D/g, '').slice(0, 6);
        });
    </script>

    <script>
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
        }


        let currentStep = 0;
        const steps = document.querySelectorAll(".step");
        const forms = document.querySelectorAll(".form-step");
        const progress = document.querySelector(".progress");
        const nextBtns = document.querySelectorAll(".next-btn");
        const previousBtns = document.querySelectorAll(".previous-btn");
        const finishBtn = document.querySelector(".finish-btn");
        const form = document.querySelector("form"); // Ensure form wraps all steps

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent accidental form submission
                if (currentStep < steps.length - 1) {
                    steps[currentStep].classList.add("completed");
                    steps[currentStep].classList.remove("active");
                    forms[currentStep].classList.remove("active");
                    currentStep++;
                    steps[currentStep].classList.add("active");
                    forms[currentStep].classList.add("active");
                    progress.style.width = (currentStep + 1) * (100 / steps.length) + "%";
                }
            });
        });

        previousBtns.forEach((btn) => {
            btn.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent accidental form submission
                if (currentStep > 0) {
                    steps[currentStep].classList.remove("active");
                    steps[currentStep].classList.remove("completed");
                    forms[currentStep].classList.remove("active");
                    currentStep--;
                    steps[currentStep].classList.add("active");
                    forms[currentStep].classList.add("active");
                    progress.style.width = (currentStep + 1) * (100 / steps.length) + "%";
                }
            });
        });


        finishBtn.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission

            if (!form.checkValidity()) {
                form.reportValidity(); // Show browser's built-in validation messages
            } else {
                form.submit(); // Submit only if all required fields are valid
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            var accordions = document.querySelectorAll(".accordion");

            accordions.forEach(function(accordion) {
                accordion.addEventListener("click", function(event) {
                    // Ensure it only affects accordions
                    if (!event.target.classList.contains("accordion")) return;

                    this.classList.toggle("active");

                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            });
        });
    </script>
</body>

</html>

<style>
    .booking-wrapper {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding-top: 40px;
    }

    .booker {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 900px;
        text-align: center;
        box-sizing: border-box;
        padding-top: 40px;

    }

    .booker h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 20px;
    }

    .stepper {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
    }

    .step {
        width: 14%;
        text-align: center;
        font-size: 14px;
        color: #888;
        position: relative;
    }

    .step .icon {
        display: block;
        width: 40px;
        height: 40px;
        background: #ddd;
        border-radius: 50%;
        line-height: 40px;
        margin: 0 auto 5px;
        font-size: 20px;
    }

    .step.active .icon {
        background: #ff7f50;
        color: white;
    }

    .step.completed .icon {
        background: #28a745;
        color: white;
    }

    .progress-bar {
        height: 5px;
        background: #ddd;
        width: 100%;
        position: relative;
        margin-bottom: 20px;
    }

    .progress {
        height: 100%;
        width: 14%;
        background: #ff7f50;
        transition: width 0.3s;
    }

    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
    }

    .form-step p {
        font-size: 1.7rem;
        padding-top: 20px;
        padding-bottom: 40px;
    }

    .form-step h4 {
        font-size: 2rem;
        color: #28a745;
        padding-top: 20px;
    }

    .form-step h3 {
        font-size: 1.7rem;
        padding-top: 20px;

    }

    .input-group {
        margin: 20px 0;
        text-align: center;
    }

    .input-group label {
        font-size: 14px;
        color: #555;
        margin-bottom: 5px;
        display: block;
        text-align: left;
    }

    .booking-wrapper input,
    select,
    .booking-wrapper button {
        width: 80%;
        padding: 10px;
        font-size: 14px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        box-sizing: border-box;
    }

    .booking-wrapper input:focus,
    select:focus {
        border-color: #ff7f50;
    }

    .next-btn button {
        background: #ff7f50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 14px;
        margin-top: 15px;
    }

    .next-btn button:hover {
        background: #ff7f50;
    }

    .previous-btn {
        background: #6c757d;
        margin-top: 10px;
    }

    .previous-btn:hover {
        background: #5a6268;
    }

    .stepper .step {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .booker {
            padding: 20px;
        }

        .booker h2 {
            font-size: 24px;
        }

        .stepper {
            flex-direction: column;
            align-items: center;
        }

        .step {
            width: auto;
            margin-bottom: 10px;
        }

        .form-step {
            padding: 15px;
        }

        .booking-wrapper input,
        select,
        .booking-wrapper button {
            width: 90%;
        }
    }

    @media (max-width: 480px) {
        .booker h2 {
            font-size: 20px;
        }

        .input-group label {
            font-size: 12px;
        }

        .booking-wrapper input,
        select,
        .booking-wrapper button {
            font-size: 12px;
            padding: 8px;
        }

        button {
            padding: 8px 16px;
        }
    }
</style>