##############################表结构####################################


######管理员表
create table admin (
    id int auto_increment primary key,
    user_name varchar(255) default '',
    user_word varchar(255) default ''
    )engine=myisam default charset=utf8;

######后台菜单
create table admin_menu(
    id int auto_increment primary key,
    parent_id int default 0,
    menu_name varchar(255) default '',
    menu_url varchar(255) default ''
    )engine=myisam default charset=utf8;

######配置信息表
create table configs (
    id int auto_increment primary key,
    cf_name varchar(255) default '',
    cf_value text
    )engine=myisam default charset=utf8;

######文章表
create table articles(
    id int auto_increment primary key,
    type_id int default 0,
    content text,
    add_time varchar(255) default ''
    )engine=myisam default charset=utf8;

######文章分类表
create table article_type(
    id int auto_increment primary key,
    type_name varchar(255) default '',
    parent_id int default 0
    )engine=myisam default charset=utf8;

######商品品牌表
create table goods_brand(
    id int auto_increment primary key,
    type_name varchar(255) default '',
    parent_id int default 0
    )engine=myisam default charset=utf8;


######焦点图
create table focus_picture (
    id int auto_increment primary key,
    title varchar(255) default '',
    pic_url varchar(255) default '' ,
    click_url varchar(255) default '',
    pic_dis varchar(255) default '',
    pic_index int default 0
    )engine=myisam default charset=utf8;

######导航
create table nav(
    id int auto_increment primary key,
    nav_name varchar(255) default '',
    nav_url varchar(255) default '',
    is_blank int default 0,
    parent_id int default 0,
    z_index int default 0
    )engine=myisam default charset=utf8;

######留言表
create table msg(
    id int auto_increment primary key,
    user_id int default 0,
    title varchar(255) default '',
    content varchar(1020) default '',
    add_time varchar(255) default '',
    reply varchar(1020) default '',
    reply_time varchar(255) default ''
    )engine=myisam default charset=utf8;


######商品表

create table goods(
    id int auto_increment primary key,
    goods_name varchar(255) default "",
    type_id int default 0,
    brand_id int default 0,
    goods_sn varchar(255) default "",
    click_count int default 0,
    goods_number int default 0,
    goods_weight int default 0,
    shop_price float default 0,
    market_price float default 0,
    goods_brief varchar(255) default "",
    goods_desc text,
    thumb_img varchar(255) default "",
    goods_img varchar(255) default "",
    original_img varchar(255) default "",
    is_on_sale int default 1,
    is_delete int default 0,
    is_groupon int default 0,
    shipping_free int default 0,
    groupon_start_time varchar(255) default "",
    groupon_end_time varchar(255) default "",
    add_time varchar(255) default ""

    )engine=myisam default charset=utf8;


    ####### 商品属性表：
    create table goods_attr(
        id int auto_increment primary key,
        goods_id int default 0,
        attr_name varchar(255) default "",
        add_price float default 0
        )engine=myisam default charset=utf8;


    ###### 商品缩略图画廊
    create table goods_gallery(
        id int auto_increment primary key,
        goods_id int default 0,
        img_url varchar(255) default "",
        thumb_url varchar(255) default "",
        original_url varchar(255) default "",
        alt varchar(255) default ''
        )engine=myisam default charset=utf8;


    ###### 商品分类表 无限级分类
    create table goods_type(
        id int auto_increment primary key,
        type_name varchar(255) default '',
        parent_id int default 0
        )engine=myisam default charset=utf8;
        
        
    ###### users 用户表
    create table users(
        id int auto_increment primary key,
        user_nick varchar(255) default '',
        user_name varchar(255) default '',
        user_qq varchar(255) default '',
        user_email varchar(255) default '',
        user_money float default 0,
        user_points int default 0,
        user_level int default 0,
        referrer_id int default 0,
        reg_time varchar(255) default '',
        last_login varchar(255) default '',
        last_id varchar(255) default ''
        )engine=myisam default charset=utf8;
        
        
    ###### user_level 会员等级表
    create table user_level(
        id int auto_increment primary key,
        level_name varchar(255) default '',
        need_points int default 0,
        discount int default 100
        )engine=myisam default charset=utf8;
        
    ###### user_coupon 优惠券
    create table user_coupon (
        id int auto_increment primary key,
        user_id int default 0,
        security_code varchar(255) default '',
        coupon_type int default 0,
        is_used int default 0
        )engine=myisam default charset=ut8;
        
        
    ###### coupon_type 优惠券分类   
    ###添加后的优惠券分类不建议删除
    create table coupon_type (
        id int auto_increment primary key,
        type_name varchar(255) default '',
        need_money float default 0,
        discount_money float default 0,
        need_brands varchar(255) default '',
        need_goods varchar(255) default '',
        img_url varchar(255) default ''
        )engine=myisam default charset=utf8;
    

##############################数据####################################
###管理员接入
insert into admin (user_name,user_word)  value("myadmin","691c360156c27261b40c974ec0bf8f4a");

###配置信息接入
insert into configs (cf_name,cf_value) values("default_template","default")
,("site_name","MadCms")
,("site_dis","MadCms是一款对SEO非常友好的企业建站系统。系统内置SEO优化机制,界面简洁、方便操作。十年专注,已然成为企业建站服务的领导品牌。")
,("keyword","MadCms|企业CMS|企业CMS系统|企业建站")
,("email","admin@dearmadman.com")
,("logo","images/logo.jpg")
,("thumb_width","200")
,("thumb_height","200")
,("show_width","400")
,("show_height","400")

,("groupon_thumb_width","400")
,("groupon_thumb_height","400")
,("groupon_show_width","960")
,("groupon_show_height","400")

,("pic_quality","90")

;


######后台菜单数据接入

###一级菜单接入
insert into admin_menu(parent_id,menu_name,menu_url)
values(0,"系统设置",""),
(0,"商品管理",""),
(0,"订单管理",""),
(0,"文章管理",""),
(0,"评论管理","");

###系统设置
insert into admin_menu(parent_id,menu_name,menu_url)
values(1,"站点信息","index.php?act=site_info"),
(1,"配送方式","index.php?act=shipping_type"),
(1,"支付方式","index.php?act=pay_type"),
(1,"导航管理","index.php?act=nav"),
(1,"焦点图设置","index.php?act=focus_picture");


###商品管理
insert into admin_menu(parent_id,menu_name,menu_url)
values(2,"商品列表","index.php?act=goods_list"),
(2,"添加商品","index.php?act=goods_add"),
(2,"商品分类","index.php?act=goods_type_list"),
(2,"添加分类","index.php?act=goods_type_add"),
(2,"商品回收站","index.php?act=goods_recycle");

###订单管理
insert into admin_menu(parent_id,menu_name,menu_url)
values(3,"订单列表","index.php?act=order_list"),
(3,"订单查询","index.php?act=order_search"),
(3,"打印模版","index.php?act=print_template"),
(3,"订单删除日志","index.php?act=order_recycle");


###文章管理
insert into admin_menu(parent_id,menu_name,menu_url)
values(4,"文章列表","index.php?act=article_list"),
(4,"添加文章","index.php?act=article_add"),
(4,"文章分类","index.php?act=article_type_list"),
(4,"添加分类","index.php?act=article_type_add");

###评论管理
insert into admin_menu(parent_id,menu_name,menu_url)
values(5,"评论列表","index.php?act=goods_comment"),
(5,"留言管理","index.php?act=user_message");