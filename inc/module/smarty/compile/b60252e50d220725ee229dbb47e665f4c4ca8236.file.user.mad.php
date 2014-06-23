<?php /* Smarty version Smarty-3.1.16, created on 2014-05-14 17:14:43
         compiled from "E:\apache\www\my\view\default\user.mad" */ ?>
<?php /*%%SmartyHeaderCode:995252c02927e39e51-62938016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60252e50d220725ee229dbb47e665f4c4ca8236' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user.mad',
      1 => 1399949104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995252c02927e39e51-62938016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c02927f41643_57551163',
  'variables' => 
  array (
    'vp' => 0,
    'title' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c02927f41643_57551163')) {function content_52c02927f41643_57551163($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>用户中心</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>

    <header class="header-top">
        <div class="left">
        <a class="back" href="index.php"><i class="fa fa-arrow-left white"></i> 首页</a>
        <span><?php if ($_smarty_tpl->tpl_vars['title']->value) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></span>
        <a href="index.php" class="right-1"><i class="fa fa-home fz-20"></i></a>
        <a href="user.php" class="right-2"><i class="fa fa-user fz-20"></i></a>
        <a href="cart.php" class="right-3"><i class="fa fa-shopping-cart fz-20"></i></a>
        </div>
</header>

    <section class="user-info" >
        <p><span class="strong"><?php echo $_smarty_tpl->tpl_vars['u']->value['user_name'];?>
</span><span>  <a href="user.php?act=loginout">退出</a></span></p>
        <p>消费积分: <span class="red"><?php echo $_smarty_tpl->tpl_vars['u']->value['pay_points'];?>
</span>分</p>
        <p>金币: <span class="red"><?php echo $_smarty_tpl->tpl_vars['u']->value['cash_point'];?>
</span>金币</p>
    </section>

    <section class="user-menu">
        <ul class="menu">
            <li><a href="user.php?act=orders">我的订单</a></li>
            <li><a href="user.php?act=address">收货地址管理</a></li>
            <li><a href="user.php?act=collect">我的收藏</a></li>
            <li><a href="#"></a></li>
        </ul>
    </section>


     <section class="user-menu">
	        <ul class="help">
	            <li><a href="#">帮助中心</a></li>
	            <li><a href="user.php?act=about">关于我们</a></li>
	        </ul>
	    </section>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
