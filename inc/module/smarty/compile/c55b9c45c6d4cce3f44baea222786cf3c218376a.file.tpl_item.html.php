<?php /* Smarty version Smarty-3.1.16, created on 2014-07-30 10:57:32
         compiled from "E:\apache\www\temp\d\view\default\tpl_item.html" */ ?>
<?php /*%%SmartyHeaderCode:2692053c87f6bd23032-33866421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c55b9c45c6d4cce3f44baea222786cf3c218376a' => 
    array (
      0 => 'E:\\apache\\www\\temp\\d\\view\\default\\tpl_item.html',
      1 => 1406689047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2692053c87f6bd23032-33866421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c87f6bf0a270_48411978',
  'variables' => 
  array (
    'vp' => 0,
    'goods' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c87f6bf0a270_48411978')) {function content_53c87f6bf0a270_48411978($_smarty_tpl) {?><!DOCTYPE html>
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
/css/item.css"> 
    <!-- jS -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/stickUp.min.js"></script>

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

<div class="ML-p ML-item">
    <div class="container">        
        <ol class="breadcrumb">
          <li><a href="/index.html">聚慧首页</a></li>
          <li><a href="#">Royal霜系列</a></li>
          <li class="active"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</li>
        </ol>
        <div class="row ML-item-header ML-bg-fff">
            <div class="col-md-9">
                <p><span class="ML-price ML-fontsize">今日特卖</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['goods_brief'], ENT_QUOTES, 'UTF-8', true);?>

                </p>
            </div>
            <div class="col-md-3 text-center">
                    <p><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/item-logo-01.jpg" alt=""></p>
            </div>
        </div>        
        <div class="row ML-bg-fff">
            <br>
            <div class="col-md-9 text-center">
                <p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
">
                </p>
            </div>
            <div class="col-md-3 ML-bg-1a ML-item-buy"> 
                <div class="ML-item-priceinfo">
                    <p><small>&yen;</small> <span class="ML-item-price"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['goods']->value['shop_price']);?>
</span> <a href="cart.php?act=add&id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
" class="btn btn-warning">抢 购</a></p>
                </div>
                <div class="ML-item-buy-detail">
                    <div class="row">
                        <div class="col-md-4">
                            <span>折合价 <abbr title="中小样市场价按对应正装容量及价格折算">&#63;</abbr></span><br>
                            &yen; <?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['goods']->value['market_price']);?>

                        </div>
                        <div class="col-md-4">
                            <span>折扣</span><br><?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['discount']->value);?>
折
                        </div>
                        <div class="col-md-4">
                            <span>你节省</span><br><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['goods']->value['market_price']-$_smarty_tpl->tpl_vars['goods']->value['shop_price']));?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 text-center"><span class="glyphicon glyphicon-time"></span></div>
                        <div class="col-md-10">
                            <span>距特卖结束</span><br>
                            <span class="leavetime">05 15:41:35.10</span>
                        </div>
                    </div>
                     <hr>
                    
                        <div class="pull-left">                            
                            <div class="pull-left ML-item-buy-cron1">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/item-online.gif" alt="">
                            </div>
                            <div class="pull-left">
                                <p>5621<small>人<br>已经购买</small></p>
                            </div>                            
                        </div>
                        <div class="pull-right">
                            <div class="pull-left ML-item-buy-cron1">
                                <span class="glyphicon glyphicon-heart"></span>
                            </div>
                            <div class="pull-left">
                                <p><small>30天拆封<br>无条件退货</small></p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="ML-item-buygroup">
                <div class="ML-item-buygroup-title">
                    <span>大家经常这样购买</span>
                </div>
                <div class="row ML-item-buygroup-goods text-center">
                    <div class="col-md-9">
                        <div class="col-md-2"><img src="" alt="">01</div>
                        <div class="col-md-1"><img src="" alt="">02</div>
                        <div class="col-md-2"><img src="" alt="">03</div>
                        <div class="col-md-1"><img src="" alt="">04</div>
                        <div class="col-md-2"><img src="" alt="">05</div>
                        <div class="col-md-1"><img src="" alt="">06</div>
                        <div class="col-md-2"><img src="" alt="">07</div>
                        <div class="col-md-1"><img src="" alt="">08</div>
                    </div>
                    <div class="col-md-3">
                        123
                    </div>
                </div>
            </div>       
        </div><!--/主图区域结束-->        
    </div>
    <br>
    
    <script type="text/javascript">
              //initiating jQuery  
              jQuery(function($) {
                $(document).ready( function() {
                  //为 '.navbar-wrapper' class 启用stickUp插件
                  $('.navbar-wrapper').stickUp({
                              parts: {
                                  0:'main-c1',
                                  1:'main-c2',
                                  2: 'main-c3',
                                  3: 'main-c4',
                                  4: 'main-c5'                                  
                                },
                                itemClass: 'liItem',
                                itemHover: 'active'
                              });
                });
              });
    </script>
    
    <div class="container ML-item-main">
        <div class="row">
            <div class="col-md-9">
                <div class="ML-item-main-title navbar-wrapper">
                    <ul class="list-inline pull-left">
                        <li class="liItem"><a href="#main-c1">商品参数</a></li>
                        <li class="liItem"><a href="#main-c2">本单详情</a></li>
                        <li class="liItem"><a href="#main-c3">商品实拍</a></li>
                        <li class="liItem"><a href="#main-c4">用户口碑</a></li>
                        <li class="liItem"><a href="#main-c5">聚慧优势</a></li>
                    </ul>
                    <ul class="list-inline pull-right">
                        <li><small>&yen;</small><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['goods']->value['shop_price']);?>
</li>
                        <li><a href="cart.php?act=add&id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
" class="btn btn-sm btn-warning">抢 购</a></li>
                    </ul>                    
                </div>
                <div class="clearfix"></div>
                <div class="ML-item-main-body">
                    <p id="main-c1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, fugit aperiam atque libero debitis. Saepe, veniam, assumenda facere voluptatibus reprehenderit inventore est laudantium quisquam magni veritatis nesciunt et unde delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, error, quas odio laboriosam ipsum quaerat numquam nobis eligendi cupiditate sed quis labore blanditiis reprehenderit quidem natus. Autem quos at provident. ipsum dolor sit amet, consectetur adipisicing elit. Itaque, vero, quisquam, soluta doloremque officiis velit consectetur totam ex ad maxime ea dolore cumque quod natus dolorum adipisci omnis. Molestiae, asperiores.</p>
                    <div id="main-c2"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>
</div>
                    <p id="main-c3">Voluptatum, repudiandae, iste. Totam, alias quo reiciendis earum necessitatibus assumenda voluptatem quisquam vel tempora ut debitis explicabo sunt reprehenderit nostrum amet pariatur suscipit at dicta consequuntur optio ducimus numquam impedit.</p>
                    <p id="main-c4">Alias, excepturi, neque ex earum asperiores aperiam sint consectetur similique porro minima eligendi deleniti cupiditate vel recusandae ipsam aspernatur non omnis amet aliquam blanditiis architecto provident laudantium est impedit accusamus.</p>
                    <p id="main-c5">Quos, accusantium, ipsa quidem quisquam commodi impedit officia. Iusto, quaerat, velit, facere quae Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, velit, ullam, magni asperiores animi possimus temporibus incidunt aliquam minus iste ad accusamus similique tempora. Quo, commodi, quidem, enim doloremque unde officiis ducimus explicabo at eligendi culpa veritatis hic reiciendis consectetur dolores eius veniam tempore accusamus obcaecati est sapiente assumenda blanditiis repudiandae earum dolor dicta ut ex tenetur corrupti laborum facilis ullam asperiores pariatur eveniet. Autem, saepe, magni, placeat aperiam quisquam quidem nulla unde amet delectus dolore iusto corrupti repellendus voluptates debitis accusamus! Quibusdam, alias, modi, temporibus tenetur aut quasi nesciunt quae impedit et cupiditate totam reprehenderit reiciendis autem aliquid velit corporis dolore asperiores consectetur quidem expedita laborum qui veritatis nam quas ad sint nobis esse? Sed, tenetur, molestiae, quod eveniet maxime unde quos qui deserunt ipsam ratione exercitationem omnis velit incidunt debitis sapiente doloremque repellendus minima libero quisquam magnam eius quam odit perferendis aliquam quaerat officiis magni quo ipsa esse. Quidem, saepe, ab, aspernatur iure eius sapiente necessitatibus voluptas ut quas perferendis qui laudantium sunt commodi ipsum voluptate assumenda sint et delectus autem earum cumque quia harum odit minima laborum impedit placeat a esse omnis dolorum animi consequatur temporibus magnam ipsa maiores numquam dicta! Sint, necessitatibus, illum non distinctio quae animi maxime labore sequi nesciunt asperiores hic mollitia nihil neque aut dolores! Aliquid, velit, ex, perferendis asperiores nobis reiciendis quibusdam sunt pariatur odit doloremque tenetur enim dignissimos? Distinctio, labore, repellat expedita deserunt blanditiis accusantium accusamus nesciunt provident. Inventore, minima, itaque, laboriosam, omnis iusto at obcaecati adipisci repudiandae necessitatibus sequi similique reprehenderit sed magni culpa ducimus aperiam temporibus perferendis deserunt sapiente dolorum rem suscipit facilis delectus esse alias aut quisquam perspiciatis est veritatis facere aspernatur commodi amet libero mollitia nemo ex laudantium et odit natus corporis fuga doloremque? Vel, quibusdam, culpa nobis quis obcaecati a necessitatibus distinctio adipisci sunt asperiores odit eaque alias saepe perspiciatis similique laudantium explicabo itaque quam esse ipsa fugit assumenda perferendis ullam corporis repellendus earum corrupti deserunt reiciendis neque expedita suscipit nihil repellat atque optio illum non voluptas. Ad, quae dolor harum repellendus aliquam sit optio fuga delectus molestiae voluptatum similique esse sint est ab impedit aperiam praesentium beatae unde tempora corrupti nihil magnam at ipsa! Animi, suscipit, commodi, itaque eius hic amet similique id voluptas explicabo quibusdam odio fugit illum reprehenderit quod necessitatibus corrupti non autem ipsum est totam. Culpa, minus deleniti adipisci consequatur iste fugiat atque impedit ad alias minima. Doloremque, accusantium, voluptas, ipsam, dolor asperiores nesciunt sunt reiciendis officia mollitia possimus blanditiis laudantium minima quis dignissimos labore commodi ratione reprehenderit at rerum deserunt tenetur atque iure id nobis unde dolorum harum aliquam repellendus voluptatum ipsa amet vero fugiat eum a assumenda maiores sed est debitis numquam molestias et perspiciatis quibusdam culpa quos non tempore. Ad, eum, praesentium nihil aspernatur sint nisi ab in dicta eaque cumque quos eos. Veniam, fugiat, natus qui eos at facere beatae. Odio, saepe modi doloremque quia ipsam. Atque, illum, nemo ipsam impedit commodi id nihil quam temporibus perspiciatis libero. Error, atque expedita ab laudantium magni ipsam facere cumque omnis aspernatur tenetur quas possimus quisquam. Corporis, asperiores, veritatis praesentium fugit eveniet magnam dolorem ea doloremque libero sit soluta atque numquam ex temporibus minus adipisci perspiciatis in explicabo dicta dolor consequuntur reiciendis animi totam impedit suscipit officia cumque repudiandae dolorum a sunt harum delectus odio repellendus quae beatae nihil ut. Tempora, vel, accusantium quas earum neque doloremque quam non minima voluptatibus modi sunt deserunt. Esse, excepturi reiciendis dolorem fugit saepe consequatur sit ipsum quam necessitatibus eum. Consectetur, magnam est quae suscipit perspiciatis iste quisquam porro rerum accusamus hic repellat culpa sunt natus officia id sed inventore itaque veritatis quasi atque. Fugiat, corrupti dignissimos optio possimus dolor cum sit eius. Rerum, expedita, doloremque itaque optio esse tenetur illo quisquam labore neque excepturi reiciendis deleniti harum ex. Quod, quos, hic enim esse error deleniti est ab soluta aut tempora odit voluptatibus provident molestias dolorum numquam quidem explicabo nulla inventore cum commodi! Deserunt, repellat, porro similique ex quasi rem ipsum pariatur a repudiandae temporibus culpa provident molestiae voluptas nulla recusandae possimus aliquam libero harum? Perspiciatis, culpa, provident quisquam atque minima architecto repudiandae alias illum qui possimus ab quia eaque neque nobis quo totam asperiores harum eos aut delectus beatae voluptatum nesciunt reiciendis est quaerat quis rem suscipit laborum tenetur itaque quod quam voluptatem earum dolorem eligendi officiis recusandae? Animi, est odit iusto qui? Expedita, omnis, minus excepturi ab consequatur eos doloribus corporis corrupti repellat ducimus ipsa beatae non reprehenderit illo voluptates numquam in facere pariatur possimus soluta culpa reiciendis rerum dignissimos alias dolorum. Blanditiis, neque, voluptate, aut sunt inventore amet hic non quas obcaecati beatae magni provident iste a excepturi expedita. Architecto, quas, quia vero qui adipisci cupiditate quasi odit omnis dolor aspernatur nobis ad debitis rem neque amet id maiores nemo veritatis reiciendis iure at sequi temporibus porro nihil consectetur? Corrupti, sequi, ad, voluptatem, ipsa deserunt commodi quasi accusamus ducimus non consequuntur repellendus tempore aperiam est voluptatum reprehenderit. Animi, possimus, nesciunt recusandae necessitatibus cumque quos officia corporis eveniet obcaecati mollitia suscipit fuga aliquam? Praesentium, facere eos ratione dolore quam quia modi voluptatem nesciunt veniam distinctio. Maiores, perspiciatis consectetur mollitia nobis aspernatur illo vitae dolores molestiae architecto facere tempore alias dicta placeat recusandae quaerat voluptatibus est similique commodi cupiditate doloremque voluptatem quas veniam a blanditiis atque soluta beatae. Atque, fuga, recusandae, minima saepe est quis nisi doloremque eveniet sunt ipsa quibusdam repudiandae eius laboriosam ad nostrum provident earum veniam sit accusamus aspernatur asperiores ipsum incidunt obcaecati distinctio adipisci numquam fugit consequatur corporis autem dolor beatae rem dicta porro cumque tempore at libero nesciunt nam explicabo modi cupiditate quam! Sint, animi minima ea autem voluptatem eligendi nesciunt rerum officiis repudiandae suscipit. Sapiente, minima impedit perferendis a distinctio omnis id voluptas quaerat culpa voluptates harum saepe fuga voluptatibus aliquam dignissimos itaque qui provident doloremque molestiae unde? Neque, at, vero tempore quas ullam quia animi impedit voluptatibus quam praesentium veritatis asperiores eveniet a ex est consectetur voluptatum voluptate sunt explicabo aspernatur temporibus fugit corrupti quasi. Quaerat, nostrum nam sed ipsum at possimus rerum. Optio, reprehenderit hic nesciunt. quod tenetur nihil ratione animi alias nulla reprehenderit distinctio nostrum ipsam. Autem numquam veniam odit rerum quae.</p>
                    <br>
                    
                    
                </div>
            </div>
            <div class="col-md-3 ML-item-main-nav">
                <div class="main-n1">
                    <ul class="list-inline ML-item-main-title">
                        <li>聚慧承诺</li>
                    </ul>
                    <p>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <br>
                                <small>正品保证</small>
                            </div>
                            <div class="col-md-6">
                                <span class="glyphicon glyphicon-lock"></span>
                                <br>
                                <small>商品质量保险</small>
                            </div>
                        </div>
                    </p>                    
                    <p>                        
                            <div class="row text-center">
                            <div class="col-md-6">
                                <span class="glyphicon glyphicon-retweet"></span>
                                <br>
                                <small>15天无条件退货</small>
                            </div>
                            <div class="col-md-6">
                                <span class="glyphicon glyphicon-send"></span>
                                <br>
                                <small>满包邮</small>
                            </div>
                        </div>
                    </p>                    
                </div><!--/main-n1-->
                <br>
                <div class="main-n2">
                    <ul class="list-inline ML-item-main-title">
                        <li>产品功效</li>
                    </ul>
                    <p class="main-code">
                        <code><a href="">保湿</a></code>
                        <code><a href="">美白</a></code>
                        <code><a href="">滋润</a></code>
                        <code><a href="">柔肤</a></code>
                    </p>
                </div><!--/main-n2-->
                <br>
                <div class="main-n3">
                    <ul class="list-inline ML-item-main-title">
                        <li>同款推荐</li>
                    </ul>
                    <div class="main-n3-logo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/item-logo-01.jpg" alt="" class="img-responsive">
                    </div>                  
                    
                    <div class="row main-product">                            
                        <div class="col-md-3">
                           <a href="" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/60x60.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <p><a href="">Lorem ipsum dolor sit amet dolor sit amet.</a></p>
                            <p><span>&yen; 49.9 <small>(2.8折)</small></span></p>
                        </div>
                    </div>
                    <div class="row main-product">                            
                        <div class="col-md-3">
                           <a href="" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/60x60.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <p><a href="">Lorem ipsum dolor sit amet dolor sit amet.</a></p>
                            <p><span>&yen; 49.9 <small>(2.8折)</small></span></p>
                        </div>
                    </div>
                    <div class="row main-product">                            
                        <div class="col-md-3">
                           <a href="" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/60x60.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <p><a href="">Lorem ipsum dolor sit amet dolor sit amet.</a></p>
                            <p><span>&yen; 49.9 <small>(2.8折)</small></span></p>
                        </div>
                    </div>
                    <div class="row main-product">                            
                        <div class="col-md-3">
                           <a href="" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/60x60.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <p><a href="">Lorem ipsum dolor sit amet dolor sit amet.</a></p>
                            <p><span>&yen; 49.9 <small>(2.8折)</small></span></p>
                        </div>
                    </div>
                    <div class="row main-product">                            
                        <div class="col-md-3">
                           <a href="" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/60x60.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <p><a href="">Lorem ipsum dolor sit amet dolor sit amet.</a></p>
                            <p><span>&yen; 49.9 <small>(2.8折)</small></span></p>
                        </div>
                    </div>
                    <div class="row main-product">                            
                        <div class="col-md-3">
                           <a href="" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/60x60.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <p><a href="">Lorem ipsum dolor sit amet dolor sit amet.</a></p>
                            <p><span>&yen; 49.9 <small>(2.8折)</small></span></p>
                        </div>
                    </div><!--main-product-->
                </div><!--/main-n3-->
                <br>
                <div class="ML-service">
                        <ul class="list-group">
                          <li class="list-group-item">
                              <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/400.jpg" alt="" class="img-responsive"></a>
                          </li>
                          <li class="list-group-item">
                              <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/bqq.png" alt="" class="img-responsive"></a>
                          </li>                          
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/ML-p-->


<div class="ML-footer">
    <div class="container">
        <br>
        <br>
        <div class="row ML-footer-row-1">
            <div class="col-md-9">
                <div class="row ML-footer-list">
                    <div class="col-md-3"><span class="glyphicon glyphicon-comment"></span>服务保障</div>
                    <div class="col-md-3"><span class="glyphicon glyphicon-user"></span>使用帮助</div>
<!--                    <div class="col-md-2"><span class="glyphicon glyphicon-usd"></span>支付方式</div>-->
                    <div class="col-md-3"><span class="glyphicon glyphicon-send"></span>配送方式</div>
                    <div class="col-md-3"><span class="glyphicon glyphicon-wrench"></span>售后服务</div>                    
                </div>
                <br>
                <div class="row ML-footer-article">
                    <div class="col-md-3">
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Lorem ipsum.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Nihil, magnam!</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Pariatur, aut.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Voluptatem!</a></p>                       
                    </div>
                    <div class="col-md-3">
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Lorem.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Reprehenderit.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Voluptates?</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Lorem.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Quas?</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Aliquid!</a></p>
                    </div>
<!--
                    <div class="col-md-2">
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Lorem.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Neque.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Consectetur.</a></p>
                    </div>
-->
                    <div class="col-md-3">
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Lorem.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Harum!</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-play"></span> Porro.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="col-md-6">
                    <p><strong><small>手机聚慧</small></strong></p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/wuxian.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p><strong><small>聚慧微信</small></strong></p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/weixin.jpg" alt="">
                </div>
            </div>
        </div><!--/row1-->
        <br>
        <br>
        <div class="row text-center ML-footer-corn">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn1.png" alt="" class="img-circle">
                        <p>行业领先</p>
                        <p><small>聚慧美妆商城</small></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn2.png" alt="" class="img-circle">
                        <p>正品保障</p>
                        <p><small>官网400验证</small></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn3.png" alt="" class="img-circle">
                        <p>15天</p>
                        <p><small>退换货保证</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn4.png" alt="" class="img-circle">
                        <p>恒温仓库</p>
                        <p><small>贴心呵护产品</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn5.png" alt="" class="img-circle">
                        <p>6小时</p>
                        <p><small>闪电发货速度</small></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn6.png" alt="" class="img-circle">
                        <p>精美包装</p>
                        <p><small>聚慧礼盒精装</small></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/footer_corn7.png" alt="" class="img-circle">
                        <p>用户心声</p>
                        <p><small>口碑值得信赖</small></p>
                    </div>
                </div>
            </div>
        </div>      
    </div><!--container1-->
    <br>
    <div class="ML-footer-fLink">
        <div class="container">
            <strong class="pull-left"><span class="glyphicon glyphicon-link"></span> 友情链接 </strong>
            <ul class="list-inline">
                <li><a href="">Link1</a></li>
                <li><a href="">Link2</a></li>
                <li><a href="">Link3</a></li>
                <li><a href="">Link4</a></li>
                <li><a href="">Link5</a></li>
                <li><a href="">Link6</a></li>
                <li><a href="">Link7</a></li>
                <li><a href="">Link8</a></li>
                <li><a href="">Link9</a></li>
                <li><a href="">Link10</a></li>
            </ul>                      
        </div><!--/container2-->
    </div>
    <br>
    <footer class="ML-footer-foot container">       
        <ul class="small list-inline text-center">
            <li>Copyright &copy; 2012-2014</li>
            <li>安徽富民网络科技有限公司 保留所有版权</li>
            <li>ICP备案证书号：皖B2-20120016</li>
            <li>增值电信业务经营许可证：皖B2-20120016</li>
        </ul>           
        <ul class="small list-inline text-center">
            <li>客户服务热线：400 080 1778</li>
            <li>聚慧官网：www.meilimz.com</li>
            <li>投诉建议：ts@meilimz.com</li>
        </ul>
        <ul class="list-inline text-center">
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/sinahome_alipay_0625.jpg" alt=""></li>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tdflag1.jpg" alt=""></li>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/sinahome_wscfy_031.gif" alt=""></li>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/sinahome_ws_033.gif" alt=""></li>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/sinahome_ws_035.gif" alt=""></li>
        </ul>
    </footer><!--/container3-->
    <br>
</div><!--/tpl_footer.html 结束-->
</body>
</html><?php }} ?>
