<?php /* Smarty version Smarty-3.1.16, created on 2014-06-23 13:32:12
         compiled from "E:\apache\www\temp\d\madadmin\template\menu.mad" */ ?>
<?php /*%%SmartyHeaderCode:292853a7bbdc5eeb30-70523782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf36e524434026a2e0b3a537105234333d0394b1' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\menu.mad',
      1 => 1401180533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292853a7bbdc5eeb30-70523782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_list' => 0,
    'parent_id' => 0,
    'v' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a7bbdc682b63_08473730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7bbdc682b63_08473730')) {function content_53a7bbdc682b63_08473730($_smarty_tpl) {?><!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制面板</a>
  <ul>
  <!--
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>控制面板</span></a> </li>
    <li ><a href="index.php?act=site"><i class="icon icon-sitemap"></i> <span>站点设置</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>用户中心</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">用户管理</a></li>
        <li><a href="form-validation.html">评论管理</a></li>
        <li><a href="form-wizard.html">留言查询</a></li>
      </ul>
    </li>
 -->
 
 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
 	
 
      <li class="submenu <?php if ($_smarty_tpl->tpl_vars['parent_id']->value==$_smarty_tpl->tpl_vars['v']->value['id']) {?>open active<?php }?>"> <a href="#"><i class="icon icon-file"></i> <span><?php echo $_smarty_tpl->tpl_vars['v']->value['menu_name'];?>
</span> <span class="label label-important"><?php echo count($_smarty_tpl->tpl_vars['v']->value['child']);?>
</span></a>
      <ul>
      	<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['j']->value['menu_url'];?>
&menu_id=<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
&parent_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value['menu_name'];?>
</a></li>
	   <?php } ?>
      </ul>
    </li>
    
<?php } ?>
   
  </ul>
</div>
<!--sidebar-menu--><?php }} ?>
