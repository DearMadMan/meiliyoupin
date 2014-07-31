<?php
/**
 *
 *config.class.php
 *config文件配置类
 *单例职责模式：
 *功能：
 *1.自动读取配置文件获取相关变量组存入数组
 *2.输出单例，方便各数据库类调用
 *3.魔术方法 __get(),__set(),__isset(),__unset()
 *
 */
include_once(DATA_PATH.'config.php');
class config
{


	private static $_instance; //实例
	private $_data=array();
	private function __construct()
	{
		$this->Data_init();
	}
	private function __clone(){}
	public function __get($name)
	{
		if(isset($this->_data[$name]))
		{
			return $this->_data[$name];
		}else
		{
			return "not found !";
		}
	}

	public function __set($name,$value)
	{
		$this->_data[$name]=$value;
	}

	public function __unset($name)
	{
		if(isset($this->_data[$name]))
		{
			unset($this->_data[$name]);
		}
	}

	/**
	 * [Get_Instance 获取单例]
	 */
	public static function GetInstance()
	{
		if(!(self::$_instance instanceof self))
		{
		//	echo " goto work!";
			self::$_instance=new self();
		}
		else
		{
		//	echo "is working";
		}
		return self::$_instance;
	}

	/**
	 * [Data_init 数据初始化 自动加载config.php中的变量]
	 */
	private function Data_init()
	{

		$_config_data=file(DATA_PATH.'config.php');
		$_math_string='/\s*\$(\S*)\s*=\s*(\S*)/';

		for($i=0,$length=count($_config_data);$i<$length;$i++)
		{
			if(strstr($_config_data[$i],"{do_not_match_this}"))
			{
				//echo $_config_data[$i]."<br />";
				continue;
			}
			if(preg_match($_math_string,$_config_data[$i],$_matches))
			{
				$this->_data[$_matches[1]]=trim(trim($_matches[2],';'),'"');
			}

		}

	}
	public function GetConfig()
	{
		echo "<br/>".$config_db_host;
	}
}




?>