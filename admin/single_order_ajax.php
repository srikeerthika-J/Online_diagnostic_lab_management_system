<?php
	include("db_config.php");
        include('../ref_function.php');
        include '../send_sms.php';

function stockRetrive($cart){
    global $conn;
    $cart= unserialize($cart);
    foreach($cart as $key => $value)
    {
            $prodID=$value['attID'];
            $cartQty=$value['qty'];

            $attSql=mysqli_query($conn,"select at_stock from tbl_attribute where at_id='$prodID'");
            $attData=mysqli_fetch_assoc($attSql);
            $at_stock=intval($attData['at_stock'])+intval($cartQty);
                        if($at_stock>0){
                            $updateStock=mysqli_query($conn,"update tbl_attribute set at_stock='$at_stock' where at_id='$prodID' ");
                            $status=true;
                        }else{
                            $status=false;
                        }
                        //return $status;
        }
}

if(isset($_POST['trId']) && isset($_POST['status']) && isset($_POST['incrementVal']) && isset($_POST['orderId'])){
	/*$trId=$_POST['trId'];
	$incrementVal=$_POST['incrementVal'];*/
	$status=$_POST['status'];
	$orderId=$_POST['orderId'];

        if($status=='success'){
            ordSuccess_rewards($orderId);
            $orderSql=mysqli_query($conn,"select ship_mob from tbl_order where order_id='$orderId' ");
            $order=mysqli_fetch_assoc($orderSql);
            $smsContent='Your order is completed.Your order id is '.$orderId.'.Thank you for purchasing with us';
            $data = array(
              'phone' => $order['ship_mob'],
              'text' => $smsContent,
            );
            $smsID=sendSms($data);
            $smsIDUpdate=mysqli_query($conn,"update tbl_order set `smsID`='$smsID' where order_id='$orderId' ");
        } elseif($status=='cancelling') {
					$selOrd=mysqli_query($conn, "select cus_id,ord_desc from tbl_order where order_id='$orderId'");
					$resOrd=mysqli_fetch_assoc($selOrd);
					orderCancelled_return($orderId,$resOrd['cus_id']);
                    stockRetrive($resOrd['ord_desc']);
				}

	$statusquery=mysqli_query($conn,"update  tbl_order  set order_status='$status'  where  order_id='$orderId'");
	if(mysqli_affected_rows($conn)>0){
            $status='true';
	}else{
            $status='false';
	}
	echo $status;
	return;
}
?>
