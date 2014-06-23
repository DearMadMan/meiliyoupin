<?php /* Smarty version Smarty-3.1.16, created on 2014-01-05 18:57:44
         compiled from "E:\apache\www\my\admin\template\user_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:1210552c4ff650a4946-17170340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d14d3aeca1786fb91994a9678c0dc3861c5b3d' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\user_edit.mad',
      1 => 1388919452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210552c4ff650a4946-17170340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4ff650f4f52_25264316',
  'variables' => 
  array (
    'vp' => 0,
    'user' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4ff650f4f52_25264316')) {function content_52c4ff650f4f52_25264316($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">

<input type='button' class="coolbg np" onClick="location='user_list.php';" value='会员列表' />
 </td>
 </tr>
</table>
</td>
</tr>
</table>


<form name="forms" method="post" action="user.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">会员详情<a href="admin_web.php" target="main"></a></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">会员账号</td>
  <td width="81%" align="left"><input style="width:100px" type="text" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
" />
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">会员昵称</td>
  <td width="81%" align="left"><input style="width:100px" type="text" name="nick_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nick_name'];?>
" />
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">账号密码</td>
  <td width="81%" align="left"><input style="width:300px" type="password" name="user_pass" value="" />
  (为空则不修改)
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">会员邮箱</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" disabled />

  </td>
</tr>




<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">会员积分</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="credits" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['credits'];?>
" />
  </td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">会员人民币</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="money" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['money'];?>
" />
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">支付宝账号</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="pay_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pay_email'];?>
" />
  </td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">支付宝姓名</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="pay_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pay_name'];?>
" />
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">收货地址</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
" />
  </td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">推荐人</td>
  <td width="81%" align="left"><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['spreader_id'];?>
"><u>查看推荐人</u></a>
  </td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">注册IP</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="u_ip" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['register_ip'];?>
" disabled />
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">会员权限</td>
  <td width="81%" align="left">
    <select name="vip_level">
      <option value="0" <?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']=='0') {?>selected<?php }?>>普通会员</option>
      <option value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']=='1') {?>selected<?php }?>>推广者</option>
      <option value="2" <?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']=='2') {?>selected<?php }?>>VIP</option>
      <option value="3" <?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']=='3') {?>selected<?php }?>>违规用户</option>
      </select>
    </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">佣金比率</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="spreader_rate" value="<?php if ($_smarty_tpl->tpl_vars['user']->value['spreader_rate']=='') {?><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_rate'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['user']->value['spreader_rate'];?>
<?php }?>"  />
  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">注册时间</td>
  <td width="81%" align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['add_time'],"%Y/%m/%d");?>

  </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">

	<td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form>
<?php }} ?>
