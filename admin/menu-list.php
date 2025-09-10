<?php
session_start();
if ($_SESSION['adminUserId'] == '') {

  echo '<script>window.location.href="index.php";</script>';
} else {


  include('dbconfig.php');
?>
  <!DOCTYPE html>
  <html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">


  <!-- Mirrored from demos.pixinvent.com/frest-html-admin-template/html/vertical-menu-template-semi-dark/app-user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 11:16:24 GMT -->

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <title>Menu List</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="gallery/logo1.png" />

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
  <script>
    $(document).ready(function() {


      $('#myTable').DataTable();
    });
  </script>


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

            <div class="container-xxl flex-grow-1 container-p-y">




              <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span>WELCOME </span>
                          <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">

                              <?php
                              $totalplayers = mysqli_query($con, "select * from tbl_banner where status='Active'");
                              echo mysqli_num_rows($totalplayers);
                              ?>

                            </h4>

                          </div>

                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                          <i class="bx bx-user bx-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span>Events </span>
                          <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">

                              <?php
                              $totalplayers = mysqli_query($con, "select * from tbl_event where status='Active'");
                              echo mysqli_num_rows($totalplayers);
                              ?>

                            </h4>

                          </div>
                          <small>Total Active Events </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                          <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span>Gallery </span>
                          <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">

                              <?php
                              $totalplayers = mysqli_query($con, "select * from  tbl_gallery where status='Active'");
                              echo mysqli_num_rows($totalplayers);
                              ?>

                            </h4>

                          </div>
                          <small>Total Gallery Photos </small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                          <i class="bx bx-group bx-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span>Video</span>
                          <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">

                              <?php
                              $totalplayers = mysqli_query($con, "select * from tbl_videos where status='Active'");
                              echo mysqli_num_rows($totalplayers);
                              ?>

                            </h4>

                          </div>
                          <a href="package-list.php"><small>Total Video Collections</small><br /></a>

                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                          <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Users List Table -->
              <div class="">
                <div class="">


                </div><br />
                <center><b>
                    <h4>Leads </h4><b /></center>
                <div class=" table-responsive card" style="padding:5px">
                  <table class="table border-top" id="myTable">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Menu Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $getplayersql = mysqli_query($con, "select * from tbl_root order by id desc");
                      $sno = 1;
                      while ($playerdata = mysqli_fetch_assoc($getplayersql)) {

                        echo '
			<tr>
			<td>' . $sno . '</td>			
			<td>' . $playerdata["menuname"] . '			
			</td>
			<td>' . $playerdata["dt"] . '</td>';

                        if ($playerdata["status"] == 'Y') {


                          echo '<td>Active</td>';
                        } else {

                          echo '<td>Inactive</td>';
                        }

                        echo '
			<td><a href="edit-rootcat.php?id=' . $playerdata["id"] . '"><button class="btn btn-primary">View</button></a></td>
			
			</tr>

			';


                        $sno++;
                      }

                      ?>

                    </tbody>
                  </table>
                </div>
                <!-- Offcanvas to add new user -->

              </div>



            </div>
            <!-- / Content -->




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
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
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

  <!-- beautify ignore:end -->
<?php } ?>