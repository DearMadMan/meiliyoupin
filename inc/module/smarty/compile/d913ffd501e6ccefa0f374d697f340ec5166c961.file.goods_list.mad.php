<?php /* Smarty version Smarty-3.1.16, created on 2014-07-10 15:35:25
         compiled from "E:\apache\www\temp\d\madadmin\template\goods_list.mad" */ ?>
<?php /*%%SmartyHeaderCode:1472553b20ed3734f56-02368385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd913ffd501e6ccefa0f374d697f340ec5166c961' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\madadmin\\template\\goods_list.mad',
      1 => 1404977723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1472553b20ed3734f56-02368385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53b20ed399a2f1_87665135',
  'variables' => 
  array (
    'vp' => 0,
    'goods_list' => 0,
    'v' => 0,
    'more' => 0,
    'now' => 0,
    'pre' => 0,
    'last' => 0,
    'foo' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b20ed399a2f1_87665135')) {function content_53b20ed399a2f1_87665135($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\temp\\d\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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

<div class="widget-box">
<div class="widget-title">
<span class="icon"><i class="icon-bookmark"></i></span>
<h5>全局设置</h5>
</div>



 <div class="widget-content nopadding ">
        <form class="form-horizontal" action="index.php?act=goods_list" method="post">
          <div class="control-group">
              <label class="control-label">Search :</label>
              <div id="searchDiv" class="controls">
                <input  name="search" type="text" class="span4" placeholder="搜索关键字">
                <button id="searchaBtn" type="submit" class="tip-bottom"><i class="icon-search"></i></button>
              </div>
          </div>
        </form>
    </div>



</div>


            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>商品列表</h5>


                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>商品名称</th>
                                    <th>价格</th>
                                    <th>上架</th>
                                    <th>库存</th>
                                    <th>添加时间</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['goods_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['shop_price']);?>
</td>
                                    <td class="txt-ct" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><a href="javascript:;" onclick="ChangeStatus(this);"><i class="<?php if ($_smarty_tpl->tpl_vars['v']->value['is_on_sale']==1) {?>icon-ok<?php } else { ?>icon-remove<?php }?>"></i></a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
</td>
                                    <td data="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                        <a href="index.php?act=goods_edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> <i class="icon-edit"></i>
                                            编辑
                                        </a>
                                        &nbsp;
                                        <a href="javascript:;" onclick="recycle(this);">
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
            <?php if ($_smarty_tpl->tpl_vars['more']->value) {?>
                <div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="DataTables_Table_0_paginate">
                    <a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>ui-state-disabled<?php }?>" id="DataTables_Table_0_first" href="<?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>javascript:;<?php } else { ?>index.php?act=goods_list&pageNow=1<?php }?>"  >First</a>
                    <a tabindex="0" class="previous fg-button ui-button ui-state-default" id="DataTables_Table_0_previous <?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>ui-state-disabled<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>javascript:;<?php } else { ?>index.php?act=goods_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
<?php }?>">Previous</a>
                    <span>
                    <?php if ($_smarty_tpl->tpl_vars['last']->value<=5) {?>
                        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>javascript:;<?php } else { ?> index.php?act=goods_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<?php }?>" tabindex="0" class="fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>ui-state-disabled<?php }?> "><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                        <?php }} ?>
                        <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['last']->value-$_smarty_tpl->tpl_vars['now']->value>=4) {?>
                          <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['now']->value+4+1 - ($_smarty_tpl->tpl_vars['now']->value) : $_smarty_tpl->tpl_vars['now']->value-($_smarty_tpl->tpl_vars['now']->value+4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['now']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>javascript:;<?php } else { ?> index.php?act=goods_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<?php }?>" tabindex="0" class="fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>ui-state-disabled<?php }?> "><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                          <?php }} ?>
                        <?php } else { ?>
                          <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['last']->value+1 - ($_smarty_tpl->tpl_vars['last']->value-4) : $_smarty_tpl->tpl_vars['last']->value-4-($_smarty_tpl->tpl_vars['last']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['last']->value-4, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>javascript:;<?php } else { ?> index.php?act=goods_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<?php }?>" tabindex="0" class="fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>ui-state-disabled<?php }?> "><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                          <?php }} ?>
                        <?php }?>
                    <?php }?>


                    </span>
                    <a tabindex="0" class="next fg-button ui-button ui-state-default  <?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>ui-state-disabled<?php }?>" id="DataTables_Table_0_next" href="<?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>javascript:;<?php } else { ?>index.php?act=goods_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
<?php }?>">Next</a>
                    <a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>ui-state-disabled<?php }?>" id="DataTables_Table_0_last"  href="<?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>javascript:;<?php } else { ?>index.php?act=goods_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
<?php }?>">Last</a>
                </div>
    <?php }?>
            </div>

        </div>

    </div>

    <!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_list.js"></script>


</body>

</html><?php }} ?>
