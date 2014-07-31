<?php /* Smarty version Smarty-3.1.16, created on 2014-07-31 09:11:34
         compiled from "E:\apache\www\temp\d\view\default\tips.mad" */ ?>
<?php /*%%SmartyHeaderCode:2538253d996d6505115-96150127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61892ab983f6a202fb07d86c385242329eb4dfa2' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\view\\default\\tips.mad',
      1 => 1406769093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2538253d996d6505115-96150127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d996d65692e1_48686077',
  'variables' => 
  array (
    'vp' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d996d65692e1_48686077')) {function content_53d996d65692e1_48686077($_smarty_tpl) {?><!DOCTYPE html>
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
        <div class="container ML-register">
           <br>
           <br>
            <div class="row">                
             <div class="col-md-12">
               <p class="text-center" style="color:red;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
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

    </body>
</html><?php }} ?>
