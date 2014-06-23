<?php /* Smarty version Smarty-3.1.16, created on 2014-05-27 16:42:38
         compiled from "E:\apache\www\test\madadmin\template\breadcrumbs.mad" */ ?>
<?php /*%%SmartyHeaderCode:5825379a94b32a9e5-00981747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed30e56efa0a1ac15268703f85acdba5cc270c50' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\breadcrumbs.mad',
      1 => 1401180156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5825379a94b32a9e5-00981747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5379a94b32ce86_77166523',
  'variables' => 
  array (
    'breadCrumbs' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5379a94b32ce86_77166523')) {function content_5379a94b32ce86_77166523($_smarty_tpl) {?><!--breadcrumbs-->

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
