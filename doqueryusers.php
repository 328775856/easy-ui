<?php
    header("Content-type:application/json;charset=UTF-8");
	$keywords = $_REQUEST["keywords"];
	require("dbutil.php");
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;   //(1-1)*10,  (2-1)*10
	$result = array(); //定义一个数组
	$sql = "select count(*) from userinfo where username like '%$keywords%'"; //查询总条数的sql语句
	$rs = $conn->query($sql);
	$row = $rs->fetch_row(); //读取一行数据
	$result["total"] = $row[0]; //取第一列的值，保存到数组中。
	
	$sql = "select * from userinfo where username like '%$keywords%' limit 0,10";
	$rs = $conn->query($sql);
	$items = array(); //新建一个数组对象
	while($row = $rs->fetch_assoc()){
		array_push($items, $row);//把一个对象数据保存到数组中
	}
	$result["rows"] = $items;//把items数组存储到result数组中，

	echo json_encode($result); //把数组的数据编码成json格式返回。
	
?>