<?php
require("../db_config.php");
if(!isset($_SESSION['adminUserId'])){
	session_destroy();
	header("location:index.php");
}
$fileDetails=pathinfo(__file__);
$errmsg="";
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
          <h1>
            CMS
            <!--<small>Content Management System</small>-->
          </h1>

        </section>

        <!-- Main content -->
        <section class="content" style="padding:0">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Content Management System</h3>
				</div><!-- /.box-header -->
                <div class="box-body">
                  <table id="stateTable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sl.no</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Modified Date</th>
                        <th style="padding-left: 5%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>

					  <?php

						$selCMSQ=mysqli_query($conn,"SELECT * FROM  tbl_tlink where tl_status='Y'");
						$i=1;
						while($resCMSD=mysqli_fetch_assoc($selCMSQ)){
					  ?>
					  <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $resCMSD['tl_name']; ?></td>
                        <td><?php echo strip_tags(substr($resCMSD['tl_content'],0,150))."..."; ?></td>
                        <td><?php echo $resCMSD['tl_dt'];?></td>
                        <td><span><a class="btn btn-app" href="footer_edit.php?edit_value=<?php echo base64_encode($resCMSD['tl_id']);?>"><i class="fa fa-edit"></i>Edit</a></span></td>
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

</script>
