<?php /* Smarty version Smarty-3.1.16, created on 2014-01-05 14:33:09
         compiled from "E:\apache\www\my\admin\template\goods_order.mad" */ ?>
<?php /*%%SmartyHeaderCode:2944352c50eab124f50-21140145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9559a60d4cb2560ddd88860783736eac245f5a7' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\goods_order.mad',
      1 => 1388903585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2944352c50eab124f50-21140145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c50eab174c56_57178455',
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c50eab174c56_57178455')) {function content_52c50eab174c56_57178455($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">


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
/images/tbg.gif">&nbsp;订单列表&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="6%">ID</td>
	<td width="5%">选择</td>
	<td width="25%">订单号</td>
	<td width="17%">添加时间</td>
    <td width="10%">产品ID</td>
        <td width="15%">所有者ID</td>
        <td width="10%">推广者ID</td>
        <td width="12%">付款方式</td>

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
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</td>
	<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>

    <td><a href="main.php?menu=goods&target=goods_edit&goods_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><u><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</u></a></td>
    <td><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"><u><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</u></a></td>
    <td><a href="main.php?menu=users&target=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
"><u><?php echo $_smarty_tpl->tpl_vars['v']->value['spreader_id'];?>
</u></a></td>
    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['order_type']==0) {?>积分兑换<?php } else { ?>金币购买<?php }?></td>

</tr>
<?php } ?>

<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="10" align="right">
		<div class="pagetool">
			<?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>

		</div>
	</td>
</tr>
</table>

</form>
<?php }} ?>
