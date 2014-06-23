<?php
/**
 *config.php
 * 数据库配置文件
 * config.class.php类将自动捕获以下正则匹配变量
 * {do_not_match_this} /\s*\$(\S*)\s*=\s*(\S*)/
 * 该文件会被include_once
 * 只匹配变量，不匹配defined常量 但包含defined常量
 */
if(!defined('MadMan'))
{
	die("No Way!");
}
// database host
$config_db_host="127.0.0.1:3306";
// database name
$config_db_name="company";
// database user
$config_db_user="root";

// database password
$config_db_password="123456";

// charset
$config_db_charset="utf-8";

//timezone
$config_timezone="PRC";

$config_dbname="configs";

//dblog
$config_write_log=true;
define("DEBUG",true);
?>