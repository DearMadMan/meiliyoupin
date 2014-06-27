<?php
define("MadMan", true);
require_once("init.php");

/**
 * gallery拖拽上传
 * 将上传的图片进行压缩 并将上传的图片保存至SESSION防止意外关闭
 */

$file_data_type=array("jpg","jpeg","png","gif","bmp");
//print_r($gbs);die;
uploadfile::SetTempDir("../images/");
uploadfile::Init("",2048,$file_data_type);
$upload=uploadfile::UploadFiles($_FILES);

 if(uploadfile::success()){
 	$arr=array(
 			"width"=>$gbs["configs"]['thumb_width'],
 			"height"=>$gbs["configs"]['thumb_height'],
 			"jpeg_quality"=>90,
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

 }



 ?>