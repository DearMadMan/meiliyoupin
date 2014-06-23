<?php
/**
 * uploadfile.class.php
 *
 * 文件上传类
 * 文件大小限制
 * 文件格式限制
 * 独立模块减耦合
 * 支持独立上传
 * 支持混合上传
 * 支持批量上传
 * 支持自动创建日期目录存放(默认)
 * 支持随机命名(时间戳+8位随机数+不满8位左侧填充0)(默认)
 * 支持模块自定义初始化
 */

/**
 * 使用方法uploadfile::SetTempDir("../images/");
 * uploadfile::Init($temp_dir="",$file_size="",$file_data_type="",$random_name="",$date_dir="")
 * $upload=uploadfile::UploadFiles($_FILES);
 * if(uploadfile::success){
 * print_r($upload);
 * }
 *
 */


class uploadfile
{

	private static $file_size=1024; //kb
	private static $file_data_type=array("jpg",
					               "gif",
					               "zip",
					               "rar",
					               "txt",
					               "png"
					               );
	private static $random_name=true; //随机命名

	private static $temp_dir="././temp/";
	private static $date_dir=true;    //日期目录
	private static $return_path=true;
	private static $success=false;
/**
 * [UploadFiles 上传文件至网站临时目录]
 * @param [type] $files [description]
 */
	public static function UploadFiles($files)
	{
		$return_paths=array();
		$date_dir_temp="";
		self::$date_dir?$date_dir_temp=(self::$temp_dir.date("Ymd")."/"):$date_dir_temp=self::$temp_dir;

		if(self::$date_dir)
		{
			//判断当前日期目录是否存在
			if(!file_exists($date_dir_temp))
			{
				if(!mkdir($date_dir_temp))
				{
					die($date_dir_temp." can't write!");
				}
			}
		}

		foreach ($files as $key => $value)
		{
			if(is_array($value['name']))
			{
				//数组批量上传

				foreach ($value['name'] as $k => $v)
				{

					$file_data_type=mb_strrchr($v,".",false,"utf-8");
					$file_data_type=str_replace(".", "", $file_data_type);
					if(!self::IsFileDataType($file_data_type))
					{
						echo "不是允许的上传类型<br />";
						continue;
					}
					if(!self::IsFileSize($value['size'][$k]))
					{
						echo "不是允许的大小！";
						continue;
					}
					if($value['error'][$k]==2) //超过html上传限制
					{
						echo GetError(2)."<br />";
						continue;
					}

					if(!is_uploaded_file($value['tmp_name'][$k]))
					{
						die('do not attack!');
					}
					$temp_name=iconv("UTF-8","gb2312",$v); //中文乱码
					if(self::$random_name)
					{
						$temp_name=time().str_pad(rand(0,9999999),8,"0",STR_PAD_LEFT).".".$file_data_type;
					}

					if(move_uploaded_file($value['tmp_name'][$k], $date_dir_temp.$temp_name))
					{
						 $return_paths[]=$date_dir_temp.$temp_name;
						 self::$success=true;
					}
					else
					{
						 echo self::GetError($value['error'][$k])."<br />";
					}

				}
			}else
			{
				//独立上传
					$file_data_type=mb_strrchr($value['name'],".",false,"utf-8");
					$file_data_type=str_replace(".", "", $file_data_type);
					if(!self::IsFileDataType($file_data_type))
					{
						echo "不是允许的上传类型<br />";
						continue;
					}
					if(!self::IsFileSize($value['size']))
					{
						echo "不是允许的大小！";
						continue;
					}
					if($value['error']==2) //超过html上传限制
					{
						echo self::GetError(2)."<br />";
						continue;
					}

					if(!is_uploaded_file($value['tmp_name']))
					{
						die('do not attack!');
					}
					$temp_name=iconv("UTF-8","gb2312",$value['name']); //中文乱码
					if(self::$random_name)
					{
						$temp_name=time().str_pad(rand(0,9999999),8,"0",STR_PAD_LEFT).".".$file_data_type;
					}

					if(move_uploaded_file($value['tmp_name'], $date_dir_temp.$temp_name))
					{
						 $return_paths[]=$date_dir_temp.$temp_name;
						 self::$success=true;
					}
					else
					{
						 echo self::GetError($value['error'])."<br />";
					}
			}
		}
		if(self::$return_path)
		{
			//返回上传文件的全路径数组
			return $return_paths;
		}
	}
	public static function SetTempDir($temp)
	{
		self::$temp_dir=$temp;
	}
	public static function IsFileDataType($file_data_type)
	{
		$result=false;
		if(in_array($file_data_type, self::$file_data_type))
		{
			$result=true;
		}
		return $result;
	}
	public static function IsFileSize($file_size)
	{
		$result=false;
		$file_size>(self::$file_size*1024)?$result=false:$result=true;
		return $result;
	}
	/**
	 * [Init 初始化uploadfile]
	 * @param [type] $file_size      [文件大小]
	 * @param [type] $file_data_type [文件类型数组]
	 * @param [type] $random_name    [bool]
	 * @param [type] $temp_dir       [目标文件路径]
	 */
	public static function Init($temp_dir="",$file_size="",$file_data_type="",$random_name="",$date_dir="")
	{

		$file_size!=""?self::$file_size=$file_size:1;
		$file_data_type!=""?self::$file_data_type=$file_data_type:1;
		$random_name!=""?self::$random_name=$random_name:1;
		$temp_dir!=""?self::$temp_dir=$temp_dir:1;
		$date_dir!=""?self::$date_dir=$date_dir:1;
		self::$success=false;
	}
	/**
	 * [GetError 获取错误信息]
	 * @param [type] $num [错误编号]
	 */
	public function GetError($num)
	{
		$errors=array(
			true,
			"上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值",
			"上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值",
			"文件只有部分被上传",
			"没有文件被上传",
			"",
			"找不到临时文件夹",
			"文件写入失败"
			);
		return $errors[$num];
	}
  public static function Success()
	{
		return self::$success;
	}

}

?>