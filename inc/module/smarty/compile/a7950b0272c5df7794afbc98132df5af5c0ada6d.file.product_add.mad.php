<?php /* Smarty version Smarty-3.1.16, created on 2014-06-23 13:32:33
         compiled from "E:\apache\www\temp\d\madadmin\template\product_add.mad" */ ?>
<?php /*%%SmartyHeaderCode:136953a7bbf1297126-36602760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7950b0272c5df7794afbc98132df5af5c0ada6d' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\product_add.mad',
      1 => 1401087873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136953a7bbf1297126-36602760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'ckeditor_path' => 0,
    'type_list' => 0,
    'v' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a7bbf1376bd1_86940442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7bbf1376bd1_86940442')) {function content_53a7bbf1376bd1_86940442($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ckeditor_path']->value;?>
/ckeditor.js"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/datepicker.css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/style.css">

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
                        <h5>添加产品</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="post.php?act=product_add" method="POST" enctype='multipart/form-data' class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">产品标题</label>
                                <div class="controls">
                                    <input name="product_name" type="text" class="span11" placeholder="产品标题"></div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">产品分类</label>
                                <div class="controls">
                                    <div class="select2-container">
                                        <!--     <a href="#" onclick="return false;" class="select2-choice" tabindex="0">
                                        <span>First option</span> <abbr class="select2-search-choice-close" style="display:none;"></abbr>
                                        <div> <b></b>
                                        </div>
                                    </a>
                                    -->
                                    <div class="select2-drop select2-with-searchbox select2-offscreen" style="display:block;">

                                        <div class="select2-search">
                                            <input type="text" class="select2-input" autocomplete="off" tabindex="0"></div>
                                        <ul class="select2-results"></ul>
                                    </div>
                                    <select name="type_id" style="display:none;">
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                        </div>
 
 			 <div class="control-group">
                                <label class="control-label">图片URL:</label>
                                <div class="controls">
                                    <input id="product_imgurl" name="product_imgurl" type="text" class="span11" placeholder="产品标题"></div>
             </div>
 
 	
             <div class="control-group">
              <label class="control-label">图片上传 :</label>
              <div class="controls pos-r">
                <div class="logo-pic"><img id="show_img" src="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['logo'];?>
" alt="logo"></div>
                <div class="uploader" id="uniform-undefined">
                     

                    <input id="img_file" name="uploader" type="file" size="19" style="opacity: 0;"><span class="filename"></span><span class="action">Choose File</span></div>  
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
                                <label class="control-label">产品简介</label>
                                <div class="controls">
                                  <textarea id="product_content" name="product_dis" class="span11"></textarea>
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

<!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/product.js"></script>
</body>
<script></script>
</html><?php }} ?>
