<?php
include('dbconfig.php');

$id = $_GET['id'];

$getusersql = mysqli_query($con, "select * from lab_booking where id='$id'");
$userdata = mysqli_fetch_assoc($getusersql);

?>

<?php

if (isset($_POST['upload_report'])) {
    $operator = $_POST['operator'];
    $status = $_POST['status'];
    $username = $_POST['username'];
    $file_name = basename($_FILES["report_file"]["name"]);
    $target_dir = "uploads/";

    // Create uploads folder if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $new_file_name = $username . "_" . time() . "." . $file_ext;
    $target_file = $target_dir . $new_file_name;

    if (move_uploaded_file($_FILES["report_file"]["tmp_name"], $target_file)) {
        $update = "UPDATE lab_booking SET file='$new_file_name', operator='$operator', cur_status='$status' WHERE id='$id'";

        if (mysqli_query($con, $update)) {
            echo "<div class='alert alert-success'>Details updated successfully!</div>";
            $userdata = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM lab_booking WHERE id='$id'"));
        } else {
            echo "<div class='alert alert-danger'>Database update failed!</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>File upload failed!</div>";
    }
}

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
    <title>BOOKING LIST</title>

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




                <div class="container">
                    <div class="">


                    </div><br />
                    <center><b>
                            <h4>BOOKING LIST</h4><b /></center>
                    <div class=" table-responsive card" style="padding:5px">
                        <table class="table border-top">
                            <tr>
                                <td>Name </td>
                                <td><?php echo $userdata['name']; ?>
                            </tr>

                            <tr>
                                <td>Email </td>
                                <td><?php echo $userdata['email_id']; ?>
                            </tr>

                            <tr>
                                <td>number </td>
                                <td><?php echo $userdata['number']; ?>
                            </tr>

                            <tr>
                                <td>age </td>
                                <td><?php echo $userdata['age']; ?>
                            </tr>

                            <tr>
                                <td>gender </td>
                                <td><?php echo $userdata['gender']; ?>
                            </tr>

                            <tr>
                                <td>Door no </td>
                                <td><?php echo $userdata['door_no']; ?>
                            </tr>

                            <tr>
                                <td>address </td>
                                <td><?php echo $userdata['address']; ?>
                            </tr>

                            <tr>
                                <td>city </td>
                                <td><?php echo $userdata['city']; ?>
                            </tr>

                            <tr>
                                <td>pincode </td>
                                <td><?php echo $userdata['pincode']; ?>
                            </tr>

                            <tr>
                                <td>state </td>
                                <td><?php echo $userdata['state']; ?>
                            </tr>

                            <tr>
                                <td>lab</td>
                                <td><?php echo $userdata['lab']; ?>
                            </tr>

                            <tr>
                                <td>test </td>
                                <td><?php echo $userdata['test']; ?>
                            </tr>

                            <tr>
                                <td>file </td>
                                <td><?php echo $userdata['file']; ?>
                            </tr>

                            <tr>
                                <td>date </td>
                                <td><?php echo $userdata['date']; ?>
                            </tr>

                            <tr>
                                <td>time </td>
                                <td><?php echo $userdata['time']; ?>
                            </tr>



                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="username" value="<?php echo $userdata['username']; ?>">

                                <tr>
                                    <td>Operator</td>
                                    <td>
                                        <select name="operator" class="form-control" >
                                            <option value="">Select</option>
                                            <option value="Operator1">Operator1</option>
                                            <option value="Operator2">Operator2</option>
                                            <option value="Operator3">Operator3</option>
                                            <option value="Operator4">Operator4</option>
                                            <option value="Operator5">Operator5</option>
                                        </select>
                                    </td>
                                    <td><?php echo $userdata['operator']; ?></td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="status" class="form-control" >
                                            <option value="">Select</option>
                                            <option value="Operator Allocated">Operator Allocated</option>
                                            <option value="Sample Collected">Sample Collected</option>
                                            <option value="Testing On Process">Testing On Process</option>
                                            <option value="Report Delivered">Report Delivered</option>
                                        </select>
                                    </td>
                                    <td><?php echo $userdata['cur_status']; ?></td>
                                </tr>

                                <tr>
                                    <td>Upload Report</td>
                                    <td><input type="file" name="report_file" class="form-control" ></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Report</td>
                                    <td>
                                        <?php if (!empty($userdata['file'])): ?>
                                            <a href="uploads/<?php echo $userdata['file']; ?>" target="_blank" class="btn btn-sm btn-success">View Report</a>
                                        <?php else: ?>
                                            <span class="text-danger">No report uploaded</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>


                                <tr>
                                    <td></td>
                                    <td><button type="submit" name="upload_report" class="btn btn-primary">Update Status</button></td>
                                </tr>
                            </form>



                        </table>
                    </div>
                    <!-- Offcanvas to add new user -->

                </div>



            </div>
            <!-- / Content -->




            <!-- Footer -->

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