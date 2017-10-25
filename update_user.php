<?php

$id = intval($_REQUEST['id']);
$username = $_REQUEST['username'];
$userpwd = $_REQUEST['userpwd'];
$reuserpwd = $_REQUEST['reuserpwd'];
$userEmail = $_REQUEST['userEmail'];
if($userpwd==$reuserpwd){
	include 'dbutil.php';
	$sql = "update userinfo set username='$username',userpwd=md5('$userpwd'),userEmail='$userEmail' where userid=$id";
	$result = $conn->query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'数据库访问错误.'));
	}
}else{
	echo json_encode(array('msg'=>'两次密码输入一致。'));
}
?>