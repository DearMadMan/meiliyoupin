<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 09:38:31
         compiled from "E:\apache\www\my\view\default\category.mad" */ ?>
<?php /*%%SmartyHeaderCode:10316535db6b7c40cc6-60591873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f87b62c3654d1e170893aa96321dea4495f2cdd' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\category.mad',
      1 => 1399625946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10316535db6b7c40cc6-60591873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535db6b7cd0517_81433144',
  'variables' => 
  array (
    'vp' => 0,
    'category_list' => 0,
    'v' => 0,
    'child_category_list' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535db6b7cd0517_81433144')) {function content_535db6b7cd0517_81433144($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>商品分类</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section class="categroy">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <a class="title" href="category.php?category=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
 <i class="fa fa-sort-asc i"></i></a>
     <?php echo GetChildCategory(array('cat_id'=>$_smarty_tpl->tpl_vars['v']->value['cat_id']),$_smarty_tpl);?>


      <div class="child-list">
        <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['k']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['k']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->iteration++;
 $_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration === $_smarty_tpl->tpl_vars['k']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['k']->iteration%3==1) {?>
          <ul>
        <?php }?>
              <li><a href="category.php?category=<?php echo $_smarty_tpl->tpl_vars['k']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['cat_name'];?>
</a></li>

        <?php if (($_smarty_tpl->tpl_vars['k']->iteration%3)==0) {?>
          </ul>
          <?php } else { ?>
          <?php if ($_smarty_tpl->tpl_vars['k']->last) {?>
              <?php if ($_smarty_tpl->tpl_vars['k']->iteration%3==1) {?>
                 <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <?php } else { ?>
                       <li><a href=""></a></li>
              <?php }?>
          <?php }?>
        <?php }?>
          <?php } ?>
      </div>
      <?php } ?>
    </section>





	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
