<?php /* Smarty version Smarty-3.1.16, created on 2014-07-23 14:55:31
         compiled from "E:\apache\www\temp\d\madadmin\template\shipping_area_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:1513753cf30c0276972-73228493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a04d3f9f2b7578823fb6be8f45567510f84b0aa5' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\shipping_area_edit.mad',
      1 => 1406097622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513753cf30c0276972-73228493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cf30c0320a43_39194857',
  'variables' => 
  array (
    'vp' => 0,
    'row' => 0,
    'area_config' => 0,
    'province' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf30c0320a43_39194857')) {function content_53cf30c0320a43_39194857($_smarty_tpl) {?><!DOCTYPE html>
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
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="icon-bookmark"></i></span>
                            <h5>配送地区名称</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <div class="row-fluid">
                                <form action="post.php?act=shipping_area_edit" method="POST" enctype='multipart/form-data' class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">配送区域名称</label>
                                        <div class="controls">
                                            <input name="shipping_area_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shipping_area_name'];?>
" type="text" class="span11" placeholder="配送区域名称"></div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">首重费用</label>
                                            <div class="controls">
                                                <input name="first_price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['area_config']->value['first_price'];?>
" class="span11" placeholder="首重费用"></div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">续重费用</label>
                                                <div class="controls">
                                                    <input name="next_price" value="<?php echo $_smarty_tpl->tpl_vars['area_config']->value['next_price'];?>
" type="text" class="span11" placeholder="续重费用"></div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">免费额度</label>
                                                    <div class="controls">
                                                        <input name="free_price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['area_config']->value['free_price'];?>
" class="span11" placeholder="免费额度"></div>
                                                    </div>
                                                    <input type="hidden" name="shipping_type_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shipping_id'];?>
">
                                                      <input type="hidden" id="shipping_area_id" name="shipping_area_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                                    <input type="hidden" id="area" value="<?php echo GetAreaRegionIdString(array('shipping_area_id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" name ="area">
                                                    <div class="form-actions ">
                                                        <button type="submit" class="btn btn-success span3 offset3">Save</button>
                                                        <button type="reset" class="btn btn-primary span3">Reset</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"> <i class="icon-align-justify"></i>
                                                </span>
                                                <h5>配送区域列表</h5>
                                            </div>
                                            <div class="widget-content nopadding">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>国家</th>
                                                            <th>省份</th>
                                                            <th>城市</th>
                                                            <th>区/县</th>
                                                            <th>添加</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <select name="country" id="country">
                                                                    <option value="0">中国</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="province" id="province">
                                                                    <option value="0">请选择...</option>
                                                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['region_name'];?>
</option>
                                                                    <?php } ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="city" id="city">
                                                                    <option value="0">请选择...</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="district" id="district">
                                                                    <option value="0">请选择...</option>
                                                                </select>
                                                            </td>
                                                            <td style="text-align:center;"><button id="add" class="btn btn-primary">添加</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                             <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon"> <i class="icon-align-justify"></i>
                                                </span>
                                                <h5>配送标签</h5>
                                            </div>
              <div id="regions" class="widget-content ">
                
              </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/shipping_area_add.js"></script>
                            <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/shipping_area_edit.js"></script>
                        </body>
                    </html><?php }} ?>
