<?php
define("MadMan", true);
require_once ("init.php");
$act = "";
if (isset($_REQUEST['act'])) {
	$act = $_REQUEST['act'];
}

if ($act == "site_info") {
	$smarty->display("site.mad");
} elseif ($act == "msg") {
	$msg = urldecode($_REQUEST["msg"]);
	$GLOBALS['smarty']->assign("title", "");
	$GLOBALS['smarty']->assign("tips", $msg);
	$GLOBALS['smarty']->display("tips.mad");
} elseif ($act == "nav") {
	$sql     = "select * from nav order by z_index desc";
	$navlist = $db->getAll($sql);
	$smarty->assign("navlist", $navlist);
	$smarty->display("nav.mad");
} elseif ($act == "focus_picture") {
	$sql     = "select * from focus_picture order by pic_index desc";
	$piclist = $db->getAll($sql);
	$smarty->assign("piclist", $piclist);
	$smarty->display("focus_picture.mad");
} elseif ($act == "article_list") {

	$pagetool = pagetool::GetInstance();
	if (!isset($_GET['pageNow'])) {

		$_GET['pageNow'] = 0;
	}
	$pageNow  = intval($_GET['pageNow']);
	$pagePath = 'index.php?act=article_list';
	$dfNum    = 20;
	$sql      = "select a.*,b.type_name from articles as a left join article_type as b on a.type_id=b.id order by a.id desc";
	$db       = $GLOBALS['db'];
	$pagetool->setNeed($db, $sql, $dfNum, $pageNow, $pagePath, "a.id");
	$res = $pagetool->getAll();
	if (!empty($res)) {
		$smarty->assign("article_list", $res['res']);
		$smarty->assign("pre", $res['pre']);
		$smarty->assign("next", $res['next']);
		$smarty->assign("more", $res['more']);
		$smarty->assign("last", $res['last']);
		$smarty->assign("now", $res['now']);

	} else {
		$smarty->assign("article_list", array());
	}

	$smarty->display("article_list.mad");
} elseif ($act == "article_edit") {
	$id = 0;
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
	}
	$sql = "select * from articles where id='$id'";
	$res = $db->GetRow($sql);
	if (empty($res)) {
		ShowTips("该文章不存在,请重新尝试!");
	}

	$type_list = GetArticleTypeList();

	$smarty->assign("type_list", $type_list);
	$smarty->assign("article", $res);
	$smarty->display("article_edit.mad");
} elseif ($act == "article_add") {

	$type_list = GetArticleTypeList();
	$smarty->assign("type_list", $type_list);
	$smarty->display("article_add.mad");
} elseif ($act == "article_delete") {
	$must = array("id");
	if (IsMust($must, $_GET)) {
		if (DeleteRowFromTable("articles", "id", intval($_GET['id']))) {
			ShowTips("文章删除成功！");
		}
	}

} elseif ($act == "article_type_delete") {
	$must = array("id");
	if (IsMust($must, $_GET)) {
		if (DeleteRowFromTable("article_type", "id", intval($_GET['id']))) {
			ShowTips("文章分类删除成功！");
		}
	}
} elseif ($act == "article_type_list") {
	$type_list = GetArticleTypeList();
	$smarty->assign("type_list", $type_list);
	$smarty->display("article_type_list.mad");
} elseif ($act == "article_type_add") {
	$smarty->display("article_type_add.mad");
} elseif ($act == "article_type_edit") {
	$type_id = 0;
	$must    = array("id");
	if (IsMust($must, $_REQUEST)) {
		$type_id = intval($_REQUEST['id']);
		$article = $db->GetRowFromTable("article_type", "where id=$type_id");
		if (empty($article)) {
			ShowTips("该分类不存在！");
		}

		$smarty->assign("article", $article);
	}
	$smarty->display("article_type_edit.mad");
} elseif ($act == "product_list") {
	$pagetool = pagetool::GetInstance();
	if (!isset($_GET['pageNow'])) {

		$_GET['pageNow'] = 0;
	}
	$pageNow  = intval($_GET['pageNow']);
	$pagePath = 'index.php?act=product_list';
	$dfNum    = 20;
	$sql      = "select a.*,b.type_name from product as a left join product_type as b on a.type_id=b.id order by a.id desc";
	$db       = $GLOBALS['db'];
	$pagetool->setNeed($db, $sql, $dfNum, $pageNow, $pagePath, "a.id");
	$res = $pagetool->getAll();
	if (!empty($res)) {
		$smarty->assign("product_list", $res['res']);
		$smarty->assign("pre", $res['pre']);
		$smarty->assign("next", $res['next']);
		$smarty->assign("more", $res['more']);
		$smarty->assign("last", $res['last']);
		$smarty->assign("now", $res['now']);

	} else {
		$smarty->assign("product_list", array());
	}

	$smarty->display("product_list.mad");
} elseif ($act == "product_add") {
	$type_list = GetProductTypeList();
	$smarty->assign("type_list", $type_list);
	$smarty->display("product_add.mad");
} elseif ($act == "product_type_list") {
	$type_list = GetProductTypeList();
	$smarty->assign("type_list", $type_list);
	$smarty->display("product_type_list.mad");
} elseif ($act == "product_type_add") {
	$smarty->display("product_type_add.mad");
} elseif ($act == "product_type_edit") {
	$type_id = 0;
	$must    = array("id");
	if (IsMust($must, $_REQUEST)) {
		$type_id = intval($_REQUEST['id']);
		$product = $db->GetRowFromTable("product_type", "where id=$type_id");
		if (empty($product)) {
			ShowTips("该分类不存在！");
		}

		$smarty->assign("product", $product);
	}
	$smarty->display("product_type_edit.mad");
} elseif ($act == "product_type_delete") {
	$must = array("id");
	if (IsMust($must, $_GET)) {
		if (DeleteRowFromTable("product_type", "id", intval($_GET['id']))) {
			ShowTips("产品分类删除成功！");
		}
	}
} elseif ($act == "product_edit") {
	$id = 0;
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
	}
	$sql = "select * from product where id='$id'";
	$res = $db->GetRow($sql);
	if (empty($res)) {
		ShowTips("该产品不存在,请重新尝试!");
	}

	$type_list = GetProductTypeList();

	$smarty->assign("type_list", $type_list);
	$smarty->assign("product", $res);
	$smarty->display("product_edit.mad");
} elseif ($act == "product_delete") {
	$must = array("id");
	if (IsMust($must, $_GET)) {
		if (DeleteRowFromTable("product", "id", intval($_GET['id']))) {
			ShowTips("产品删除成功！");
		}
	}

} elseif ($act == "message") {
	$pagetool = pagetool::GetInstance();
	if (!isset($_GET['pageNow'])) {

		$_GET['pageNow'] = 0;
	}
	$pageNow  = intval($_GET['pageNow']);
	$pagePath = 'index.php?act=message';
	$dfNum    = 20;
	$sql      = "select * from msg order by add_time desc";
	$db       = $GLOBALS['db'];
	$pagetool->setNeed($db, $sql, $dfNum, $pageNow, $pagePath, "id");
	$res = $pagetool->getAll();
	if (!empty($res)) {
		$smarty->assign("messagelist", $res['res']);
		$smarty->assign("pre", $res['pre']);
		$smarty->assign("next", $res['next']);
		$smarty->assign("more", $res['more']);
		$smarty->assign("last", $res['last']);
		$smarty->assign("now", $res['now']);

	} else {
		$smarty->assign("article_list", array());
	}

	$smarty->display("message.mad");
} elseif ($act == "goods_add") {
	$gallery_list = array();
	if (isset($_SESSION['goods_add']['gallery_thumb'])) {
		foreach ($_SESSION['goods_add']['gallery_thumb'] as $key => $value) {
			if (!file_exists($value)) {
				//未查找到的文件清除SESSION
				unset($_SESSION['goods_add']['gallery_thumb'][$key]);
			}
		}
		$gallery_list = $_SESSION['goods_add']['gallery_thumb'];
	}

	//商品属性
	$attr_list = array();
	if (isset($_SESSION['goods_add']['attr'])) {
		$attr_list = $_SESSION['goods_add']['attr'];
	}

	//商品分类
	$types = $db->getAllFromTable("goods_type");
	//商品货号
	$sql      = "select count(id) from goods";
	$goods_sn = $db->getOne($sql);
	$goods_sn = "MAD".str_pad($goods_sn, 8, "0", STR_PAD_LEFT);

	$smarty->assign("goods_sn", $goods_sn);
	$smarty->assign("types", $types);
	$smarty->assign("gallery_list", $gallery_list);//已经上传但为保存的图片
	$smarty->assign("attr_list", $attr_list);
	$smarty->display("goods_add.mad");
} elseif ($act == "goods_edit") {
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);
		if (!empty($id)) {
			$row = $db->GetRowFromTable("goods", "where id=$id");
			if (!empty($row)) {
				//商品分类
				$types = $db->getAllFromTable("goods_type");

				//商品相册
				$sql          = "select * from goods_gallery where goods_id=$id";
				$gallery_list = $db->getAll($sql);

				//商品属性
				$sql       = "select * from goods_attr where goods_id=$id";
				$attr_list = $db->getAll($sql);

				//团购时间
				if (!empty($row['groupon_start_time'])) {
					$groupon_start_time        = $row['groupon_start_time'];
					$groupon_start_time        = date("d-m-Y", $groupon_start_time);
					$row['groupon_start_time'] = $groupon_start_time;
				}

				if (!empty($row['groupon_end_time'])) {
					$groupon_end_time        = $row['groupon_end_time'];
					$groupon_end_time        = date("d-m-Y", $groupon_end_time);
					$row['groupon_end_time'] = $groupon_end_time;
				}

				$smarty->assign("attr_list", $attr_list);
				$smarty->assign("gallery_list", $gallery_list);
				$smarty->assign("goods", $row);
				$smarty->assign("types", $types);
				$smarty->display("goods_edit.mad");
				die();
			}
		}

	}
	ShowTips("Something Wrong!");
} elseif ($act == "goods_type_list") {
	$sql  = "select * from goods_type";
	$rows = $db->getAll($sql);
	$arr  = GetRecursionList(0, $rows);

	$smarty->assign("rows", $arr);
	$smarty->display("goods_type_list.mad");
} elseif ($act == "goods_type_add") {
	$sql  = "select * from goods_type";
	$rows = $db->getAll($sql);
	$smarty->assign("rows", $rows);
	$smarty->display("goods_type_add.mad");
} elseif ($act == "goods_type_edit") {
	$id = 0;
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
	}
	$sql = "select * from goods_type where id='$id'";
	$res = $db->GetRow($sql);
	if (empty($res)) {
		ShowTips("该分类不存在,请重新尝试!");
	}
	$sql  = "select * from goods_type";
	$rows = $db->getAll($sql);
	$smarty->assign("rows", $rows);
	$smarty->assign("type", $res);
	$smarty->display("goods_type_edit.mad");
} elseif ($act == "goods_type_delete") {
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);
		if ($id != 0) {
			$row = $db->GetRowFromTable("goods_type", "where id=$id");
			if (empty($row)) {
				ShowTips("分类不存在！");
			}
			$types = $db->getAllFromTable("goods_type");
			if (has_child($types, $id)) {
				ShowTips("该分类下存在子分类，请先转移其子分类！");
			}
			$sql = "delete from goods_type where id=$id";
			$db->Query($sql);
			if ($db->GetAffectedRows() > 0) {
				ShowTips("删除分类成功！");
			} else {
				ShowTips("删除分类失败！请稍后重新尝试！");
			}
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "goods_list") {
	$pagetool = pagetool::GetInstance();
	if (!isset($_GET['pageNow'])) {

		$_GET['pageNow'] = 0;
	}
	$pageNow  = intval($_GET['pageNow']);
	$pagePath = 'index.php?act=goods_list';
	$dfNum    = 20;
	$sql      = "select * from goods where is_delete=0 order by add_time desc";

	if (isset($_POST['search'])) {
		$search = trim($_POST['search']);
		if (!empty($search)) {
			$sql      = "select * from goods where is_delete=0 and goods_name like '%$search%' order by add_time desc";
			$pagePath = $pagePath."&search=$search";
		}
	}

	$db = $GLOBALS['db'];
	$pagetool->setNeed($db, $sql, $dfNum, $pageNow, $pagePath, "id");
	$res = $pagetool->getAll();
	if (!empty($res)) {
		$smarty->assign("goods_list", $res['res']);
		$smarty->assign("pre", $res['pre']);
		$smarty->assign("next", $res['next']);
		$smarty->assign("more", $res['more']);
		$smarty->assign("last", $res['last']);
		$smarty->assign("now", $res['now']);

	} else {
		$smarty->assign("goods_list", array());
	}

	$smarty->display("goods_list.mad");
} elseif ($act == "goods_delete") {
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);
		if (!empty($id)) {
			$fields = array("is_delete");
			$data   = array(1);
			$res    = $db->autoExcute("goods", "id=$id", $fields, $data, "update");
			if ($res) {
				ShowTips("商品删除成功！");
			}
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "goods_recycle") {
	$pagetool = pagetool::GetInstance();
	if (!isset($_GET['pageNow'])) {

		$_GET['pageNow'] = 0;
	}
	$pageNow  = intval($_GET['pageNow']);
	$pagePath = 'index.php?act=goods_recycle';
	$dfNum    = 20;
	$sql      = "select * from goods where is_delete=1 order by add_time desc";
	$db       = $GLOBALS['db'];
	$pagetool->setNeed($db, $sql, $dfNum, $pageNow, $pagePath, "id");
	$res = $pagetool->getAll();
	if (!empty($res)) {
		$smarty->assign("goods_list", $res['res']);
		$smarty->assign("pre", $res['pre']);
		$smarty->assign("next", $res['next']);
		$smarty->assign("more", $res['more']);
		$smarty->assign("last", $res['last']);
		$smarty->assign("now", $res['now']);

	} else {
		$smarty->assign("goods_list", array());
	}

	$smarty->display("goods_recycle.mad");
} elseif ($act == "users_level_add") {
	$smarty->display("users_level_add.mad");
} elseif ($act == "users_level_list") {
	$sql = "select * from user_level";
	GetPageList("index.php?act=users_level_list", $sql, "id", $list_name = "users_level_list");
	$smarty->display("users_level_list.mad");
} elseif ($act == "users_level_edit") {

	$row = GetSomethingFromTable("user_level");

	if (!empty($row)) {
		$smarty->assign("row", $row);
		$smarty->display("users_level_edit.mad");
		die;
	}
	ShowError();
} elseif ($act == "users_level_delete") {
	$res = DeleteSometingToTable("user_level");
	if ($res) {
		ShowTips("数据删除成功！");
	}
	ShowError();
} elseif ($act == "users_add") {
	$types = $db->getAllFromTable("user_level");
	$smarty->assign("types", $types);
	$smarty->display("users_add.mad");
} elseif ($act == "users_edit") {
	$id = 0;
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
	}
	if (empty($id)) {
		ShowError();
	}

	$row = $db->GetRowFromTable("users", "where id=$id");
	if (empty($row)) {
		ShowError();
	}
	$referrer_name = "";
	if (!empty($row['referrer_id'])) {
		$ref = $db->GetRowFromTable("users", "where id=".$row['referrer_id']);
		if (!empty($ref)) {
			$referrer_name = $ref['user_name'];
		}
	}
	if (!empty($row['birthday'])) {
		$row['birthday'] = date("d-m-Y", $row['birthday']);

	}
	$row['referrer_name'] = $referrer_name;
	$smarty->assign("row", $row);
	$smarty->display("users_edit.mad");
} elseif ($act == "users_list") {
	$sql = "select * from users order by id desc";
	if (isset($_REQUEST['search'])) {
		$sql = "select * from users where user_name like '%".$_REQUEST['search']."%' order by id desc";
	}
	GetPageList("index.php?act=users_list", $sql, "id", $list_name = "users_list");
	$smarty->display("users_list.mad");
} elseif ($act == "users_delete") {
	$res = DeleteSometingToTable("users");
	if ($res) {
		ShowDelete();
	}
	ShowError();
} elseif ($act == "shipping_type") {
	$res = $db->getAllFromTable("shipping_type");
	$smarty->assign("shipping_type_list", $res);
	$smarty->display("shipping_type_list.mad");
} elseif ($act == "shipping_type_add") {
	$smarty->display("shipping_type_add.mad");
} elseif ($act == "shipping_type_edit") {
	$row = GetSomethingFromTable("shipping_type");
	if (!empty($row)) {
		$smarty->assign("row", $row);
		$smarty->display("shipping_type_edit.mad");
		die;
	}
	ShowError();
} elseif ($act == "shipping_type_delete") {

	if (DeleteSometingToTable("shipping_type")) {
		ShowDelete();
	}
	ShowError();
} elseif ($act == "shipping_area_list") {
	$id       = intval($_GET['id']);
	$shipping = $db->GetRowFromTable("shipping_type", "where id=$id");
	if (!empty($shipping)) {
		$areas = $db->getAll("select * from shipping_area where shipping_id=$id");
		$smarty->assign("shipping_type_id", $id);
		$smarty->assign("area_list", $areas);

		/*注册插件*/
		$smarty->registerPlugin("function", "GetAreaString", "GetAreaString");
		$smarty->display("shipping_area_list.mad");
		die;
	}
	ShowError();
} elseif ($act == "shipping_area_add") {
	$id = 0;
	if (isset($_GET['shipping_id'])) {
		$id = intval($_GET['shipping_id']);
	}
	if (empty($id)) {
		ShowError();
	}

	GetRegions();
	$smarty->assign("shipping_type_id", $id);
	$smarty->display("shipping_area_add.mad");
} elseif ($act == "shipping_area_edit") {

	$id = 0;
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);
	}
	if (empty($id)) {
		ShowError();
	}
	$row = $db->GetRowFromTable("shipping_area", "where id=$id");
	if (empty($row)) {
		ShowError();
	}
	$area_config = $row["configure"];
	$area_config = unserialize($area_config);
	GetRegions();
	$smarty->assign("row", $row);
	$smarty->assign("area_config", $area_config);
	$smarty->registerPlugin("function", "GetAreaRegionIdString", "GetAreaRegionIdString");
	$smarty->assign("shipping_area_id", $id);
	$smarty->display("shipping_area_edit.mad");

} else if ($act == "shipping_area_delete") {
	if (DeleteSometingToTable("shipping_area")) {
		ShowDelete();
	}
	ShowError();
} else {
	$smarty->display("index.mad");
}

