<?php /* Smarty version Smarty-3.1.16, created on 2014-07-12 14:27:20
         compiled from "E:\apache\www\temp\d\madadmin\template\users_add.mad" */ ?>
<?php /*%%SmartyHeaderCode:1027953bf8157858c21-65477010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e2e09d637ff194e6b798d8ed6088448eefd5512' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\users_add.mad',
      1 => 1405146436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027953bf8157858c21-65477010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53bf81579b2bf6_29961374',
  'variables' => 
  array (
    'vp' => 0,
    'types' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf81579b2bf6_29961374')) {function content_53bf81579b2bf6_29961374($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/matrix-style.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/matrix-media.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/select2.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/uniform.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/jquery.gritter.css" />
    <link href='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/google.css' rel='stylesheet' type='text/css'>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.ui.custom.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.uniform.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.flot.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.flot.resize.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/matrix.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/select2.min.js"></script>




</head>

<body>

    <?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('menu.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--main-container-part-->
    <div id="content">

        <?php echo $_smarty_tpl->getSubTemplate ("breadcrumbs.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




        <div class="container-fluid">

            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-align-justify"></i>
                        </span>
                        <h5>添加会员</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="post.php?act=users_add" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">会员名称</label>
                                <div class="controls">
                                    <input name="user_name" type="text" class="span11" placeholder="会员名称">
                                </div>
                            </div>        


                            <div class="control-group">
                                <label class="control-label">邮箱地址</label>
                                <div class="controls">
                                    <input name="user_email" type="text" class="span11" placeholder="邮箱地址">
                                </div>
                            </div>        
                            <div class="control-group">
                                <label class="control-label">登录密码</label>
                                <div class="controls">
                                    <input name="user_word" type="password" class="span11" placeholder="登录密码">
                                </div>
                            </div>        
                            <div class="control-group">
                                <label class="control-label">确认密码</label>
                                <div class="controls">
                                    <input name="user_word_confirm" type="password" class="span11" placeholder="确认密码">
                                </div>
                            </div>        
                            <div class="control-group">
                                <label class="control-label">会员等级</label>
                                <div class="controls">
                                <select name="user_level">
                                    <option value="0">普通会员</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['level_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>        
                                <div class="control-group">
                                <label class="control-label">推荐人</label>
                                <div class="controls">
                                    <input name="referrer_name" type="text" class="span11" placeholder="推荐人用户名">
                                </div>
                            </div>        

                            <div class="form-actions ">
                                <button type="submit" class="btn btn-success span3 offset3">Save</button>
                                <button type="reset" class="btn btn-primary span3">Reset</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <!--end-main-container-part-->

    <?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/users_add.js"></script>





</body>

</html>
<?php }} ?>
