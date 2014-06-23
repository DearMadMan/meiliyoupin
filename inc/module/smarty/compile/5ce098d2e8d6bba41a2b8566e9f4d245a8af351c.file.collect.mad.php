<?php /* Smarty version Smarty-3.1.16, created on 2014-05-10 09:45:27
         compiled from "E:\apache\www\my\view\default\collect.mad" */ ?>
<?php /*%%SmartyHeaderCode:18490533e03c44a0d59-69834334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce098d2e8d6bba41a2b8566e9f4d245a8af351c' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\collect.mad',
      1 => 1399686323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18490533e03c44a0d59-69834334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533e03c44f9cc1_34423068',
  'variables' => 
  array (
    'vp' => 0,
    'collects' => 0,
    'v' => 0,
    'has' => 0,
    'goods' => 0,
    'more' => 0,
    'lt' => 0,
    'pre' => 0,
    'last' => 0,
    'foo' => 0,
    'now' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e03c44f9cc1_34423068')) {function content_533e03c44f9cc1_34423068($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>收藏管理</title>
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

<div id="dialog" class="dialog">#############</div>
   <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <?php echo GetGoodsInfo(array('goods_id'=>$_smarty_tpl->tpl_vars['v']->value['goods_id']),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['has']->value) {?>
    <section class="collect-list">

        <ul id="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
" class="list">
            <li>
                <dl class="ml-30">

                    <dt><a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
"><img src="http://www.97dfsc.com/<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
"></a></dt>
                    <dd><a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
"><span class="strong"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</span></a></dd>
                    <dd><span class="shop-price">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['goods']->value['shop_price']);?>
</span> <span class="market-price gray">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['goods']->value['market_price']);?>
</span></dd>
                    <dd><a href="javascript:;" onclick="DeleteCollect('<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_id'];?>
');" class="cancel">取消收藏</a> <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
" class="add-cart">去购买</a></dd>
                </dl>
            </li>
        </ul>

    </section>
    <?php }?>

    <?php } ?>

     <?php if ($_smarty_tpl->tpl_vars['more']->value==1) {?>
    </section>

      <section class="pagetool">
          <a class="pre" href="user.php?act=collect&lt=<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
&pageNow=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
">上一页</a>
              <select class="select" name="select" onchange="ChangeLoad(this);" id="">
              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['last']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['last']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                 <option value="user.php?act=collect&lt=<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
&pageNow=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['now']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</option>
              <?php }} ?>
              </select>
           <a class="next" href="user.php?act=collect&lt=<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
&pageNow=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">下一页</a>
           <a href="#" id="hidden-a"></a>
      </section>
  <?php }?>




	<?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/collect.js"></script>


</body>
</html><?php }} ?>
