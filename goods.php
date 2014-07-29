<?php
define("MadMan", true);
require_once ("./inc/init_append.php");

$id = 0;
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}

if (empty($id)) {
	location("index.php");
}

$goods = $db->GetRowFromTable("goods", "where id = $id and is_delete = 0");
if (empty($goods)) {
	location("index.php");
}
$discount = $goods['shop_price']/$goods['market_price']*10;
$smarty->assign("discount", $discount);
$smarty->assign("goods", $goods);
$smarty->display("tpl_item.html");