<?php
	header("Content-Type: text/html;charset=utf-8"); 
	
	class DateBase {
		private $host;
		private $user;
		private $pass;
		
		function __construct($host,$user,$pass) {
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->connect();
		}
		
		function connect() {
			$link = mysql_connect($this->host,$this->user,$this->pass) or die("<h3>数据库连接失败！</h3>");
			return $link;
		}
		
		function select($table,$con) {
			$select = mysql_select_db($table,$con);
			return $select;
		}
		function query($v,$con) {
			mysql_query("set names 'utf8'");//防止插入数据库的时候乱码
			$query = mysql_query($v,$con);
			return $query;
		}
		
		function fetch_arr($result) {
			$fetch_arr = mysql_fetch_array($result);
			return $fetch_arr;
		}
	}
	$db = new DateBase('localhost','root','');
?>