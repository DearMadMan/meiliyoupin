<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 09:41:47
         compiled from "E:\apache\www\my\view\default\tips.mad" */ ?>
<?php /*%%SmartyHeaderCode:184995318200241c015-12009819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ae8682d9c0ce899dbab0d33c89c565806fee68' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\tips.mad',
      1 => 1399626075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184995318200241c015-12009819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5318200246d5c0_57008366',
  'variables' => 
  array (
    'vp' => 0,
    'tips' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5318200246d5c0_57008366')) {function content_5318200246d5c0_57008366($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>信息提示</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>

    <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section class="tips" >
        <p class="red"><?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
</p>
    </section>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



</body>
</html><?php }} ?>
