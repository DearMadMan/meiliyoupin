<?php
require_once ("init.php");
if (!isset($_SESSION['session_id'])) {
	$_SESSION['session_id'] = GetMadMD5(time().rand(0, 999999));
}

/*获取导航列表*/
$navs = $db->getAllFromTable("nav", "order by z_index desc");
$smarty->assign("navs", $navs);

?>