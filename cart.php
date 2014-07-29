<?php
define("MadMan", true);
require_once ("./inc/init_append.php");
$act = "list";
if (isset($_GET['act'])) {
	$act = $_GET['act'];
}
if ($act == "add") {
/*添加商品至购物车*/
	$id = 0;
	if (isset($_GET['id'])) {
		$id    = intval($_GET['id']);
		$goods = $db->GetRowFromTable("goods", "where id = $id");
		if (!empty($goods)) {
			if ($goods['is_on_sale'] == 0) {
				ShowTips("Sorroy,该商品已下架!");
			}
			if ($goods['is_delete'] == 1) {
				ShowTips("Sorroy,该商品不存在！");
			}
			if ($goods['goods_number'] == 0) {
				ShowTips("Sorroy,商品库存不足！");
			}
			$user_id = 0;
			if (isset($_SESSION['user_id'])) {
				$user_id = $_SESSION['user_id'];
			}
			/*合格商品 可以加入至购物车表*/
			/*暂时未加入商品属性设置*/
			$fields = array(
				"user_id"
				, "session_id"
				, "goods_id"
				, "goods_sn"
				, "goods_name"
				, "market_price"
				, "shop_price"

				, "goods_attr"
				, "thumb_img"
				, "is_groupon"
				, "shipping_free"
				, "goods_attr_id"
				, "goods_number"
			);
			$data = array(
				$user_id
				, $_SESSION['session_id']
				, $goods['id']
				, $goods['goods_sn']
				, $goods['goods_name']
				, $goods['market_price']
				, $goods['shop_price']

				, ""
				, $goods['thumb_img']
				, $goods['is_groupon']
				, $goods['shipping_free']
				, ""
				, 1
			);

			$has = $db->GetRowFromTable("carts", "where goods_id=$id and session_id='" .$_SESSION['session_id']."'");
			$res = false;
			if (!empty($has)) {
				array_pop($data);
				$data[] = intval($has['goods_number']+1);
				$res    = $db->autoExcute("carts", "id =".$has['id'], $fields, $data, "update");
			} else {
				$res = $db->autoExcute("carts", "", $fields, $data);
			}

			if ($res) {
				location("cart.php");
			} else {
				ShowTips("添加至购物车失败，请稍后重新尝试！");
			}
		}
	}

	ShowError();
} elseif ($act == "remove") {
} else {
	$sql       = "select * from carts where session_id='".$_SESSION['session_id']."'";
	$rows      = $db->getAll($sql);
	$all_price = 0;
	foreach ($rows as $key => $value) {
		$all_price += $value['goods_number']*$value['shop_price'];
	}

	$smarty->assign("rows", $rows);
	$smarty->display("tpl_cart.html");
}
