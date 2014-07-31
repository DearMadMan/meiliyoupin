<?php

/**
 * MadCms User Moudel
 * ============================================================================
 *
 *
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:		 wang <wang@dearmadman.com>
 * @version:	 v1.0
 * @date:		 2014-07-30 15:23:46
 */

if (!defined('MadMan')) {
	die("No Way!");
}

class User {

	protected $table  = "users";
	protected $db     = null;
	protected $user   = null;
	protected $fields = array(
		"user_nick" => array("VA_CAN_EMPTY|VA_BETWEEN|VA_LETTER_AND_NUMBER_AND_UNDERLINE", "4|16"),
		"user_name" => array("VA_EMPTY|VA_BETWEEN|VA_LETTER_AND_NUMBER_AND_UNDERLINE", "4|16"),
		"user_qq" => array("VA_CAN_EMPTY|VA_BETWEEN|VA_NUMBER", "5|11"),
		"user_email" => array("VA_EMPTY|VA_BETWEEN|VA_EMAIL", "4|30"),
		"user_word" => array("VA_EMPTY|VA_COUNT_GT", "5"),
		"user_money"  => "VA_CAN_EMPTY|VA_NUMBER",
		"lock_money"  => "VA_CAN_EMPTY|VA_NUMBER",
		"user_points" => "VA_CAN_EMPTY|VA_NUMBER",
		"real_name"   => array("VA_CAN_EMPTY|VA_BETWEEN|VA_LETTER", "4|16"),
		"virtual_money" => "VA_CAN_EMPTY|VA_NUMBER",
		"user_level"    => "VA_CAN_EMPTY|VA_NUMBER",
		"sex"           => "VA_CAN_EMPTY|VA_NUMBER",
		"birthday"      => "VA_CAN_EMPTY|VA_DATE",
		"address_id"    => "VA_CAN_EMPTY|VA_NUMBER",
		"referrer_id"   => "VA_CAN_EMPTY|VA_NUMBER"
	);
	function __construct($db) {
		$this->db = $db;
	}

	/**
	 * [Add 添加用户]
	 * @param [Array] $fields [表字段集合]
	 * @param [Array] $data   [表数据集合]
	 */
	function Add($fields, $data) {
		$res = $this->db->autoExcute($this->table, "", $fields, $data);
		if (!$res) {
			return "";
		}
		$user_id    = $this->db->getInsertId();
		$user       = $this->db->getRowFromTable($this->table, "where id =$user_id");
		$this->user = $user;
		return $user;
	}

	/**
	 * [Update 用户更新]
	 * @param [Array] $fields [表字段集合]
	 * @param [Array] $data   [数据集合]
	 */
	function Update($fields, $data) {
		$res = $this->db->autoExcute($this->table, "id=".$this->user['id'], $fields, $data, "update");
		if ($res) {
			$this->user = $this->GetUser($this->user['id']);
		} else {
			return "";
		}
		return $this->user;
	}

	/**
	 * [Login 用户登录]
	 * @param [string] $user_name [用户名]
	 * @param [string] $passwod   [密码]
	 */
	function Login($user_name, $passwod) {
		$user = $this->db->getRowFromTable($this->table, "where user_name='$user_name' and user_word='" .GetMadMD5($passwod)."'");
		if (!empty($user)) {
			$this->user = $user;
		}
		return $user;
	}

	/**
	 * [GetUser 获取指定ID用户数据并保存数据至该对象]
	 * @param [Number] $id [用户ID]
	 */
	function GetUser($id) {
		$user       = $this->db->getRowFromTable($this->table, "where id=$id");
		$this->user = $user;
		return $user;
	}
	/**
	 * [GetFields 返回表字段以便于表单效验]
	 */
	function GetFields() {
		return $this->fields;
	}

	/**
	 * [ListenFields 监听字段集合，返回需求验证的集合验证方式]
	 * @param [Array] $arr [需求验证的集合]
	 */
	function ListenFields($arr) {
		$fields = array();
		foreach ($arr as $key => $value) {
			if (array_key_exists($key, $this->fields)) {
				$fields[$key] = $this->fields[$key];
			}
		}
		return $fields;
	}
	function GetTarget($arr) {
		$fields = array();
		foreach ($arr as $key => $value) {
			if (array_key_exists($key, $this->fields)) {
				$fields[$key] = $value;
			}
		}
		return $fields;
	}
}

?>
