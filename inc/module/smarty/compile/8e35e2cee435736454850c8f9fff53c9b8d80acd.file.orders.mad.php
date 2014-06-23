<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 09:41:57
         compiled from "E:\apache\www\my\view\default\orders.mad" */ ?>
<?php /*%%SmartyHeaderCode:11564532b8c647a6608-18713366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e35e2cee435736454850c8f9fff53c9b8d80acd' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\orders.mad',
      1 => 1399626041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11564532b8c647a6608-18713366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532b8c647f8264_11644441',
  'variables' => 
  array (
    'vp' => 0,
    'lt' => 0,
    'count' => 0,
    'orders' => 0,
    'v' => 0,
    'goods_pic' => 0,
    'more' => 0,
    'pre' => 0,
    'last' => 0,
    'foo' => 0,
    'now' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532b8c647f8264_11644441')) {function content_532b8c647f8264_11644441($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>我的订单</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
  <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/index.js"></script>
</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


   <section class="orders-nav">
       <ul class="month">
           <li <?php if ($_smarty_tpl->tpl_vars['lt']->value!="more") {?> class="active" <?php }?>><a href="user.php?act=orders&lt=lt">近一个月订单<?php if ($_smarty_tpl->tpl_vars['lt']->value!="more") {?>(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)<?php }?></a></li>
           <li <?php if ($_smarty_tpl->tpl_vars['lt']->value=="more") {?> class="active" <?php }?> ><a href="user.php?act=orders&lt=more">一个月前订单<?php if ($_smarty_tpl->tpl_vars['lt']->value=="more") {?>(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)<?php }?></a></li>
       </ul>
   </section>

 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>


    <section class="orders-list">
        <a href="user.php?act=order_info&order_sn=<?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
">
        <ul class="list">
         <p><span class="fz-16 ml-15">订单编号：<?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</span></p>
         <?php echo GetOrderPic(array('order_id'=>$_smarty_tpl->tpl_vars['v']->value['order_id']),$_smarty_tpl);?>

            <li>
                <dl class="ml-30">

                    <dt><img src="http://97dfsc.com/<?php echo $_smarty_tpl->tpl_vars['goods_pic']->value['goods_thumb'];?>
" alt="商品"></dt>
                    <dd>订单金额：<span class="red">￥<?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['v']->value['goods_amount']+$_smarty_tpl->tpl_vars['v']->value['shipping_fee']-$_smarty_tpl->tpl_vars['v']->value['show_integral']-$_smarty_tpl->tpl_vars['v']->value['show_cash_point']));?>
</span></dd>
                     <dd>订单状态：<span class="red"><?php if ($_smarty_tpl->tpl_vars['v']->value['order_status']==2) {?>已取消
                    <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['pay_status']==0) {?>
                    待付款
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['pay_status']==1) {?>
                    付款中
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['shipping_status']==0) {?>
                        待发货
                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['shipping_status']==1) {?>
                        已发货
                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['shipping_status']==2) {?>
                        已收货
                        <?php } else { ?>
                        退货
                        <?php }?>

                    <?php }?>

                    <?php }?>



                    </span>



                    </dd>
                      <dd>下单时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</dd>
                </dl>
            </li>
        </ul>
        </a>
    </section>
<?php } ?>

  <?php if ($_smarty_tpl->tpl_vars['more']->value==1) {?>
    </section>

      <section class="pagetool">
          <a class="pre" href="user.php?act=orders&lt=<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
&pageNow=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
">上一页</a>
              <select class="select" name="select" onchange="ChangeLoad(this);" id="">
              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['last']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['last']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                 <option value="user.php?act=orders&lt=<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</option>
              <?php }} ?>
              </select>
           <a class="next" href="user.php?act=orders&lt=<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
&pageNow=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">下一页</a>
           <a href="#" id="hidden-a"></a>
      </section>
  <?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



</body>
</html><?php }} ?>
