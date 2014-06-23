<?php /* Smarty version Smarty-3.1.16, created on 2014-01-08 10:52:29
         compiled from "E:\apache\www\my\admin\template\goods_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:528852c50f118492b9-09921928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f702689fa64c640fcf65c7c88493cd1c49eb970' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\goods_edit.mad',
      1 => 1389149542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528852c50f118492b9-09921928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c50f11891b29_64364595',
  'variables' => 
  array (
    'vp' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c50f11891b29_64364595')) {function content_52c50f11891b29_64364595($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_edit.js'></script>
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
    <input type='button' class="coolbg np" onClick="location='main.php?menu=goods&target=list';" value='产品列表' />
    <input type='button' class="coolbg np" onClick="location='main.php?menu=goods&target=goods_edit&act=add';" value='产品添加' />
 </td>
 </tr>
</table>
</td>
</tr>
</table>

 <form id="up-form" style=""  action="test.php" method="POST" enctype="multipart/form-data" target='uploadIframe'>
   图片上传 <input id="files_hidden" type="file" name='pic'>
    <input type="button" id='btn_up' value='上传'>
 </form>
<form name="form2" method="post" action="goods.php?act=goods_edit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">产品详情   注：不能有单引号<a href="admin_web.php" target="main"></a></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">产品名称</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
" />
  (字数不能超过254个英文字符)</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="12%">形象图片</td>
	<td width="88%" align="left">
   <input type="text" name="goods_pic" id="files" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_pic'];?>
" style="width:80%;" />

 <iframe name="uploadIframe" onload="iframeOnLoad();" id="uploadIframe"  style="display:none;">
</iframe>
    </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">相关参数</td>
  <td width="81%" align="left"><input style="width:100px" type="text" name="need_credits" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['need_credits'];?>
" />
  所需积分
 &nbsp;&nbsp;&nbsp;&nbsp;
 <input style="width:100px" type="text" name="need_money" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['need_money'];?>
" /> 所需价格&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="need_top2" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['need_top']==1) {?>checked<?php }?> /> 是否为置顶&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="need_hidden2" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['need_hidden']==1) {?>checked<?php }?> />
 是否为不显示 &nbsp;&nbsp;&nbsp;&nbsp;
 <input id='need_top' type="hidden" name='need_top' value='<?php echo $_smarty_tpl->tpl_vars['goods']->value['need_top'];?>
'>
 <input id='need_hidden' type="hidden" name='need_hidden' value='<?php echo $_smarty_tpl->tpl_vars['goods']->value['need_hidden'];?>
'>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">下载地址</td>
  <td width="81%" align="left"><textarea name="goods_data" style="width:300px;" rows="5"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_data'];?>
</textarea></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">产品简介</td>
  <td width="81%" align="left"><textarea name="goods_dis" style="width:300px;" rows="5"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_dis'];?>
</textarea></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">产品详细介绍</td>
  <td width="81%" align="left"><textarea id='goods_content' style="width:700px; height:400px"  name="goods_content"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</textarea>
    </td>
</tr>


<tr align="center" bgcolor="#FAFAF1" height="22">
  <input type="hidden" name='goods_id' value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
">
	<td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form>
<?php }} ?>
