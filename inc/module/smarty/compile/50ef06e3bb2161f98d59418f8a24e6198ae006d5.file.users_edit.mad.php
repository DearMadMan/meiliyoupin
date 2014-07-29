<?php /* Smarty version Smarty-3.1.16, created on 2014-07-16 16:28:41
         compiled from "E:\apache\www\temp\d\madadmin\template\users_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:1453953c5de5624e3e0-64376926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ef06e3bb2161f98d59418f8a24e6198ae006d5' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\users_edit.mad',
      1 => 1405499320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453953c5de5624e3e0-64376926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c5de565940b7_15688081',
  'variables' => 
  array (
    'vp' => 0,
    'row' => 0,
    'types' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5de565940b7_15688081')) {function content_53c5de565940b7_15688081($_smarty_tpl) {?><!DOCTYPE html>
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


    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/datepicker.css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap-datepicker.js"></script>

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
                        <h5>修改会员</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="post.php?act=users_edit" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">会员名称</label>
                                <div class="controls">
                                    <input name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" type="text" class="span11" placeholder="会员名称" disabled>
                                </div>
                            </div>        

                            <div class="control-group">
                                <label class="control-label">会员昵称</label>
                                <div class="controls">
                                    <input name="user_nick" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_nick'];?>
"  type="text" class="span11" placeholder="会员昵称">
                                </div>
                            </div>        


                            <div class="control-group">
                                <label class="control-label">性别</label>
                                <div class="controls">
                                <select name="sex">
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==0) {?>selected<?php }?>>保密</option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1) {?>selected<?php }?>>男</option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==2) {?>selected<?php }?>>女</option>
                                </select>
                                </div>
                            </div>        


            <div class="control-group">
              <label class="control-label">生日</label>
              <div class="controls">
                <input type="text" name="birthday" data-date="<?php echo $_smarty_tpl->tpl_vars['row']->value['birthday'];?>
" data-date-format="dd-mm-yyyy" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['birthday'];?>
" class="datepicker span11">
                <span class="help-block">时间格式 (日期-月份-年)</span> </div>
            </div>



                            <div class="control-group">
                                <label class="control-label">qq</label>
                                <div class="controls">
                                    <input name="user_qq" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_qq'];?>
" type="text" class="span11" placeholder="qq">
                                </div>
                            </div>        



                            <div class="control-group">
                                <label class="control-label">邮箱地址</label>
                                <div class="controls">
                                    <input name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_email'];?>
" type="text" class="span11" placeholder="邮箱地址">
                                </div>
                            </div>        
                            <div class="control-group">
                                <label class="control-label">修改密码</label>
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
                                <label class="control-label">余额</label>
                                <div class="controls">
                                <div class="input-append">
                                      <input name="user_money" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_money'];?>
" type="text" class="span11" placeholder="余额">

                                      <span class="add-on">¥</span>
                                </div>
                                  
                                </div>
                            </div>        

                             <div class="control-group">
                                <label class="control-label">冻结资金</label>
                                <div class="controls">
                                <div class="input-append">
                                    <input name="lock_money" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['lock_money'];?>
" type="text" class="span11" placeholder="冻结资金">
                                      <span class="add-on">¥</span>
                                      </div>
                                </div>
                            </div>        



                             <div class="control-group">
                                <label class="control-label">消费积分</label>
                                <div class="controls">
                                    <input name="user_points" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_points'];?>
" type="text" class="span11" placeholder="消费积分">
                                </div>
                            </div>        



                             <div class="control-group">
                                <label class="control-label">虚拟金币</label>
                                <div class="controls">
                                    <input name="virtual_money" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['virtual_money'];?>
" type="text" class="span11" placeholder="虚拟金币">
                                </div>
                            </div>        



                                <div class="control-group">
                                <label class="control-label">推荐人</label>
                                <div class="controls">
                                    <input name="referrer_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['referrer_name'], ENT_QUOTES, 'UTF-8', true);?>
" type="text" class="span11" placeholder="推荐人用户名">
                                </div>
                            </div>        

                            <div class="form-actions ">
                                 <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
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
/js/users_edit.js"></script>





</body>

</html>
<?php }} ?>
