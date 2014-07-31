<?php /* Smarty version Smarty-3.1.16, created on 2014-07-30 11:16:25
         compiled from "E:\apache\www\temp\d\view\default\tpl_header.html" */ ?>
<?php /*%%SmartyHeaderCode:1447353c881a343e3d2-76227656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a5be44b247e82b4c2e1ea771b0567643c0d46b' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\view\\default\\tpl_header.html',
      1 => 1406690183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1447353c881a343e3d2-76227656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c881a3449905_86938665',
  'variables' => 
  array (
    'vp' => 0,
    'navs' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c881a3449905_86938665')) {function content_53c881a3449905_86938665($_smarty_tpl) {?><header class="ML-jumbotron ML-jumbotron-top">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ML-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="/<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/nav_logo.jpg" alt=""></a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="ML-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><strong>限时特卖</strong></a></li>
              <!--
                <li><a href="#"><strong>美妆商城</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>美妆口碑</strong> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" id="ML-navbar-collapse-2">
                    <li><a href="#">美妆大全</a></li>
                    <li><a href="#">Free 派</a></li>
                    <li><a href="#">我的闺蜜</a></li>
                    <li class="divider"></li>
                    <li><a href="#">口碑SHOW</a></li>               
                  </ul>
                </li>
                <li><a href="#"><strong>手机聚慧</strong></a></li>

                -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>正品保证</strong> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" id="ML-navbar-collapse-3">
                    <li><a href="#">真品联盟</a></li>
                    <li><a href="#">正品鉴定</a></li>
                    <li><a href="#">常见问题</a></li>
                    <li class="divider"></li>
                    <li><a href="#">退货政策</a></li>                
                    <li><a href="#">帮助中心</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><small>登录</small></a></li>
                <li><a href="#"><small>注册</small></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><small>我的聚慧</small> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu" id="ML-navbar-collapse-4">
                    <li><a href="#">我的订单</a></li>                
                    <li><a href="#">我的留言</a></li>
                    <li><a href="#">我的代金券</a></li>
                    <li class="divider"></li>
                    <li><a href="#">我的个人中心</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>

<div class="container ML-header">
    <div class="row">
        <div class="col-md-6 ML-header-logo">
           <a href="./tpl_index.html"><img class="img-responsive" src="/<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.gif" alt="logo" style="max-width:360px;"></a>
        </div>
        <div class="col-md-6 ML-header-cart">            
            <ul class="nav nav-pills nav-stacked">
                <li class="active">
                    <button class="btn btn-danger pull-right" type="button">去购物车结算 <span class="badge">190</span></button>
                    <img class="img-responsive" src="/<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo_corn_r.png" alt="logo_corn_r loading" style="max-width:370px;">
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="ML-jumbotron ML-jumbotron-000">
    <div class="container">
        <nav class="navbar" role="navigation">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">特卖精选</a></li>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['nav_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_blank']) {?> target="_blank" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['nav_name'];?>
</a></li>
                <?php } ?>
            </ul>
        </nav>        
    </div>    
</div><?php }} ?>
