<?php
require("../db_config.php");
if(!isset($_SESSION['adminUserId'])){
	session_destroy();
	header("location:index.php");
}
require ('sql-upload-function.php');
$fileDetails=pathinfo(__file__);
$errmsg="";
if (isset($_GET['edit_value'])) {
  $editValue=base64_decode($_GET['edit_value']);
}else{
  $editValue='';
}

####### state edit start section #########

if(isset($_POST['edit_btn'])){
  $wel_title=$_POST['wel_title'];
  $wel_content=$_POST['wel_content'];
if ($editValue=='3'){
   $address=$_POST['address'];
  $mobilenumber1=$_POST['mobilenumber1'];
  $mobilenumber2=$_POST['mobilenumber2'];
  $mobilenumber3=$_POST['mobilenumber3'];
  $phonenumber=$_POST['phonenumber'];
  $site_link=$_POST['site_link'];
  $site_link2=$_POST['site_link2'];
  $site_link3=$_POST['site_link3'];
  $emailid=$_POST['emailid'];
  $map=$_POST['map'];
   $linkupdate=mysqli_query($conn,"update tbl_welcome set wel_title='$wel_title',wel_content='$wel_content',address='$address',mobilenumber1='$mobilenumber1',mobilenumber2='$mobilenumber2',mobilenumber3='$mobilenumber3',phonenumber='$phonenumber',site_link='$site_link',site_link2='$site_link2',site_link3='$site_link3',emailid='$emailid',map='$map' where wel_id='$editValue'");

  }
	$wel_dt=date('Y-m-d');
  $update=mysqli_query($conn,"update tbl_welcome set wel_title='$wel_title',wel_content='$wel_content',wel_dt='$wel_dt' where wel_id='$editValue'");
  header("location:cms_list.php");

}
####### state edit close section #########

include 'head.php';
?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Left side column. contains the logo and sidebar -->
      <?php include("side_nav.php");?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
  <?php
        $query=mysqli_query($conn,"SELECT * FROM tbl_welcome where wel_id='$editValue'");
        $data=mysqli_fetch_array($query);
        ?>
        <form action="#" method="post" enctype="multipart/form-data" id="edit_form">
          <section class="content-header">
          <h1> Edit CMS</h1>
        </section>
        <p> </p>
          <div class="container">
                <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Name</label>
                      <input type="text" class="form-control" placeholder="title" name="wel_title" value="<?php echo $data['wel_title'];?>" required>
                    </div>
               </div>
			   	   <?php if($editValue=='3')
			   {
	?>
			    <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Address</label>
                      <textarea type="text" class="form-control" placeholder="title" name="address" value="<?php echo $data['address'];?>" required>  <?php echo $data['address'];?></textarea>
                    </div>
               </div>

			   <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Mobile Number1</label>
                      <input type="text" class="form-control" placeholder="title" name="mobilenumber1" value="<?php echo $data['mobilenumber1'];?>" required>
                    </div>
               </div>
				<div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Mobile Number2</label>
                      <input type="text" class="form-control" placeholder="title" name="mobilenumber2" value="<?php echo $data['mobilenumber2'];?>" required>
                    </div>
               </div>   <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Mobile Number3</label>
                      <input type="text" class="form-control" placeholder="title" name="mobilenumber3" value="<?php echo $data['mobilenumber3'];?>" required>
                    </div>
               </div>   <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Phone Number</label>
                      <input type="text" class="form-control" placeholder="title" name="phonenumber" value="<?php echo $data['phonenumber'];?>" required>
                    </div>
               </div>
				<div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Email Id</label>
                      <input type="text" class="form-control" placeholder="title" name="emailid" value="<?php echo $data['emailid'];?>" required>
                    </div>
               </div>

			   <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Site Link</label>
                      <input type="text" class="form-control" placeholder="title" name="site_link" value="<?php echo $data['site_link'];?>" required>
                    </div>
               </div>
			<div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Site Link 2</label>
                      <input type="text" class="form-control" placeholder="title" name="site_link2" value="<?php echo $data['site_link2'];?>" required>
                    </div>
               </div>

			   <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Site Link 3</label>
                      <input type="text" class="form-control" placeholder="title" name="site_link3" value="<?php echo $data['site_link3'];?>" required>
                    </div>
               </div>
			   <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_title">Map</label>
                      <textarea type="text" class="form-control" placeholder="title" name="map"  value="<?php echo $data['map']; ?>" required><?php echo $data['map'];?></textarea>
                    </div>
               </div>
			   <?php } ?>
               <div class="col-xs-11 col-md-11">
                    <div class="form-group has-feedback">
                      <label for="wel_content">Page Content</label>
                      <textarea class="form-control" placeholder="Page Content" name="wel_content" required rows="6"><?php echo $data['wel_content'];?></textarea>
					  <script> CKEDITOR.replace( 'wel_content' );</script>
                    </div>
               </div>
               <div class="btnAlign col-xs-11 col-md-11">
                      <button type="submit" class="btn btn-primary" name="edit_btn">Update</button>
                      <button type="button" class="btn btn-primary" name="back_btn" onclick="location.href='cms_list.php';">Back</button>
                  </div>
          </div>
        </form>
            </div><!-- /.col -->
          </div><!-- /.row -->

<?php include("footer.php");?>

	  <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="bootstrap/js/jQuery-2.1.4.min.js"></script>
    <!-- DataTables -->
     <script src="plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
	<!-- Custom js file here -->
	<script src="bootstrap/js/custom_state.js"></script>

  </body>
</html>
