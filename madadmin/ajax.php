<?php
define("MadMan", true);
require_once("init.php");
$act="";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}
$arr=array();
$arr['error']="error";
$arr['str']="Sorry,Error Now!";
if($act=="nav_clear_all")
{
	ClearTableAndReJson("nav",$arr);
}
elseif($act=="get_nav_info")
{

	if(isMust(array("id"),$_POST))
	{
		$sql="select * from nav where id=".intval($_POST['id']);
		$res=$db->getRow($sql);
		if(!empty($res))
		{
			$arr['error']="ok";
			$arr['str']=$res;
		}
	}

	EchoJson($arr);
}
elseif ($act=="nav_add")
{

	$must=array("nav_name","nav_url","is_blank","z_index");
	if(IsMust($must,$_POST))
	{

		foreach ($_POST as $key => $value) {
			$_POST[$key]=urldecode($value);
		}
		$data=array(
				  $_POST['nav_name'],
				    $_POST['nav_url'],
				     intval($_POST['is_blank']),
				       intval( $_POST['z_index'])
			);
		$res=$db->AutoExcute("nav","",$must,$data);

		if($res)
		{
			EchoJson($arr,"ok",$db->GetInsertId());
		}
		else
		{
			EchoJson($arr,"添加失败!","");
		}
	}

	EchoJson($arr);
}
elseif($act=="nav_edit")
{
	$must=array("nav_name","nav_url","is_blank","z_index");
	if(IsMust($must,$_POST))
	{
		if(!isset($_POST['id']))
		{
				EchoJson($arr);
		}
		foreach ($_POST as $key => $value) {
			$_POST[$key]=urldecode($value);
		}
		$data=array(
				  $_POST['nav_name'],
				    $_POST['nav_url'],
				     intval($_POST['is_blank']),
				       intval( $_POST['z_index'])
			);
		$res=$db->AutoExcute("nav","id=".intval($_POST['id']),$must,$data,"update");

		if($res)
		{
			EchoJson($arr,"ok");
		}
		else
		{
			EchoJson($arr,"修改失败!","");
		}
	}

	EchoJson($arr);
}
elseif($act=="nav_delete")
{
	$must=array("id");
	if(IsMust($must,$_POST))
	{
		DeletFromTableAndReJson("nav","id=".intval($_POST['id']),$arr);

	}
	EchoJson($arr,"删除失败!","");
}
elseif($act=="nav_set_blank")
{
	$must=array("id","is_blank");
	if(IsMust($must,$_POST))
	{
		$sql="update nav set is_blank=".intval(trim($_POST['is_blank']))." where id=".intval($_POST['id']);
		$res=$db->query($sql);
		if($db->getAffectedRows()>0)
		{
			EchoJson($arr,"ok");
		}
	}
	EchoJson($arr,"修改失败!","");
}
elseif($act=="get_focus_info")
{
	if(isMust(array("id"),$_POST))
	{
		$sql="select * from focus_picture where id=".intval($_POST['id']);
		$res=$db->getRow($sql);
		if(!empty($res))
		{
			$arr['error']="ok";
			$arr['str']=$res;
		}
	}

	EchoJson($arr);
}
elseif($act=="focus_clear_all")
{
	ClearTableAndReJson("focus_picture",$arr);
}
elseif ($act=="focus_add") {

	$must=array("pic_url","click_url","pic_dis","pic_index");
	if(IsMust($must,$_POST))
	{
		$must[]='title';
		$title="";
		foreach ($_POST as $key => $value) {
			$_POST[$key]=urldecode($value);
		}
		if(isset($_POST['title']))
		{
			$title=$_POST['title'];
		}
		$data=array($_POST['pic_url'],
				    $_POST['click_url'],
				    $_POST['pic_dis'],
				    intval( $_POST['pic_index']),
				    $title
					);

		AddToTableAndReJson("focus_picture",$must,$data,$arr);
	}
	EchoJson($arr);


}

