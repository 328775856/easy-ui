<?php
  session_start();
  $username=$_POST["username"];
  $userpwd=$_POST["userpwd"];
  $conn=new MySQLi('localhost','root','123456');
  if($conn->connect_error){
  	die("连接失败".$conn->connect_error);
  	exit();
  }
  $conn->select_db("bookdb");
 // $conn->query("set names 'utf8'");
  $sql="select * from userinfo where username='$username'";
  $result=$conn->query($sql);
  if($row=$result->fetch_assoc()){
  	if($userpwd==$row['userpwd']){
  		$_SESSION['username']=$username;
      $_COOKIE['username']=$username;
  		echo 'true';	
  	}
  }
  $conn->close();
  echo "";
?>