<?php /* Smarty version Smarty-3.1.16, created on 2014-01-03 16:07:39
         compiled from "E:\apache\www\my\admin\template\main.mad" */ ?>
<?php /*%%SmartyHeaderCode:2549952c4b6228ba9e2-50808493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a95b69264232f582fb94697cf2876a35b819a5d0' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\main.mad',
      1 => 1388736446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2549952c4b6228ba9e2-50808493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c4b62294ec26_58812801',
  'variables' => 
  array (
    'vp' => 0,
    'ckeditor_path' => 0,
    'menu' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c4b62294ec26_58812801')) {function content_52c4b62294ec26_58812801($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>html:5文档</title>
	<link rel="stylesheet" href="">
	<link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/base.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/menu.css" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/admin.css" rel="stylesheet" type="text/css"></head>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ckeditor_path']->value;?>
/ckeditor.js"></script>
<body>

	<div class="content">
		<?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="left"><?php echo $_smarty_tpl->getSubTemplate ('body-left.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
		<div class="right">
			<?php if ($_smarty_tpl->tpl_vars['menu']->value=='system') {?>
				<?php if ($_smarty_tpl->tpl_vars['target']->value=='admin') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('admin.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('site.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value=='users') {?>
				<?php if ($_smarty_tpl->tpl_vars['target']->value=='prepayment') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_prepayment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='encashment') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_encashment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='usermsg') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_msg.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_list.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value=='goods') {?>
				<?php if ($_smarty_tpl->tpl_vars['target']->value=='goods_edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='order') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_order.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='vip') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_vip.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article_edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article_type') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article_type.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article_type_edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article_type_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_list.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('body-right.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <?php }?>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
