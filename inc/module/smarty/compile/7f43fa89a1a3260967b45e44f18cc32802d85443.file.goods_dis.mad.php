<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 09:39:07
         compiled from "E:\apache\www\my\view\default\goods_dis.mad" */ ?>
<?php /*%%SmartyHeaderCode:117725317e41e223e48-83455521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f43fa89a1a3260967b45e44f18cc32802d85443' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\goods_dis.mad',
      1 => 1399626005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117725317e41e223e48-83455521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5317e41e2667f1_39358634',
  'variables' => 
  array (
    'vp' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5317e41e2667f1_39358634')) {function content_5317e41e2667f1_39358634($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>商品详情</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






    <section class="goods-dis-imglist">
    <p>
    <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>

    </p>
    </section>




<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



</body>
</html><?php }} ?>
