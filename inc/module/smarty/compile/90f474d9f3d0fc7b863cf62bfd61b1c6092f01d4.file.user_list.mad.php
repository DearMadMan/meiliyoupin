<?php /* Smarty version Smarty-3.1.16, created on 2014-01-06 21:43:25
         compiled from "E:\apache\www\my\admin\template\user_list.mad" */ ?>
<?php /*%%SmartyHeaderCode:1064452c4fe9702c869-37086743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f474d9f3d0fc7b863cf62bfd61b1c6092f01d4' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\user_list.mad',
      1 => 1389009879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064452c4fe9702c869-37086743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4fe9704fe91_72887689',
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4fe9704fe91_72887689')) {function content_52c4fe9704fe91_72887689($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
    <input type='button' class="coolbg np" onClick="location='main.php?menu=users';" value='会员列表' />

 </td>
 </tr>
</table>
</td>
</tr>
</table>

<!--  内容列表   -->
<form name="checkboxform" method="post" action="?type=del">

<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">&nbsp;会员列表&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="6%">ID</td>
	<td width="6%">选择</td>
	<td width="11%">称呼</td>
	<td width="15%">邮箱</td>
	<td width="10%">积分</td>
	<td width="10%">人民币</td>
    <td width="11%">QQ在线</td>
    <td width="6%">推荐人</td>
    <td width="16%">注册时间</td>
	<td width="9%">操作</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><input name="checkboxid[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['nick_name'];?>
" class="np"></td>
	<td><span style="color:#ff0000">
		<?php echo $_smarty_tpl->tpl_vars['v']->value['nick_name'];?>
[<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='0') {?>普会<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='1') {?>推广<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='2') {?>VIP<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='3') {?>VIP<?php } else { ?>违规<?php }?>]
		</span>
      </td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['credits'];?>
分</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['money'];?>
元</td>
    <td><!-- WPA Button Begin -->
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
<!-- WPA Button END --></td>
	<td><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
"><u><?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
</u></a></td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>
	<td><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a> </td>
</tr>
<?php } ?>
<tr bgcolor="#FAFAF1">
<td height="28" colspan="10">
	&nbsp;
    <a href="javascript:SelectAll()" class="coolbg">全选</a>
	<a href="javascript:SelectAll()" class="coolbg">取消</a>

	<a href="javascript:mysubmit();" class="coolbg">&nbsp;删除&nbsp;</a>
</td>
</tr>
<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="10" align="right">
		<div class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</div>

	</td>
</tr>
</table>

</form>
<?php }} ?>
