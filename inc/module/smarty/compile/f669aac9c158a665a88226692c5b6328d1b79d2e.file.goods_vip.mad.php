<?php /* Smarty version Smarty-3.1.16, created on 2014-01-05 19:08:40
         compiled from "E:\apache\www\my\admin\template\goods_vip.mad" */ ?>
<?php /*%%SmartyHeaderCode:2549852c50e4f8fb0e2-82161962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f669aac9c158a665a88226692c5b6328d1b79d2e' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\goods_vip.mad',
      1 => 1388920091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2549852c50e4f8fb0e2-82161962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c50e4f936450_46413889',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c50e4f936450_46413889')) {function content_52c50e4f936450_46413889($_smarty_tpl) {?>
<!--  快速转换位置按钮  -->
<script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_vip.js'></script>

<!--  内容列表   -->
<form  method="POST" action="goods.php?act=vipEdit">
<div class='goods-vip' >
	<p>开通VIP所需金钱:<input type="text" name='vip_money' value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_money'];?>
"></p>
	<p>开通VIP赠送积分:<input type="text" name='vip_credits' value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_credits'];?>
"></p>
	<p>VIP默认佣金比率:<input type="text" name='vip_spreader' value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_spreader'];?>
"></p>
	<p>是否允许用户手动开通VIP <input type="checkbox"  value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_is_open'];?>
'<?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['vip_is_open']==1) {?>checked<?php } else { ?><?php }?> >
	<input type="hidden" name='vip_is_open' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_is_open'];?>
'>

	</p>
	<p><input type="submit" value="保存"></p>
</div>
</form>

<?php }} ?>
