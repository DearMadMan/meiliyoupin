<?php
/**
 * init.php
 * 框架初始化文件
 */
if(!defined('MadMan'))
{
	die("No Way!");
}
if(!isset($_SESSION))
{
	session_start();
}
/**
 *
 * dir常量定义
 *
 */
define('ROOT_PATH',preg_replace( '/(\S+)inc/i','$1',dirname(__FILE__)));
define('INC_PATH',ROOT_PATH.'inc'.DIRECTORY_SEPARATOR);
define("CLASS_PATH", INC_PATH.'class'.DIRECTORY_SEPARATOR);
define("CONTROL_PATH",INC_PATH.'control'.DIRECTORY_SEPARATOR);
define("DATA_PATH",ROOT_PATH.'data'.DIRECTORY_SEPARATOR);
define("LOG_PATH",DATA_PATH.'log'.DIRECTORY_SEPARATOR);
define("ADMIN_LOG_PATH",DATA_PATH.'admin_log'.DIRECTORY_SEPARATOR);
define("SMARTY_PATH",INC_PATH.'module'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR);
define("VIEW_PATH",ROOT_PATH.'view'.DIRECTORY_SEPARATOR);


/**
 *  include常用模块
 */
include_once(DATA_PATH.'config.php');
include_once(SMARTY_PATH.'Smarty.class.php');
include_once(CONTROL_PATH."main.php");
include_once(CONTROL_PATH."company.php");
if(!DEBUG)
{
	error_reporting(0);
}
else
{
	error_reporting(E_ALL ^ E_DEPRECATED);
}

@ini_set("display_errors",1);

/**
 *  参数过滤 $_GET $_POST $_COOKIE
 *  永远不要使用超级用户或所有者帐号去连接数据库。要用权限被严格限制的帐号
 *  检查输入的数据是否具有所期望的数据格式
 *  使用数据库特定的敏感字符转义函数或在录入数据库之前进行数据过滤
 *  要不择手段避免显示出任何有关数据库的信心，尤其是数据库结构。
 */

if(!get_magic_quotes_gpc())
{
	$_GET=_addslashes($_GET);
	$_POST=_addslashes($_POST);
    $_REQUEST=_addslashes($_REQUEST);
	$_COOKIE=_addslashes($_COOKIE);
}
//递归调用 必须是数组
function _addslashes($arr)
{
	if(!is_array($arr)||empty($arr))
	{
		return false;
	}
	foreach ($arr as $key => $value)
	 {
		 if(is_array($arr[$key]))
		 {
		 	$arr[$key]=_addslashes($arr[$key]);
		 }
		 else
		 {
		    $arr[$key]=addslashes($value);
		 }
	 }
	 return $arr;
}
/**
 *  配置设置区域
 */
date_default_timezone_set("$config_timezone"); //设置时区

/**
 * [__autoload 未探测到类时自动加载类]
 * @param  [type] $className [类名称]
 * @return [type]            [description]
 */
function _autoload($className)
{


	$classPath=CLASS_PATH.$className.".class.php";
    if(!file_exists($classPath))
    {
    	die("not find!".$className);
    }
    else
    {
       //echo "未探测到类，但探测到类文件";
    }

	include_once($classPath);
}

//注册 autoload

spl_autoload_register('_autoload');   //解决smarty 覆盖了 __autoload



/**
* 配置初始化区域
*
*/
//smarty
$smarty=new Smarty();
$smarty->setCacheDir(SMARTY_PATH."cache".DIRECTORY_SEPARATOR);
$smarty->setConfigDir(SMARTY_PATH."configs".DIRECTORY_SEPARATOR);
$smarty->setCompileDir(SMARTY_PATH."compile".DIRECTORY_SEPARATOR);
$smarty->setTemplateDir(VIEW_PATH."default".DIRECTORY_SEPARATOR);
$GLOBALS['smarty'] = $smarty;

//mysql
$db=mysql::getinstance();
$GLOBALS['db'] = $db;
$gbs=$GLOBALS;
$gbs['madman']=array();

//dbconfigs
GetConfigsFromDatabase($config_dbname);
$smarty->assign('mad_configs',$GLOBALS['configs']);
$smarty->assign('view_path',"view/".$GLOBALS['configs']['default_template']);
$smarty->assign('vp',"view/".$GLOBALS['configs']['default_template']);
$smarty->assign("plugin_path","plugin");
?>