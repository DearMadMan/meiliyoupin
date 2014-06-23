<?php /* Smarty version Smarty-3.1.16, created on 2014-05-16 09:01:37
         compiled from "E:\apache\www\my\view\default\order_info.mad" */ ?>
<?php /*%%SmartyHeaderCode:21360532baeae795fb8-45999468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab28dbfec0f59ce71df48c53f517cc6c0930146e' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\order_info.mad',
      1 => 1400119407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21360532baeae795fb8-45999468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532baeae86c623_32758116',
  'variables' => 
  array (
    'vp' => 0,
    'order' => 0,
    'addrstr' => 0,
    'order_goods' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532baeae86c623_32758116')) {function content_532baeae86c623_32758116($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>订单详情</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">

</head>
<body>

  <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


     <section class="order-info">
      <article class="dl-list">
          <dl>
              <dt><span class="red">付款方式:<?php echo $_smarty_tpl->tpl_vars['order']->value['pay_name'];?>
</span></dt>
              <dd>商品金额：￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['order']->value['goods_amount']);?>
</dd>
              <dd>运费：+￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['order']->value['shipping_fee']);?>
</dd>
         <?php if ($_smarty_tpl->tpl_vars['order']->value['show_integral']!=0) {?>
              <dd>代金券：-￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['order']->value['show_integral']);?>
</dd>
         <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['order']->value['show_cash_point']!=0) {?>
              <dd>金币：-￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['order']->value['show_cash_point']);?>
</dd>
         <?php }?>
              <dd>应支付金额：￥<?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['order']->value['goods_amount']+$_smarty_tpl->tpl_vars['order']->value['shipping_fee']-$_smarty_tpl->tpl_vars['order']->value['show_integral']-$_smarty_tpl->tpl_vars['order']->value['show_cash_point']));?>
</dd>
          </dl>
          <dl>
              <dt><span class="red">收货人信息</span></dt>
              <dd>收货人：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['consignee'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
              <dd>手机：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['mobile'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
              <dd>地址：<?php echo $_smarty_tpl->tpl_vars['addrstr']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
          </dl>
          <dl>
              <dt><span class="red">配送信息</span></dt>
              <dd>配送方式：快递送货上门</dd>
              <dd>送货时间：工作日、双休日与假日均可送货</dd>
          </dl>
      </article>
     </section>


     <section class="goods-list">
      <?php echo GetOrderGoods(array('order_id'=>$_smarty_tpl->tpl_vars['order']->value['order_id']),$_smarty_tpl);?>

         <ul class="ul-4">
         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <li>
                 <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</p>
                 <p class="price red">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['goods_price']);?>
 <span class="small gray">x <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</span></p>
                 <p> <span class="small gray"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_attr'];?>
</span></p>
             </li>
          <?php } ?>
         </ul>
     </section>
<?php if ($_smarty_tpl->tpl_vars['order']->value['pay_status']==0&&$_smarty_tpl->tpl_vars['order']->value['order_status']==0) {?>
      <section class="form">

          <div class="center"><button type="submit" class="pure-button pure-button-primary w-100">去支付</button></div>
      </section>

      <form method="POST" action="plugin/alipay/alipayapi.php">
         <input type="hidden" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_sn'];?>
" />
           <input type="hidden" name="WIDtotal_fee" value="<?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['order']->value['order_amount']);?>
" />
      </form>
<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/order_info.js"></script>

</body>
</html><?php }} ?>
