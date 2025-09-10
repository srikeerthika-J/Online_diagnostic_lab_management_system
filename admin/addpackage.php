<?php
include('dbconfig.php');

// Initialize
$id = '';
$packageData = ['package_name' => ''];
$message = '';

// Edit mode
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $getsql = mysqli_query($con, "SELECT * FROM lab_package WHERE `s.no`='$id'");
    if ($getsql && mysqli_num_rows($getsql) > 0) {
        $packageData = mysqli_fetch_assoc($getsql);
    }
}

// Form submission
if (isset($_POST['submit'])) {
    $package_name = trim($_POST['package_name']);

    if (empty($package_name)) {
        $message = '<div class="alert alert-danger">Package name is required!</div>';
    } else {
        if (!empty($id)) {
            $sql = "UPDATE lab_package SET package_name='$package_name' WHERE `s.no`='$id'";
        } else {
            $sql = "INSERT INTO lab_package (package_name) VALUES ('$package_name')";
        }

        if (mysqli_query($con, $sql)) {
            $message = '<div class="alert alert-success">Package saved successfully!</div>';
            $packageData['package_name'] = '';
            if (!$id) echo '<script>setTimeout(() => { window.location.href = "sub_list.php"; }, 1000);</script>';
        } else {
            $message = '<div class="alert alert-danger">Database error: ' . mysqli_error($con) . '</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-semi-dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Package</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="gallery/logo1.png" />
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-semi-dark.css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
</head>

<style>
.form-label {
  color: black;
  font-size: 13px;
  font-family: 'Rubik';
}
</style>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo" style="padding-left:0px">
          <img src="gallery/logo1.png" style="width: 240px; padding-top:25px;" />
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
          </a>
        </div>
        <div class="menu-divider mt-0"></div>
        <?php include('sidenav.php'); ?>
      </aside>

      <div class="layout-page">
        <?php include('head.php'); ?>

        <div class="content-wrapper">
          <div class="card">
            <div class="offcanvas-body mx-0 flex-grow-0">
              <div class="container" style="border: 1px solid lightgray; padding: 37px; border-radius: 5px">
                <form method="post" id="packageForm">
                  <center><h4><?= $id ? 'Edit' : 'Add' ?> Package</h4></center>
                  
                  <?= $message ?>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="package_name">Package Name</label>
                        <input type="text" autocomplete="off" class="form-control" placeholder="Enter Package Name" name="package_name" id="package_name" value="<?= htmlspecialchars($packageData['package_name']); ?>" required>
                        <div id="errorMsg" class="text-danger"></div>
                      </div>
                    </div>
                  </div>

                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                  <a href="sub_list.php"><button type="button" class="btn btn-label-secondary">Cancel</button></a>
                </form>
              </div>
            </div>
          </div>

          <?php include('footer.php'); ?>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
  </div>

  <!-- Core JS -->
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Client-side validation -->
  <script>
    $(document).ready(function () {
      $('#packageForm').on('submit', function (e) {
        var name = $.trim($('#package_name').val());
        if (name === '') {
          e.preventDefault();
          $('#errorMsg').text('Package name cannot be blank or whitespace.');
        } else {
          $('#errorMsg').text('');
        }
      });
    });
  </script>
</body>
</html>

