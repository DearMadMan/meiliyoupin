<?php
/**
 * conpany.php
 *
 * 企业web版本通用函数库
 *
 *
 */

function GetArticleTypeList()
{
    $sql="select * from article_type";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}
function GetProductTypeList()
{
    $sql="select * from product_type";
    $res=$GLOBALS['db']->getAll($sql);
    return $res;
}
function DeleteRowFromTable($table,$id,$data)
{
	$db=$GLOBALS['db'];
	$sql="delete from $table where $id=$data";
	$res=$db->query($sql);
	if($db->getAffectedRows()>0)
	{
		return true;
	}
	return false;
}

//二叉树递归
 function GetMenuList($parent_id,$data,$level=0)
{
	if(empty($data))
	{
		return false;
	}
	$level++;
 	static $arr=array();
	foreach($data as $k=>$v)
	{
		if($v['parent_id']==$parent_id)
		{
			$v['level']=$level;
			$arr[]=$v;
			unset($data[$k]);
			GetMenuList($v['id'], $data,$level);
		}
 
	}
	return $arr;
}


?>