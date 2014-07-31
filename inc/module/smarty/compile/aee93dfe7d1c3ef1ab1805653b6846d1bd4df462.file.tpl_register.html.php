<?php /* Smarty version Smarty-3.1.16, created on 2014-07-31 11:01:59
         compiled from "E:\apache\www\temp\d\view\default\tpl_register.html" */ ?>
<?php /*%%SmartyHeaderCode:359453d8623c6e6f84-74831984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee93dfe7d1c3ef1ab1805653b6846d1bd4df462' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\view\\default\\tpl_register.html',
      1 => 1406775717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359453d8623c6e6f84-74831984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d8623c720f67_40719890',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8623c720f67_40719890')) {function content_53d8623c720f67_40719890($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-Hans">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="MEILIMZ">
        <link rel="shortcut icon" href="">
        <title>注册 - 美丽聚慧 - 内部版本开发中build20140701</title>
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

        
        <div class="container ML-register">
           <br><br>         
           <div class="row">
               <div class="col-md-offset-1 col-md-11">
                   <p class="ML-primarycolor login-title">注册聚慧</p>
                   <hr>
               </div>
           </div>                   
            <div class="row">
                <div class="col-md-offset-1 col-md-7">                                     
                    <div class="row">
                        <div class="col-md-10">                           
                            <form id="registerForm" class="form-horizontal" role="form" method="POST" action="register.php?act=register">
                              <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-8">
                                  <input name="user_email" type="email" class="form-control" id="inputEmail">
                                  <p class="focus-tip"><small>邮箱可用于登录和找回密码</small></p>
                                </div>
                                
                              </div>
                              
                              <div class="form-group">
                                <label for="inputusername" class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-8">
                                  <input name="user_name"  type="text" class="form-control" id="inputusername">
                                  <p class="focus-tip"><small>4-16个字符，不能以数字开头，由中文、英文或下划线组成</small></p>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword1" class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-8">
                                  <input type="password" name="user_word" class="form-control" id="inputPassword1">
                                  <p class="focus-tip"><small>6-16个字符，建议使用字母加数字或符号组合</small></p>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword2" class="col-sm-2 control-label">重复密码</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control" id="inputPassword2">
                                  <p class="focus-tip"><small>请再次输入密码</small></p>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputHashcode" class="col-sm-2 control-label">验证码</label>
                                <div class="col-sm-3">
                                  <input type="text" name="verification" class="form-control" id="inputHashcode" maxlength="4">
                                  <p class="focus-tip"><small>请输入验证码</small></p>
                                </div>
                                <div class="col-sm-6">
                                  <img id="getcode" height="34" src="getcode.php" alt="验证码">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> <small>《美丽聚慧用户协议》</small>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-danger ML-btn-bg">同意协议并注册</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <p>已有聚慧账号？</p>
                    <a href="login.php" class="btn btn-danger ML-btn-bg">&nbsp;&nbsp;立即登录&nbsp;&nbsp;</a>
                </div>
            </div>

            <br>
            <br>
        </div><!--/ML-register index 主体结束-->
               
        

<br>
<br>
<br>
<br>
<br>

<?php echo $_smarty_tpl->getSubTemplate ('tpl_footer_simple.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/register.js"></script>
    </body>
</html><?php }} ?>
