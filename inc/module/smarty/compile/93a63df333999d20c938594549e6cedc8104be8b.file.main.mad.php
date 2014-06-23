<?php /* Smarty version Smarty-3.1.16, created on 2014-01-01 22:08:39
         compiled from ".\admin\template\main.mad" */ ?>
<?php /*%%SmartyHeaderCode:2212452c42106f1bc65-32661222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a63df333999d20c938594549e6cedc8104be8b' => 
    array (
      0 => '.\\admin\\template\\main.mad',
      1 => 1388585318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2212452c42106f1bc65-32661222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c421070297b1_41703448',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c421070297b1_41703448')) {function content_52c421070297b1_41703448($_smarty_tpl) {?><!doctype html>
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
			<form name="form1" action="?type=login" method="post">
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
