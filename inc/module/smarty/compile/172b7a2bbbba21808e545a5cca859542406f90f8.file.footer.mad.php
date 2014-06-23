<?php /* Smarty version Smarty-3.1.16, created on 2014-04-28 10:03:46
         compiled from "E:\apache\www\my\view\default\footer.mad" */ ?>
<?php /*%%SmartyHeaderCode:2253352c3c13dcc8545-59101643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172b7a2bbbba21808e545a5cca859542406f90f8' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\footer.mad',
      1 => 1398650622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2253352c3c13dcc8545-59101643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c3c13dcca1a2_84470978',
  'variables' => 
  array (
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c3c13dcca1a2_84470978')) {function content_52c3c13dcca1a2_84470978($_smarty_tpl) {?><footer>

       <section class="user-nav">
            <section class="wrap">
                <ul class="ul-3">
                <?php if ($_smarty_tpl->tpl_vars['u']->value!='') {?>
                   <li class="first"><span><a href="user.php"><?php echo $_smarty_tpl->tpl_vars['u']->value['user_name'];?>
</a></span><span>|</span><span><a href="user.php?act=loginout">退出</a></span></li>
                    <li class="last"><span><a href="#">TOP</a></span></li>
                <?php } else { ?>
                    <li class="first"><span><a href="user.php">登录</a></span><span>|</span><span><a href="user.php?act=register">注册</a></span></li>
                    <li class="last"><span><a href="#">TOP</a></span></li>
                <?php }?>
                </ul>
            </section>
        </section>




        <section class="index-nav">
            <a href="index.php">首页</a>
            <a href="user.php">用户中心</a>
            <a href="category.php">全部分类</a>
            <a href="cart.php">购物车</a>
        </section>
        <section class="wrap copy-right">
            <p>客服热线: 400-080-1778 邮箱: 888@97dfsc.com</p>
        </section>
    </footer>
<?php }} ?>
