<?php /* Smarty version Smarty-3.1.16, created on 2014-07-11 11:41:45
         compiled from "E:\apache\www\temp\d\madadmin\template\users_level_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:1476653bf5cbaac1886-64047746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462aa0bebf6bb330a441799caca93d94da26e234' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\users_level_edit.mad',
      1 => 1405050102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476653bf5cbaac1886-64047746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53bf5cbab46556_51751545',
  'variables' => 
  array (
    'vp' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf5cbab46556_51751545')) {function content_53bf5cbab46556_51751545($_smarty_tpl) {?><!DOCTYPE html>
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
                        <h5>修改会员等级</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="post.php?act=users_level_edit" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">等级名称</label>
                                <div class="controls">
                                    <input name="level_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['level_name'];?>
" type="text" class="span11" placeholder="等级名称">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">需求积分</label>
                                <div class="controls">
                                    <input name="need_points" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['need_points'];?>
" type="text" class="span11" placeholder="需求积分">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">折扣</label>
                                <div class="controls">
                                    <input name="discount" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['discount'];?>
" type="text" class="span11" placeholder="折扣">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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


    <!--end-main-container-part-->

    <?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>











</body>

</html>
<?php }} ?>
