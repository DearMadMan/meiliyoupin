<?php /* Smarty version Smarty-3.1.16, created on 2014-01-08 13:30:38
         compiled from "E:\apache\www\my\view\default\user_body.mad" */ ?>
<?php /*%%SmartyHeaderCode:1975352c176968c5244-89064542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddad0dd008d89ab8813435652c2625cda1de8576' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user_body.mad',
      1 => 1389159036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1975352c176968c5244-89064542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c176968fe177_29576269',
  'variables' => 
  array (
    'vp' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c176968fe177_29576269')) {function content_52c176968fe177_29576269($_smarty_tpl) {?><div class="wids" style="background:#2566A0">
    <div class="wid" id="nav">

    </div>
</div>
<div class="wid" id="banner">
    <div id="user_left">
        <div id="user_top_1">
            <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/pho.png" />
            <h3>用户名：<?php echo $_smarty_tpl->tpl_vars['user']->value['nick_name'];?>
【GO】</h3>
            <p>邮箱:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
            <p>
                <a href="user.php?act=loginout">退出登陆</a>

            </p>
        </div>
        <div id="user_top_2">
            积分：
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value['credits'];?>
分</span>
            RMB：
            <span>￥<?php echo $_smarty_tpl->tpl_vars['user']->value['money'];?>
元</span>
        </div>
        <div id="user_top_3">
            <ul>
                <li>
                    <a href="user.php?act=userinfo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no1.png" />
                    </a>
                </li>
                <li>
                    <a href="佣金规则.doc">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no2.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=prepayment">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no3.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=encashment">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no4.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=vipmsg">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no9.png" />
                    </a>
                </li>
                 <li>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']!=2) {?>
                    <a href="goods.php?act=getvip">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no7.png" />
                    </a>
                    <?php } else { ?>

                    <?php }?>

                </li>
            </ul>
        </div>
    </div>
    <div id="user_right">
        <h3>
            推广赚积份下载海量资源：
            <span style="color:#ff0000; font-weight:100">(已推荐0人)</span>
            &nbsp;&nbsp;
            <a style="font-weight:100" href="javascript:void(0);" onclick="edits('myuser.php')"> <u>查看我所推广的会员</u>
            </a>
        </h3>
        <p class="hiinput">
            <input type="text" value="http://63.yingzh.com/" />
            <a  href="javascript:void(0);"> <b>获取代码</b></a>
        </p>
        <p class="hip">
            1、将您的专属推广连接发布至任何QQ群、博客、论坛、社区、软文、SNS、邮件中，只要有人通过您的连接来到本站您都将获得
            <span style="color:#ff0000; font-size:14px">1积分/人</span>
            。
        </p>
        <p class="hip">2、您所推广的人数满10人，您将免费升级为正式推广者，开始自动赚钱！</p>
        <p class="hip">3、有了积分您可以兑换本站相关资源，让您实现从月入1000至月入50000的飞跃！</p>
        <p class="hip">4、398元成为VIP即可共享网站所有资源，，598元即可拥有和本站一样的网站，并提供技术支持</p>

        <p></p>
    </div>
</div><?php }} ?>
