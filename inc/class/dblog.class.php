<?php

/**
 * dblog.class.php
 * 数据库操作记录类 功能：
 * 1.自动检索日期目录是否存在
 * 2.自动追加记录Sql执行语句
 * 3.自动生成时间日志文件，超过200k 自动备份
 *
 */

 class dblog
{
	private static $_instance;
	private static $logpath=LOG_PATH;
	private static $filer;
	private static $logname="db.log";
	private static $logsize=200;  // kb
	private function __construct()
	{
	}
	private function __clone()
	{
	}
	public static function WriteLog($log,$admin=false)
	{
		if($admin)
		{
			self::$logpath=ADMIN_LOG_PATH;
		}
		self::$filer=filer::GetInstance();

		$date=date("Ymd");
		$realpath=self::$logpath.$date.'/'.self::$logname;
		$dirpath=self::$logpath.$date;
		if(!file_exists($dirpath))
		{
			if(!mkdir($dirpath))
				{
					die("can't mkdir $dirpath!");
				}
		}
		//检测文件大小
		if(!file_exists($realpath))
		{
			self::$filer->Append($realpath,'',"");
		}

		if(filesize($realpath)>=self::$logsize*1024)
		{
			//备份
			rename($realpath, self::$logpath.$date.'/'.date("Ymd_H_i_s_").rand(0,99999).'.bak');

		}
		self::$filer->Append($realpath,date("H:i:s ").$log,"\r\n");
		return true;
	}

}
?>