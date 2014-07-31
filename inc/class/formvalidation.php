<?php

/**
 * formvlidation.class.php
 * 表单验证类
 */

/**
 *	@example
 *  $vt=new fromvalidation();
 * 	$arr=(
 * 	"name"=> array("VA_EMPTY|VA_COUNT","6")
 * 	,"mobile"=>"VA_MOBILE"
 * );
 *  $res=$vt->Vilidation($arr,$target);
 *	if(!$res){
 * echo  $vt->GetErrorMsg();
 * }
 */

class formvalidation {

	/**
	 * const 常量
	 */
	const VA_EMPTY                           = "VA_EMPTY";//非空
	const VA_CAN_EMPTY                       = "VA_CAN_EMPTY";//可空
	const VA_EMAIL                           = "VA_EMAIL";
	const VA_NUMBER                          = "VA_NUMBER";
	const VA_COUNT                           = "VA_COUNT";//应小于
	const VA_COUNT_GT                        = "VA_COUNT_GT";//应大于
	const VA_BETWEEN                         = "VA_BETWEEN";//之间
	const VA_MOBILE                          = "VA_MOBILE";
	const VA_LETTER                          = "VA_LETTER";
	const VA_LETTER_AND_NUMBER               = "VA_LETTER_AND_NUMBER";
	const VA_DATE                            = "VA_DATE";
	const VA_LETTER_AND_NUMBER_AND_UNDERLINE = "VA_LETTER_AND_NUMBER_AND_UNDERLINE";
	const ER_NOTHING                         = "ER_NOTHING";
	private $error_msg                       = array();

	public function Validation($arr, $target) {
		if (empty($arr)) {
			$this->SetErrorMsg(self::ER_NOTHING, "无效效验规则！");
			return false;
		}
		if (empty($target)) {
			$this->SetErrorMsg(self::ER_NOTHING, "无效效验目标！");
			return false;
		}
		foreach ($arr as $key => $value) {
			if (!array_key_exists($key, $target)) {
				$this->SetErrorMsg(self::ER_NOTHING, "未发现目标验证字段！");
				return false;
			}
			$res = $this->CheckThis($key, $value, $target[$key]);
			if (!$res) {
				return false;
			}
		}
		return true;
	}
	private function CheckThis($key, $value, $targetValue) {
		if (empty($value)) {
			/*空值不进行效验 默认为不效验*/
			return true;
		}
		$check_string = "";
		$check_msg    = "";
		if (is_array($value)) {
			$check_string = $value[0];
			$check_msg    = $value[1];
		} else {
			$check_string = $value;
		}
		$type_arr = explode("|", $check_string);
		if (in_array(self::VA_CAN_EMPTY, $type_arr)) {
			if ($targetValue == "") {
				return true;
			}
		}
		foreach ($type_arr as $k => $v) {
			if ($v == self::VA_CAN_EMPTY) {
				continue;
			}
			//进行效验
			if (!$this->ReturnCheckResult($v, $check_msg, $targetValue, $key)) {
				return false;
			}
		}
		return true;
	}

	private function ReturnCheckResult($type, $msg, $targetValue, $key) {
		$is_true = true;
		if (empty($type)) {
			return true;
		}
		switch ($type) {
			case self::VA_EMPTY:
				if (empty($targetValue)) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_NUMBER, "不能为空！", $key);
				}
				break;
			case self::VA_EMAIL:
				if (empty(preg_match("/^\w+@\w+\.\w+$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_EMAIL, "请填写正确的邮箱!", $key);
				}
				break;
			case self::VA_NUMBER:
				if (empty(preg_match("/^\d+$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_NUMBER, "请填写正确的数字！", $key);
				}
				break;
			case self::VA_COUNT:
				$msg = intval($msg);
				if (strlen($targetValue) > $msg) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_COUNT, "字符串位数应小于:$msg", $key);
				}
				break;
			case self::VA_COUNT_GT:
				$msg = intval($msg);
				if (strlen($targetValue) < $msg) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_COUNT_GT, "字符串位数应大于:$msg", $key);
				}
				break;
			case self::VA_BETWEEN:
				$msg    = explode("|", $msg);
				$msg[0] = intval($msg[0]);
				$msg[1] = intval($msg[1]);
				if (strlen($targetValue) >= $msg[0] && strlen($targetValue) <= $msg[1]) {

				} else {
					$is_true = false;
					$this->SetErrorMsg(self::VA_BETWEEN, "字符串位数应大于等于 ".$msg[0]."并且小于等于 ".$msg[1], $key);
				}
				break;
			case self::VA_MOBILE:
				if (empty(preg_match("/^1[358]\d{9}$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_MOBILE, "请填写正确的手机号码!", $key);
				}
				break;
			case self::VA_LETTER:
				if (empty(preg_match("/^[a-zA-Z]+$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_LETTER, "请填写正确的英文字母", $key);
				}
				break;
			case self::VA_LETTER_AND_NUMBER:
				if (empty(preg_match("/^[a-zA-Z0-9]+$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_LETTER_AND_NUMBER, "只允许填写英文字母与数字", $key);
				}
				break;
			case self::VA_LETTER_AND_NUMBER_AND_UNDERLINE:
				if (empty(preg_match("/^[a-zA-Z]\w*$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_LETTER_AND_NUMBER_AND_UNDERLINE, "只允许填写英文字母与数字和下划线,并且只能以英文字母开头", $key);
				}
				break;
			case self::VA_DATE:
				if (empty(preg_match("/^\d{2}-\d{2}-\d{4}$/", $targetValue))) {
					$is_true = false;
					$this->SetErrorMsg(self::VA_DATE, "日期填写不正确(格式：mm-dd-yyyy) ".$targetValue, $key);
				}
				break;
			default:
				$is_true = false;
				$this->SetErrorMsg(self::ER_NOTHING, "未匹配到规则", $key);
				break;
		}
		return $is_true;
	}
	private function SetErrorMsg($code, $msg, $key = "") {
		$this->error_msg['code'] = $code;
		$this->error_msg['msg']  = $msg;
		$this->error_msg['key']  = $key;
	}
	public function GetErrorMsg() {
		return $this->error_msg;
	}
}