<?php /* Smarty version Smarty-3.1.16, created on 2014-07-30 09:31:43
         compiled from "E:\apache\www\temp\d\madadmin\template\goods_add.mad" */ ?>
<?php /*%%SmartyHeaderCode:1538053aa94f1438ce9-51146647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f0d93079e34b9fbdc87caaa35b11a592227a4d' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\goods_add.mad',
      1 => 1406683901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1538053aa94f1438ce9-51146647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53aa94f1537034_62252584',
  'variables' => 
  array (
    'vp' => 0,
    'ckeditor_path' => 0,
    'goods_sn' => 0,
    'types' => 0,
    'v' => 0,
    'groupon_start_time' => 0,
    'groupon_end_time' => 0,
    'mad_configs' => 0,
    'gallery_list' => 0,
    'attr_list' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53aa94f1537034_62252584')) {function content_53aa94f1537034_62252584($_smarty_tpl) {?><!DOCTYPE html>
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
/css/style.css"></head>

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
                        <h5>属性信息</h5>
                    </div>
           <div class="widget-content">

           	<div class="form-horizontal">
            <div class="control-group">
              <label class="control-label">属性名称 :</label>
              <div class="controls">
                <input id="attr_name" name="attr_name" type="text" class="span11" placeholder="属性名称" value="">
              </div>
            </div>



            <div class="control-group">
              <label class="control-label">追加价格 :</label>
              <div class="controls">
                    <input id="attr_price" name="attr_price" type="text" class="span11" placeholder="对该属性追加价格" value="">
              </div>
            </div>

</div>

                            <div class="form-actions ">
                            	<input type="hidden" id="attr_id" name="attr_id">
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

		<form action="post.php?act=goods_add" method="POST" enctype='multipart/form-data' class="form-horizontal">
		<div class="container-fluid">

			<div class="row-fluid">

				<div class="widget-box">
					<div class="widget-title">

						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#tab1">通用信息</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#tab2">详细描述</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#tab3">商品相册</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#tab4">商品属性</a>
							</li>
						</ul>
					</div>
					<div class="widget-content tab-content">


							<div id="tab1" class="tab-pane active">
							<div class="control-group">
								<label class="control-label">商品名称</label>
								<div class="controls">
									<input name="goods_name" type="text" class="span11" placeholder="商品名称"></div>
							</div>
							<div class="control-group">
								<label class="control-label">商品货号</label>
								<div class="controls">
									<input name="goods_sn" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
" class="span11" placeholder="商品货号"></div>
							</div>
							<div class="control-group">
								<label class="control-label">分类</label>
								<div class="controls">
									<div class="select2-container">

									<select name="type_id" style="display:none;">
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
								<label class="control-label">库存</label>
								<div class="controls">
									<input name="goods_number" value="99999" type="text" class="span11" placeholder="库存"></div>
							</div>


							<div class="control-group">
								<label class="control-label">重量(g)</label>
								<div class="controls">
									<input name="goods_weight" type="text" value="20" class="span11" placeholder="重量(g)"></div>
							</div>

							<div class="control-group">
								<label class="control-label">店铺价格</label>
								<div class="controls">
									<input name="shop_price" type="text" value="12.00" class="span11" placeholder="店铺价格"></div>
							</div>

							<div class="control-group">
								<label class="control-label">市场价格</label>
								<div class="controls">
									<input name="market_price" type="text" value="18.00" class="span11" placeholder="市场价格"></div>
							</div>

 			<div class="control-group">
              <label class="control-label">团购商品</label>
              <div class="controls">
              	<input id="is_groupon" type="checkbox" name="is_groupon" >
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">起始时间</label>
              <div class="controls">
                <input type="text" name="groupon_start_time" data-date="<?php echo $_smarty_tpl->tpl_vars['groupon_start_time']->value;?>
" data-date-format="dd-mm-yyyy" value="<?php echo $_smarty_tpl->tpl_vars['groupon_start_time']->value;?>
" class="datepicker span11">
                <span class="help-block">时间格式 (日期-月份-年)</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">结束时间</label>
              <div class="controls">
                <input type="text" name="groupon_end_time"  data-date="<?php echo $_smarty_tpl->tpl_vars['groupon_end_time']->value;?>
" data-date-format="dd-mm-yyyy" value="<?php echo $_smarty_tpl->tpl_vars['groupon_end_time']->value;?>
" class="datepicker span11">
                <span class="help-block">时间格式 (日期-月份-年)</span> </div>
            </div>

						<div class="control-group">
							<label class="control-label">图片URL:</label>
							<div class="controls">
								<input id="product_imgurl" name="goods_img" type="text" class="span11" placeholder="主图URL,该地址在图片上传后自动获取"></div>
						</div>

						<div class="control-group">
							<label class="control-label">商品图片 :</label>
							<div class="controls pos-r">
								<div class="logo-pic">
									<img id="show_img" src="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['logo'];?>
" alt="logo"></div>
								<div class="uploader" id="uniform-undefined">

									<input id="img_file" name="uploader" type="file" size="19" style="opacity: 0;">
									<span class="filename"></span>
									<span class="action">Choose File</span>
								</div>
								<a id="up_img" href="javascript:;"> <i class="icon-upload-alt m-l-30 logo-icon tip-top"  data-original-title="上传图片"></i>
								</a>
								<a id="alogo" href="javascript:;"> <i class="icon-picture green m-l-30 logo-icon"></i>
								</a>
							</div>
						</div>

						<div id="minibar" class="control-group">

							<div  class="progress progress-mini progress-danger active progress-striped">
								<div class="bar" style="width: 0%;"></div>
							</div>

						</div>

						<div class="control-group">
							<label class="control-label">商品简介</label>
							<div class="controls">
								<textarea id="goods_brief" name="goods_brief" class="span11"></textarea>
							</div>

						</div>


</div>

					<div id="tab2" class="tab-pane">
					    <textarea id="goods_desc" name="goods_desc" id="goods_desc" cols="30" rows="10" class="ckeditor"></textarea>
					</div>

					<div id="tab3" class="tab-pane">

						<div class="row-fluid">
							<div class="span12">
								<div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
         						   <h5>商品相册</h5>
         						</div>
         						<div class="widget-content">
         							<ul id="gallery">
         								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
         									<li data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">
         										<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="">
         										<span class="progress" style="width: 100%;"></span>
         										<span class="close"><i class="icon-remove"></i></span>
         									</li>
         								<?php } ?>
         							</ul>
         						</div>
							</div>
						</div>
												<div class="row-fluid">
							<div class="span12">
								<div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
         						   <h5>拖拽上传</h5>
         						</div>
         						<div class="widget-content">
         							<div id="upload" class="md-drag">将图片推拽至此区域，可以上传</div>
         						</div>
							</div>
						</div>
					</div>
					<div id="tab4" class="tab-pane">
						<div class="row-fluid">
							<div class="span12">
								<div class="widget-box nomargin-top">
									<div class="widget-title">
										<span class="icon">
											<i class="icon-th"></i>
										</span>
										<a id="addattr" href="javascript:;">
										<h5>添加属性</h5>
										</a>
									</div>
									<div class="widget-content nopadding">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>属性名称</th>
													<th>增加价格</th>
													<th>编辑</th>
												</tr>
											</thead>
											<tbody id="attr_tbody">
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attr_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<tr data=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
>
													<td><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</td>
													<td>
											 <a href="javascript:;" onclick="EditAttr(this);">
											  <i class="icon-edit"></i>
                                            编辑
                                        	 </a>
                                       		 &nbsp;
                                      	     <a href="javascript:;" onclick="DeleteAttr(this);" >
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
							<div class="form-actions ">
							<button type="submit" class="btn btn-success span3 offset3">Save</button>
							<button type="reset" class="btn btn-primary span3">Reset</button>

						</div>

				</div>

			</div>
		</div>

	</div>
</form>
</div>

<!--end-main-container-part-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_drag.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_add.js"></script>
</body>
<script></script>
</html><?php }} ?>
