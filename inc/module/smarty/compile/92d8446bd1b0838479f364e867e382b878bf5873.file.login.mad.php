<?php /* Smarty version Smarty-3.1.16, created on 2014-05-19 14:22:41
         compiled from "E:\apache\www\test\madadmin\template\login.mad" */ ?>
<?php /*%%SmartyHeaderCode:2788453799b55014144-14826773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d8446bd1b0838479f364e867e382b878bf5873' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\login.mad',
      1 => 1400480553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2788453799b55014144-14826773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53799b551521d0_07528365',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53799b551521d0_07528365')) {function content_53799b551521d0_07528365($_smarty_tpl) {?><!doctype html>
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
