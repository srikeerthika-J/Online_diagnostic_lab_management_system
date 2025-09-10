<?php
include('dbconfig.php');

$getsql = mysqli_query($con, "select * from tbl_group  where id='1'");
$aboutdata = mysqli_fetch_assoc($getsql);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>add members</title>

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
  <!---boostrap css link ---->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!---font awesome link ---->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!----css link---->
  <link rel="stylesheet" href="style.css">

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


        <div class="app-brand demo" style="padding-left:0px">


          <img src="gallery/logo1.png" style="width: 240px;
    padding-top:25px; padding-left:0px;" />

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
          <!----insert in to table-------->
          <?php

          if (isset($_POST['submit'])) {

            $name = mysqli_real_escape_string($con, $_POST['tbl_name']);

            $about = mysqli_real_escape_string($con, $_POST['tbl_about']);

            $image_news = $_FILES['pic']['name'];
            if ($image_news != '') {
              $allowed = array('gif', 'png', 'jpg', 'jpeg');
              $image_news = $_FILES['pic']['name'];
              $ext = pathinfo($image_news, PATHINFO_EXTENSION);
              if (!in_array($ext, $allowed)) {
                echo '<script>window.location.href="add-coach.php?m=imgnotsupport"</script>';
                return;
              }
              $ttemp = $_FILES['pic']['tmp_name'];
              $image_news = $_FILES['pic']['name'];
              $filetype = $_FILES['pic']['type'];
              $tpath = "gallery/$image_news";
              move_uploaded_file($ttemp, $tpath);
              $photo = $image_news;
            } else {


              $photo = $_POST['oldpic'];
            }


            if ($name == '' || $about == '' ||  $image_news == '') {
              echo "<script>alert('please enter tha blank field')</script>";
            } else {



              //insertquery

              $sqlinsert = mysqli_query($con, "insert into tbl_group (tbl_name,tbl_about,tbl_img,tbl_sts) values('$name','$about','$image_news','y')");
              if ($sqlinsert) {

                echo "<script>alert('successfully')</script>";
                echo '<script>window.location.href="about_list.php";</script>';
              } else {
                echo "<script>alert('unsuccessfully')</script>";
              }
            }
          }

          ?>
          <!---image condition---->



          <!-- Users List Table -->
          <div class="card">
            <div class="offcanvas-body mx-0 flex-grow-0">
              <div class="container" style="    border: 1px solid lightgray; padding: 37px;border-radius:5px">
                <form class="add-new-user pt-0" method="post" enctype="multipart/form-data">
                  <div class="row ">

                    <center>
                      <h4>ADD Members</h4>
                    </center>




                    <div class="col-md-12">



                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Name &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="tbl_name" class="form-control" placeholder="" value="<?php echo $aboutdata['tbl_name']; ?>" />
                      </div>


                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> About &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="tbl_about" class="form-control" placeholder="" value="<?php echo $aboutdata['tbl_about']; ?>" />
                      </div>



                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Image &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="file" name="pic">
                      </div>


                    </div>

                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  <a href="menu-list.php"><button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button></a>
              </div>
              </form>
            </div>



          </div>
          <!-- / Content -->

          <script>
            CKEDITOR.replace('des1');
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


<!-- Mirrored from demos.pixinvent.com/frest-html-admin-template/html/vertical-menu-template-semi-dark/app-user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 11:16:24 GMT -->

</html>