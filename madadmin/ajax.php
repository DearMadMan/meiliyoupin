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