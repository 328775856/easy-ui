<?php
$name = $_REQUEST['name'];
$time = $_REQUEST['time'];
$email = $_REQUEST['email'];
$consignee = $_REQUEST['consignee'];
$cellphone = $_REQUEST['cellphone'];
$telphone = $_REQUEST['telphone'];
$status = $_REQUEST['status'];
	include 'sql_order.php';
    // $sql = "insert into orderinfo(name,time,email,consignee,cellphone,telphone,status) values($name','$time','$email','$consignee','$cellphone','$telphone','$status')";
    $sql = "insert into orderinfo(name,time,email,consignee,cellphone,telphone,status) values('$name','$time','$email','$consignee','$cellphone','$telphone','$status')";
	$result = $conn->query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'数据库访问错误.'.$result));
	}
?>