<?php

$id = intval($_REQUEST['id']);

include 'dbutil.php';

$sql = "delete from userinfo where userid=$id";
$result = $conn->query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'数据库访问错误。'));
}
?>