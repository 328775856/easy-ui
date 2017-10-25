<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;   //(1-1)*10,  (2-1)*10
	$result = array(); //定义一个数组

	include 'sql.php';
	
	$sql = "select count(*) from goodsinfo"; //查询总条数的sql语句
	$rs = $conn->query($sql);
	$row = $rs->fetch_row(); //读取一行数据
	$result["total"] = $row[0]; //取第一列的值，保存到数组中。
	$sql = "select * from goodsinfo limit $offset,$rows";//分页查询语句，限制查询的记录从索引$offset开始，取$row条数据
	$rs = $conn->query($sql);
	
	$items = array(); //新建一个数组对象
	while($row = $rs->fetch_assoc()){
		array_push($items, $row);//把一个对象数据保存到数组中
	}
	$result["rows"] = $items;//把items数组存储到result数组中，

	echo json_encode($result); //把数组的数据编码成json格式返回。

?>