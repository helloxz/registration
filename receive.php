<?php header("Content-Type: text/html;charset=utf-8");  ?>
<?php
	//include_once('/config/smarty.config.php');
	/* require_once "smarty/Smarty.class.php"; */
	//echo '成功！';
	//载入SMTP类
	require_once("./config/smtp.class.php");
	include_once('smarty.config.php');
	include_once('./config/config.php');
	
	$name = ($_POST['name']);
	$class = $_POST['class'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$qq = $_POST['qq'];
	$other = $_POST['other'];
	$title = "报名成功";
	$con = $db->connect();//连接数据库
	$select = $db->select("web",$con);//打开WEB数据库
	
	
	##########################################
	$smtpserver = "smtp.exmail.qq.com";//SMTP服务器
	$smtpserverport = 25;//SMTP服务器端口
	$smtpusermail = "";//SMTP服务器的用户邮箱
	$smtpemailto = $mail;//发送给谁
	$smtpuser = "";//SMTP服务器的用户帐号
	$smtppass = "";//SMTP服务器的用户密码
	$mailsubject = '网页设计大赛报名成功';//邮件主题
	$mailbody = '亲爱的'.$name.'感谢您参加计科系网页设计大赛！';//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	##########################################
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = FALSE;//是否显示发送的调试信息
	
	//插入数据库
	$insert = "INSERT INTO user_info(u_name,u_class,u_tel,u_email,u_qq,u_other) VALUES('$name','$class','$tel','$mail','$qq','$other')";
	
	
	if(isset($_POST['sub'])) {
		$db->query($insert,$con);/*执行SQL语句*/
		echo '报名成功！';
		$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
	}
	
	
	
	$smarty->assign("title",$title);
	$smarty->display("receive.html");

?>