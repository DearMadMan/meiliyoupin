<?php /* Smarty version Smarty-3.1.16, created on 2014-06-23 13:32:07
         compiled from "E:\apache\www\temp\d\madadmin\template\login.mad" */ ?>
<?php /*%%SmartyHeaderCode:2899553a7bbd71934a8-55127098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe6b737e8e0e9e2a9981055c47c71aeb7de2024' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\login.mad',
      1 => 1400480553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2899553a7bbd71934a8-55127098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a7bbd73bee04_01288468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7bbd73bee04_01288468')) {function content_53a7bbd73bee04_01288468($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>login</title>
   	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/login.css">
   	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
   	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/login.js"></script>
</head>
<body>
<div class="wrap">
	<div class="content">
		<div class="pic"></div>
		<form id='sign' action="post.php?act=login" method="POST">
		<div class="login">
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-user.png" alt="name"><input  type="text" name='user_name'></p>
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-password.png" alt="password"><input  type="password" name='user_word'></p>
			<p class='remenber'><input class='checkbox' type="checkbox" > remenber me</p>
			<input  type="hidden" name='remenber' value='false'>
			<div class="submit">Sign In</div>

		</div>
		</form>
	</div>
</div>
</body>
</html><?php }} ?>
