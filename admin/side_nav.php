<?php if (!isset($fileDetails)) {
  $fileDetails = null;
} ?>
<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Admin</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg" style="margin-left: -60px;"><b>Admin</b>Panel</span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <!-- Navbar Right Menu -->

    <!--<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Normal</a></li>
      <li class="disabled"><a href="#">Disabled</a></li>
      <li class="active"><a href="#">Active</a></li>
      <li><a href="#">Normal</a></li>
    </ul>
  </div>-->

    <!--<div class="navbar-custom-menu">
          </div>-->
  </nav>
</header>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Menus</li>
      <!-- Optionally, you can add icons to the links -->


      <!-- FOR ISC SITE -->
      <li><a href="dashboard_chat.php"><i class="fa fa-cog"></i> <span>Dashboard</span></a></li>
      <li <?php if ($fileDetails['basename'] == 'admin_setting.php') {
            echo "class='active'";
          } ?>>
        <a href="admin_setting.php"><i class="fa fa-cog"></i> <span>Admin setting</span></a>
      </li>
      <li <?php if (($fileDetails['basename'] == 'banner_view.php') || ($fileDetails['basename'] == 'banner_edit.php')) {
            echo "class='active'";
          } ?>>
        <a href="banner_view.php"><i class="fa fa-image"></i> <span>Banner</span></a>
      </li>
      <li <?php if (($fileDetails['basename'] == 'cat_list.php') || ($fileDetails['basename'] == 'cat_cru.php')) {
            echo "class='active'";
          } ?>>
        <a href="cat_list.php"><i class="fa fa-th-large"></i> <span>Category</span></a>
      </li>
      <li <?php if (($fileDetails['basename'] == 'product_list.php') || ($fileDetails['basename'] == 'product_crud.php') || ($fileDetails['basename'] == 'product_bulkup.php')) {
            echo "class='active'";
          } ?>>
        <a href="product_list.php"><i class="fa fa-shopping-cart"></i><span>Product</span></a>
      </li>
      <!--<li><a href="order_request_list.php"><i class="fa fa-tasks"></i> <span>Order Request</span></a></li>-->
      <li><a href="single_page_order.php"><i class="fa fa-tasks"></i> <span></span></a></li>
      <li><a href="user_list.php"><i class="fa fa-tasks"></i> <span>Customer List</span></a></li>
      <!--<li <?php if ($fileDetails['basename'] == 'discount_crud.php') {
                echo "class='active'";
              } ?>><a href="discount_crud.php"><i class="fa fa-percent"></i><span>Discount</span></a></li>-->
      <!--<li <?php if ($fileDetails['basename'] == 'single_page_customer.php') {
                echo "class='active'";
              } ?>><a href="single_page_customer.php"><i class="fa fa-user"></i> <span>Customers</span></a></li>-->
      <!--<li><a href="single_page_order.php"><i class="fa fa-tasks"></i> <span>Order</span></a></li>-->
      <li <?php if (($fileDetails['basename'] == 'cms_list.php') || ($fileDetails['basename'] == 'cms_edit.php')) {
            echo "class='active'";
          } ?>>
        <a href="cms_list.php"><i class="fa fa-columns"></i> <span>CMS</span></a>
      </li>
      <li <?php if (($fileDetails['basename'] == 'image_view.php') || ($fileDetails['basename'] == 'image_edit.php')) {
            echo "class='active'";
          } ?>>
        <a href="image_view.php"><i class="fa fa-image"></i> <span>Addtional images</span></a>
      </li>
      <li <?php if (($fileDetails['basename'] == 'view_image.php') || ($fileDetails['basename'] == 'add_images.php')) {
            echo "class='active'";
          } ?>>
        <a href="view_image.php"><i class="fa fa-image"></i> <span>Side Images</span></a>
      </li>
      <li <?php if (($fileDetails['basename'] == 'footer_list.php') || ($fileDetails['basename'] == 'add_images.php')) {
            echo "class='active'";
          } ?>>
        <a href="footer_list.php"><i class="fa fa-image"></i> <span>Footer Content</span></a>
      </li>
      <li <?php if ($fileDetails['basename'] == 'change_password.php') {
            echo "class='active'";
          } ?>>
        <a href="change_password.php"><i class="fa fa-key"></i> <span>Change Password</span></a>
      </li>
      <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      <!-- FOR ISC SITE -->

    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<style>
  .deleteModel {
    position: relative;
    top: 150px;
  }

  .btnAlign {
    position: relative;
  }

  .dataTables_filter {
    position: absolute;
    right: 3%;
  }

  .form-control {
    width: 95%;
  }
</style>