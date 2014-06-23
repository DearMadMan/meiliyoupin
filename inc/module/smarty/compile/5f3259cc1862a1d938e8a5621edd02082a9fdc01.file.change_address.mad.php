<?php /* Smarty version Smarty-3.1.16, created on 2014-05-14 17:28:11
         compiled from "E:\apache\www\my\view\default\change_address.mad" */ ?>
<?php /*%%SmartyHeaderCode:11720534baa72547430-04090528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3259cc1862a1d938e8a5621edd02082a9fdc01' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\change_address.mad',
      1 => 1399971114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11720534baa72547430-04090528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534baa72600434_17298622',
  'variables' => 
  array (
    'vp' => 0,
    'address' => 0,
    'v' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534baa72600434_17298622')) {function content_534baa72600434_17298622($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>收货地址管理</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/jquery-ui-1.10.4.custom.css">
</head>
<body>

    <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="dialog" id='dialog'>

</div>

     <section class="address">
         <p class="add" ><a class="red-dark" href="user.php?act=add_address"><i class="fa fa-plus black"></i> 添加新地址</a></p>
     </section>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <section id="<?php echo $_smarty_tpl->tpl_vars['v']->value['address_id'];?>
" class="address">
     <ul class="ul-address <?php if ($_smarty_tpl->tpl_vars['v']->value['address_id']==$_smarty_tpl->tpl_vars['users']->value['address_id']) {?>address-active<?php }?>">
         <a href="flow.php?act=checkout&address_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['address_id'];?>
">
             <li>
                 <p>收货人姓名：<?php echo $_smarty_tpl->tpl_vars['v']->value['consignee'];?>
</p>
                 <p>详细地址：[<?php echo $_smarty_tpl->tpl_vars['v']->value['pre_address'];?>
]<?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</p>
                 <p>联系电话：<?php echo $_smarty_tpl->tpl_vars['v']->value['mobile'];?>
</p>
             </li>
         </a>
     </ul>
     <p><a href="user.php?act=edit_address&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['address_id'];?>
&step=checkout"><i class="fa fa-pencil gray"></i> 修改</a> <a href="javascript:;" onclick="DeleteAddress('<?php echo $_smarty_tpl->tpl_vars['v']->value['address_id'];?>
');" ><i class="fa fa-trash-o gray"></i> 删除</a>
       <?php if ($_smarty_tpl->tpl_vars['v']->value['address_id']!=$_smarty_tpl->tpl_vars['users']->value['address_id']) {?> <a href="javascript:;" onclick="SetDefault('<?php echo $_smarty_tpl->tpl_vars['v']->value['address_id'];?>
');"><i class="fa fa-check-circle-o gray"></i> 设为默认</a><?php }?>

     </p>
     </section>
<?php } ?>
  <?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

}
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/address.js"></script>
</body>
</html><?php }} ?>
