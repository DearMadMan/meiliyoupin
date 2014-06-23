<?php /* Smarty version Smarty-3.1.16, created on 2014-05-20 15:58:42
         compiled from "E:\apache\www\test\madadmin\template\nav.mad" */ ?>
<?php /*%%SmartyHeaderCode:16034537aaa56c15496-86249624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c88d22c1befee3964b8ccea51a689670a126a714' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\nav.mad',
      1 => 1400572721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16034537aaa56c15496-86249624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537aaa56db2813_47748902',
  'variables' => 
  array (
    'vp' => 0,
    'navlist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537aaa56db2813_47748902')) {function content_537aaa56db2813_47748902($_smarty_tpl) {?><!DOCTYPE html>
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
/js/nav.js"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/style.css">
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('menu.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="hidiv">


        <div class="container-fluid">

            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-align-justify"></i>
                        </span>
                        <h5>导航信息</h5>
                    </div>
           <div class="widget-content">

           	<div class="form-horizontal">
            <div class="control-group">
              <label class="control-label">导航标题 :</label>
              <div class="controls">
                <input id="nav_name" name="nav_name" type="text" class="span11" placeholder="导航标题" value="">
              </div>
            </div>



            <div class="control-group">
              <label class="control-label">导航链接 :</label>
              <div class="controls">
                    <input id="nav_url" name="nav_url" type="text" class="span11" placeholder="导航链接" value="">
              </div>
            </div>



            <div class="control-group">
              <label class="control-label">新窗口打开 :</label>
              <div class="controls">
              	<input id="is_blank" type="checkbox" name="is_blank" >
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">排序 :</label>
              <div class="controls">
                <input id="z_index" type="text" class="span11" name="z_index" value="0" placeholder="0">
              </div>
            </div>
</div>

                            <div class="form-actions ">
                            	<input type="hidden" id="nav_id" name="nav_id">
                                <button id="save"  type="submit" class="btn btn-success span3 offset3">Save</button>
                                <button type="button" onclick="NavCanel();" class="btn btn-primary span3">Canel</button>

                            </div>

                    </div>

                </div>
            </div>

        </div>



    </div>


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
<p>
    <button class="btn btn-primary btn-mini" onclick="NavAdd();">添加导航</button>
     <button class="btn btn-primary btn-mini" onclick="ClearAll();">一键清空</button>
</p>

</div>

</div>


            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>导航管理</h5>


                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>导航ID</th>
                                    <th>导航标题</th>
                                    <th>导航链接</th>
                                    <th>新窗口打开</th>
                                    <th>排序</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['nav_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><a href=" <?php echo $_smarty_tpl->tpl_vars['v']->value['nav_url'];?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['nav_url'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                                    <td>
                                    <label>
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_blank']==1) {?>checked<?php }?> onclick="ChangeBox('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',this);" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['is_blank'];?>
"  name="radios" style="opacity: 0;">新窗口打开
                						</label>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['z_index'];?>
</td>
                                    <td>
                                        <a href="javascript:;" onclick="NavEdit('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"> <i class="icon-edit"></i>
                                            编辑
                                        </a>
                                        &nbsp;
                                        <a href="javascript:;" onclick="Nav_Delete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',this);">
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
