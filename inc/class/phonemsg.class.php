<?php
/**
 * phonemsg.class.php
 *
 * 短信接口类，运用外观模式
 * @auther MadMan <admin@DearMadMan.com>
 */
class phonemsg
{
	/**
	 * [$user_name 用户名]
	 * @var string
	 */
	private $user_name="dfsc888";
	/**
	 * [$pass_word 密码]
	 * @var string
	 */
	private $pass_word="13956566650";
	/**
	 * [$mobile 手机号]
	 * @var string
	 */
	private $mobile="";
	/**
	 * [$msg 短信内容]
	 * @var string
	 */
	private $msg="";
	/**
	 * [$target 短信接口地址@速度网络]
	 * @var string
	 */
	private $target="http://sms.106jiekou.com/utf8/sms.aspx";
	/**
	 * [$search 发送成功代码]
	 * @var string
	 */
	private $search="100";
	private $data="";
	private $gets="";
	/**
	 * [__constuct 构造函数]
	 * @param  string $user_name [接口账户名]
	 * @param  string $pass_word [接口密码]
	 * @param  string $mobile    [短信通知号码]
	 * @param  string $msg       [通知内容]
	 */
	public function __construct($user_name="",$pass_word="",$mobile="",$msg="")
	{
		empty($user_name)?1:$this->user_name=$user_name;
		empty($pass_word)?1:$this->pass_word=$pass_word;
	    $this->mobile=$mobile;
	    $this->msg=rawurldecode($msg);
	    $this->data="account=".$this->user_name
	    ."&password=".$this->pass_word
	    ."&mobile=".$this->mobile
	    ."&content=".$this->msg;
	}

    /**
     * [Post 短信发送接口]
     */
    public function Post()
	{
		header("Content-Type: text/html; charset=utf-8");
		$url_info = parse_url($this->target);
	    $httpheader = "POST " . $url_info['path'] . " HTTP/1.0\r\n";
	    $httpheader .= "Host:" . $url_info['host'] . "\r\n";
	    $httpheader .= "Content-Type:application/x-www-form-urlencoded\r\n";
	    $httpheader .= "Content-Length:" . strlen($this->data) . "\r\n";
	    $httpheader .= "Connection:close\r\n\r\n";
	    //$httpheader .= "Connection:Keep-Alive\r\n\r\n";
	    $httpheader .= $this->data;

	    $fd = fsockopen($url_info['host'], 80);
	    fwrite($fd, $httpheader);
	    $gets = "";
	    while(!feof($fd)) {
	        $gets .= fread($fd, 128);
	    }
	    fclose($fd);
	    $this->gets=$gets;
	     if(strstr($gets,$this->search))
	     {
	     	return true;
	     }
	     return $gets;
	}
	function DeBug()
	{
		return $this->data;
	}
}

?>