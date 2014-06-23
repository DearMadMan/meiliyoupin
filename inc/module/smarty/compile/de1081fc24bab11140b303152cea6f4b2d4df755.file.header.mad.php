<?php /* Smarty version Smarty-3.1.16, created on 2014-01-05 18:26:06
         compiled from "E:\apache\www\my\admin\template\header.mad" */ ?>
<?php /*%%SmartyHeaderCode:779952c4ca21c87212-55366442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de1081fc24bab11140b303152cea6f4b2d4df755' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\header.mad',
      1 => 1388917559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '779952c4ca21c87212-55366442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4ca21c8bbf8_09241522',
  'variables' => 
  array (
    'vp' => 0,
    'admin' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4ca21c8bbf8_09241522')) {function content_52c4ca21c8bbf8_09241522($_smarty_tpl) {?><table width="100%" border="0" cellpadding="0" cellspacing="0" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/topbg.gif">
  <tr>
    <td width='20%' height="60"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.gif" /></td>
    <td width='80%' align="right" valign="bottom">
    	<table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td align="right" height="26" style="padding-right:10px;line-height:26px;">
        	您好：<span class="username"><?php echo $_smarty_tpl->tpl_vars['admin']->value['user_name'];?>
</span>，<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['title'];?>

        	[<a href="/" target="_blank">网站主页</a>]
        	[<a href="admin.php?act=loginout" target="_top">注销退出</a>]&nbsp;
      </td>
      </tr>
      <tr>
        <td align="right" height="34" class="rmain">
		<dl id="tpa">
		<dd><div class='itemsel' id='item1' onMouseMove="mv(this,'move',1);" onMouseOut="mv(this,'o',1);"><a href="main.php" onclick="changeSel(1)">后台主页</a></div></dd>
        <dd>
		  <div class='item' id='item3' onMouseMove="mv(this,'m',3);" onMouseOut="mv(this,'o',3);"><a href="main.php?menu=system" onclick="changeSel(3)">全局设置</a></div></dd>

		<dd>
		  <div class='item' id='item2' onMouseMove="mv(this,'m',2);" onMouseOut="mv(this,'o',2);"><a href="main.php?menu=users" onclick="changeSel(2)" >会员管理</a></div></dd>
		<dd>
		  <div class='item' id='item8' onMouseMove="mv(this,'m',8);" onMouseOut="mv(this,'o',8);"><a href="main.php?menu=goods" onclick="changeSel(8)" >产品中心</a></div></dd>


		</dl>
		</td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }} ?>
