<?php
include('dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <title>Package List</title>
  <link rel="icon" type="image/x-icon" href="gallery/logo1.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Rubik&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/js/config.js"></script>
</head>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo" style="padding-left:0px">
          <img src="gallery/logo1.png" style="width: 240px; padding-top:25px; padding-left:0px;" />
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
        <div id="message" class="alert" style="display: none;"></div>
        <div class="container">
          <div class="mb-4">
            <a href="addpackage.php"><button class="btn btn-primary">Add Package</button></a>
          </div>
          <center><h4><b>Package List</b></h4></center>
          <div class="table-responsive card" style="padding: 5px;">
            <table class="table border-top" id="myTable">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Package Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($con, "SELECT * FROM lab_package");
$i = 1;
if (mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_assoc($query)) {
    $id = $row['id'];
    echo "<tr id='row_$id'>
            <td>$i</td>
            <td>{$row['package_name']}</td>
            <td>
              <a href='editpackage.php?id=$id' class='btn btn-sm btn-primary'><font color='white'>Edit</font></a>
              <button class='btn btn-sm btn-danger delete-btn' data-id='$id'><font color='white'>Delete</font></button>
            </td>
          </tr>";
    $i++;
  }
} else {
  echo "<tr><td colspan='3' class='text-center'>No packages found</td></tr>";
}
?>
</tbody>

            </table>
          </div>
        </div>

        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>

  <div class="layout-overlay layout-menu-toggle"></div>
  <div class="drag-target"></div>

  <!-- JS -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/vendor/libs/moment/moment.js"></script>
  <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="assets/vendor/libs/select2/select2.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/app-user-list.js"></script>

  <script>
  $(document).ready(function () {
    $('#myTable').DataTable();

    $('.delete-btn').click(function () {
      var id = $(this).data('id');
      $.ajax({
        url: 'delete_package.php',
        type: 'POST',
        data: { id: id },
        success: function (response) {
          if (response.trim() === 'success') {
            $('#message').removeClass('alert-danger').addClass('alert-success')
              .text('Package deleted successfully!').fadeIn();
            $('#row_' + id).fadeOut(300, function () {
              $(this).remove();
            });
          } else {
            $('#message').removeClass('alert-success').addClass('alert-danger')
              .text('Error deleting package: ' + response).fadeIn();
          }
          setTimeout(function() {
            $('#message').fadeOut();
          }, 5000);
        }
      });
    });
  });
  </script>
</body>
</html>
