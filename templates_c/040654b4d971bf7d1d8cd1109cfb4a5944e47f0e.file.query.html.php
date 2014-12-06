<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 14:40:51
         compiled from ".\templates\query.html" */ ?>
<?php /*%%SmartyHeaderCode:1739854815fef0962b2-95294776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '040654b4d971bf7d1d8cd1109cfb4a5944e47f0e' => 
    array (
      0 => '.\\templates\\query.html',
      1 => 1417786848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739854815fef0962b2-95294776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54815fef0ccdc7_97242379',
  'variables' => 
  array (
    'title' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54815fef0ccdc7_97242379')) {function content_54815fef0ccdc7_97242379($_smarty_tpl) {?><html>
<head>
<meta charset = "UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<form action = "" method = "post" name = "queryform">
		<input type = "email" name = "mail" />
		<input type = "submit" name = "sub" value = "查询" />
	</form>
	<table>
		<tr>
			<td>姓名：</td>
			<td>班级：</td>
			<td>邮箱：</td>
			<td>状态：</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['u_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['u_class'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['u_email'];?>
</td>
			<td>成功</td>
		</tr>
	</table>
</body>
</html><?php }} ?>
