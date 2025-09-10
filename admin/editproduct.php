<?php
include('dbconfig.php');

$id = $_GET['id'];

$getsql = mysqli_query($con, "select * from tbl_product  where id='$id'");
$aboutdata = mysqli_fetch_assoc($getsql);
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>edit Test</title>

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

          <!---image condition---->



          <!-- Users List Table -->
          <div class="card">
            <div class="offcanvas-body mx-0 flex-grow-0">
              <div class="container" style="    border: 1px solid lightgray; padding: 37px;border-radius:5px">
                <form class="add-new-user pt-0" method="post" enctype="multipart/form-data">
                  <div class="row ">

                    <center>
                      <h4>ADD Products</h4>
                    </center>

                    <select name="catid" id="catid" class="form-select">
                      <!-----select from title---->
                      <option value="">SELECT CATEGORIES</option>
                      <?php
                      $select_query = "select * from tbl_category";
                      $result = mysqli_query($con, $select_query);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $catagory_ttitle = $row['cat_name'];
                        $catagory_id = $row['id'];
                        echo "<option value='$catagory_id'>$catagory_ttitle</option>";
                      }
                      ?>
                      <br>
                      <br>
                    </select>

                    <select name="sub_id" id="sub_id" class="form-select">
                      <!-----select from title---->
                      <option value="">SELECT SUB CATEGORIES</option>
                      <?php
                      $select_query1 = "select * from tbl_subcat";
                      $result1 = mysqli_query($con, $select_query1);
                      while ($row1 = mysqli_fetch_assoc($result1)) {
                        $catagory_ttitle1 = $row1['sub_name'];
                        $catagory_id1 = $row['id'];
                        echo "<option value='$catagory_id1'>$catagory_ttitle1</option>
                ";
                      }
                      ?>
                    </select>

                    </br>

                    <div class="col-md-12">

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Image : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="file" name="img" required>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Name :&nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="" value="<?php echo $aboutdata['name']; ?>" required />
                      </div>




                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Price : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="price" class="form-control" placeholder="" value="<?php echo $aboutdata['price']; ?>" required />
                      </div>


                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Brand : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="brand" class="form-control" placeholder="" value="<?php echo $aboutdata['brand']; ?>" required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Product Code : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="code" class="form-control" placeholder="" value="<?php echo $aboutdata['code']; ?>" required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Availability : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="available" class="form-control" placeholder="" value="<?php echo $aboutdata['available']; ?>" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Size : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="size" class="form-control" placeholder="" value="<?php echo $aboutdata['size']; ?>" required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> Quantity : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="quantity" class="form-control" placeholder="" value="<?php echo $aboutdata['quantity']; ?>" required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname"> keyword : &nbsp;&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="keyword" class="form-control" placeholder="" value="<?php echo $aboutdata['keyword']; ?>" required />
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

  <?php

  if (isset($_POST['submit'])) {

    include('dbconfig.php');

    $img = $_FILES['img']['name'];
    if ($img != '') {
      $allowed = array('gif', 'png', 'jpg', 'jpeg');
      $img = $_FILES['img']['name'];
      $ext = pathinfo($img, PATHINFO_EXTENSION);
      if (!in_array($ext, $allowed)) {
        echo '<script>window.location.href="add-coach.php?m=imgnotsupport"</script>';
        return;
      }
      $ttemp = $_FILES['img']['tmp_name'];
      $img = $_FILES['img']['name'];
      $filetype = $_FILES['img']['type'];
      $tpath = "../assets/img/$img";
      move_uploaded_file($ttemp, $tpath);
      $photo = $img;
    } else {


      $photo = $_POST['img'];
    }


    $catid = mysqli_real_escape_string($con, $_POST['catid']);
    $sub_id = mysqli_real_escape_string($con, $_POST['sub_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $available = mysqli_real_escape_string($con, $_POST['available']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $keyword = mysqli_real_escape_string($con, $_POST['keyword']);


    if ($name == ''  ||  $price == '' ||     $brand == '' ||  $code == '' ||  $available == '' ||  $size == '' ||  $quantity == '' || $img == '' || $keyword == '') {
      echo "<script>alert('please enter the blank field')</script>";
    } else {





      //insertquery

      $sqlinsert = mysqli_query($con, "update tbl_product set catid='$catid',sub_id='$sub_id',img='$img', name='$name', price='$price', brand='$brand', code='$code', available='$available', size='$size', quantity='$quantity', keyword='$keyword' where id='$id' ");
      if ($sqlinsert) {

        echo "<script>alert('upload successfully')</script>";
        echo '<script>window.location.href="productlist.php";</script>';
      } else {
        echo "<script>alert('Failed')</script>";
      }
    }
  }

  ?>
</body>


</html>