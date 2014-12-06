<?php
	require './smarty/Smarty.class.php';
	
	$smarty = new Smarty;//初始化smarty
	
	$smarty->caching =false;//不开启缓存
	$smarty->template_dir = "./templates";//设置模板目录
	$smarty->compile_dir = "./templates_c";//设置编译目录
	$smarty->cache_dir = "./cache";//设置缓存目录
	
	$smarty->left_delimiter = "{";
	$smarty->right_delimiter = "}";
	
	
	
	
	
	
?>