<?php /* Smarty version Smarty-3.1.16, created on 2014-05-16 09:24:52
         compiled from "E:\apache\www\my\view\default\flow.mad" */ ?>
<?php /*%%SmartyHeaderCode:9000534b9749240c92-08217247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7d79a6fb50e9761ebcee2339d18f218be786f20' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\flow.mad',
      1 => 1400203489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9000534b9749240c92-08217247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b974937e399_04166823',
  'variables' => 
  array (
    'vp' => 0,
    'goods_amount' => 0,
    'shipping_fee' => 0,
    'integral' => 0,
    'user' => 0,
    'consignee' => 0,
    'addrstr' => 0,
    'shippings' => 0,
    'v' => 0,
    'goods_amount_floor' => 0,
    'carts' => 0,
    'match' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b974937e399_04166823')) {function content_534b974937e399_04166823($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>商品结算</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>

  <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <form action="flow.php?act=done" method="POST">
     <section class="order-info">
      <article class="dl-list">
          <dl>
              <dt><span class="red">付款方式:支付宝</span></dt>
              <dd>商品金额：￥<span id="goods_amount"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['goods_amount']->value);?>
</span></dd>
              <dd>运费：+ ￥<span id="shipping_fee"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['shipping_fee']->value);?>
</span></dd>
              <?php if ($_smarty_tpl->tpl_vars['integral']->value!=0) {?>
              <dd>代金券：- ￥<span id="use_integral">0.00</span></dd>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['user']->value['cash_point']!=0) {?>
              <dd>金币：- ￥<span id="use_cash_point">0.00</span></dd>
              <?php }?>
              <dd>应支付金额：￥<span class="red" id="all_amount"><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['goods_amount']->value+$_smarty_tpl->tpl_vars['shipping_fee']->value));?>
</span></dd>
          </dl>
          <dl>
          <a href="flow.php?act=consignee">
              <dt><span class="red">收货人信息</span></dt>
              <dd>收货人：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['consignee']->value['consignee'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
              <dd>手机：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['consignee']->value['mobile'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
              <dd>地址：[<?php echo $_smarty_tpl->tpl_vars['addrstr']->value;?>
]<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['consignee']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
 </dd>
              <input type="hidden" name="address_id" value="<?php echo $_smarty_tpl->tpl_vars['consignee']->value['address_id'];?>
">
              </a>
          </dl>
          <dl>
              <dt><span class="red">配送信息</span></dt>

              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shippings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
              <dd>配送方式：<input id="checkbox-radio-option-two" type="radio" name="shipping" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['shipping_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['shipping_name'];?>
 +<span class="red"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['shipping_fee']);?>
</span></dd>
              <?php } ?>
              <dd>送货时间：工作日、双休日与假日均可送货</dd>
              <dd>商城优惠：满300免运费 (<span  class="small red">特价商品除外</span>)</dd>
          </dl>

          <dl>
              <dt><span class="red">其它信息</span></dt>


                            <dd>
                              账户中代金券：
                              <span class="gray" id="pay_point"><?php echo $_smarty_tpl->tpl_vars['user']->value['pay_points'];?>
</span>
                              本订单可使用代金券：
                              <span class="red" id="integral"><?php echo $_smarty_tpl->tpl_vars['integral']->value;?>
</span>
                            </dd>
                            <dd>
                              账户中金币数：
                              <span class="gray" id="user_pcash_point"><?php echo $_smarty_tpl->tpl_vars['user']->value['cash_point'];?>
</span>
                              本订单可使用金币数：
                              <span class="red" id="cash_point"><?php echo $_smarty_tpl->tpl_vars['goods_amount_floor']->value;?>
</span>
                            </dd>
              <dd class="pure-form pure-form-aligned">
                          <fieldset>
                          <?php if ($_smarty_tpl->tpl_vars['integral']->value!=0) {?>
                            <div class="pure-control-group">
                              <label for="show_integral">使用代金券</label>
                              <input class="pure-input-2-3" id="show_integral" name="show_integral" type="text" value="0"></div>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['user']->value['cash_point']!=0) {?>
                            <div class="pure-control-group">
                              <label for="show_cash_point">使用金币</label>
                              <input class="pure-input-2-3" id="show_cash_point" name="show_cash_point" type="text" value="0"></div>
                         <?php }?>

                          </fieldset>
              </dd>

          </dl>

      </article>
     </section>


     <section class="goods-list">

         <ul class="ul-4">
         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
              <li>
                 <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</p>

                 <p class="price red">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['v']->value['goods_price']);?>
 <span class="small gray">x <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</span>
                    <?php echo IsPormotion(array('goods_name'=>$_smarty_tpl->tpl_vars['v']->value['goods_name']),$_smarty_tpl);?>

                    <?php if ($_smarty_tpl->tpl_vars['match']->value) {?>
                    <span class="small red"> [特价]</span>
                    <?php }?>
                 </p>
                   <p> <span class="small gray"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_attr'];?>
</span>
                   </p>
             </li>
          <?php } ?>
         </ul>
     </section>
      <section class="form">
          <div class="center"><button type="submit" class="pure-button pure-button-primary w-100">提交订单</button></div>
      </section>
</form>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/flow.js"></script>
</body>
</html><?php }} ?>
