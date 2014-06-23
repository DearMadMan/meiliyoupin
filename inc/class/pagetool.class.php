<?php

/**
 * 数据分页类  单例 类输出
 * 主要功能：
 * 1.提供分类页序列代码接口
 * 2.提供默认分页数打开页数据接口
 * 3.自动完成sql匹配
 * 4.自动获取数据总量
 * 5.提供获取单列名称接口
 *
 */

/*
使用方法:
$pagetool=pagetool::GetInstance();
if(!isset($_GET['pageNow']))
{

	$_GET['pageNow']=0;
}
$pageNow=intval($_GET['pageNow']);
$pagePath='index.php';
$dfNum=10;
$sql="select * from ecs_users";
$db=$GLOBALS['db'];
$pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,"user_id");
$str= $pagetool->CreatePageRow();
echo "$str";

css:
a{background: white; text-decoration: none;width: 50px;height: 20px; border: 1px solid red;color: #111;margin: 3px;padding:1px 3px;font-size: 12px;}
    a:hover{background: red; border: 1px solid yellow;color:white;}
    a.active{background: red; border: 1px solid yellow;color:white;}
    a.disable{border: 1px solid #ccc; color:#ccc;background: none;}
    a.disable:hover{border: 1px solid #ccc; color:#ccc;background: none;}
    .rg{text-align: center;} //外层控制位置
 */


 class pagetool
{
	//设计为单例类
	protected static $instance=null;
	protected $db=null;
	protected $sql="";
	protected $dfNum=10; //默认每页显示的数据量
	protected $count=0; //查询所得数据总量
	protected $pageNow=0; //当前页码
	protected $lastPage=0; //末页页码
	protected $pagePath="";

	private function __construct()
	{
		$this->Init();
	}
	private function __clone(){}
	private function Init(){}
	public static function GetInstance()
	{
		if(!(self::$instance instanceof self))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * [setNeed 用于分页类初始化 不初始化无法进行后续操作]
	 * @param [type] $db       [用于操作数据的数据库]
	 * @param [type] $sql      [select * from users]
	 * @param [type] $dfNum    [每页显示的数量]
	 * @param [type] $pageNow  [当前为第几页从0开始]
	 * @param [type] $pagePath [用于分页生成的调用页路径 如:user.php]
	 * @param string $id       [数据库某一列的列名 如:users 表的 user_id]
	 */
	public function setNeed($db,$sql,$dfNum,$pageNow,$pagePath,$id="*")
	{

		$countstr=strtolower($sql);
		$countstr=preg_replace('/select(.*)from/',"select count($id) from",$countstr);
		$this->db=$db;
		$this->sql=$sql;
		$this->dfNum=$dfNum;
		$this->count=$db->GetOne($countstr);
		if($pageNow<=0)
		{
			$pageNow=1;
		}
		$this->pageNow=$pageNow;
		$this->lastPage=ceil($this->count/$dfNum);
		if($this->lastPage==0)
		{
			$this->lastPage=1;
		}
		if(!strstr($pagePath,"?"))
		{
			$pagePath.="?1=1";
		}
		$this->pagePath=$pagePath;

	}

	/**
	 * [getRes 根据当前页获取数据]
	 * @param  [type] $pageNum [页码]
	 * @return [type]          [数据]
	 */
	public function getRes()
	{
		if($this->pageNow>$this->lastPage)
		{
			$this->pageNow=$this->lastPage;
		}

		$this->pageNow>0?1:$this->pageNow=1;

		$startNum=(($this->pageNow)-1)*$this->dfNum;
		$sql=$this->sql." limit $startNum,".$this->dfNum;
		$res=$this->db->GetAll($sql);
		return $res;
	}

	/**
	 * [GetAll 返回包含所有数据的数组 非html数据]
	 */
	public function GetAll()
	{
		$arr=array();
		$arr['pre']=$this->pageNow>1?($this->pageNow-1):1;
		$arr['next']=$this->pageNow>=$this->lastPage?$this->pageNow:($this->pageNow+1);
		$arr['more']=$this->lastPage>1?1:0;
		$arr['last']=$this->lastPage;
		$arr['now']=$this->pageNow;
		$arr['count']=$this->count;
		$arr["res"]=$this->getRes();
		return $arr;
	}



	/**
 	* [CreatePageRow 用于生成分页HMLT代码]
 	*/
	public function CreatePageRow()
	{
		$str="";
		if($this->pageNow>$this->lastPage)
		{
			$this->pageNow=$this->lastPage;
		}

		if($this->lastPage==1)
		{
			$str="<a class='disable' >上一页</a>";
			$str.="<a class='active' >1</a>";
			$str.="<a class='disable' >下一页</a>";
			return $str;
		}

		if($this->pageNow-1<=0)
		{
			$str="<a class='disable'>上一页</a>";

		}
		else
		{
			$str="<a href='".$this->pagePath."&pageNow=".($this->pageNow-1)."'>上一页</a>";
		}


		if($this->lastPage<=7)
		{
			for ($i=1; $i <= $this->lastPage; $i++) {
				if($i==$this->pageNow)
				{
					$str.="<a class='active'>".($i)."</a>";
				}
				else
				{
					$str.="<a href='".$this->pagePath."&pageNow=$i'>".$i."</a>";
				}

			}

		}
		else
		{

			if($this->pageNow<=3)
			{

				$num=4;
				for ($i=1; $i <= $num; $i++) {
					if($i==$this->pageNow)
					{
						$str.="<a class='active'>".($i)."</a>";
					}
					else{
						$str.="<a href='".$this->pagePath."&pageNow=$i'>".($i)."</a>";
					}

				}
				$str.=" ... ";
				$str.="<a href='".$this->pagePath."&pageNow=".$this->lastPage."'>".($this->lastPage)."</a>";

			}
			else
			{
				 if($this->lastPage-$this->pageNow<=3)
				 {
				 	$str.="<a href='".$this->pagePath."&pageNow=0'>1</a>";
				 	$str.=" ... ";
				 	for ($i=($this->lastPage-4); $i <=$this->lastPage ; $i++) {
				 		if($i==$this->pageNow)
				 		{
				 			$str.="<a class='active'>".($i)."</a>";
				 		}
				 		else
				 		{
				 			$str.="<a href='".$this->pagePath."&pageNow=$i'>".($i)."</a>";
				 		}

				 	}
				 }
				 else
				 {
				 	$str.="<a href='".$this->pagePath."&pageNow=0'>1</a>";
				 	$str.=" ... ";
				 	for ($i=($this->pageNow-2); $i <=$this->pageNow+2; $i++) {
				 		if($i==$this->pageNow)
				 		{
				 			$str.="<a class='active'>".($i)."</a>";
				 		}
				 		else
				 		{
				 			$str.="<a href='".$this->pagePath."&pageNow=$i'>".($i)."</a>";
				 		}
				 	}
				 	$str.=" ... ";
				 	$str.="<a href='".$this->pagePath."&pageNow=".$this->lastPage."'>".($this->lastPage)."</a>";
				 }
			}

		}

		if($this->pageNow+1>$this->lastPage)
		{
			$str.="<a class='disable'>下一页</a>";
		}
		else
		{
			$str.="<a href='".$this->pagePath."&pageNow=".($this->pageNow+1)."'>下一页</a>";
		}

		return $str;

	}



}
?>