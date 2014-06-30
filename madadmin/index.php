<?php
define("MadMan", true);
require_once("init.php");
$act="";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}

if($act=="site_info")
{
	$smarty->display("site.mad");
}
elseif($act=="nav")
{
	$sql="select * from nav order by z_index desc";
	$navlist=$db->getAll($sql);
	$smarty->assign("navlist",$navlist);
	$smarty->display("nav.mad");
}
elseif($act=="focus_picture")
{
	$sql="select * from focus_picture order by pic_index desc";
	$piclist=$db->getAll($sql);
	$smarty->assign("piclist",$piclist);
	$smarty->display("focus_picture.mad");
}
elseif($act=="article_list")
{

	$pagetool=pagetool::GetInstance();
    if(!isset($_GET['pageNow']))
    {

        $_GET['pageNow']=0;
    }
    $pageNow=intval($_GET['pageNow']);
    $pagePath='index.php?act=article_list';
    $dfNum=20;
    $sql="select a.*,b.type_name from articles as a left join article_type as b on a.type_id=b.id order by a.id desc";
    $db=$GLOBALS['db'];
    $pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,"a.id");
    $res=$pagetool->getAll();
    if(!empty($res))
    {
       $smarty->assign("article_list",$res['res']);
       $smarty->assign("pre",$res['pre']);
       $smarty->assign("next",$res['next']);
       $smarty->assign("more",$res['more']);
       $smarty->assign("last",$res['last']);
       $smarty->assign("now",$res['now']);

    }
    else
    {
         $smarty->assign("article_list",array());
    }


	$smarty->display("article_list.mad");
}
elseif($act=="article_edit")
{
  $id=0;
   if(isset($_REQUEST['id']))
   {
       $id=intval($_REQUEST['id']) ;
   }
   $sql="select * from articles where id='$id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
     ShowTips("该文章不存在,请重新尝试!");
   }

   $type_list=GetArticleTypeList();

    $smarty->assign("type_list",$type_list);
   $smarty->assign("article",$res);
   $smarty->display("article_edit.mad");
}
elseif($act=="article_add")
{

  $type_list=GetArticleTypeList();
  $smarty->assign("type_list",$type_list);
  $smarty->display("article_add.mad");
}
elseif($act=="article_delete")
{
  $must=array("id");
  if(IsMust($must,$_GET))
  {
     if(DeleteRowFromTable("articles","id",intval($_GET['id'])))
     {
        ShowTips("文章删除成功！");
     }
  }

}
elseif($act=="article_type_delete")
{
  $must=array("id");
  if(IsMust($must,$_GET))
  {
     if(DeleteRowFromTable("article_type","id",intval($_GET['id'])))
     {
        ShowTips("文章分类删除成功！");
     }
  }
}
elseif($act=="article_type_list")
{
  $type_list=GetArticleTypeList();
  $smarty->assign("type_list",$type_list);
  $smarty->display("article_type_list.mad");
}
elseif($act=="article_type_add")
{
  $smarty->display("article_type_add.mad");
}
elseif($act=="article_type_edit")
{
    $type_id=0;
    $must=array("id");
    if(IsMust($must,$_REQUEST))
    {
       $type_id=intval($_REQUEST['id']);
        $article=$db->GetRowFromTable("article_type","where id=$type_id");
        if(empty($article))
        {
          ShowTips("该分类不存在！");
        }

        $smarty->assign("article",$article);
    }
    $smarty->display("article_type_edit.mad");
}
elseif($act=="product_list")
{
	$pagetool=pagetool::GetInstance();
    if(!isset($_GET['pageNow']))
    {

        $_GET['pageNow']=0;
    }
    $pageNow=intval($_GET['pageNow']);
    $pagePath='index.php?act=product_list';
    $dfNum=20;
    $sql="select a.*,b.type_name from product as a left join product_type as b on a.type_id=b.id order by a.id desc";
    $db=$GLOBALS['db'];
    $pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,"a.id");
    $res=$pagetool->getAll();
    if(!empty($res))
    {
       $smarty->assign("product_list",$res['res']);
       $smarty->assign("pre",$res['pre']);
       $smarty->assign("next",$res['next']);
       $smarty->assign("more",$res['more']);
       $smarty->assign("last",$res['last']);
       $smarty->assign("now",$res['now']);

    }
    else
    {
         $smarty->assign("product_list",array());
    }


	$smarty->display("product_list.mad");
}
elseif($act=="product_add")
{
    $type_list=GetProductTypeList();
    $smarty->assign("type_list",$type_list);
	$smarty->display("product_add.mad");
}
elseif($act=="product_type_list")
{
		  $type_list=GetProductTypeList();
		  $smarty->assign("type_list",$type_list);
		  $smarty->display("product_type_list.mad");
}
elseif($act=="product_type_add")
{
	$smarty->display("product_type_add.mad");
}
elseif($act=="product_type_edit")
{
	$type_id=0;
    $must=array("id");
    if(IsMust($must,$_REQUEST))
    {
       $type_id=intval($_REQUEST['id']);
        $product=$db->GetRowFromTable("product_type","where id=$type_id");
        if(empty($product))
        {
          ShowTips("该分类不存在！");
        }

        $smarty->assign("product",$product);
    }
    $smarty->display("product_type_edit.mad");
}
elseif($act=="product_type_delete")
{
  $must=array("id");
  if(IsMust($must,$_GET))
  {
     if(DeleteRowFromTable("product_type","id",intval($_GET['id'])))
     {
        ShowTips("产品分类删除成功！");
     }
  }
}
elseif($act=="product_edit")
{
   $id=0;
   if(isset($_REQUEST['id']))
   {
       $id=intval($_REQUEST['id']) ;
   }
   $sql="select * from product where id='$id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
     ShowTips("该产品不存在,请重新尝试!");
   }

   $type_list=GetProductTypeList();

    $smarty->assign("type_list",$type_list);
   $smarty->assign("product",$res);
   $smarty->display("product_edit.mad");
}
elseif($act=="product_delete")
{
  $must=array("id");
  if(IsMust($must,$_GET))
  {
     if(DeleteRowFromTable("product","id",intval($_GET['id'])))
     {
        ShowTips("产品删除成功！");
     }
  }

}
elseif($act=="message")
{
  $pagetool=pagetool::GetInstance();
    if(!isset($_GET['pageNow']))
    {

        $_GET['pageNow']=0;
    }
    $pageNow=intval($_GET['pageNow']);
    $pagePath='index.php?act=message';
    $dfNum=20;
    $sql="select * from msg order by add_time desc";
    $db=$GLOBALS['db'];
    $pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,"id");
    $res=$pagetool->getAll();
    if(!empty($res))
    {
       $smarty->assign("messagelist",$res['res']);
       $smarty->assign("pre",$res['pre']);
       $smarty->assign("next",$res['next']);
       $smarty->assign("more",$res['more']);
       $smarty->assign("last",$res['last']);
       $smarty->assign("now",$res['now']);

    }
    else
    {
         $smarty->assign("article_list",array());
    }



  $smarty->display("message.mad");
}
elseif($act=="goods_add")
{
    $gallery_list=array();
    if(isset($_SESSION['goods_add']['gallery_thumb']))
    {
      foreach ($_SESSION['goods_add']['gallery_thumb'] as $key => $value) {
        if(!file_exists($value))
        {
          //未查找到的文件清除SESSION
          unset($_SESSION['goods_add']['gallery_thumb'][$key]);
        }
      }
      $gallery_list=$_SESSION['goods_add']['gallery_thumb'];
    }

 //商品属性
    $attr_list=array();
    if(isset($_SESSION['goods_add']['attr']))
    {
      $attr_list=$_SESSION['goods_add']['attr'];
    }

 //商品分类
 $types=$db->getAllFromTable("goods_type");
    $smarty->assign("types",$types);
    $smarty->assign("gallery_list",$gallery_list);  //已经上传但为保存的图片
    $smarty->assign("attr_list",$attr_list);
    $smarty->display("goods_add.mad");
}
elseif($act=="goods_type_list")
{
  $sql="select * from goods_type";
  $rows=$db->getAll($sql);
  $arr=GetRecursionList(0,$rows);

  $smarty->assign("rows",$arr);
  $smarty->display("goods_type_list.mad");
}
elseif($act=="goods_type_add")
{
  $sql="select * from goods_type";
  $rows=$db->getAll($sql);
  $smarty->assign("rows",$rows);
  $smarty->display("goods_type_add.mad");
}
elseif($act=="goods_type_edit")
{
   $id=0;
   if(isset($_REQUEST['id']))
   {
       $id=intval($_REQUEST['id']) ;
   }
   $sql="select * from goods_type where id='$id'";
   $res=$db->GetRow($sql);
   if(empty($res))
   {
     ShowTips("该分类不存在,请重新尝试!");
   }
  $sql="select * from goods_type";
  $rows=$db->getAll($sql);
  $smarty->assign("rows",$rows);
  $smarty->assign("type",$res);
  $smarty->display("goods_type_edit.mad");
}
elseif($act=="goods_type_delete")
{
   if(isset($_GET['id']))
   {
      $id=intval($_GET['id']);
      if($id!=0)
      {
        $row=$db->GetRowFromTable("goods_type","where id=$id");
        if(empty($row))
        {
          ShowTips("分类不存在！");
        }
        $types=$db->getAllFromTable("goods_type");
        if(has_child($types,$id))
        {
           ShowTips("该分类下存在子分类，请先转移其子分类！");
        }
        $sql="delete from goods_type where id=$id";
        $db->Query($sql);
        if($db->GetAffectedRows()>0)
        {
          ShowTips("删除分类成功！");
        }
        else{
          ShowTips("删除分类失败！请稍后重新尝试！");
        }
      }
   }
   ShowTips("Something Wrong!");
}
else
{
	$smarty->display("index.mad");
}
?>