<?php /* Smarty version Smarty-3.1.16, created on 2014-01-03 19:30:30
         compiled from "E:\apache\www\my\admin\template\login.mad" */ ?>
<?php /*%%SmartyHeaderCode:2130452c4c1c7d86c53-70343761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b38bce9a5e63be9e220bc67cf868bead754e0db' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\login.mad',
      1 => 1388747955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2130452c4c1c7d86c53-70343761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4c1c7dc9473_63316659',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4c1c7dc9473_63316659')) {function content_52c4c1c7dc9473_63316659($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>html:5文档</title>
<link href='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/login.css' rel='stylesheet' type='text/css'>
</head>
<body>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
	<div class="con">
        <div class="login">
          <div class="b_left" id="divLink1"></div>
          <div class="input">
<br>
			<form name="form1" action="admin.php?act=login" method="post">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="logTb">
              <tr>
                <th>管理员帐号</th>
                <td>
                <input type="text" name="user_name" class="input-border" onFocus="this.style.borderColor='#F93'" onBlur="this.style.borderColor='#226499'"/>
                </td>
              </tr>
              <tr>
                <th>管理员密码</th>
                <td><input type="password" name="user_pass" class="input-border" onFocus="this.style.borderColor='#F93'" onBlur="this.style.borderColor='#226499'"></td>
              </tr>
                            <tr>
                <th>&nbsp;</th>
                <td  colspan="2" style="line-height:22px; padding-top:0px; padding-left:6px; padding-bottom:10px;"><button type="submit">&nbsp;&nbsp;进入管理中心&nbsp;&nbsp;</button>
                  </td>
              </tr>
            </table>
			</form>
          </div>
        </div>
      </div>
	</td>
  </tr>
</table>
</body>
</html><?php }} ?>
