<?php /* Smarty version Smarty-3.1.16, created on 2014-07-22 16:41:30
         compiled from "E:\apache\www\temp\d\madadmin\template\shipping_type_list.mad" */ ?>
<?php /*%%SmartyHeaderCode:143453ccbf53b2c0f4-12003176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0109c975d1d8ec8939200ca20eba2d0a8ee5480' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\shipping_type_list.mad',
      1 => 1406018487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143453ccbf53b2c0f4-12003176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ccbf5402a2c3_83068293',
  'variables' => 
  array (
    'vp' => 0,
    'shipping_type_list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ccbf5402a2c3_83068293')) {function content_53ccbf5402a2c3_83068293($_smarty_tpl) {?><!DOCTYPE html>
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods.js"></script>

</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('menu.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--main-container-part-->
    <div id="content">
        <?php echo $_smarty_tpl->getSubTemplate ("breadcrumbs.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>







        <div class="container-fluid">

<div class="widget-box">
<div class="widget-title">
<span class="icon"><i class="icon-bookmark"></i></span>
<h5>全局设置</h5>
</div>
<div class="widget-content">
        <a class="btn btn-primary" href="index.php?act=shipping_type_add&menu_id=8&parent_id=1">添加配送方式</a>
</div>
</div>


            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>配送方式列表</h5>


                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>配送方式名称</th>

                                    <th>配送方式简介</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['shipping_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['shipping_desc'];?>
</td>
                                    <td>
                                        <a href="index.php?act=shipping_type_edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> <i class="icon-edit"></i>
                                            编辑
                                        </a>
                                        &nbsp;
                                        <a href="index.php?act=shipping_area_list&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&menu_id=8&parent_id=1"> <i class="icon-flag"></i>
                                            设置配送区域
                                        </a>
                                        &nbsp;

                                        <a href="index.php?act=shipping_type_delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="if(!confirm('确定要删除该配送方式吗'))return false;">
                                            <i class="icon-trash"></i>
                                            删除
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>
          
            </div>

        </div>

    </div>

    <!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body>

</html><?php }} ?>
