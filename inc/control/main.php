<?php
/**
 * 公共函数库
 */

/**
 * [GetConfigsFromDatabase 从数据库获取Config]
 * @param [type] $config_dbname [description]
 */
function GetConfigsFromDatabase($config_dbname) {
	$sql         = "select * from $config_dbname";
	$configs     = $GLOBALS['db']->GetAll($sql);
	$arr         = array();
	$configs_all = array();
	foreach ($configs as $key => $value) {
		$arr[$value['cf_name']]         = $value['cf_value'];
		$configs_all[$value['cf_name']] = $value;
	}
	$GLOBALS['configs']     = $arr;
	$GLOBALS['configs_all'] = $configs_all;
}
/**
 * [SetConfigsToDataBase description]
 * @param [type] $Data [description]
 */
function SetConfigsToDataBase($data) {
	$string = "";
	foreach ($GLOBALS['configs'] as $key => $value) {
		if (array_key_exists($key, $data)) {
			if ($data[$key] != $value) {
				$field  = array("cf_name", "cf_value");
				$values = array($key, $data[$key]);
				$res    = $GLOBALS['db']->AutoExcute("configs", "cf_name='$key'", $field, $values, "update");
				if ($res) {
					$GLOBALS['configs'][$key] = $data[$key];
				} else {
					$string .= $GLOBALS['configs'][$key]."设置失败 </br>";
				}
			}
		}
	}
	return $string;
}

function get_payment($code) {

	$sql     = "select * from pay_plugin where plugin_code='$code'";
	$payment = $GLOBALS['db']->getRow($sql);

	if ($payment) {
		$config_list = unserialize($payment['plugin_config']);

		$payment = $config_list;
	}

	return $payment;
}

/**
 * [IsMust 传参判断]
 * @param [type] $must_arr [需判断键值数组]
 * @param [type] $data     [$_REQUEST|$_POST|$_GET]
 */
function IsMust($must_arr, $data) {
	foreach ($must_arr as $key => $value) {
		if (!array_key_exists($value, $data)) {
			return false;
		} else {
			if ($data[$value] === "") {
				return false;
			}
		}
	}
	return true;
}

function EchoError() {
	die("Sorroy!Error Now!");
}

function EchoJson($arr, $error = "", $str = "") {
	if (!empty($error)) {
		$arr['error'] = $error;
	}
	if (!empty($str)) {
		$arr['str'] = $str;
	}
	die(json_encode($arr));
}

function GetMadMD5($string) {
	return strtolower(md5("MadMan".$string));
}

function Location($target) {
	ob_clean();
	$target = addslashes($target);
	header("location: $target");
	die();
}

function ShowTips($msg) {
	ob_clean();
	$target = "index.php?act=msg&msg=".urlencode($msg);
	header("location: $target");
	die();
}
function ShowEdit() {
	ShowTips("数据修改成功！");
}
function ShowDelete() {
	ShowTips("数据删除成功！");
}
function ShowAdd() {
	ShowTips("数据添加成功！");
}
function ShowError() {
	ShowTips("Something Wrong!");
}

/**
 * [GetRecursionList 递归排序level]
 * @param [type]  $parent_id [description]
 * @param [type]  $data      [description]
 * @param integer $level     [description]
 */
function GetRecursionList($parent_id, $data, $level = 0) {
	if (empty($data)) {
		return false;
	}
	$level++;
	static $arr = array();
	foreach ($data as $k => $v) {
		if ($v['parent_id'] == $parent_id) {
			$v['level'] = $level;
			$arr[]      = $v;
			unset($data[$k]);
			GetRecursionList($v['id'], $data, $level);
		}

	}
	return $arr;
}
/**
 * [Is_child 判断是否是目标节点的子节点]
 * @param [type] $data      [树数组]
 * @param [type] $target_id [目标节点ID]
 * @param [type] $source_id [子节点ID]
 */
function Is_child($data, $target_id, $source_id) {
	if ($target_id == 0) {
		return false;
	}

	$count = count($data);
	for ($i = $count-1; $i >= 0; $i--) {
		foreach ($data as $key => $value) {
			if ($value['id'] == $source_id) {

				if ($value['parent_id'] == $target_id) {
					return true;
				}
				if ($value['parent_id'] == 0) {
					return false;
				}
				$source_id = $value['parent_id'];
			}
		}
	}

}

/**
 * [Has_child 判断某节点下是否有子节点]
 * @param [type] $data      [节点数组]
 * @param [type] $target_id [目标ID]
 */
function Has_child($data, $target_id) {
	if ($target_id == 0) {
		return false;
	}

	foreach ($data as $key => $value) {
		if ($value['parent_id'] == $target_id) {
			return true;
		}
	}

	return false;
}
function GetRegions() {
	$db       = $GLOBALS['db'];
	$smarty   = $GLOBALS['smarty'];
	$province = $db->GetAllFromTable("region", "where region_type=1");
	$city     = $db->GetAllFromTable("region", "where region_type=2");
	$district = $db->GetAllFromTable("region", "where region_type=3");
	$smarty->assign("province", $province);
	$smarty->assign("city", $city);
	$smarty->assign("district", $district);
}
/****************javascript******************/
function JsAlert($msg) {
	$msg = addslashes($msg);
	$str = "<script type='text/javascript'>"
	."alert('".$msg."');"
	."</script>";
	echo $str;
}
function JsAlertAndJump($msg, $target) {
	$msg    = addslashes($msg);
	$target = addslashes($target);
	$str    = "<script type='text/javascript'>"
	."alert('".$msg."');"
	."window.location.href='$target';"
	 ."</script>";
	echo $str;
	die();

}
function JsJump($target) {
	$target = addslashes($target);
	$str    = "<script type='text/javascript'>"
	."window.location.href='$target';"
	 ."</script>";
	echo $str;
	die();
}

?>