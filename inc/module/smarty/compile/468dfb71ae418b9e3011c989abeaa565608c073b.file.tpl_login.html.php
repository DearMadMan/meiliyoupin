<?php /* Smarty version Smarty-3.1.16, created on 2014-07-31 17:33:38
         compiled from "E:\apache\www\temp\d\view\default\tpl_login.html" */ ?>
<?php /*%%SmartyHeaderCode:2393653d860ccded674-91556172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468dfb71ae418b9e3011c989abeaa565608c073b' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\view\\default\\tpl_login.html',
      1 => 1406797731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2393653d860ccded674-91556172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d860cce38c78_88512468',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d860cce38c78_88512468')) {function content_53d860cce38c78_88512468($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-Hans">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="MEILIMZ">
        <link rel="shortcut icon" href="">
        <title>登录 - 美丽聚慧 - 内部版本开发中build20140701</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/reset.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/global.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/member.css">
        <!-- jS -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.min.js"></script>        
                 <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/happy.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/happy.methods.js"></script>        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container ML-header">            
            <div class="row">
                <div class="col-md-6 ML-header-logo">
                    <a href="./tpl_index.html"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.gif" alt="logo" style="max-width:360px;"></a>
                </div>
                <div class="col-md-6 ML-register-topbanner">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/register-topbanner.jpg" alt="cart_step1_v1">
                </div>
            </div>
        </div>

        <br><br>
        <div class="container ML-login">
           <br>
           <br>
            <div class="row">                
                <div class="col-md-8">      
                    
                </div>
                <div class="col-md-4 login-info">
                  <div class="ML-primarycolor">
                      <p class="pull-left login-title">登录聚慧</p>
                      <p class="pull-right"><small><a href="./tpl_register.html">还没有聚美账号？ 30秒注册</a></small></p>
                  </div>
                  <div class="clearfix"></div>
                  <hr>                  
                    <form id="loginForm" role="form" method="POST" action="login.php?act=login">
                      <div class="form-group">
                        <label for="exampleInputEmail">邮箱 / 用户名</label>
                        <input id="user_name" type="text" name="user_name" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword">密码</label>
                        <input type="password" name="user_word" class="form-control" id="user_word">
                      </div>                     
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="remember"> <small>自动登录</small>
                        </label>
                        <label class="pull-right">
                          <a href="#"><small>忘记密码 ?</small></a>
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default btn-lg ML-btn-bg">登录</button>
                    </form>
                </div>
                
            </div>
            <br>
            <br>
        </div><!--/ML-login 主体结束-->
<br>
<br>
<br>
<br>
<br>
      <?php echo $_smarty_tpl->getSubTemplate ('tpl_footer_simple.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/login.js"></script>
    </body>
</html><?php }} ?>
