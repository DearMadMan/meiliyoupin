<?php
require_once ("init.php");
if (!isset($_SESSION['session_id'])) {
	$_SESSION['session_id'] = GetMadMD5(time().rand(0, 999999));
}
