<?php

/**
 * MadCms ips支付插件
 * ============================================================================
 *
 *
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:		 wang <wang@dearmadman.com>
 * @version:	 v1.0
 * @date:		 2014-07-29 15:08:22
 */

if (!defined('MadMan')) {
	die("No Way!");
}

class ips {

	function __construct() {

	}

	function getCode($order, $payment, $bank_code = "") {
		$mer_code   = $payment['user_name'];
		$billno     = $order['order_sn'];
		$amount     = $order['order_amount'];
		$datestr    = date("Ymd");
		$url        = $_SERVER['SERVER_NAME']."response.php?code=ips";
		$strcert    = $payment['access_token'];
		$strcontent = 'billno'.$billno.'currencytypeRMBamount'.$amount.'date'.$datestr.'orderencodetype5'.$strcert;
		$signmd5    = MD5($strcontent);

		$def_url = '<form style="text-align:center;" action="https://pay.ips.com.cn/ipayment.aspx" method="post" id="ips_form">';
		$def_url .= "<input type='hidden' name='Mer_code' value='".$mer_code."'>\n";
		$def_url .= "<input type='hidden' name='Billno' value='".$billno."'>\n";
		$def_url .= "<input type='hidden' name='Gateway_type' value='01'>\n";
		$def_url .= "<input type='hidden' name='Currency_Type'  value='RMB'>\n";
		$def_url .= "<input type='hidden' name='Lang'  value='GB'>\n";
		$def_url .= "<input type='hidden' name='Amount'  value='".$amount."'>\n";
		$def_url .= "<input type='hidden' name='Date' value='".$datestr."'>\n";
		$def_url .= "<input type='hidden' name='DispAmount' value='".$amount."'>\n";
		$def_url .= "<input type='hidden' name='OrderEncodeType' value='5'>\n";
		$def_url .= "<input type='hidden' name='RetEncodeType' value='17'>\n";
		$def_url .= "<input type='hidden' name='Rettype'  value='1'>\n";
		$def_url .= "<input type='hidden' name='Merchanturl' value='".$url."'>\n";
		$def_url .= "<input type='hidden' name='ServerUrl' value='".$url."'>\n";
		$def_url .= "<input type='hidden' name='SignMD5' value='".$signmd5."'>\n";

		$def_url .= "<input type='hidden' name='Bankco' value='".$bank_code."'>\n";
		$def_url .= "<input type='hidden' name='DoCredit' value='1'>\n";
		$def_url .= "</form><br />";

		return $def_url;
	}

