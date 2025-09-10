<?php
include('dbconfig.php');
$getsql = mysqli_query($con, "select * from tbl_settings where id='2'");
$aboutdata = mysqli_fetch_assoc($getsql);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Site Settings</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="gallery/logo1.png" />
  <script src="ckeditor/ckeditor.js"></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
</head>

<style>
  .form-label {
    color: black;
    font-size: 13px;
    font-family: 'Rubik';
    text-transform: capitalize;

  }
</style>

<body>


  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">



      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


        <div class="app-brand demo ">


          <img src="gallery/logo1.png" style="width:240px; padding-top:25px; padding-left:0px;" />

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
          </a>
        </div>


        <div class="menu-divider mt-0  ">
        </div>

        <?php include('sidenav.php'); ?>

      </aside>

      <!-- Layout container -->
      <div class="layout-page">



        <?php include('head.php'); ?>


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->


          <!-- Users List Table -->
          <div class="card">
            <div class="offcanvas-body mx-0 flex-grow-0">
              <div class="container" style="    border: 1px solid lightgray; padding: 37px;border-radius:5px">
                <form class="add-new-user pt-0" method="post" enctype="multipart/form-data">
                  <div class="row ">

                    <center>
                      <h4>Website Settings </h4>
                    </center>



                    <div class="col-md-12">



                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Logo &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <img src="gallery/<?php echo $aboutdata['logo']; ?>" style="width:200px" />
                        <input type="hidden" name="oldpic" value="<?php echo $aboutdata['logo']; ?>" />
                        <input type="file" name="pic">
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Description &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="description" class="form-control" value="<?php echo $aboutdata['description']; ?>" placeholder=" India, Tamil Nadu" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Contact Address &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="address" class="form-control" value="<?php echo $aboutdata['address']; ?>" placeholder=" India, Tamil Nadu" />
                      </div>





                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Phone No &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $aboutdata['phone']; ?>" placeholder="987654321" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Email &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="email" class="form-control" value="<?php echo $aboutdata['email']; ?>" placeholder="xyz@gmail.com" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Facebook link &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="fb" class="form-control" value="<?php echo $aboutdata['fb']; ?>" placeholder="https://www.facebook.com/" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Instagram link &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="insta" class="form-control" value="<?php echo $aboutdata['insta']; ?>" placeholder="https://www.instagram.com/" />
                      </div>


                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Twitter link &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="twitter" class="form-control" value="<?php echo $aboutdata['twitter']; ?>" placeholder="https://www.twitter.com/" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Location Iframe Link : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="location" class="form-control" placeholder="https://www.google.com/maps" value="<?php echo $aboutdata['location']; ?>" />
                      </div>


                    </div>

                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <a href="settings.php"><button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button></a>
              </div>
              </form>
            </div>



          </div>
          <!-- / Content -->

          <script>
            CKEDITOR.replace('des2');
          </script>



          <!-- Footer -->
          <?php include('footer.php'); ?>
          <!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/libs/hammer/hammer.js"></script>


  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/moment/moment.js"></script>
  <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="assets/vendor/libs/select2/select2.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/app-user-list.js"></script>
</body>


</html>

<?php

if (isset($_POST['submit'])) {





  include('dbconfig.php');

  $address = $_POST['address'];
  $description = $_POST['description'];
  $location = $_POST['location'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $fb = $_POST['fb'];
  $insta = $_POST['insta'];
  $youtube = $_POST['youtube'];
  $twitter = $_POST['twitter'];
  $whatasapp = $_POST['whataspp'];
  $linkedin = $_POST['linkedin'];
  $filename1 = $_FILES['pic']['name'];

  if ($filename1 != '') {
    $allowed = array('gif', 'png', 'jpg', 'jpeg');
    $filename1 = $_FILES['pic']['name'];
    $ext = pathinfo($filename1, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
      echo '<script>window.location.href="add-coach.php?m=imgnotsupport"</script>';
      return;
    }
    $ttemp = $_FILES['pic']['tmp_name'];
    $filename1 = $_FILES['pic']['name'];
    $filetype = $_FILES['pic']['type'];
    $tpath = "gallery/$filename1";
    move_uploaded_file($ttemp, $tpath);
    $photo = $filename1;
  } else {

    $photo = $_POST['oldpic'];
  }


  //end of image upload

  $insertsql = mysqli_query($con, "update tbl_settings set logo='$photo', description='$description', location='$location', address='$address',
phone='$phone',email='$email',fb='$fb',insta='$insta',youtube='$youtube',twitter='$twitter',
whataspp='$whatasapp',linkedin='$linkedin' where id='2'");



  if ($insertsql) {
    echo '<script>alret("sucess")</script>';
    echo '<script>window.location.href="settings.php";</script>';
  } else {
    echo '<script>window.location.href="settings.php";</script>';
  }
}


?>