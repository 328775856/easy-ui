<?php
$goodsname = $_REQUEST['goodsname'];
$goodsmsg = $_REQUEST['goodsmsg'];


	include 'sql.php';
	$sql = "insert into goodsinfo(goodsname,goodsmsg) values('$goodsname','$goodsmsg')";
	$result = $conn->query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'数据库访问错误.'));
	}
?>