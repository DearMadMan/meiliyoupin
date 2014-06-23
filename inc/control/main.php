<?php
/**
 * 公共函数库
 */

/**
 * [GetConfigsFromDatabase 从数据库获取Config]
 * @param [type] $config_dbname [description]
 */
 function GetConfigsFromDatabase($config_dbname)
{
	$sql="select * from $config_dbname";
	$configs=$GLOBALS['db']->GetAll($sql);
	$arr=array();
	$configs_all=array();
	foreach ($configs as $key => $value) {
		$arr[$value['cf_name']]=$value['cf_value'];
		$configs_all[$value['cf_name']]=$value;
	}
	$GLOBALS['configs'] = $arr;
	$GLOBALS['configs_all']=$configs_all;
}
/**
 * [SetConfigsToDataBase description]
 * @param [type] $Data [description]
 */
function SetConfigsToDataBase($data)
{
	$string="";
	foreach ($GLOBALS['configs'] as $key => $value) {
			if(array_key_exists($key,$data))
			{
				if($data[$key]!=$value)
				{
					$field=array("cf_name","cf_value");
					$values=array($key,$data[$key]);
					$res=$GLOBALS['db']->AutoExcute("configs","cf_name='$key'",$field,$values,"update");
					if($res)
					{
						$GLOBALS['configs'][$key] =$data[$key];
					}
					else
					{
						$string.=$GLOBALS['configs'][$key]."设置失败 </br>";
					}
				}
			}
	}
   return $string;
}

/**
 * [IsMust 传参判断]
 * @param [type] $must_arr [需判断键值数组]
 * @param [type] $data     [$_REQUEST|$_POST|$_GET]
 */
function IsMust($must_arr,$data)
{
    foreach ($must_arr as $key => $value) {
        if(!array_key_exists($value,$data))
          {
              return false;
          }
          else
          {
          	if($data[$value]=="")
          	{
          		return false;
          	}
          }
    }
    return true;
}

function EchoError()
{
  die("Sorroy!Error Now!");
}

function EchoJson($arr,$error="",$str="")
{
	if(!empty($error))
	{
		$arr['error']=$error;
	}
	if(!empty($str))
	{
		$arr['str']=$str;
	}
	die(json_encode($arr));
}



function GetMadMD5($string)
{
  return strtolower(md5("MadMan".$string));
}

function Location($target)
{
	ob_clean();
	$target=addslashes($target);
	header("location: $target");
	die();
}

function ShowTips($msg)
{
	$GLOBALS['smarty']->assign("title","");
	$GLOBALS['smarty']->assign("tips",$msg);
	$GLOBALS['smarty']->display("tips.mad");
	die();
}



/****************javascript******************/
function JsAlert($msg)
{
	$msg=addslashes($msg);
	$str="<script type='text/javascript'>"
		."alert('".$msg."');"
		."</script>";
		echo $str;
}
function JsAlertAndJump($msg,$target)
{
	$msg=addslashes($msg);
	$target=addslashes($target);
	$str="<script type='text/javascript'>"
		."alert('".$msg."');"
		."window.location.href='$target';"
		."</script>";
		echo $str;
		die();

}
function JsJump($target)
{
		$target=addslashes($target);
		$str="<script type='text/javascript'>"
		."window.location.href='$target';"
		."</script>";
		echo $str;
		die();
}

?>