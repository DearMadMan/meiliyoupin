<?php
define("MadMan", true);
require_once("init.php");

$callback=$_GET['CKEditorFuncNum'];
$file_data_type=array("jpg","jpeg","png","gif","bmp");
uploadfile::SetTempDir("../images/");
uploadfile::Init("",2048,$file_data_type);
$upload=uploadfile::UploadFiles($_FILES);

 if(uploadfile::success()){
 	echo "<script>";
 	echo "window.parent.CKEDITOR.tools.callFunction(". $callback . ",'".$upload[0]."','')";
 	echo "</script>";
 }
 else
 {
 	echo "<script>";
 	echo "window.parent.CKEDITOR.tools.callFunction(" . $callback . ",''," . "'Error:文件大小不得大于2M,格式为jpg|jpeg|png|gif|bmp');";
 	echo "</script>";
 }



 ?>