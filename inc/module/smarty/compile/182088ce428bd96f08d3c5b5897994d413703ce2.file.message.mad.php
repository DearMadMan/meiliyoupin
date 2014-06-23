<?php /* Smarty version Smarty-3.1.16, created on 2014-06-06 15:58:18
         compiled from "E:\apache\www\test\madadmin\template\message.mad" */ ?>
<?php /*%%SmartyHeaderCode:16333539171a7519d83-14199707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '182088ce428bd96f08d3c5b5897994d413703ce2' => 
    array (
      0 => 'E:\\apache\\www\\test\\madadmin\\template\\message.mad',
      1 => 1402041408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16333539171a7519d83-14199707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539171a78c4b22_35861631',
  'variables' => 
  array (
    'vp' => 0,
    'messagelist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539171a78c4b22_35861631')) {function content_539171a78c4b22_35861631($_smarty_tpl) {?><!DOCTYPE html>
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
/js/message.js"></script>
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
                        <h5>用户留言</h5>
                    </div>
           <div class="widget-content">

           	<div class="form-horizontal">
            <div class="control-group">
              <label class="control-label">标题 :</label>
              <div class="controls">
                <input id="title" name="title" type="text" class="span11" placeholder="标题" value="">
              </div>
            </div>



            <div class="control-group">
              <label class="control-label">姓名 :</label>
              <div class="controls">
                    <input id="name" name="name" type="text" class="span11" placeholder="姓名" value="">
              </div>
            </div>






            <div class="control-group">
              <label class="control-label">邮箱 :</label>
              <div class="controls">
                <input id="email" type="text" class="span11" name="email" value="" placeholder="0">
              </div>
            </div>


              <div class="control-group">
              <label class="control-label">留言 :</label>
              <div class="controls">
               <textarea name="msg" id="msg" class="span11" ></textarea>
              </div>
            </div>
</div>

                            <div class="form-actions ">
                            	<input type="hidden" id="nav_id" name="nav_id">
                                <button type="button" onclick="NavCanel();" class="btn btn-primary span11">Canel</button>

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

</p>

</div>

</div>


            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i>
                        </span>
                        <h5>留言管理</h5>


                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>留言ID</th>
                                    <th>留言标题</th>
                                    <th>姓名</th>
                                    <th>邮箱</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messagelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td>
                                        <a href="javascript:;" onclick="Open('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"> <i class="icon-edit"></i>
                                            编辑
                                        </a>
                                        &nbsp;
                                        <a href="javascript:;" onclick="Message_Delete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
