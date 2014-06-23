<?php /* Smarty version Smarty-3.1.16, created on 2014-05-16 08:58:38
         compiled from "E:\apache\www\my\view\default\goods.mad" */ ?>
<?php /*%%SmartyHeaderCode:647252c38482c55ed7-85832118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f94526e99fe238b473da5f75857f862ed457225' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\goods.mad',
      1 => 1400200446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647252c38482c55ed7-85832118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c38482cc7768_89022301',
  'variables' => 
  array (
    'vp' => 0,
    'pic_list' => 0,
    'v' => 0,
    'goods' => 0,
    'properties' => 0,
    'k' => 0,
    'l' => 0,
    'get' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c38482cc7768_89022301')) {function content_52c38482cc7768_89022301($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>商品信息</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/jquery-ui-1.10.4.custom.css">
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="dialog" id="dialog">###</div>

    <section class="image-list">
        <ul class="image-ul">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <li><img src="http://www.97dfsc.com/<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
"></li>
            <?php } ?>
        </ul>
        <ul class="point">
            <li>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <a href="javascript:;"></a>
            <?php } ?>
            </li>
        </ul>
    </section>

    <section class="goods-info">
        <dl class="dls">
            <dt><span class="strong"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</span></dt>
            <dd>会员价：<span id="shop_price" class="strong red">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['goods']->value['shop_price']);?>
</span>（<?php echo $_smarty_tpl->tpl_vars['goods']->value['discount'];?>
折）
                <input type="hidden" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
" id="goods_price">
            </dd>
            <dd>市场价：<span class="gray"><del>￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
</del></span></dd>
            <dd>商品编号：<span><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
</span></dd>
            <dd>赠送金币：<span span class="red"><?php echo $_smarty_tpl->tpl_vars['goods']->value['give_integral'];?>
 金币</span></dd>
            <dd>可使用代金券：<span span class="red"><?php echo $_smarty_tpl->tpl_vars['goods']->value['integral'];?>
 代金券</span></dd>


        </dl>

        <div class="properties">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <dl id="attr_id_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="dls">
            <dt><span class="strong-14"><?php echo $_smarty_tpl->tpl_vars['v']->value['attr_name'];?>
</span></dt>
            <dd>
            <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['l']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['l']->index++;
 $_smarty_tpl->tpl_vars['l']->first = $_smarty_tpl->tpl_vars['l']->index === 0;
?>
             <a id="<?php echo $_smarty_tpl->tpl_vars['l']->value['goods_attr_id'];?>
" data="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['l']->value['attr_price'])===null||$tmp==='' ? '0' : $tmp);?>
" href="javascript:;" onclick="Choice(this);" class="<?php if ($_smarty_tpl->tpl_vars['l']->first) {?>goods-attr-active<?php } else { ?>goods-attr<?php }?>"><?php echo $_smarty_tpl->tpl_vars['l']->value['attr_value'];?>
</a>
            <?php } ?>
            </dd>
        </dl>
            <?php } ?>
        </div>

        <div class="buttons">
            <?php if ($_smarty_tpl->tpl_vars['get']->value) {?>
                 <a id="a_collect" href="javascript:;" class="collect">已收藏</a>
            <?php } else { ?>
            <a id="a_collect" href="javascript:;" onclick="AddCollect('<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
');" class="collect">加入收藏</a>
            <?php }?>
            <a href="javascript:;" onclick="AddToCart('<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
');" class="add-cart">加入购物车</a>
        </div>
    </section>


    <section class="goods-dis">
     <a href="goods.php?act=goods_dis&&id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
">商品详情</a>
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





</body>
</html><?php }} ?>
