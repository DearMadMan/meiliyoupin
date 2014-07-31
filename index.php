<?php

/**
 * MadCms 客户端首页
 * ============================================================================
 *
 *
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:		 wang <wang@dearmadman.com>
 * @version:	 v1.0
 * @date:		 2014-07-30 08:53:01
 */
define("MadMan", true);
require_once ("inc/init_append.php");

$act = "";
if (isset($_REQUEST['act'])) {
	$act = $_REQUEST['act'];
}

if ($act == "msg") {
	$msg = $_REQUEST['msg'];
	$msg = urldecode($msg);
	$smarty->assign("msg", $msg);
	$smarty->display("tips.mad");
	die;
}

/*获取商品数据*/
$time  = time();
$goods = $db->getAllFromTable("goods", "where is_delete=0 and is_groupon=1 and is_on_sale=1 and groupon_start_time<$time and groupon_end_time>$time");
$smarty->assign("goods", $goods);
$smarty->display("tpl_index.html");

?>