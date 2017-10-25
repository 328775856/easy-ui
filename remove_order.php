<?php

$id = intval($_REQUEST['id']);
include 'sql_order.php';

$sql = "delete from orderinfo where orderid=$id";
$result = $conn->query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'数据库访问错误。'));
}
?>