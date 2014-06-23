<?php
/**
 * mysql.class.php
 * mysql工具类
 * 单例模式
 *
 */


class mysql extends db
{
	private static $_instance;
	private $config;
	private $resource;
  private $insertlog;       //是否记录执行的sql
	private function __construct()
	{
		$this->Init();
	}
	private function __clone(){}

    public static function GetInstance()
    {
    	if(!(self::$_instance instanceof self))
    	{
    		self::$_instance =new self();
    	}
       return self::$_instance;
    }
    /**
     * [Init 构造函数初始化]
     */
    private function Init()
    {
    	$this->config=config::GetInstance();
    	$this->Connect($this->config->config_db_host,$this->config->config_db_user,$this->config->config_db_password);
    	$this->SelectDb($this->config->config_db_name);
    	$this->SetCharset($this->config->config_db_charset);
    }
	 protected function Connect($host,$user,$pwd)
	{
		$this->resource= mysql_connect($host,$user,$pwd);

	}
 	 public function SelectDb($db)
 	{
 		$sql="use ".$db.';';
 		$this->Query($sql);
 	}
 	 public function SetCharset($charset)
 	{
 		$sql="set names utf8;";
 		$this->Query($sql);
 	}
  /**
   * [GetRowFromTable 从表中获取一行数据]
   *
   * <code>
   * GetRowFromTable("goods","where goods_id='1'","goods_id,goods_name");
   * </code>
   *
   * @param [type] $table [表名]
   * @param string $where [wher语句]
   * @param string $need  [需求字段]
   *
   */
  public function GetRowFromTable($table,$where="",$need="*")
  {
    $sql="select $need from $table $where";
    return $this->getRow($sql);
  }
 	 public function Query($sql)
 	{
 		$result=mysql_query($sql);
    if($this->config->config_write_log=="true")  //记录日志
    {
      $admin_log=false;
      if(isset($_SESSION['is_admin']))
      {
        $admin_log=$_SESSION['is_admin'];
      }
      dblog::WriteLog($sql,$admin_log);
    }
 		if($result!==false)
 		{
 			return $result;
 		}
 		else
 		{
      if(!DEBUG)
      {
        die("Sorry!Error Now!");
      }
 			$sqlerror=array();
 			$sqlerror["sql"]=$sql;
 			$sqlerror["error"]=mysql_error();
      echo "<br />";
 			print_r($sqlerror);exit;
 		}

 	}
    /**
     * [GetOne 执行sql返回第一行第一列的值]
     * @param [type] $sql [description]
     */
 	 public function GetOne($sql)
     {
       $result=$this->Query($sql);
       $row=mysql_fetch_assoc($result);
       if(empty($row))
       {
        return false;
       }
       foreach ($row as $key => $value) {
           return $row[$key];
       }
     }
     public function GetRow($sql)
     {
       $result=$this->Query($sql);
       $row=mysql_fetch_assoc($result);
       return $row;
     }
 	 public function GetAll($sql)
   {
       $result=$this->Query($sql);
       $rows=array();
       while ($row=mysql_fetch_assoc($result))
        {
          $rows[]=$row;
        }
        return $rows;
   }
 	 public function GetInsertId($source="")
   {
      return $source==""?mysql_insert_id():mysql_insert_id($source);
   }

   public function GetAffectedRows($source="")
   {

      return $source==""?mysql_affected_rows():mysql_affected_rows($source);
   }
   /**
    * [AutoExcute 自动拼接sql语句]
    * @param [type] $table  [表名称]
    * @param string $where  [条件语句 不需要加where]
    * @param string $fields [目标列数组or分割字符串：username,password]
    * @param string $data   [值数组or分割字符串:‘黎明’,‘qq123’ (update只允许为值数组)]
    * @param string $type   [insert or update 只输入表名和where 则delete]
    */
 	 public function AutoExcute($table,$where="",$fields="",$data="",$type="insert")
   {
        $_where="";
        $where==""?1:$_where=("where ".$where);
        if($where!=""&&$fields==""&&$data=="")
        {
          //delete
          $sql="delete from $table ".$_where;
          $result= $this->Query($sql);
          $off=$this->GetAffectedRows($this->resource);
          if($off>0)
          {
            return true;
          }
          return false;


        }

        //数据处理
          $fieldstr="";
          if(is_array($fields))
          {
              foreach ($fields as $value)
            {

              $fieldstr=$fieldstr.$value.",";
            }
            $fieldstr=trim($fieldstr,",");
          }
          else //按照约定应该是字符串
          {
              $fieldstr=$fields;
          }
          $datastr="";
          if(is_array($data))
          {
             foreach ($data as $value)
             {
               $datastr=$datastr."'".$value."',";
             }
             $datastr=trim($datastr,",");
          } else //按照约定应该是字符串
          {
              $datastr=$data;
          }

        if(strtolower($type)=="insert")
        {
          //insert

          $sql="insert into $table ($fieldstr) values ($datastr) $_where;";
          $result=$this->Query($sql);
          $off=$this->GetAffectedRows($this->resource);
          if($off>0)
          {
            return true;
          }
          return false;
        }
        if(strtolower($type)=='update')
        {
          //update
          //数据处理 $fieldstr $datastr
          $fieldarr=explode(",",$fieldstr);

          //因为数据中如果含有分割符','会造成意外分割的情况，所有我们约定update中
          //$data只允许为数组
          if(!is_array($data))
          {
            die("因为数据中如果含有分割符','会造成意外分割的情况，所有我们约定update中,值参数只允许为数组！");
          }
          $setstr="";
          for($i=0,$length=count($fieldarr);$i<$length;$i=$i+1)
          {
            $setstr=$setstr.$fieldarr[$i]."='".$data[$i]."',";
          }
          $setstr=trim($setstr,",");
          $sql="update $table set $setstr $_where";
          $result=$this->Query($sql);
          $off=$this->GetAffectedRows($this->resource);
          if($off>0)
          {
            return true;
          }
          return false;
        }
   }

}













?>