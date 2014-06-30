<?php
define("MadMan", true);
require_once("init.php");
$act="";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}
if($act=="login")
{

  	$must=array("user_name","user_word");
	if(!IsMust($must,$_POST))
	{
		EchoError();
	}

  $user_name=$_POST['user_name'];
  $user_word=$_POST['user_word'];
  if(empty($user_word)||empty($user_name))
  {
  	EchoError();
  }

  $user_word=GetMadMD5($user_word);

  $admin=$db->GetRowFromTable("admin","where user_name='$user_name' and user_word='$user_word'");
  if(empty($admin))
  {
  	JsAlertAndJump("用户名密码错误","index.php");
  }
  else
  {
  	$_SESSION['admin_id']=$admin['id'];
  	location("index.php");
  }
}
elseif($act=="site_edit")
{

  if($_FILES['logo']["error"]==0)
  {
    uploadfile::SetTempDir("../images/");
    $file_data_type=array("jpg",
                         "gif",
                         "png");
    uploadfile::Init("",2048,$file_data_type,"","");
    $upload=uploadfile::UploadFiles($_FILES);
    if(uploadfile::Success())
    {
       $_POST['logo']=$upload[0];
    }
    else
    {
      die($upload);
    }

  }
  else
  {
    if($_FILES['logo']["error"]!=4)
    {
       ShowTips("只允许上传jpg,png,gif格式大小1M以内的图片！");
    }

  }
 $res= SetConfigsToDataBase($_POST);
 if(empty($res))
 {
    ShowTips("站点更新成功！");
 }
 else
 {
   ShowTips($res);
 }
}
elseif($act=="upload_image")
{
  uploadfile::SetTempDir("../images/");
  $file_data_type=array("jpg","jpeg","bmp","gif","png");
  uploadfile::Init("",4096,$file_data_type);
  $upload=uploadfile::UploadFiles($_FILES);
  if(uploadfile::success()){
    echo $upload[0];
   }
   else
   {
     echo "error";
   }
}
elseif($act=="article_add")
{
      $must=array("type_id","title","content");

      if(isMust($must,$_POST))
      {
        $must[]="add_time";
          $data=array(
                  intval($_POST['type_id']),
                  $_POST['title'],
                  $_POST['content'],
                  time()
            );
          $res=$db->autoExcute("articles","",$must,$data);
          if($res)
          {
            ShowTips("文章发布成功！");
          }
          else
          {
            ShowTips("文章发布失败！请稍后重新尝试！");
          }
      }
      else
      {
        ShowTips("发布文章失败，请尝试添加正确的内容！");
      }
}
elseif($act=="article_edit")
{
    $must=array("id","type_id","title","content");

    if(IsMust($must,$_POST))
    {
      $must[]="add_time";
        $data=array(
                intval($_POST['id']),
                intval($_POST['type_id']),
                $_POST['title'],
                $_POST['content'],
                time()
          );
        $res=$db->autoExcute("articles"," id=".intval($_POST['id']),$must,$data,"update");
        if($res)
        {
          ShowTips("文章更新成功！");
        }
    }
     ShowTips("文章更新失败！请稍后尝试！");
}
elseif($act=="article_type_add")
{
      $must=array("type_name");
      if(IsMust($must,$_POST))
      {
          $data=array($_POST['type_name']);
          $res=$db->autoExcute("article_type","",$must,$data);
          if($res)
          {
            ShowTips("文章分类添加成功！");
          }
      }
        ShowTips("srroy!Error Now!");
}
elseif($act=="article_type_edit")
{
    $must=array("id","type_name");
    if(IsMust($must,$_POST))
    {
        $data=array(
                  intval($_POST['id']),
                  $_POST['type_name']
          );
        $res=$db->autoExcute("article_type","id=".intval($_POST['id']),$must,$data,"update");
        if($res)
        {
          ShowTips("文章分类修改成功！");
        }
        else
        {
           ShowTips("文章分类修改失败！请稍后尝试！");
        }
    }
      ShowTips("srroy!Error Now!");
}

elseif($act=="product_type_add")
{
      $must=array("type_name");
      if(IsMust($must,$_POST))
      {
          $data=array($_POST['type_name']);
          $res=$db->autoExcute("product_type","",$must,$data);
          if($res)
          {
            ShowTips("产品分类添加成功！");
          }
      }
        ShowTips("srroy!Error Now!");
}
elseif($act=="product_type_edit")
{
    $must=array("id","type_name");
    if(IsMust($must,$_POST))
    {
        $data=array(
                  intval($_POST['id']),
                  $_POST['type_name']
          );
        $res=$db->autoExcute("product_type","id=".intval($_POST['id']),$must,$data,"update");
        if($res)
        {
          ShowTips("产品分类修改成功！");
        }
        else
        {
           ShowTips("产品分类修改失败！请稍后尝试！");
        }
    }
      ShowTips("srroy!Error Now!");
}
elseif($act=="product_add")
{
	 $must=array("type_id","product_name","product_dis","product_imgurl");

      if(isMust($must,$_POST))
      {
        $must[]="add_time";
          $data=array(
                  intval($_POST['type_id']),
                  $_POST['product_name'],
                  $_POST['product_dis'],
                  $_POST['product_imgurl'],
                  time()
            );
          $res=$db->autoExcute("product","",$must,$data);
          if($res)
          {
            ShowTips("产品发布成功！");
          }
          else
          {
            ShowTips("产品发布失败！请稍后重新尝试！");
          }
      }
      else
      {
        ShowTips("发布产品失败，请尝试添加正确的内容！");
      }
}
elseif($act=="product_edit")
{
    $must=array("id","type_id","product_name","product_dis","product_imgurl");

    if(IsMust($must,$_POST))
    {
      array_shift($must);

      $must[]="add_time";
        $data=array(
                intval($_POST['type_id']),
                  $_POST['product_name'],
                  $_POST['product_dis'],
                  $_POST['product_imgurl'],
                  time()
          );
        $res=$db->autoExcute("product"," id=".intval($_POST['id']),$must,$data,"update");
        if($res)
        {
          ShowTips("产品更新成功！");
        }
    }
     ShowTips("产品更新失败！请稍后尝试！");
}
elseif($act=="goods_add")
{
  print_r($_POST);
  print_r($_SESSION);
  die;
}
elseif($act=="goods_type_add")
{
  $must=array("type_name","parent_id");
  if(IsMust($must,$_POST))
  {
    $data=array(
                trim($_POST['type_name']),
                intval($_POST['parent_id'])
                );
     $res=$db->autoExcute("goods_type","",$must,$data);
        if($res)
        {
          ShowTips("添加分类成功！");
        }
  }
  ShowTips("Something Wrong!");
}
elseif($act=="goods_type_edit")
{
  $must=array("id","type_name","parent_id");
  if(IsMust($must,$_POST))
  {
    $id=intval($_POST['id']);
    $types=$db->getAllFromTable("goods_type");
    if(Is_child($types,$id,intval($_POST['parent_id'])))
    {
      ShowTips("目标分类是当前分类的子分类！请重新选择！");
    }
  array_shift($must);
    $data=array(
                trim($_POST['type_name']),
                intval($_POST['parent_id'])
                );
     $res=$db->autoExcute("goods_type","id=$id",$must,$data,"update");
        if($res)
        {
          ShowTips("更新分类成功！");
        }
  }
  ShowTips("Something Wrong!");
}
else
{
  print_r($_REQUEST);
	 ShowTips("产品更新失败！请稍填写完整数据！");
}
?>