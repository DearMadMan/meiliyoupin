<?php

/**
 * MadCms 客户端登录
 * ============================================================================
 *
 *
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:		 wang <wang@dearmadman.com>
 * @version:	 v1.0
 * @date:		 2014-07-30 11:03:08
 */

define("MadMan", true);
require_once ("inc/init.php");
$act = "";
if (isset($_REQUEST['act'])) {
	$act = $_REQUEST['act'];
}
if (isset($_SESSION['user_id'])) {
	location("index.php");
}
if ($act == "login") {

	$must = array("user_name", "user_word");
	if (IsMust($must, $_POST)) {
		$user_name = $_POST['user_name'];
		$user_word = GetMadMD5($_POST['user_word']);
		$row       = $db->getRowFromTable("users", "where user_name='$user_name' or user_email='$user_name' and user_word='$user_word'");
		if (!empty($row)) {
			$_SESSION['user_id'] = $row['id'];
			if (isset($_POST["remember"])) {
				setcookie("UMAD", $row['id']."|".GetMadMD5($row['user_name'].$row['user_email']), time()+60*60*24*7);
			}
			location("user.php");
		}
	}
	ShowTips("用户名不存在或用户名与密码不匹配！");
} else {
	$smarty->display("tpl_login.html");
}

?>