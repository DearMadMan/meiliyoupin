<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 14:34:57
         compiled from "E:\apache\www\my\view\default\register.mad" */ ?>
<?php /*%%SmartyHeaderCode:3243352c27feac9b9b2-88762708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb62fdff2274993b61c05964739f135e7c94063' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\register.mad',
      1 => 1399626070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3243352c27feac9b9b2-88762708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c27feace0688_74946368',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c27feace0688_74946368')) {function content_52c27feace0688_74946368($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>用户注册</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/register.js"></script>
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section class="form" >
            <form class="pure-form pure-form-aligned" method="POST" action="register.php?act=register_user">
        <fieldset>
           <div class="center">  <input id="name" name="name" type="text" placeholder="用户名"></div>
            <div class="center">   <input id="password" name="password" type="password" placeholder="密码"></div>
               <div class="center">   <input id="password_check" type="password" placeholder="确认密码"></div>
               <div class="center red" id="msg"></div>
          <div class="center"><button id="submit" type="submit" class="pure-button pure-button-primary w-100">下一步</button></div>







        </fieldset>
        </form>
    </section>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
