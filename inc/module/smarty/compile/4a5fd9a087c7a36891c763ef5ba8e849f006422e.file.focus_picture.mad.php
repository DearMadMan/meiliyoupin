<?php /* Smarty version Smarty-3.1.16, created on 2014-05-30 10:32:02
         compiled from "E:\apache\www\test\madadmin\template\focus_picture.mad" */ ?>
<?php /*%%SmartyHeaderCode:12112537c00b980fc45-18020280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a5fd9a087c7a36891c763ef5ba8e849f006422e' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\focus_picture.mad',
      1 => 1401417006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12112537c00b980fc45-18020280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537c00b994d1c8_99137190',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
    'piclist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c00b994d1c8_99137190')) {function content_537c00b994d1c8_99137190($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/ajax.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/focus_picture.js"></script>
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
                        <h5>首页焦点图</h5>
                    </div>
           <div class="widget-content">

           	<div class="form-horizontal">
            <div class="control-group">
              <label class="control-label">图片URL :</label>
              <div class="controls">
                <input id="pic_url" name="pic_url" type="text" class="span11" placeholder="goodluck.jpg" value="">
              </div>
            </div>


             <div class="control-group">
              <label class="control-label">图片上传 :</label>
              <div class="controls pos-r">
                <div class="logo-pic"><img id="show_img" src="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['logo'];?>
" alt="logo"></div>
                <div class="uploader" id="uniform-undefined">
                      <form id="img_form" action="post.php" method="post" enctype="multipart/form-data">

                    <input id="img_file" name="uploader" type="file" size="19" style="opacity: 0;"><span class="filename"></span><span class="action">Choose File</span></div>   </form>
                <a id="up_img" href="javascript:;"> <i class="icon-upload-alt m-l-30 logo-icon tip-top"  data-original-title="上传图片"></i></a>
                <a id="alogo" href="javascript:;"> <i class="icon-picture green m-l-30 logo-icon"></i></a>
              </div>
            </div>

            <div id="minibar" class="control-group">

                <div  class="progress progress-mini progress-danger active progress-striped">
                 <div class="bar" style="width: 0%;"></div>
                </div>

            </div>



            <div class="control-group">
              <label class="control-label">导向URL :</label>
              <div class="controls">
                    <input id="click_url" name="click_url" type="text" class="span11" placeholder="http://www.baidu.com" value="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">标题(可空) :</label>
              <div class="controls">
                    <input id="title" name="title" type="text" class="span11" placeholder="焦点图标题" value="">
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">图片描述 :</label>
              <div class="controls">
                <input id="pic_dis" type="text" class="span11" name="pic_dis" value="0" placeholder="这里是图片描述，可以写图片标题">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">排序 :</label>
              <div class="controls">
                <input id="pic_index" type="text" class="span11" name="pic_index" value="0" placeholder="0">
              </div>
            </div>
</div>

                            <div class="form-actions ">
                            	<input type="hidden" id="pic_id" name="pic_id">
                                <button id="save"  type="submit" class="btn btn-success span3 offset3">Save</button>
                                <button type="button" onclick="Canel();" class="btn btn-primary span3">Canel</button>

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
    <button class="btn btn-primary btn-mini" onclick="FocusAdd();">添加焦点图</button>
     <button class="btn btn-primary btn-mini" onclick="ClearAll();">一键清空</button>
</p>

</div>

</div>


            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>焦点图管理</h5>


                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>焦点图ID</th>
                                    <th>图片地址</th>
                                    <th>导向链接</th>
                                    <th>图片描述</th>
                                    <th>排序</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['piclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pic_url'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><a href=" <?php echo $_smarty_tpl->tpl_vars['v']->value['nav_url'];?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['click_url'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pic_dis'], ENT_QUOTES, 'UTF-8', true);?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pic_index'];?>
</td>
                                    <td>
                                        <a href="javascript:;" onclick="Edit('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"> <i class="icon-edit"></i>
                                            编辑
                                        </a>
                                        &nbsp;
                                        <a href="javascript:;" onclick="Focus_Delete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
