<?php
define("MadMan", true);
require_once ("./inc/init.php");
$vt  = new formvalidation();
$arr = array(
	"name"        => array("VA_EMPTY|VA_COUNT", 10)
	, "moblie"    => "VA_MOBILE"
	, "eamil"     => "VA_EMAIL"
	, "litter"    => array("VA_LETTER|VA_COUNT", 10)
	, "something" => array("VA_LETTER_AND_NUMBER_AND_UNDERLINE|VA_COUNT", 10)

);

$target = array(
	"name"        => "wangqiqi21"
	, "moblie"    => "18949825252"
	, "eamil"     => "_@1.1"
	, "litter"    => "asadadxczx"
	, "something" => "a_13123"

);
$res = $vt->Validation($arr, $target);
if (!$res) {
	print_r($vt->GetErrorMsg());
}