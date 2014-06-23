<?php /* Smarty version Smarty-3.1.16, created on 2014-05-22 10:05:13
         compiled from "E:\apache\www\test\madadmin\template\site.mad" */ ?>
<?php /*%%SmartyHeaderCode:309015379b3f9b377a5-03637684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9303ad58cc14a7fb88448d1cf9d8af84c74d50ea' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\site.mad',
      1 => 1400651764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309015379b3f9b377a5-03637684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5379b3f9bbc9a7_87036404',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5379b3f9bbc9a7_87036404')) {function content_5379b3f9bbc9a7_87036404($_smarty_tpl) {?><!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/style.css">
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
                        <h5>站点信息</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="post.php?act=site_edit" method="POST" enctype='multipart/form-data' class="form-horizontal">


            <div class="control-group">
              <label class="control-label">站点名称 :</label>
              <div class="controls">
                <input name="site_name" type="text" class="span11" placeholder="站点名称" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mad_configs']->value['site_name'], ENT_QUOTES, 'UTF-8', true);?>
">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Logo :</label>
              <div class="controls pos-r">
                <div class="logo-pic"><img id="img_url" src="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['logo'];?>
" alt="logo"></div>
                <div class="uploader" id="uniform-undefined"><input name="logo" type="file" size="19" style="opacity: 0;"><span class="filename"></span><span class="action">Choose File</span></div>
                <a id="alogo" href="javascirpt:;"> <i class="icon-picture green m-l-30 logo-icon"></i></a>

              </div>
            </div>

            <div class="control-group">
              <label class="control-label">站点描述 :</label>
              <div class="controls">
                 <textarea name="site_dis"  class="span11" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mad_configs']->value['site_dis'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
              </div>
            </div>



            <div class="control-group">
              <label class="control-label">站点关键字 :</label>
              <div class="controls">
               <textarea name="keyword"  class="span11" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mad_configs']->value['keyword'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">管理员邮箱 :</label>
              <div class="controls">
                <input type="text" class="span11" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mad_configs']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="admin@example.com">
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
/js/matrix.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/site.js"></script>
</body>

</html>
<?php }} ?>
