<?php /* Smarty version Smarty-3.1.16, created on 2014-01-06 11:38:45
         compiled from "E:\apache\www\my\view\default\user_vipmsg.mad" */ ?>
<?php /*%%SmartyHeaderCode:2088152c3c4d0bb33b0-77791380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8d1507ccebf3402327a5a58c9fd7449281c168' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user_vipmsg.mad',
      1 => 1388979290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088152c3c4d0bb33b0-77791380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c3c4d0bb4475_06602962',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c3c4d0bb4475_06602962')) {function content_52c3c4d0bb4475_06602962($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/ZeroClipboard.js'></script>\
<script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/spreader.js'></script>
<div class="wid" id="main">
	<div class='spreader'>
        <h3>
            推广赚积份下载海量资源：
            <span style="color:#ff0000; font-weight:100">(已推荐0人)</span>
            &nbsp;&nbsp;
            <a style="font-weight:100" href="javascript:void(0);" onclick="edits('myuser.php')"> <u>查看我所推广的会员</u>
            </a>
        </h3>
        <p class="hiinput">
            <input type="text" id="copy" data="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
/user.php?act=register&spreader=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
            <input class='hi-btn' type="button" id='a-link' value='获取代码' >
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
</div>
<?php }} ?>