elseif($act=="focus_edit")
{
	$must=array("pic_url","click_url","pic_dis","pic_index");
	if(IsMust($must,$_POST))
	{
		if(!isset($_POST['id']))
		{
				EchoJson($arr);
		}
		foreach ($_POST as $key => $value) {
			$_POST[$key]=urldecode($value);
		}
		$title="";
		$must[]='title';
		if(isset($_POST['title']))
		{
			$title=$_POST['title'];
		}

		$data=array(
				  $_POST['pic_url'],
				    $_POST['click_url'],
				     $_POST['pic_dis'],
				       intval( $_POST['pic_index']),
				       $title
			);
		UpdateToTableAndReJson("focus_picture","id=".intval($_POST['id']),$must,$data,$arr);
	}

	EchoJson($arr);
}
elseif($act=="focus_delete")
{
		$must=array("id");
	if(IsMust($must,$_POST))
	{
		DeletFromTableAndReJson("focus_picture","id=".intval($_POST['id']),$arr);

	}
	EchoJson($arr,"删除失败!","");
}
elseif($act=="get_message_info")
{

	if(isMust(array("id"),$_POST))
	{
		$sql="select * from msg where id=".intval($_POST['id']);
		$res=$db->getRow($sql);
		if(!empty($res))
		{
			$arr['error']="ok";
			$arr['str']=$res;
		}
	}

	EchoJson($arr);
}
elseif($act=="message_delete")
{
	$must=array("id");
	if(IsMust($must,$_POST))
	{
		DeletFromTableAndReJson("msg","id=".intval($_POST['id']),$arr);

	}
	EchoJson($arr,"删除失败!","");
}
elseif($act=="gallery_delete")
{
	//进行图片路径分析
	if(!empty($_POST['path']))
	{
		$path=trim($_POST['path']);
		$temp_dir=substr($path,0, strripos($path,"/")+1);
		$img_name=substr($path, strripos($path,"/")+1);
		$real_name="";
		if(strpos($img_name,"_"))
		{
			$temp=explode("_",$img_name);
			$real_name=$temp[1];
		}
		else
		{
			$real_name=$img_name;
		}
		//删除路径图片原图及各种压缩图
		$filer=filer::GetInstance();
		$ok=$filer->RemoveFile($temp_dir.$real_name);
		if($ok)
		{
			$keys=array_search($temp_dir.$real_name, $_SESSION['goods_add']["gallery_origin"]);
			if($keys!==null)
			{
				unset($_SESSION['goods_add']["gallery_origin"][$keys]);
			}
		}
		$ok=$filer->RemoveFile($temp_dir."thumb_".$real_name);

		if($ok)
		{
			$keys=array_search($temp_dir."thumb_".$real_name, $_SESSION['goods_add']["gallery_thumb"]);
			if($keys!==null)
			{
				unset($_SESSION['goods_add']["gallery_thumb"][$keys]);
			}
		}



		$ok=$filer->RemoveFile($temp_dir."img_".$real_name);

		if($ok)
		{
			$keys=array_search($temp_dir."img_".$real_name, $_SESSION['goods_add']["gallery_img"]);
			if($keys!==null)
			{
				unset($_SESSION['goods_add']["gallery_img"][$keys]);
			}
		}

		$ok=$ok?"ok":"error";
		EchoJson($arr,$ok);
	}
	else
	{
		EchoJson($arr,"未发现路径！");
	}


	//清除该图片相关SESSION
}
elseif($act=="goods_edit_gallery_delete")
{
	//进行数据判断
	$must=array("gallery_id","path");

	if(IsMust($must,$_POST))
	{
		$gallery_id=intval($_POST['gallery_id']);
		$res=$db->AutoExcute("goods_gallery","id=$gallery_id");
		if(!$res)
		{
			EchoJson($arr,"该相册早已删除！");
		}
		// 匹配路径图片删除

		$path=trim($_POST['path']);
		$temp_dir=substr($path,0, strripos($path,"/")+1);
		$img_name=substr($path, strripos($path,"/")+1);
		$real_name="";
		if(strpos($img_name,"_"))
		{
			$temp=explode("_",$img_name);
			$real_name=$temp[1];
		}
		else
		{
			$real_name=$img_name;
		}
		$filer=filer::GetInstance();
		$ok=$filer->RemoveFile($temp_dir.$real_name);
		$ok=$filer->RemoveFile($temp_dir."thumb_".$real_name);
		$ok=$filer->RemoveFile($temp_dir."img_".$real_name);
		EchoJson($arr,"ok");
	}
	EchoJson($arr,"未发现路径！");

}
elseif($act=="goods_add_addattr")
{
	$attr_name="";
	if(isset($_POST['attr_name']))
	{
		$attr_name=$_POST['attr_name'];
	}
	if(!empty($attr_name))
	{
		$_SESSION['goods_add']["attr"][]=array($attr_name,floatval($_POST['attr_price']));
		end($_SESSION['goods_add']["attr"]);
		$key=key($_SESSION['goods_add']["attr"]);
		$data=$_SESSION['goods_add']['attr'][$key];
		$data[]=$key;
		EchoJson($arr,"ok",$data);
	}
	EchoJson($arr,"error");
}
elseif($act=="goods_edit_addattr")
{
	$attr_name="";
	$attr_price=0;
	$goods_id=0;
	if(isset($_POST['goods_id']))
	{
		$goods_id=intval($_POST['goods_id']);
		if(!empty($goods_id))
		{
			if(isset($_POST['attr_name']))
			{
				$attr_name=$_POST['attr_name'];
			}
			if(isset($_POST['attr_price']))
			{
				$attr_price=floatval($_POST['attr_price']);
			}
			$fileds=array("goods_id","attr_name","add_price");
			$data=array($goods_id,$attr_name,$attr_price);
			$res=$db->AutoExcute("goods_attr","",$fileds,$data);
			if($res)
			{
				$insertId=$db->getInsertId();
				$data=array($attr_name,$attr_price,$insertId);
				EchoJson($arr,"ok",$data);
			}
		}
	}


	EchoJson($arr,"error");
}
elseif($act=="get_attr")  //获取商品属性
{
	$attr_key="";
	if(isset($_POST['attr_key']))
	{
		if(is_numeric($_POST['attr_key']))
		{
			$attr_key=intval($_POST['attr_key']);
		}
	}
	if($attr_key!="")
	{
		if(isset($_SESSION['goods_add']['attr'][$attr_key]))
		{
				EchoJson($arr,"ok",$_SESSION['goods_add']['attr'][$attr_key]);
		}
		else
		{
			EchoJson($arr,"该条属性不存在！");
		}
	}
	EchoJson($arr,"error");
}
elseif($act=="goods_add_edit_attr")
{
	$attr_key="";
	if(isset($_POST['attr_key']))
	{
		if(is_numeric($_POST['attr_key']))
		{
			$attr_key=intval($_POST['attr_key']);
		}
	}


	if( ($attr_key!=="") && ($_POST['attr_name']!=="") )
	{

		if(isset($_SESSION['goods_add']['attr'][$attr_key]))
		{
			$attr_name=trim($_POST['attr_name']);
			$attr_price=floatval($_POST['attr_price']);
			$_SESSION['goods_add']['attr'][$attr_key]=array($attr_name,$attr_price);

				EchoJson($arr,"ok",$_SESSION['goods_add']['attr'][$attr_key]);
		}
		else
		{
			EchoJson($arr,"该条属性不存在！");
		}
	}
	EchoJson($arr,"error");
}
elseif($act=="goods_edit_edit_attr")
{
	$attr_key="";
	if(isset($_POST['attr_key']))
	{
		if(is_numeric($_POST['attr_key']))
		{
			$attr_key=intval($_POST['attr_key']);
		}
	}


	if( ($attr_key!=="") && ($_POST['attr_name']!=="") )
	{
		$row=$db->getRowFromTable("goods_attr","where id=$attr_key");
		if(empty($row))
		{
			EchoJson($arr,"error");
		}
		$fields=array("attr_name","add_price");
		$data=array($_POST['attr_name'],floatval($_POST['attr_price']));
		$res=$db->autoExcute("goods_attr","id=$attr_key",$fields,$data,"update");
		if($res)
		{

			EchoJson($arr,"ok",$data);
		}

	}
	EchoJson($arr,"error");
}
elseif($act=="goods_add_delete_attr")
{
	$attr_key="";
	if(isset($_POST['attr_key']))
	{
		if(is_numeric($_POST['attr_key']))
		{
			$attr_key=intval($_POST['attr_key']);
		}
	}

	if( ($attr_key!==""))
	{

		if(isset($_SESSION['goods_add']['attr'][$attr_key]))
		{
			unset($_SESSION['goods_add']['attr'][$attr_key]);
			EchoJson($arr,"ok");
		}
		else
		{
			EchoJson($arr,"该条属性不存在！");
		}
	}

	EchoJson($arr,"error");
}
elseif($act=="goods_edit_delete_attr")
{
	$must=array("attr_key");
	if(IsMust($must,$_POST))
	{
		$attr_id=intval($_POST['attr_key']);
		$row=$db->getRowFromTable("goods_attr","where id=$attr_id");
		if(!empty($row))
		{
			$res=$db->autoExcute("goods_attr","id=$attr_id");
			if($res)
			{
				EchoJson($arr,"ok");
			}
		}
	}
	EchoJson($arr,"error");
}
elseif($act=="change_sale_status")
{
	if(isset($_POST['id']))
	{
		$id=intval($_POST["id"]);
		if(!empty($id))
		{
			$row=$db->getRowFromTable("goods","where id=$id");
			if(!empty($row))
			{
				$sale=intval($row['is_on_sale']);
				$sale=abs($sale-1);
				$sql="update goods set is_on_sale=$sale where id=$id";
				$db->Query($sql);
				if($db->GetAffectedRows()>0)
				{
					EchoJson($arr,"ok",$sale);
				}
			}
		}
	}
	EchoJson($arr,"error");
}
elseif($act=="wrench")
{
	if(isset($_POST['id']))
	{
		$id=intval($_POST["id"]);
		if(!empty($id))
		{
			$row=$db->getRowFromTable("goods","where id=$id");
			if(!empty($row))
			{

				$sql="update goods set is_delete=0 where id=$id";
				$db->Query($sql);
				if($db->GetAffectedRows()>0)
				{
					EchoJson($arr,"ok");
				}
			}
		}
	}
	EchoJson($arr,"error");
}
elseif($act=="recycle")
{
	if(isset($_POST['id']))
	{
		$id=intval($_POST["id"]);

		if(!empty($id))
		{

			$row=$db->getRowFromTable("goods","where id=$id");
			if(!empty($row))
			{

				$sql="update goods set is_delete=1 where id=$id";
				$db->Query($sql);
				if($db->GetAffectedRows()>0)
				{
					EchoJson($arr,"ok");
				}
			}
		}
	}
	EchoJson($arr,"error");
}
function AddToTableAndReJson($table,$must,$data,$arr)
{
	$db=$GLOBALS['db'];

		$res=$db->AutoExcute("$table","",$must,$data);

		if($res)
		{
			EchoJson($arr,"ok",$db->GetInsertId());
		}
		else
		{
			EchoJson($arr,"修改失败!","");
		}
}

function UpdateToTableAndReJson($table,$where,$fields,$data,$arr)
{
	$db=$GLOBALS['db'];
	$res=$db->AutoExcute("$table",$where,$fields,$data,"update");
		if($res)
		{
			EchoJson($arr,"ok");
		}
		else
		{
			EchoJson($arr,"添加失败!","");
		}
}
function DeletFromTableAndReJson($table,$where,$arr)
{
	$db=$GLOBALS['db'];
	$sql="delete from $table where $where";
		$res=$db->query($sql);
		if($db->getAffectedRows()>0)
		{
			EchoJson($arr,"ok");
		}
}
function ClearTableAndReJson($table,$arr)
{
	$db=$GLOBALS['db'];
	$sql="truncate $table";
	$db->query($sql);
	if(empty($db->getRow("select * from $table limit 0,1")))
	{

		$arr['error']="ok";
		$arr['str']="is clear!";
		EchoJson($arr);
	}
	EchoJson($arr);
}
?>