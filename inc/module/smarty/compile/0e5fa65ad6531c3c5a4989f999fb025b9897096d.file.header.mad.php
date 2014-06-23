<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 10:47:13
         compiled from "E:\apache\www\my\view\default\header.mad" */ ?>
<?php /*%%SmartyHeaderCode:2260752c0c1be065507-60172113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e5fa65ad6531c3c5a4989f999fb025b9897096d' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\header.mad',
      1 => 1395456431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2260752c0c1be065507-60172113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c0c1be067951_82348201',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c0c1be067951_82348201')) {function content_52c0c1be067951_82348201($_smarty_tpl) {?> <header class="header-top">
        <div class="left">
        <a class="back" href="javascript:;" onclick="javascript:window.history.go(-1);"><i class="fa fa-arrow-left white"></i> 返回</a>
        <span><?php if ($_smarty_tpl->tpl_vars['title']->value) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></span>
        <a href="index.php" class="right-1"><i class="fa fa-home fz-20"></i></a>
        <a href="user.php" class="right-2"><i class="fa fa-user fz-20"></i></a>
        <a href="cart.php" class="right-3"><i class="fa fa-shopping-cart fz-20"></i></a>
        </div>
</header><?php }} ?>
