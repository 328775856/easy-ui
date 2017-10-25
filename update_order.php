<?php

$orderid = intval($_REQUEST['orderid']);
$name = $_REQUEST['name'];
$time = $_REQUEST['time'];
$email = $_REQUEST['email'];
$consignee = $_REQUEST['consignee'];
$cellphone = $_REQUEST['cellphone'];
$telphone = $_REQUEST['telphone'];
$status = $_REQUEST['status'];
	include 'sql_order.php';
	$sql = "update orderinfo set name='$name',time='$time',email='$email',consignee='$consignee',cellphone='$cellphone',telphone='$telphone',status='$status' where orderid=$orderid";
	$result = $conn->query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'数据库访问错误.'));
	}
?>