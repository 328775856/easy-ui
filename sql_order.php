<?php
  //打开到数据库服务器的连接
  $conn = new MySQLi("localhost","root","123456");
	   //判断连接是否有错误。
  if($conn->connect_error){
	 die("连接失败。".$conn->connect_error);   
	 exit(); //直接退出
  }
  //选择要访问的数据库
  $conn->select_db("order");
  $conn->query("set names 'utf8'");
 ?>