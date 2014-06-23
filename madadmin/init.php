<?php
require_once("../inc/init.php");

define("ADMIN_PATH",ROOT_PATH.'madadmin'.DIRECTORY_SEPARATOR);
define("ADMIN_TEMPLATE_PATH", ADMIN_PATH."template".DIRECTORY_SEPARATOR);
$smarty->setTemplateDir(ADMIN_TEMPLATE_PATH);
$smarty->assign('view_path',"./template");
$smarty->assign('plugin_path',"../plugin");
$smarty->assign('ckeditor_path',"../plugin/ckeditor");
$smarty->assign('vp',"./template");
require_once("admin_check.php");






//获取后台菜单列表
$sql="select * from admin_menu";
$res=$db->getAll($sql);
$arr=GetMenuList(0, $res);
$o_arr=$arr; //原始序列
$temp_arr=array();
$Maxlevel=0;
foreach($arr as $k =>$v)
{
	if($v['level']>$Maxlevel)
	{
		$Maxlevel=$v['level'];
	}
}
for($i=$Maxlevel;$i>=1;$i--)
{
	foreach($arr as $k =>$v)
	{
		if($v['level']==$i)
		{
			foreach($arr as $j => $f)
			{
				if($f['id']==$v['parent_id'])
				{
					$arr[$j]['child'][]=$v;
					unset($arr[$k]);
				}
			}
		}
	}
}

//print_r($arr);die;
$menu_id=0;
//与菜单进行关联
if(isset($_GET['menu_id']))
{
	$menu_id=intval($_GET['menu_id']);
	$smarty->assign("menu_id",intval($_GET['menu_id']));
}
else
{
	$smarty->assign("menu_id",0);
}

if(isset($_GET['parent_id']))
{
	$smarty->assign("parent_id",intval($_GET['parent_id']));
}
else
{
	$smarty->assign("parent_id",0);
}

//面包屑导航

function GetBreadCrumbs($id,$data)
{
	static $arr=array();
	if($id==0)
	{
		return false;
	}
	foreach($data as $k=>$v)
	{
		if($v['id']==$id)
		{
			$arr[]=$v;
			unset($data[$k]);
			GetBreadCrumbs($v['parent_id'],$data);
		}
	}
	return $arr;
}
$breadCrumbs=GetBreadCrumbs($menu_id, $o_arr);
if(!empty($breadCrumbs))
{
	$breadCrumbs=array_reverse($breadCrumbs);
}
$smarty->assign("breadCrumbs",$breadCrumbs);

$smarty->assign("menu_list",$arr);

?>