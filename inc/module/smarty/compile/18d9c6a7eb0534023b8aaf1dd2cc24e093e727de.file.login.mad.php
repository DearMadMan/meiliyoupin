<?php /* Smarty version Smarty-3.1.16, created on 2014-05-14 17:14:38
         compiled from "E:\apache\www\my\view\default\login.mad" */ ?>
<?php /*%%SmartyHeaderCode:22152c2604e739dd1-02608154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18d9c6a7eb0534023b8aaf1dd2cc24e093e727de' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\login.mad',
      1 => 1399626029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22152c2604e739dd1-02608154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c2604e77fcc5_84075017',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c2604e77fcc5_84075017')) {function content_52c2604e77fcc5_84075017($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>用户登录</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
  <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/login.js"></script>
</head>
<body>

    <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section class="form" >
            <form method="POST" action="user.php?act=login" class="pure-form pure-form-aligned">
        <fieldset>
           <div class="center">  <input id="name" name="user_name" type="text" placeholder="用户名"></div>
            <div class="center">   <input id="password" name="user_word" type="password" placeholder="密码"></div>
              <div class="center"><input id="cb" name="cookie" type="checkbox"> <span>一个月内免登录</span></div>
          <div class="center"><button id="submit" type="submit" class="pure-button pure-button-primary w-100">登录</button></div>
         <div class="center"><a href="user.php?act=register">没有帐号 免费注册</a></div>
        </fieldset>
        </form>
    </section>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



</body>
</html><?php }} ?>
