<?php

/**
 * MadCms Post
 * ============================================================================
 *
 *
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:		 wang <wang@dearmadman.com>
 * @version:	 v1.0
 * @date:		 2014-07-31 08:52:28
 */

define("MadMan", true);
require_once ("inc/init.php");

$act = "";
if (isset($_POST['act'])) {
	$act = $_POST['act'];
}

?>