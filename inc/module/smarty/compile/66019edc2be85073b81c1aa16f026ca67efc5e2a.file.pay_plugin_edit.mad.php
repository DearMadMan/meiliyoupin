<?php /* Smarty version Smarty-3.1.16, created on 2014-07-29 14:02:59
         compiled from "E:\apache\www\temp\d\madadmin\template\pay_plugin_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:7153d71c6e275c25-81870649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66019edc2be85073b81c1aa16f026ca67efc5e2a' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\pay_plugin_edit.mad',
      1 => 1406613776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7153d71c6e275c25-81870649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d71c6e305df0_63601725',
  'variables' => 
  array (
    'vp' => 0,
    'plugin' => 0,
    'plugin_config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d71c6e305df0_63601725')) {function content_53d71c6e305df0_63601725($_smarty_tpl) {?><!DOCTYPE html>
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
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>插件编辑</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="post.php?act=pay_plugin_edit" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">插件名称</label>
                                <div class="controls">
                                    <input name="plugin_name" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['plugin_name'];?>
" type="text" class="span11" placeholder="插件名称"></div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">插件简介</label>
                                <div class="controls">
                                <textarea name="plugin_dis"  cols="30" class="span11" rows="10"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['plugin_dis'];?>
</textarea>
                                 </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">商户号</label>
                                <div class="controls">
                                    <input name="user_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin_config']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" class="span11" placeholder="商户号"></div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">签名</label>
                                <div class="controls">
                                    <input name="access_token" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin_config']->value['access_token'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" class="span11" placeholder="签名"></div>
                            </div>

                           

    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
">

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
<!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
<script></script>
</html><?php }} ?>
