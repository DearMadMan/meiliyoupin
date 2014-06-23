<?php /* Smarty version Smarty-3.1.16, created on 2014-05-22 17:13:59
         compiled from "E:\apache\www\test\madadmin\template\article_list.mad" */ ?>
<?php /*%%SmartyHeaderCode:11437537d8fec7e0245-02196539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c16eaa19deb6e42326376f4e31a5d5d6f456a8d8' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\article_list.mad',
      1 => 1400749669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11437537d8fec7e0245-02196539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537d8fecb4ca63_56818348',
  'variables' => 
  array (
    'vp' => 0,
    'article_list' => 0,
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
<?php if ($_valid && !is_callable('content_537d8fecb4ca63_56818348')) {function content_537d8fecb4ca63_56818348($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\test\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
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
</div>


            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>文章列表</h5>


                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>文章ID</th>
                                    <th>文章分类</th>
                                    <th>文章标题</th>
                                    <th>发布时间</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['type_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
</td>
                                    <td>
                                        <a href="index.php?act=article_edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> <i class="icon-edit"></i>
                                            编辑
                                        </a>
                                        &nbsp;
                                        <a href="index.php?act=article_delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="if(!confirm('确定要删除该文章吗'))return false;">
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
                    <a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>ui-state-disabled<?php }?>" id="DataTables_Table_0_first" href="<?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>javascript:;<?php } else { ?>index.php?act=article_list&pageNow=1<?php }?>"  >First</a>
                    <a tabindex="0" class="previous fg-button ui-button ui-state-default" id="DataTables_Table_0_previous <?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>ui-state-disabled<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['now']->value==1) {?>javascript:;<?php } else { ?>index.php?act=article_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
<?php }?>">Previous</a>
                    <span>
                    <?php if ($_smarty_tpl->tpl_vars['last']->value<=5) {?>
                        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>javascript:;<?php } else { ?> index.php?act=article_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<?php }?>" tabindex="0" class="fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>ui-state-disabled<?php }?> "><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                        <?php }} ?>
                        <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['last']->value-$_smarty_tpl->tpl_vars['now']->value>=4) {?>
                          <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['now']->value+4+1 - ($_smarty_tpl->tpl_vars['now']->value) : $_smarty_tpl->tpl_vars['now']->value-($_smarty_tpl->tpl_vars['now']->value+4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['now']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>javascript:;<?php } else { ?> index.php?act=article_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<?php }?>" tabindex="0" class="fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>ui-state-disabled<?php }?> "><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                          <?php }} ?>
                        <?php } else { ?>
                          <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['last']->value+1 - ($_smarty_tpl->tpl_vars['last']->value-4) : $_smarty_tpl->tpl_vars['last']->value-4-($_smarty_tpl->tpl_vars['last']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['last']->value-4, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                          <a href="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>javascript:;<?php } else { ?> index.php?act=article_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<?php }?>" tabindex="0" class="fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>ui-state-disabled<?php }?> "><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                          <?php }} ?>
                        <?php }?>
                    <?php }?>


                    </span>
                    <a tabindex="0" class="next fg-button ui-button ui-state-default  <?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>ui-state-disabled<?php }?>" id="DataTables_Table_0_next" href="<?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>javascript:;<?php } else { ?>index.php?act=article_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
<?php }?>">Next</a>
                    <a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default <?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>ui-state-disabled<?php }?>" id="DataTables_Table_0_last"  href="<?php if ($_smarty_tpl->tpl_vars['now']->value==$_smarty_tpl->tpl_vars['last']->value) {?>javascript:;<?php } else { ?>index.php?act=article_list&pageNow=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
<?php }?>">Last</a>
                </div>
    <?php }?>
            </div>

        </div>

    </div>

    <!--end-main-container-part--><?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body>

</html><?php }} ?>
