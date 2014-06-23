<?php /* Smarty version Smarty-3.1.16, created on 2014-05-14 17:36:07
         compiled from "E:\apache\www\my\view\default\add_address.mad" */ ?>
<?php /*%%SmartyHeaderCode:15594533a7e0729eb93-34872636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8199f7d03782d8790a35b9e565045567619765f3' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\add_address.mad',
      1 => 1399625925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15594533a7e0729eb93-34872636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533a7e07309ac1_00108073',
  'variables' => 
  array (
    'vp' => 0,
    'province' => 0,
    'v' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533a7e07309ac1_00108073')) {function content_533a7e07309ac1_00108073($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <title>收货地址管理</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/sytle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/plugins/font-awesome-4.0.3/css/font-awesome.min.css">
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


     <section class="address">
         <p class="add" ><a class="red-dark" href="javascript:;" onclick="CanSubmit();"><i class="fa fa-check-circle-o black"></i> 确认保存</a></p>
     </section>


      <section class="address-edit">

        <form id="a_form" method="post" action="post.php?act=add_address" class="pure-form pure-form-aligned form">
           <ul class="ul-edit">
               <li class="first">收货人 :</li>
               <li class="last"><input id="name" name='name' type="text" placeholder="收货人"></li>
           </ul>
              <ul class="ul-edit">
               <li class="first">手机 :</li>
               <li class="last"><input id="phone" name='phone' type="text" placeholder="手机号码"></li>
           </ul>
              <ul class="ul-edit">
               <li class="first">省份 :</li>
               <li class="last">
               <select name="province" id="province" onchange="ChangeProvince(this);">
                <option value="0">请选择</option>
               <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                   <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['region_name'];?>
</option>
                <?php } ?>
               </select>
               </li>
           </ul>
               <ul class="ul-edit">
               <li class="first">城市 :</li>
               <li class="last">
                   <select name="city" id="city" onchange="ChangeCity(this);">
                    <option value="0">请选择</option>
               </select>
               </li>
           </ul>
               <ul class="ul-edit">
               <li class="first">地区 :</li>
               <li class="last">
               <select name="district" id="district">
                <option value="0">请选择</option>

               </select>
               </li>
           </ul>

           <ul class="ul-edit">
               <li class="first">详细地址 :</li>
               <li class="last"><textarea id='address' name="address"></textarea></li>
           </ul>
        <input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">
        </form>


      </section>

      <section class="form">
          <div class="center red" id="msg"></div>
          <div class="center"><button type="submit" onclick="CanSubmit();" class="pure-button pure-button-primary w-100">确认保存</button></div>
      </section>






   <?php echo $_smarty_tpl->getSubTemplate ("footer.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/address.js"></script>
</body>
</html><?php }} ?>
