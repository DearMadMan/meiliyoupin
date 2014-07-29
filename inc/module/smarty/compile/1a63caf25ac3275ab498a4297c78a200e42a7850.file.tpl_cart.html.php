<?php /* Smarty version Smarty-3.1.16, created on 2014-07-18 15:22:42
         compiled from "E:\apache\www\temp\d\view\default\tpl_cart.html" */ ?>
<?php /*%%SmartyHeaderCode:1399153c8c6aa84ae93-42184764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a63caf25ac3275ab498a4297c78a200e42a7850' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\view\\default\\tpl_cart.html',
      1 => 1405668159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399153c8c6aa84ae93-42184764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c8c6aa8d8a15_99864305',
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8c6aa8d8a15_99864305')) {function content_53c8c6aa8d8a15_99864305($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MEILIMZ">
    <link rel="shortcut icon" href="">
    <title>美丽聚慧 - 内部版本开发中build20140701</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/reset.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/global.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/cart.css">
    <!-- jS -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.min.js"></script>
    <script>
        
            $(function() {
                $("[data-toggle='tooltip']").tooltip();
            });
        
        </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- header.html start  -->
    <?php echo $_smarty_tpl->getSubTemplate ("tpl_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- header.html end -->
    <div class="ML-p ML-cart" style="background: #eee7e1;">
        <div class="container">
            <br>
            <p>
                <small>
                    <span class="glyphicon glyphicon-volume-up ML-primarycolor"></span>
                </small>
                <span>
                    请在
                    <span class="send-time ML-primarycolor">07分01秒</span>
                    内提交订单，并在下单后
                    <span class="ML-primarycolor">20</span>
                    分钟内完成支付。
                </span>
                <span data-toggle="tooltip" title="由于商品库存有限，我们只能暂为您最多保存20分钟，20分钟后购物车将被清空，请尽快结算订单。" data-original-title="Default tooltip" data-placement="right">
                    <small>
                        <span class="glyphicon glyphicon-info-sign ML-primarycolor"></span>
                    </small>
                </span>
            </p>
            <p>
                <span class="small ML-primarycolor ML-cart-free">聚慧发货商品满2件或299元包邮,新用户首单全场满39元包邮</span>
            </p>
            <div class="ML-cart-goods">
                <table class="table">
                    <tr>
                        <th>产品</th>
                        <th>数量</th>
                        <th>价格</th>
                        <th>小计</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                        <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['shop_price']);?>
</td>
                        <td>￥<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['v']->value['shop_price']*$_smarty_tpl->tpl_vars['v']->value['goods_number']));?>
</td>
                        <td>删除</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br></div>
  <?php echo $_smarty_tpl->getSubTemplate ("tpl_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
