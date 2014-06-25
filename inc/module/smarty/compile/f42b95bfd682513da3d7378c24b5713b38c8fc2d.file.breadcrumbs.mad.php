<?php /* Smarty version Smarty-3.1.16, created on 2014-06-23 13:32:12
         compiled from "E:\apache\www\temp\d\madadmin\template\breadcrumbs.mad" */ ?>
<?php /*%%SmartyHeaderCode:1200953a7bbdc695c25-24054400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f42b95bfd682513da3d7378c24b5713b38c8fc2d' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\breadcrumbs.mad',
      1 => 1401180156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200953a7bbdc695c25-24054400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadCrumbs' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a7bbdc6abe34_32448939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7bbdc6abe34_32448939')) {function content_53a7bbdc6abe34_32448939($_smarty_tpl) {?><!--breadcrumbs-->

      <div id="breadcrumb">
      <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadCrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?>
      <a href="<?php if ($_smarty_tpl->tpl_vars['v']->value['menu_url']=='') {?>javascript:;<?php }?>" <?php if ($_smarty_tpl->tpl_vars['v']->last) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['menu_name'];?>
</a> 
      <?php } ?>
      </div>
<!--End-breadcrumbs--><?php }} ?>
