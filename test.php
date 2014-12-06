<?php
	require_once("config.php");
	
	$con = $db->connect();
	$db_selected = $db->select("web",$con);
	$sql = "SELECT * FROM `user_info` WHERE `u_email`= '337003006@qq.com'";
	$result = $db->query($sql,$con);
	/* $con = mysql_connect("localhost","root","") or die("数据库连接失败");
	$db_selected = mysql_select_db("web",$con);
	$sql = "SELECT * FROM `user_info` WHERE `u_email`= '337003006@qq.com'";
	$result = mysql_query($sql,$con); */
	
	//print_r($db->fetch_arr($result));
	print_r($db->fetch_arr($result));
	//print_r(mysql_fetch_array($result));
	
	
?>