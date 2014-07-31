<?php

/**
 * MadCms 客户端注册
 * ============================================================================
 *
 *
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:		 wang <wang@dearmadman.com>
 * @version:	 v1.0
 * @date:		 2014-07-30 11:09:17
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
if ($act == "register") {
	$must = array("user_name", "user_email", "user_word", "verification");
	if (IsMust($must, $_POST)) {
		if (strtolower($_POST['verification']) != strtolower($_SESSION['verification'])) {
			ShowTips("验证码错误，请重新输入！");
		}
		$user_name  = trim($_POST['user_name']);
		$user_email = trim($_POST['user_email']);
		$user_word  = trim($_POST['user_word']);
		$row        = $db->getRowFromTable("users", "where user_name='$user_name' or user_email='$user_email' ");
		if (!empty($row)) {
			ShowTips("Sorroy,该用户名或邮箱已经被注册，请更改后尝试！");
		}
		$user     = new User($db);
		$vali_arr = $user->ListenFields($_POST);
		$target   = $user->getTarget($_POST);
		$va       = new formvalidation();
		$res      = $va->validation($vali_arr, $target);
		if (!$res) {
			$msg = $va->getErrorMsg();
			$msg = $msg['key'].":".$msg['msg'];
			ShowTips($msg);
		} else {
			/*新增用户*/
			array_pop($must);
			$must[] = "reg_time";
			$must[] = "last_login";
			$must[] = "last_ip";
			$data   = array($user_name, $user_email, GetMadMD5($user_word), time(), time(), $_SERVER["REMOTE_ADDR"]);
			$res    = $user->add($must, $data);
			if (!empty($res)) {
				$_SESSION['user_id'] = $res['id'];
				unset($_SESSION['verification']);
				location("user.php");
			}
		}

	}
	ShowError();
} else {
	$smarty->display("tpl_register.html");
}

?>