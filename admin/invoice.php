

<?php 
session_start();
include('dbconfig.php');
include('function/common_function.php');

$singleid=$_GET['id'];





$singlequery=mysqli_query($con,"select * from tbl_product where id='$singleid'");
$excutequery=mysqli_fetch_assoc($singlequery);


?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="indexstyle.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="invoicescript.js"></script>
	</head>
	<body>
    <?php
$singlequeryI=mysqli_query($con,"select * from tbl_orderlist where Cart_id='$singleid'");
$excutequeryI=mysqli_fetch_assoc($singlequeryI);

?>
<script>
$(window).on('load', function() {
  // Automatically print the page when it finishes loading
  window.print();
});
</script>
		<header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p><?php echo $excutequeryI['User_name'];?></p>
				<p><?php echo $excutequeryI['User_adress'];?></p>
				<p><?php echo $excutequeryI['User_contact'];?></p>
                <P><?php echo $excutequeryI['User_email'];?></P>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>MAHASENA</p>
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice </span></th>
					<td><span contenteditable><?php echo $excutequeryI['order_id'];?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date & Time</span></th>
					<td> <?php echo $excutequeryI['dt'];?> </td>
				</tr>
			
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Item</span></th>
						<th><span contenteditable>Description</span></th>
						<th><span contenteditable>Rate</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
                <?php
                $userid=$excutequeryI['User_id'];
$singlequeryI1=mysqli_query($con,"select * from tbl_cart where userid='$userid' and status='ordered'");
 while ($excutequeryI1=mysqli_fetch_assoc($singlequeryI1))
 {

?>
				<tbody>
					<tr>
						<td><span contenteditable><?php echo $excutequeryI1['productid'];?></span></td>
						<td><span contenteditable><?php echo $excutequeryI1['name_cart'];?></span></td>
						<td><span data-prefix>RS</span><span contenteditable><?php echo $excutequeryI1['price'];?></span></td>
						<td><span contenteditable><?php echo $excutequeryI1['qty'];?></span></td>
						<td><span data-prefix>RS</span><span><?php echo $excutequeryI1['total'];?>.00</span></td>
					</tr>
				</tbody>
				
				<?php } ?>
			</table>
		
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>RS : </span><span><?php echo $excutequeryI1['price'];?>.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Payment Mode</span></th>
					<td><span data-prefix></span><span contenteditable><?php echo $excutequeryI['Payment'];?></span></td>
				</tr>
			
			</table>
		</article>
		<aside>
			
			<div contenteditable>
				<p>Thank you for shopping at MAHASENA! Please contact us for any queries or concerns regarding this invoice.</p>
			</div>
			<br>
			</br>
		
		</aside>
			
		
	</body>
</html>