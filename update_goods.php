<?php

$goodsid = intval($_REQUEST['goodsid']);
$goodsname = $_REQUEST['goodsname'];
$goodsmsg = $_REQUEST['goodsmsg'];
	include 'sql.php';
	$sql = "update goodsinfo set goodsname='$goodsname',goodsmsg='$goodsmsg' where goodsid=$goodsid";
	$result = $conn->query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'数据库访问错误.'));
	}
?>