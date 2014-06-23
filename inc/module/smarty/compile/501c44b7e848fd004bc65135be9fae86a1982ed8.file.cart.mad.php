<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 09:40:26
         compiled from "E:\apache\www\my\view\default\cart.mad" */ ?>
<?php /*%%SmartyHeaderCode:10405532cfa2b6ebda0-07193826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501c44b7e848fd004bc65135be9fae86a1982ed8' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\cart.mad',
      1 => 1399625939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10405532cfa2b6ebda0-07193826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532cfa2b73a149_76511914',
  'variables' => 
  array (
    'vp' => 0,
    'goods' => 0,
    'v' => 0,
    'count' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532cfa2b73a149_76511914')) {function content_532cfa2b73a149_76511914($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>购物车</title>
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


<div id="dialog" class="dialog">#############</div>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <section class="cart-list">

        <ul class="list" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
">
            <li>
                <dl class="ml-30">

                    <dt><a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="http://www.97dfsc.com/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"></a></dt>
                    <dd><a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><span class="strong-14"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</span></a></dd>
                    <dd><a href="javascript:;" onclick="SubNum('<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
',this);"><i class="fa fa-minus-square-o gray"></i></a><input onchange="NumChange('<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
',this);" type="text" style="text-align: center;" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
"><a href="javascript:;" onclick="AddNum('<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
',this);"><i class="fa fa-plus-square-o gray"></i></a><span class="market-price red">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['goods_price']);?>
</span>
                    <a href="javascript:;" onclick="DeleteCarts('<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
');" >
                    <i class="fa fa-trash-o gray ml-15"></i>
                    </a></dd>
                    <dd><span class="market-price red"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_attr'];?>
</span></dd>


                </dl>
            </li>
        </ul>

    </section>
<?php } ?>

    <section class="carts">
        <p>商品数量：<span id='count' class="red"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>件</p>
        <p>商品总价：<span id='price' class="red"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['price']->value);?>
</span>元 (不含运费)</p>
    </section>


      <section class="form">

          <div class="center"><button type="submit" onclick="CheckOut();" class="pure-button pure-button-primary w-100">去结算</button></div>
      </section>




	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/cart.js"></script>
</body>
</html><?php }} ?>
