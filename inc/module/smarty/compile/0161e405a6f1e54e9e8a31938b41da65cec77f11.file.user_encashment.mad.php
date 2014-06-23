<?php /* Smarty version Smarty-3.1.16, created on 2014-01-04 15:16:28
         compiled from "E:\apache\www\my\admin\template\user_encashment.mad" */ ?>
<?php /*%%SmartyHeaderCode:2081652c4ff6355ae24-78225963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0161e405a6f1e54e9e8a31938b41da65cec77f11' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\user_encashment.mad',
      1 => 1388819786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081652c4ff6355ae24-78225963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4ff635ba8b4_82865374',
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4ff635ba8b4_82865374')) {function content_52c4ff635ba8b4_82865374($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
    <input type='button' class="coolbg np" onClick="location='main.php?menu=users&target=encashment';" value='提现记录' />

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
	<td height="24" colspan="12" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">&nbsp;充值记录&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="5%">ID</td>
	<td width="12%">称呼</td>
	<td width="7%">提现金额</td>
	<td width="13%">提现编号</td>
    <td width="6%">状态</td>
    <td width="9%">QQ在线</td>
    <td width="5%">推荐人</td>
    <td width="15%">支付宝</td>
    <td width="9%">支付实名</td>
    <td width="13%">注册时间</td>
    <td width="6%">操作</td>

</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['v']->value['nick_name'];?>
[<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='0') {?>普会<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='1') {?>推广<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='2') {?>VIP<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='3') {?>VIP<?php } else { ?>违规<?php }?>]</span></td>

	<td>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['expense_money'];?>
元</td>


	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['expense_status']==0) {?>未支付<?php } else { ?>已支付<?php }?></td>
    <td><!-- WPA Button Begin -->
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
>site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
<!-- WPA Button END --></td>
	<td><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
"><u><?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
</u></a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pay_email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pay_name'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['expense_status']==0) {?>打款<?php } else { ?>已打款<?php }?></td>
</tr>
<?php } ?>

<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="12" align="right">
		<div class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</div>
    </td>
</tr>
</table>

</form>

<!--  搜索表单  -->
<form name='form3' action='main.php?menu=users&target=encashment&search=1' method='post'>
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
