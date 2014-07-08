<?php
define("MadMan", true);
require_once("init.php");

/**
 * gallery拖拽上传
 * 将上传的图片进行压缩 并将上传的图片保存至SESSION防止意外关闭
 */

$act="add";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}




if($act=="edit")
{
	$id=0;
	if(isset($_REQUEST['id']))
	{
		$id=intval($_REQUEST['id']);
	}
	if(empty($id))
	{
		echo "error";
		die;
	}
	$row=$db->getRowFromTable("goods","where id=$id");
	if(empty($row))
	{
		echo "error";
		die;
	}
	$file_data_type=array("jpg","jpeg","png","gif","bmp");
	uploadfile::SetTempDir("../images/");
	uploadfile::Init("",2048,$file_data_type);
	$upload=uploadfile::UploadFiles($_FILES);

	 if(uploadfile::success()){
	 	$arr=array(
	 			"width"=>$gbs["configs"]['thumb_width'],
	 			"height"=>$gbs["configs"]['thumb_height'],
	 			"jpeg_quality"=>$gbs["configs"]['pic_quality'],
	 			"watermark"=>false
	 		);
	 	imagetool::InitFromArray($arr);
	    $thumb=imagetool::GetImageFromString($upload[0],"thumb");
	 	 	$arr=array(
	 			"width"=>$gbs["configs"]['show_width'],
	 			"height"=>$gbs["configs"]['show_height']
	 		);
	 	imagetool::InitFromArray($arr);
	 	$img=imagetool::GetImageFromString($upload[0],"img");

	 	$fileds=array("goods_id","img_url","thumb_url","original_url");
	 	$data=array(
	 			$id,
	 			$img,
	 			$thumb,
	 			$upload[0]
	 		);
	 	$res=$db->autoExcute("goods_gallery","",$fileds,$data);
	 	if($res)
	 	{
	 		$gallery_id=$db->getInsertId();
	 		$array['original_url']=$upload[0];
	 		$array['gallery_id']=$gallery_id;
	 		$array['thumb_url']=$thumb;
	 		$array=json_encode($array);
	 		echo $array;
	 		die;
	 	}
	 	else
	 	{
	 		echo "error";
	 		die;
	 	}

	 }
	 else
	 {
	 	echo "error";
		die;
	 }
}
elseif($act=="add")
{
	$file_data_type=array("jpg","jpeg","png","gif","bmp");
	uploadfile::SetTempDir("../images/");
	uploadfile::Init("",2048,$file_data_type);
	$upload=uploadfile::UploadFiles($_FILES);

	 if(uploadfile::success()){
	 	$arr=array(
	 			"width"=>$gbs["configs"]['thumb_width'],
	 			"height"=>$gbs["configs"]['thumb_height'],
	 			"jpeg_quality"=>$gbs["configs"]['pic_quality'],
	 			"watermark"=>false
	 		);
	 	imagetool::InitFromArray($arr);
	    $thumb=imagetool::GetImageFromString($upload[0],"thumb");
	 	 	$arr=array(
	 			"width"=>$gbs["configs"]['show_width'],
	 			"height"=>$gbs["configs"]['show_height']
	 		);
	 	imagetool::InitFromArray($arr);
	 	$img=imagetool::GetImageFromString($upload[0],"img");
	 	echo $upload[0];

	 	$_SESSION['goods_add']["gallery_img"][]=$img;
	 	$_SESSION['goods_add']["gallery_origin"][]=$upload[0];
	 	$_SESSION['goods_add']["gallery_thumb"][]=$thumb;

	 }
	 else
	 {
	 	echo "error";
		die;
	 }

}




 ?>