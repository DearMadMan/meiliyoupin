<?php
define("MadMan", true);
require_once ("init.php");
$act = "";
if (isset($_REQUEST['act'])) {
	$act = $_REQUEST['act'];
}
if ($act == "login") {

	$must = array("user_name", "user_word");
	if (!IsMust($must, $_POST)) {
		EchoError();
	}

	$user_name = $_POST['user_name'];
	$user_word = $_POST['user_word'];
	if (empty($user_word) || empty($user_name)) {
		EchoError();
	}

	$user_word = GetMadMD5($user_word);

	$admin = $db->GetRowFromTable("admin", "where user_name='$user_name' and user_word='$user_word'");
	if (empty($admin)) {
		JsAlertAndJump("用户名密码错误", "index.php");
	} else {
		$_SESSION['admin_id'] = $admin['id'];
		location("index.php");
	}
} elseif ($act == "site_edit") {

	if ($_FILES['logo']["error"] == 0) {
		uploadfile::SetTempDir("../images/");
		$file_data_type = array("jpg",
			"gif",
			"png");
		uploadfile::Init("", 2048, $file_data_type, "", "");
		$upload = uploadfile::UploadFiles($_FILES);
		if (uploadfile::Success()) {
			$_POST['logo'] = $upload[0];
		} else {
			die($upload);
		}

	} else {
		if ($_FILES['logo']["error"] != 4) {
			ShowTips("只允许上传jpg,png,gif格式大小1M以内的图片！");
		}

	}
	$res = SetConfigsToDataBase($_POST);
	if (empty($res)) {
		ShowTips("站点更新成功！");
	} else {
		ShowTips($res);
	}
} elseif ($act == "upload_image") {
	uploadfile::SetTempDir("../images/");
	$file_data_type = array("jpg", "jpeg", "bmp", "gif", "png");
	uploadfile::Init("", 4096, $file_data_type);
	$upload = uploadfile::UploadFiles($_FILES);
	if (uploadfile::success()) {

		//判断是否需要进行压缩处理
		if (isset($_REQUEST['need_compress'])) {
			if ($_REQUEST['need_compress'] == 1) {
				$arr = array(
					"width"        => $gbs["configs"]['thumb_width'],
					"height"       => $gbs["configs"]['thumb_height'],
					"jpeg_quality" => 90,
					"watermark"    => false
				);
				imagetool::InitFromArray($arr);
				$thumb = imagetool::GetImageFromString($upload[0], "thumb");
				$arr   = array(
					"width"  => $gbs["configs"]['show_width'],
					"height" => $gbs["configs"]['show_height']
				);
				imagetool::InitFromArray($arr);
				$img = imagetool::GetImageFromString($upload[0], "img");
			}
		}

		echo $upload[0];
	} else {
		echo "error";
	}
} elseif ($act == "article_add") {
	$must = array("type_id", "title", "content");

	if (isMust($must, $_POST)) {
		$must[] = "add_time";
		$data   = array(
			intval($_POST['type_id']),
			$_POST['title'],
			$_POST['content'],
			time()
		);
		$res = $db->autoExcute("articles", "", $must, $data);
		if ($res) {
			ShowTips("文章发布成功！");
		} else {
			ShowTips("文章发布失败！请稍后重新尝试！");
		}
	} else {
		ShowTips("发布文章失败，请尝试添加正确的内容！");
	}
} elseif ($act == "article_edit") {
	$must = array("id", "type_id", "title", "content");

	if (IsMust($must, $_POST)) {
		$must[] = "add_time";
		$data   = array(
			intval($_POST['id']),
			intval($_POST['type_id']),
			$_POST['title'],
			$_POST['content'],
			time()
		);
		$res = $db->autoExcute("articles", " id=".intval($_POST['id']), $must, $data, "update");
		if ($res) {
			ShowTips("文章更新成功！");
		}
	}
	ShowTips("文章更新失败！请稍后尝试！");
} elseif ($act == "article_type_add") {
	$must = array("type_name");
	if (IsMust($must, $_POST)) {
		$data = array($_POST['type_name']);
		$res  = $db->autoExcute("article_type", "", $must, $data);
		if ($res) {
			ShowTips("文章分类添加成功！");
		}
	}
	ShowTips("srroy!Error Now!");
} elseif ($act == "article_type_edit") {
	$must = array("id", "type_name");
	if (IsMust($must, $_POST)) {
		$data = array(
			intval($_POST['id']),
			$_POST['type_name']
		);
		$res = $db->autoExcute("article_type", "id=".intval($_POST['id']), $must, $data, "update");
		if ($res) {
			ShowTips("文章分类修改成功！");
		} else {
			ShowTips("文章分类修改失败！请稍后尝试！");
		}
	}
	ShowTips("srroy!Error Now!");
} elseif ($act == "product_type_add") {
	$must = array("type_name");
	if (IsMust($must, $_POST)) {
		$data = array($_POST['type_name']);
		$res  = $db->autoExcute("product_type", "", $must, $data);
		if ($res) {
			ShowTips("产品分类添加成功！");
		}
	}
	ShowTips("srroy!Error Now!");
} elseif ($act == "product_type_edit") {
	$must = array("id", "type_name");
	if (IsMust($must, $_POST)) {
		$data = array(
			intval($_POST['id']),
			$_POST['type_name']
		);
		$res = $db->autoExcute("product_type", "id=".intval($_POST['id']), $must, $data, "update");
		if ($res) {
			ShowTips("产品分类修改成功！");
		} else {
			ShowTips("产品分类修改失败！请稍后尝试！");
		}
	}
	ShowTips("srroy!Error Now!");
} elseif ($act == "product_add") {
	$must = array("type_id", "product_name", "product_dis", "product_imgurl");

	if (isMust($must, $_POST)) {
		$must[] = "add_time";
		$data   = array(
			intval($_POST['type_id']),
			$_POST['product_name'],
			$_POST['product_dis'],
			$_POST['product_imgurl'],
			time()
		);
		$res = $db->autoExcute("product", "", $must, $data);
		if ($res) {
			ShowTips("产品发布成功！");
		} else {
			ShowTips("产品发布失败！请稍后重新尝试！");
		}
	} else {
		ShowTips("发布产品失败，请尝试添加正确的内容！");
	}
} elseif ($act == "product_edit") {
	$must = array("id", "type_id", "product_name", "product_dis", "product_imgurl");

	if (IsMust($must, $_POST)) {
		array_shift($must);

		$must[] = "add_time";
		$data   = array(
			intval($_POST['type_id']),
			$_POST['product_name'],
			$_POST['product_dis'],
			$_POST['product_imgurl'],
			time()
		);
		$res = $db->autoExcute("product", " id=".intval($_POST['id']), $must, $data, "update");
		if ($res) {
			ShowTips("产品更新成功！");
		}
	}
	ShowTips("产品更新失败！请稍后尝试！");
} elseif ($act == "goods_add") {

	$must = array("goods_name", "goods_sn", "type_id", "goods_number", "goods_weight", "shop_price", "market_price");

	if (IsMust($must, $_POST)) {
		$is_groupon = false;
		$start_time = "";
		$end_time   = "";
		if (isset($_POST['is_groupon'])) {
			if ($_POST['is_groupon'] == "on") {
				$is_groupon = true;
				$start_time = strtotime($_POST['groupon_start_time']);
				$end_time   = strtotime($_POST['groupon_end_time']);
			}

		}
		//写入商品表
		$thumb_img    = "";
		$goods_img    = "";
		$original_img = "";
		if (!empty($_POST['goods_img']))//原始图片
		{
			$original_img = $_POST['goods_img'];
			$temp_name    = substr($original_img, strripos($original_img, "/")+1);
			$temp_dir     = substr($original_img, 0, strripos($original_img, "/")+1);
			if (file_exists($temp_dir."img_".$temp_name)) {
				$goods_img = $temp_dir."img_".$temp_name;
			}
			if (file_exists($temp_dir."thumb_".$temp_name)) {
				$thumb_img = $temp_dir."thumb_".$temp_name;
			}
		}

		$must[] = "goods_brief";
		$must[] = "goods_desc";
		$must[] = "thumb_img";
		$must[] = "goods_img";
		$must[] = "original_img";
		$must[] = "add_time";
		$data   = array(
			$_POST['goods_name'],
			$_POST['goods_sn'],
			intval($_POST['type_id']),
			intval($_POST['goods_number']),
			intval($_POST['goods_weight']),
			floatval($_POST['shop_price']),
			floatval($_POST['market_price']),
			$_POST['goods_brief'],
			$_POST['goods_desc'],
			$thumb_img,
			$goods_img,
			$original_img,
			time()
		);

		//团购判断
		if ($is_groupon) {
			$must[] = "is_groupon";
			$must[] = "groupon_start_time";
			$must[] = "groupon_end_time";

			$data[] = 1;
			$data[] = $start_time;
			$data[] = $end_time;

			//进行团购商品图片处理
			if (!empty($original_img)) {
				$arr = array(
					"width"        => $gbs["configs"]['groupon_thumb_width'],
					"height"       => $gbs["configs"]['groupon_thumb_height'],
					"jpeg_quality" => $gbs["configs"]['pic_quality'],
					"watermark"    => false
				);
				imagetool::InitFromArray($arr);
				$thumb = imagetool::GetImageFromString($original_img, "thumb");
				$arr   = array(
					"width"  => $gbs["configs"]['groupon_show_width'],
					"height" => $gbs["configs"]['groupon_show_height']
				);
				imagetool::InitFromArray($arr);
				$img = imagetool::GetImageFromString($original_img, "img");

			}

		} else {
			//非团购商品图片处理
			if (!empty($original_img)) {
				$arr = array(
					"width"        => $gbs["configs"]['thumb_width'],
					"height"       => $gbs["configs"]['thumb_height'],
					"jpeg_quality" => $gbs["configs"]['pic_quality'],
					"watermark"    => false
				);
				imagetool::InitFromArray($arr);
				$thumb = imagetool::GetImageFromString($original_img, "thumb");
				$arr   = array(
					"width"  => $gbs["configs"]['show_width'],
					"height" => $gbs["configs"]['show_height']
				);
				imagetool::InitFromArray($arr);
				$img = imagetool::GetImageFromString($original_img, "img");

			}

		}

		$res = $db->autoExcute("goods", "", $must, $data);
		if ($res) {
			$id = $db->getInsertId();
			//商品相册入库
			if (isset($_SESSION['goods_add']['gallery_img'])) {
				$goods_add = $_SESSION['goods_add'];
				foreach ($goods_add['gallery_img'] as $key => $value) {
					$fieds = array("goods_id", "img_url", "thumb_url", "original_url");
					$data  = array(
						$id,
						$goods_add['gallery_img'][$key],
						$goods_add['gallery_thumb'][$key],
						$goods_add['gallery_origin'][$key]
					);
					$db->autoExcute("goods_gallery", "", $fieds, $data);
				}

			}
			//商品属性入库
			if (isset($_SESSION['goods_add']['attr'])) {
				$attr = $_SESSION['goods_add']['attr'];
				foreach ($attr as $key => $value) {
					$fieds = array("goods_id", "attr_name", "add_price");
					$data  = array(
						$id,
						$value[0],
						floatval($value[1])
					);
					$db->autoExcute("goods_attr", "", $fieds, $data);
				}
			}
			unset($_SESSION['goods_add']);
			ShowTips("商品添加成功！");
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "goods_edit") {
	$must = array("id", "goods_name", "goods_sn", "type_id", "goods_number", "goods_weight", "shop_price", "market_price");

	if (IsMust($must, $_POST)) {
		$goods_id = intval($_POST["id"]);
		array_shift($must);
		$is_groupon = false;
		$start_time = "";
		$end_time   = "";
		if (isset($_POST['is_groupon'])) {
			if ($_POST['is_groupon'] == "on") {
				$is_groupon = true;
				$start_time = strtotime($_POST['groupon_start_time']);
				$end_time   = strtotime($_POST['groupon_end_time']);
			}

		}
		//写入商品表
		$thumb_img    = "";
		$goods_img    = "";
		$original_img = "";
		if (!empty($_POST['goods_img']))//原始图片
		{
			$original_img = $_POST['goods_img'];
			$temp_name    = substr($original_img, strripos($original_img, "/")+1);
			$temp_dir     = substr($original_img, 0, strripos($original_img, "/")+1);
			if (file_exists($temp_dir."img_".$temp_name)) {
				$goods_img = $temp_dir."img_".$temp_name;
			}
			if (file_exists($temp_dir."thumb_".$temp_name)) {
				$thumb_img = $temp_dir."thumb_".$temp_name;
			}
		}

		$must[] = "goods_brief";
		$must[] = "goods_desc";
		$must[] = "thumb_img";
		$must[] = "goods_img";
		$must[] = "original_img";
		$must[] = "add_time";
		$data   = array(
			$_POST['goods_name'],
			$_POST['goods_sn'],
			intval($_POST['type_id']),
			intval($_POST['goods_number']),
			intval($_POST['goods_weight']),
			floatval($_POST['shop_price']),
			floatval($_POST['market_price']),
			$_POST['goods_brief'],
			$_POST['goods_desc'],
			$thumb_img,
			$goods_img,
			$original_img,
			time()
		);

		//团购判断
		if ($is_groupon) {
			$must[] = "is_groupon";
			$must[] = "groupon_start_time";
			$must[] = "groupon_end_time";

			$data[] = 1;
			$data[] = $start_time;
			$data[] = $end_time;

			//进行团购商品图片处理
			if (!empty($original_img)) {
				$arr = array(
					"width"        => $gbs["configs"]['groupon_thumb_width'],
					"height"       => $gbs["configs"]['groupon_thumb_height'],
					"jpeg_quality" => $gbs["configs"]['pic_quality'],
					"watermark"    => false
				);
				imagetool::InitFromArray($arr);
				$thumb = imagetool::GetImageFromString($original_img, "thumb");
				$arr   = array(
					"width"  => $gbs["configs"]['groupon_show_width'],
					"height" => $gbs["configs"]['groupon_show_height']
				);
				imagetool::InitFromArray($arr);
				$img = imagetool::GetImageFromString($original_img, "img");

			}

		} else {
			$must[] = "is_groupon";
			$data[] = 0;

			//非团购商品图片处理
			if (!empty($original_img)) {
				$arr = array(
					"width"        => $gbs["configs"]['thumb_width'],
					"height"       => $gbs["configs"]['thumb_height'],
					"jpeg_quality" => $gbs["configs"]['pic_quality'],
					"watermark"    => false
				);
				imagetool::InitFromArray($arr);
				$thumb = imagetool::GetImageFromString($original_img, "thumb");
				$arr   = array(
					"width"  => $gbs["configs"]['show_width'],
					"height" => $gbs["configs"]['show_height']
				);
				imagetool::InitFromArray($arr);
				$img = imagetool::GetImageFromString($original_img, "img");

			}

		}

		$res = $db->autoExcute("goods", "id=$goods_id", $must, $data, "update");
		if ($res) {
			ShowTips("商品修改成功！");
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "goods_type_add") {
	$must = array("type_name", "parent_id");
	if (IsMust($must, $_POST)) {
		$data = array(
			trim($_POST['type_name']),
			intval($_POST['parent_id'])
		);
		$res = $db->autoExcute("goods_type", "", $must, $data);
		if ($res) {
			ShowTips("添加分类成功！");
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "goods_type_edit") {
	$must = array("id", "type_name", "parent_id");
	if (IsMust($must, $_POST)) {
		$id    = intval($_POST['id']);
		$types = $db->getAllFromTable("goods_type");
		if (Is_child($types, $id, intval($_POST['parent_id']))) {
			ShowTips("目标分类是当前分类的子分类！请重新选择！");
		}
		array_shift($must);
		$data = array(
			trim($_POST['type_name']),
			intval($_POST['parent_id'])
		);
		$res = $db->autoExcute("goods_type", "id=$id", $must, $data, "update");
		if ($res) {
			ShowTips("更新分类成功！");
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "users_level_add") {
	$must = array("level_name", "need_points", "discount");
	if (IsMust($must, $_POST)) {
		$data = array(
			$_POST['level_name'],
			intval($_POST['need_points']),
			intval($_POST['discount'])
		);
		$res = $db->autoExcute("user_level", "", $must, $data);
		if ($res) {
			ShowTips("数据添加成功！");
		}
	}
	ShowTips("Something Wrong!");
} elseif ($act == "users_level_edit") {
	$must = array("id", "level_name", "need_points", "discount");
	if (IsMust($must, $_POST)) {
		array_shift($must);
		$data = array(
			$_POST['level_name'],
			intval($_POST['need_points']),
			intval($_POST['discount'])
		);
		$id  = intval($_POST['id']);
		$res = $db->autoExcute("user_level", "id=$id", $must, $data, "update");
		if ($res) {
			ShowTips("数据修改成功!");
		}
	}
	ShowError();
} elseif ($act == "users_add") {
	$must = array(
		"user_name"
		, "user_email"
		, "user_word"
		, "user_level"
	);
	if (IsMust($must, $_POST)) {

		$rule = array(
			"user_name" => array("VA_LETTER_AND_NUMBER_AND_UNDERLINE|VA_BETWEEN", "4|13")
			, "user_email" => array("VA_EMAIL|VA_COUNT", 30)
			, "user_word" => array("VA_BETWEEN", "4|20")
			, "user_level" => "VA_NUMBER"
		);
		$res = $vd->validation($rule, $_POST);
		if (!$res) {
			$error = $vd->getErrorMsg();
			ShowTips($error['code'].":".$error['msg']." ".$error['key']);
		}

		$data = array(
			trim($_POST['user_name'])
			, trim($_POST['user_email'])
			, GetMadMD5($_POST['user_word'])
			, $_POST['user_level']
		);
		if (isset($_POST['referrer_name'])) {
			//推广人用户名
			if (!empty($_POST['referrer_name'])) {
				$referrer_name = trim($_POST['referrer_name']);
				$row           = $db->GetRowFromTable("users", "where user_name = '$referrer_name'");
				if (!empty($row)) {
					$must[] = "referrer_id";
					$data[] = $row['id'];
				}
			}
		}
		$must[]  = "reg_time";
		$data[]  = time();
		$can_reg = $db->GetRowFromTable("users", "where user_name = '".trim($_POST['user_name'])."'");
		if (!empty($can_reg)) {
			ShowTips("用户名已经被注册！");
		}
		$res = $db->autoExcute("users", "", $must, $data);
		if ($res) {
			ShowAdd();
		}

	}

	ShowError();
} elseif ($act == "users_edit") {
	$id = 0;
	if (isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];
	}
	if (empty($id)) {
		ShowError();
	}

	$row = $db->GetRowFromTable("users", "where id=$id");
	if (empty($row)) {
		ShowError();
	}

	//修改用户信息

	$rule = array(
		"user_email" => array("VA_EMAIL|VA_COUNT", 30)
		, "user_word" => array("VA_CAN_EMPTY|VA_BETWEEN", "4|20")
		, "user_qq" => array("VA_CAN_EMPTY|VA_NUMBER|VA_BETWEEN", "5|12")
		, "user_nick" => array("VA_CAN_EMPTY|VA_NUMBER|VA_BETWEEN", "4|12")
		, "user_money"    => "VA_NUMBER"
		, "lock_money"    => "VA_NUMBER"
		, "user_points"   => "VA_NUMBER"
		, "virtual_money" => "VA_NUMBER"
		, "user_level"    => "VA_NUMBER"
		, "sex"           => "VA_NUMBER"
		, "birthday"      => array("VA_CAN_EMPTY|VA_DATE", "4|12")
		, "referrer_name" => array("VA_CAN_EMPTY|VA_LETTER_AND_NUMBER_AND_UNDERLINE|VA_BETWEEN", "4|12")
	);
	$res = $vd->validation($rule, $_POST);
	if (!$res) {
		$error = $vd->getErrorMsg();
		ShowTips($error['code'].":".$error['msg']." ".$error['key']);
	}
	$referrer_id = 0;
	if (!empty($_POST['referrer_name'])) {
		$row = $db->GetRowFromTable("users", "where user_name='".$_POST['referrer_name']."'");
		if (!empty($row)) {
			$referrer_id = $row['id'];
		}
	}

	$fieds = array(
		"user_nick"
		, "user_qq"
		, "user_email"
		, "user_money"
		, "lock_money"
		, "user_points"
		, "virtual_money"
		, "user_level"
		, "sex"
		, "birthday"
		, "referrer_id"
	);
	if (!empty($_POST['birthday'])) {
		$_POST['birthday'] = strtotime($_POST['birthday']);
	}

	$data = array(
		$_POST["user_nick"]
		, $_POST["user_qq"]
		, $_POST["user_email"]
		, $_POST["user_money"]
		, $_POST["lock_money"]
		, $_POST["user_points"]
		, $_POST["virtual_money"]
		, $_POST["user_level"]
		, $_POST["sex"]
		, $_POST["birthday"]
		, $referrer_id
	);
	if (!empty($_POST['user_word'])) {
		$fieds[] = "user_word";
		$data[]  = GetMadMD5($_POST['user_word']);
	}
	$res = $db->autoExcute("users", "id=$id", $fieds, $data, "update");
	if ($res) {
		ShowEdit();
	}
	ShowError();
} elseif ($act == "shipping_type_add") {
	$must = array("shipping_name", "shipping_code");
	if (IsMust($must, $_POST)) {

		$row = $db->GetRowFromTable("shipping_type", "where shipping_code='".$_POST['shipping_code']."'");
		if (!empty($row)) {
			ShowTips("配送代码已经存在！请重新添加！");
		}
		$must[] = "shipping_desc";
		$data   = array(
			$_POST['shipping_name']
			, $_POST['shipping_code']
			, $_POST['shipping_desc']
		);
		$res = $db->autoExcute("shipping_type", "", $must, $data);
		if ($res) {
			ShowAdd();
		}
	}
	ShowError();
} elseif ($act == "shipping_type_edit") {
	$must = array("id", "shipping_name", "shipping_code");
	if (isMust($must, $_POST)) {
		array_shift($must);
		$id  = intval($_POST['id']);
		$row = $db->GetRowFromTable("shipping_type", "where id=$id");
		if (!empty($row)) {
			$must[] = "shipping_desc";
			$data   = array(
				$_POST['shipping_name']
				, $_POST['shipping_code']
				, $_POST['shipping_desc']
			);
			$res = $db->autoExcute("shipping_type", "id=$id", $must, $data, "update");
			if ($res) {
				ShowEdit();
			}
		}
	}
	ShowError();
} elseif ($act == "shipping_area_add") {
	$must = array("shipping_area_name", "first_price", "next_price", "free_price", "shipping_type_id", "area");
	if (isMust($must, $_POST)) {
		$shipping_type    = $db->GetRowFromTable("shipping_type", "where id=".intval($_POST['shipping_type_id']));
		$shipping_configs = "";
		if (!empty($shipping_type)) {
			$shipping_configs = array(
				"first_price" => floatval($_POST['first_price']),
				"next_price"  => floatval($_POST['next_price']),
				"free_price"  => floatval($_POST['free_price'])
			);
			$shipping_configs = serialize($shipping_configs);
			$fields           = array("shipping_area_name", "shipping_id", "configure");
			$data             = array($_POST['shipping_area_name'], intval($_POST['shipping_type_id'])
				, $shipping_configs
			);
			$res              = $db->autoExcute("shipping_area", "", $fields, $data);
			$shipping_area_id = $db->getInsertId();
			$area             = explode(',', $_POST['area']);
			$fields           = array("shipping_area_id", "region_id");
			foreach ($area as $key => $value) {
				$data = array($shipping_area_id, $value);
				$db->autoExcute("area_region", "", $fields, $data);
			}
			ShowAdd();
		}
	}
	ShowError();

} elseif ($act == "shipping_area_edit") {
	$must = array("shipping_area_name", "first_price", "next_price", "free_price", "shipping_type_id", "shipping_area_id", "area");
	if (isMust($must, $_POST)) {
		$shipping_type    = $db->GetRowFromTable("shipping_type", "where id=".intval($_POST['shipping_type_id']));
		$shipping_configs = "";
		if (!empty($shipping_type)) {
			$shipping_configs = array(
				"first_price" => floatval($_POST['first_price']),
				"next_price"  => floatval($_POST['next_price']),
				"free_price"  => floatval($_POST['free_price'])
			);
			$shipping_configs = serialize($shipping_configs);
			$fields           = array("shipping_area_name", "configure");
			$data             = array($_POST['shipping_area_name'], $shipping_configs
			);
			$res              = $db->autoExcute("shipping_area", "id=".intval($_POST['shipping_area_id']), $fields, $data, "update");
			$shipping_area_id = intval($_POST['shipping_area_id']);
			$db->query("delete from area_region where shipping_area_id=$shipping_area_id");
			$area   = explode(',', $_POST['area']);
			$fields = array("shipping_area_id", "region_id");
			foreach ($area as $key => $value) {
				$data = array($shipping_area_id, $value);
				$db->autoExcute("area_region", "", $fields, $data);
			}
			ShowEdit();
		}
	}
	ShowError();
} else {
	print_r($_REQUEST);
	ShowTips("产品更新失败！请稍填写完整数据！");
}
?>