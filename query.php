<?php
	include_once("./config/config.php");
	include_once("smarty.config.php");
	
	$conn = $db->connect();
	$select = $db->select("web",$conn);
	$email = $_POST['mail'];
	$sql = "SELECT * FROM `user_info` WHERE `u_email` = '$email'";
	$query = $db->query($sql,$conn);
	$title = "网页设计大赛报名查询";
	
	
	
	
	if(isset($_POST['sub'])) {
		global $result;
		$result = $db->fetch_arr($query);
		//print_r($result);
		echo "$result[u_name]";
	}
	
	$smarty->assign("result",$result);
	$smarty->assign("title",$title);
	$smarty->display("query.html");
?>