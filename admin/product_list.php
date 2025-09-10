<?php

require("../db_config.php");

if(!isset($_SESSION['adminUserId'])){

	session_destroy();

	header("location:index.php");

}

require ('sql-upload-function.php');

$fileDetails=pathinfo(__file__);

$errmsg="";

$crudFileName="product_crud.php";



$listFileName="product_list.php";

$pageTitle="Product";

$dbtable='tbl_product';

$prefix='prod';

#include("../inviteFriends-functions.php");

if(isset($_GET['del'])){

	$id=base64_decode($_GET['del']);

	$del=mysqli_query($conn,"DELETE FROM {$dbtable} where {$prefix}_id='{$id}'");

	echo "<script>location.href='{$listFileName}';</script>";

	exit;

}

if(isset($_GET['restore'])){

	$id=base64_decode($_GET['restore']);

	$restore=mysqli_query($conn, "update {$dbtable} set {$prefix}_status='Y' where {$prefix}_id='$id'");

	echo "<script>location.href='{$listFileName}';</script>";

	exit;

}

if(isset($_GET['active'])){

	$status=base64_decode($_GET['active']);

if(($status=='Y') || ($status=='N')) {

	$where="where {$prefix}_status='{$status}'";

} else{

	$where="";

	$status='';

}

} else {

	$where="";

	$status='';

}

####### delete section start  #########

if(isset($_POST['deleteValue'])){

	$id=$_POST['deleteValue'];

	$delete=mysqli_query($conn,"update $dbtable set $prefix"."_status='N' where $prefix"."_id='$id'");

	header("location:".$listFileName);

}

$sql=mysqli_query($conn,"select * from $dbtable $where");

####### delete section close  #########





include 'head.php';

?>

  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

      <!-- Left side column. contains the logo and sidebar -->

      <?php include("side_nav.php");?>

      <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1> <?php echo $pageTitle;?> </h1>



        </section>



        <!-- Main content -->

        <section class="content" style="padding:0">

        <section class="content">

          <div class="row">

            <div class="col-xs-12">

              <div class="box">

                <div class="box-header">

                  <h3 class="box-title"></h3>

				  <span><button class="btn btn-primary" data-toggle="modal" onclick="location.href='<?php echo $crudFileName;?>'">Add <?php echo $pageTitle;?></button>

						<!--<div class="pull-right">

						<a class="btn btn-primary" href="product_bulkup.php" title="Bulk products upload">Import</a>

						<a class="btn btn-primary" href="csv/sample/Sheet1.csv" title="Bulk products upload sample sheet download" download>Sample</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>-->

					</span>

				</div><!-- /.box-header -->



			<nav class="navbar navbar-default">

			  <div class="container-fluid">

			    <ul class="nav navbar-nav">

			      <li <?php if($status==''){ echo 'class="active"'; } ?>><a href="<?php echo $listFileName; ?>">All</a></li>

			      <li <?php if($status=='Y'){ echo 'class="active"'; } ?>><a href="<?php echo $listFileName; ?>?active=<?php echo base64_encode('Y'); ?>">Active</a></li>

			      <li <?php if($status=='N'){ echo 'class="active"'; } ?>><a href="<?php echo $listFileName; ?>?active=<?php echo base64_encode('N'); ?>">Trash</a></li>

			    </ul>

			  </div>

			</nav>



                <div class="box-body">

                  <table id="stateTable" class="table table-bordered table-hover">

                    <thead>

                      <tr>

                        <th>Sl.no</th>

                        <th><?php echo $pageTitle;?> name</th>

						<th><?php echo $pageTitle;?> image</th>



                        <th style="padding-left: 5%;">Action</th>

                      </tr>

                    </thead>

                    <tbody>

                      <?php

					  $i=1;

					  while($data=mysqli_fetch_assoc($sql)){

						  $image=$data[$prefix.'_image'];

						  ?>

					  <tr <?php if($data['prod_status']!='Y'){ echo "class='danger'"; } ?>>

                        <td><?php echo $i;?></td>

						<td><?php  echo $data[$prefix.'_name']; ?></td>

						<td><img src='../images/product/<?php echo $image;?>' height='100px'></td>



                        <td><span>

													<a class="btn btn-app" href="<?php echo $crudFileName;?>?edit_value=<?php echo base64_encode($data[$prefix.'_id']);?>">

													<i class="fa fa-edit"></i>Edit</a>

													<?php if($data['prod_status']=='Y') { ?>

													<a class="btn btn-app" onclick='deleteFunction("<?php echo $data[$prefix.'_id'];?>")'><i class="fa fa-trash"></i> Trash</a>

												<?php } elseif($data['prod_status']=='N') { ?>

													<a class="btn btn-app" href="<?php echo $listFileName; ?>?restore=<?php echo base64_encode($data[$prefix.'_id']);?>"><i class="fa fa-retweet"></i>Restore</a>

													<a class="btn btn-app" onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo $listFileName; ?>?del=<?php echo base64_encode($data[$prefix.'_id']);?>"><i class="fa fa-trash"></i> Delete</a>

												<?php } ?>

												</span></td>

                      </tr>

					  <?php $i++; }?>



					</tbody>



                  </table>

                </div><!-- /.box-body -->

              </div><!-- /.box -->





            </div><!-- /.col -->

          </div><!-- /.row -->

        </section><!-- /.content -->





          <!-- Your Page Content Here -->



        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

<form id="deleteForm" method="post"><input type="hidden" name="deleteValue" id="deleteValue" required/></form>

      <!-- Main Footer -->

      <?php include("footer.php");?>





    </div><!-- ./wrapper -->

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



    <!-- Optionally, you can add Slimscroll and FastClick plugins.

         Both of these plugins are recommended to enhance the

         user experience. Slimscroll is required when using the

         fixed layout. -->

  </body>

</html>



<script>



$(document).ready(function () {

    $('.btn-filter').on('click', function () {

        var $target = $(this).data('target');

        if ($target != 'all') {

            $('.table tbody tr').css('display', 'none');

            $('.table tr[data-status="' + $target + '"]').fadeIn('slow');

        } else {

            $('.table tbody tr').css('display', 'none').fadeIn('slow');

        }

    });



    $('#checkall').on('click', function () {

        if ($("#mytable #checkall").is(':checked')) {

            $("#mytable input[type=checkbox]").each(function () {

                $(this).prop("checked", true);

            });



        } else {

            $("#mytable input[type=checkbox]").each(function () {

                $(this).prop("checked", false);

            });

        }

    });



	$('#closeModal').on('click', function () {

		//function hideModal(){ //data-dismiss="#edit-customer"

			//$("#edit-customer")[0].close();

			$("#edit-customer").modal('hide');

		//}

	});



	$("#flash-msg").delay(3000).fadeOut("slow");





	//dataTable

	var dataTable	= $('#stateTable').DataTable({

		  "paging": true,

		  "lengthChange": true,

		  "searching": true,

		  "ordering": true,

		  "info": true,

		  "autoWidth": true,

 		  "stripeClasses": [ 'odd-row', 'even-row' ]

		});

});



/* delete function open here */

  function deleteFunction(id){

  var conform=confirm("Are you sure Move to Trash this <?php echo $pageTitle;?>?");

  if(conform){

    $("#deleteValue")[0].value=id;

    $("#deleteForm")[0].submit();

  }else{ return; }

}

 /* delete function close here */

</script>