	/**
	 *	安装初始化
	 */
	function install_bank() {
		$db = $GLOBALS['db'];
		/*创建插件目录*/
		$fields = array("plugin_name", "plugin_code", "plugin_dis");
		$data   = array("环迅支付", "ips", "迅付信息科技有限公司（简称：环迅支付），是中国最早成立的第三方支付企业。公司在2011年获颁中国人民银行首批《支付业务许可证》。公司平台支持所有国内主流银行及国际信用卡，为全球2000万用户提供金融级的支付体验。");
		$db->autoExcute("pay_plugin", "", $fields, $data);
		$id = $db->getInsertId();
		/*录入银行数据*/
		$pay_array   = array();
		$pay_array[] = array('环迅支付', 'ips', '迅付信息科技有限公司（简称：环迅支付），是中国最早成立的第三方支付企业。公司在2011年获颁中国人民银行首批《支付业务许可证》。公司平台支持所有国内主流银行及国际信用卡，为全球2000万用户提供金融级的支付体验。');
		$pay_array[] = array('北京农村商业银行', '00056', '银行卡支付（全国范围）');
		$pay_array[] = array('北京银行', '00050', '北京银行（全国范围）');
		$pay_array[] = array('渤海银行', '00095', '银行卡支付（全国范围）');
		$pay_array[] = array('东亚银行', '00096', '银行卡支付（全国范围）');
		$pay_array[] = array('光大银行', '00057', '银行卡支付（全国范围）');
		$pay_array[] = array('广发银行', '00052', '银行卡支付（全国范围）');
		$pay_array[] = array('杭州银行', '00081', '银行卡支付（全国范围）');
		$pay_array[] = array('华夏银行', '00041', '华夏借记卡（全国范围）');
		$pay_array[] = array('交通银行', '00005', '太平洋卡（全国范围）');
		$pay_array[] = array('民生银行', '00013', '民生卡（全国范围）');
		$pay_array[] = array('宁波银行', '00085', '银行卡支付（全国范围）');
		$pay_array[] = array('平安银行', '00087', '平安借记卡（全国范围）');
		$pay_array[] = array('浦东发展银行', '00032', '东方卡（全国范围）');
		$pay_array[] = array('上海银行', '00084', '银行卡支付（全国范围）');
		$pay_array[] = array('深圳发展银行', '00023', '发展卡支付（全国范围）');
		$pay_array[] = array('兴业银行', '00016', '在线兴业（全国范围）');
		$pay_array[] = array('邮政储蓄', '00051', '银联网上支付签约客户（全国范围）');
		$pay_array[] = array('招商银行', '00021', '银行卡支付（全国范围）');
		$pay_array[] = array('浙商银行', '00086', '银行卡支付（全国范围）');
		$pay_array[] = array('中国工商银行', '00004', '网上签约注册用户（全国范围）');
		$pay_array[] = array('中国工商银行', '00026', '工行手机支付（仅限工行手机签约客户）');
		$pay_array[] = array('中国建设银行', '00015', '网上银行签约客户（全国范围）');
		$pay_array[] = array('中国农业银行', '00017', '网上银行签约客户（全国范围）');
		$pay_array[] = array('中国银行', '00083', '银行卡支付（全国范围）');
		$pay_array[] = array('中信银行', '00054', '银行卡支付（全国范围）');
		$fields      = array("pay_name", "pay_code", "pay_desc", "pay_plugin_id");
		foreach ($pay_array as $key => $value) {
			$data = array(
				$value[0],
				$value[1],
				$value[2],
				$id
			);
			$res = $db->autoExcute("pay_type", "", $fields, $data);
		}

	}

	function response() {

		$payment       = get_payment($_GET['code']);
		$billno        = $_GET['billno'];
		$amount        = $_GET['amount'];
		$mydate        = $_GET['date'];
		$succ          = $_GET['succ'];
		$msg           = $_GET['msg'];
		$ipsbillno     = $_GET['ipsbillno'];
		$retEncodeType = $_GET['retencodetype'];
		$currency_type = $_GET['Currency_type'];
		$signature     = $_GET['signature'];
		//$order_sn      = intval(substr($billno, 0, 10));

		$sql = "SELECT order_id FROM ".$GLOBALS['ecs']->table('order_info').
		" WHERE order_sn = '$billno'";
		$order_id = $GLOBALS['db']->getOne($sql);

		$sql = "SELECT log_id FROM ".$GLOBALS['ecs']->table('pay_log').
		" WHERE order_id = '$order_id'";
		$order_sn = $GLOBALS['db']->getOne($sql);

		if ($succ == 'Y') {
			$content = 'billno'.$billno.'currencytype'.$currency_type.'amount'.$amount.'date'.$mydate.'succ'.$succ.'ipsbillno'.$ipsbillno.'retencodetype'.$retEncodeType;

			$cert            = $payment['ips_key'];
			$signature_1ocal = md5($content.$cert);

			if ($signature_1ocal == $signature) {
				if (!check_money($order_sn, $amount)) {
					return false;
				}

				$sql          = "select * from ecs_order_info where order_sn='".$billno."'";
				$order_info_s = $GLOBALS['db']->getRow($sql);

				if (!empty($order_info_s) && $order_info_s['pay_status'] != "2") {

					$sql = "update ecs_order_info set pay_status=2 where order_sn='".$billno."'";
					$res = $GLOBALS['db']->Query($sql);

					$order_sns = $order_info_s['order_sn'];
					$mobiles   = $order_info_s['mobile'];
					$msgs      = "您好，您的订单号$order_sns已经支付成功，我们会尽快安排为您发货，请注意查收，若有疑问，请您联系在线客服！";

					include_once ("sms2.php");

					$post_data = "account=dfsc888&password=13956566650&mobile=$mobiles&content=" .rawurlencode($msgs);

					$gets = Post($post_data, $target);

				}
				order_paid($order_sn);

				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

}