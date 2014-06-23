<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 14:35:12
         compiled from "E:\apache\www\my\view\default\phone.mad" */ ?>
<?php /*%%SmartyHeaderCode:72955326bc0644c563-48775677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1068e38c5cab17185762e722fed4ed9988a561' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\phone.mad',
      1 => 1399626065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72955326bc0644c563-48775677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5326bc06494812_08252759',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326bc06494812_08252759')) {function content_5326bc06494812_08252759($_smarty_tpl) {?><!doctype html>
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
/js/phone.js"></script>
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section class="form" >
            <form method="POST" action="register.php?act=submit" class="pure-form pure-form-aligned">
        <fieldset>
           <div class="center">  <input id="phone" name="phone" type="text" placeholder="手机号码"></div>
           <div class="index-nav">
             <div class="center width">   <input id="check" name="check" type="text" placeholder="手机验证码"></div>
             <div class="center note-verify"><button id="check_btn" type="button" class="pure-button pure-button-primary w-100 h">获取验证码</button></div>
           </div>
           <div class="center red" id="msg"></div>
          <div class="center"><button id="submit" type="submit" class="pure-button pure-button-primary w-100">确认注册</button></div>







        </fieldset>
        </form>
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
