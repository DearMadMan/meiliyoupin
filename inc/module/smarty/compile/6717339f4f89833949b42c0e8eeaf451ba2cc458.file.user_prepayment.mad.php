<?php /* Smarty version Smarty-3.1.16, created on 2014-01-04 14:53:55
         compiled from "E:\apache\www\my\admin\template\user_prepayment.mad" */ ?>
<?php /*%%SmartyHeaderCode:417452c4ff6f613938-27441706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6717339f4f89833949b42c0e8eeaf451ba2cc458' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\user_prepayment.mad',
      1 => 1388818371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417452c4ff6f613938-27441706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4ff6f66ae92_54331674',
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4ff6f66ae92_54331674')) {function content_52c4ff6f66ae92_54331674($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
    <input type='button' class="coolbg np" onClick="location='main.php?menu=users&target=prepayment';" value='充值记录' />

 </td>
 </tr>
</table>
</td>
</tr>
</table>

<!--  内容列表   -->
<form name="form2">

<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">&nbsp;充值记录&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="7%">ID</td>
	<td width="7%">选择</td>
	<td width="10%">称呼</td>
	<td width="9%">充值金额</td>

	<td width="17%">订单编号</td>
    <td width="8%">状态</td>
    <td width="12%">QQ在线</td>
    <td width="6%">推荐人</td>
    <td width="14%">订单时间</td>

</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><input name="checkboxid[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="np"></td>
	<td><span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['v']->value['nick_name'];?>
[<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='0') {?>普会<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='1') {?>推广<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='2') {?>VIP<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='3') {?>VIP<?php } else { ?>违规<?php }?>]</span></td>

	<td>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['income_money'];?>
元</td>


	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['pay_status']==0) {?>未支付<?php } else { ?>已支付<?php }?></td>
    <td><!-- WPA Button Begin -->
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
>site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
<!-- WPA Button END --></td>
	<td><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
"><u><?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
</u></a></td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>

</tr>
<?php } ?>
<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="10" align="right">
		<div class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</div>
	</td>
</tr>
</table>

</form>

<!--  搜索表单  -->
<form name='form3' action='main.php?menu=users&target=prepayment&search=1' method='post'>
<table width='98%'  border='0' cellpadding='1' cellspacing='1' bgcolor='#CBD8AC' align="center" style="margin-top:8px">
  <tr bgcolor='#EEF4EA'>
    <td background='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/wbg.gif' align='center'>
      <table border='0' cellpadding='0' cellspacing='0'>
        <tr>
          <td width='90' align='center'>搜索</td>

        <td width='70'>
          订单编号：
        </td>
        <td width='160'>
          	<input type='text' name='key' value='' style='width:150px' />
        </td>

        <td>
          <input name="imageField" type="image" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/search.gif" width="45" height="20" border="0" class="np" />
        </td>
       </tr>
      </table>
    </td>
  </tr>
</table>
</form><?php }} ?>