function GetSomethingFromTable($table) {
	$row = '';
	$db  = $GLOBALS['db'];
	$id  = "";
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
	}
	if (!empty($id)) {
		$row = $db->GetRowFromTable($table, "where id=$id");
	}
	return $row;
}

function DeleteSometingToTable($table) {
	$row = false;
	$db  = $GLOBALS['db'];
	$id  = "";
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
	}
	if (!empty($id)) {
		$row = $db->autoExcute($table, "id=$id");
	}
	return $row;
}

function GetAreaString($params, $smarty) {
	$db      = $GLOBALS['db'];
	$sql     = "select r.region_name from area_region as a left join region as r on a.region_id=r.id where shipping_area_id=".$params['shipping_area_id'];
	$arr     = $db->GetAll($sql);
	$str_arr = array();
	foreach ($arr as $key => $value) {
		$str_arr[] = $value['region_name'];
	}
	$str = implode(",", $str_arr);
	return $str;

}

function GetAreaRegionIdString($params, $smarty) {
	$db      = $GLOBALS['db'];
	$sql     = "select r.id from area_region as a left join region as r on a.region_id=r.id where shipping_area_id=".$params['shipping_area_id'];
	$arr     = $db->GetAll($sql);
	$str_arr = array();
	foreach ($arr as $key => $value) {
		$str_arr[] = $value['id'];
	}
	$str = implode(",", $str_arr);
	return $str;

}

function GetPageList($target, $sql, $field, $list_name = "lists", $num = 20) {
	$smarty   = $GLOBALS['smarty'];
	$pagetool = pagetool::GetInstance();
	if (!isset($_GET['pageNow'])) {

		$_GET['pageNow'] = 0;
	}
	$pageNow  = intval($_GET['pageNow']);
	$pagePath = $target;
	$dfNum    = $num;
	$db       = $GLOBALS['db'];
	$pagetool->setNeed($db, $sql, $dfNum, $pageNow, $pagePath, $field);
	$res = $pagetool->getAll();
	if (!empty($res)) {
		$smarty->assign($list_name, $res['res']);
		$smarty->assign("pre", $res['pre']);
		$smarty->assign("next", $res['next']);
		$smarty->assign("more", $res['more']);
		$smarty->assign("last", $res['last']);
		$smarty->assign("now", $res['now']);

	} else {
		$smarty->assign($list_name, array());
	}

}

?>