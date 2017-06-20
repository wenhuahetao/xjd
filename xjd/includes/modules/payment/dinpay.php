<?php

/**
 * ECSHOP 智付支付插件
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: ---- $
 * $Id: cncard.php 17063 2010-03-25 06:35:46Z  $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/dinpay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/**
 * 模块信息
 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'dinpay_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'Dinpay';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.dinpay.com/';

    /* 版本号 */
    $modules[$i]['version'] = 'V3.0';

    /* 配置信息 */
    $modules[$i]['config'] = array(
        array('name' => 'k_mid', 'type' => 'text',   'value' => ''),
        array('name' => 'k_pass',  'type' => 'text',   'value' => ''),
        /*array('name' => 'k_memo1',  'type' => 'text',   'value' => 'ecshop'),
        array('name' => 'k_moneytype',  'type' => 'select',   'value' => '0'),
        array('name' => 'k_language',  'type' => 'select',   'value' => '0'),
        array('name' => 'k_paygate', 'type' => 'select', 'value' => '')*/
    );

    return;
}

class dinpay
{
    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function dinpay()
    {
    }

    function __construct()
    {
        $this->dinpay();
    }


    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {

		/*智付开始*/
		$m_id		=	trim($payment['k_mid']);//商户编号
		$m_orderid	=	$order['order_sn'];//商户网站依照订单号规则生成的订单号，不能重复
		$m_oamount	=	$order['order_amount'];//商户订单总金额
		$m_ocurrency    =1;
		$m_url		=	return_url(basename(__FILE__, '.php'));;
		$m_language	=	1;
		$s_name		=	' ';
		$s_addr		=	' ';
		$s_postcode	=	' ';
		$s_tel		=	' ';
		$s_eml		=	' ';
		$r_name		=	' ';
		$r_addr		=	' ';
		$r_postcode	=	' ';
		$r_tel		=	' ';
		$r_eml		=	' ';
		$m_ocomment	=	' ';
		if (!empty($order['add_time']))
        {
            $k_ymd      = local_date('Ymd', $order['add_time']);
        }
        else
        {
            $k_ymd      = local_date('Ymd', gmtime());
        }
		$modate		=	date ("Y-m-d H:i:s" , mktime(gmdate('H')+8,gmdate('i'),gmdate('s'),gmdate('m'),gmdate('d'),gmdate('Y')));
		$m_status	= 	0;
		if (empty($order['order_id']))
        {
            $c_memo2    = "voucher";                      //商户需要在支付结果通知中转发的商户参数二
        }
        else
        {
            $c_memo2    = '';
        }
		//组织订单信息
		$m_info = $m_id."|".$m_orderid."|".$m_oamount."|".$m_ocurrency."|".$m_url."|".$m_language;
		$s_info = $s_name."|".$s_addr."|".$s_postcode."|".$s_tel."|".$s_eml;
		$r_info = $r_name."|".$r_addr."|".$r_postcode."|".$r_tel."|".$r_eml."|".$m_ocomment."|".$m_status."|".$modate;

		$OrderInfo = $m_info."|".$s_info."|".$r_info;

		//echo $OrderInfo;

		//订单信息先转换成HEX，然后再加密
		$key = trim($payment['k_pass']);     //<--支付密钥--> 注:此处密钥必须与商家后台里的密钥一致

		$hex="";
		 for ($i=0;$i<strlen($OrderInfo);$i++)
			 $hex.=dechex(ord($OrderInfo[$i]));
		 $OrderInfo=strtoupper($hex);
		//$OrderInfo = $hex;
		$digest = strtoupper(md5($OrderInfo.$key));
		/*智付结束*/

         $def_url = '<form name="payForm1" action="https://pay.dinpay.com/PHPReceiveMerchantAction.do" method="POST" target="_blank">'.
                    "<input type=\"hidden\" name=\"OrderMessage\" value=\"$OrderInfo\" />".
                    "<input type=\"hidden\" name=\"digest\" value=\"$digest\" />".
                    "<input type=\"hidden\" name=\"M_ID\" value=\"$m_id\" />".
					"<input type=\"hidden\" name=\"c_memo2\" value=\"$c_memo2\" />".
                    "<input type=\"submit\" name=\"submit\" value=\"".$GLOBALS['_LANG']['dinpay_button']."\" />".
                    "</form>";

        return $def_url;
    }

    /**
     * 响应操作
     */

    function respond()
    {
        $payment  = get_payment($_GET['code']);
		/*智付接收处理开始*/
		$OrderInfo=$_POST['OrderMessage'];
		$signMsgs=$_POST['Digest'];
		$key=trim($payment['k_pass']);; //密钥
		$digest = strtoupper(md5($OrderInfo.$key));
		//echo $digest;
		if ($digest == $signMsgs)
		{
				$string='';
				for ($i=0;$i<strlen($OrderInfo)-1;$i+=2)
					 $string.=chr(hexdec($OrderInfo[$i].$OrderInfo[$i+1]));
				$OrderInfo =$string;
				$parm=explode("|", $OrderInfo);

				$paymentId =$parm[1];
				$money=$parm[2];

				$m_id		= 	$parm[0];
				$m_orderid	= 	$parm[1];
				$m_oamount	= 	$parm[2];
				$m_ocurrency= 	$parm[3];
				$m_language	= 	$parm[4];
				$s_name		= 	$parm[5];
				$s_addr		= 	$parm[6];
				$s_postcode	= 	$parm[7];
				$s_tel		= 	$parm[8];
				$s_eml		= 	$parm[9];
				$r_name		= 	$parm[10];
				$r_addr		= 	$parm[11];
				$r_postcode	= 	$parm[12];
				$r_tel		= 	$parm[13];
				$r_eml		= 	$parm[14];
				$m_ocomment	= 	$parm[15];
				$modate		=	$parm[16];
				$State		=	$parm[17];

				$c_memo2        = $_REQUEST['c_memo2'];
				//判断是否是会员充值订单
                                $len = strlen($m_orderid);
				if($len < 6)
				{
				    $c_memo2        =   'voucher';
			        }

				//echo "<br>";
				//echo $State;
				//echo "<br>";
				//echo $m_orderid."<br>";
				//验证通过后,将订单sn转换为ID 来操作ec订单表
				if ($c_memo2 == 'voucher')
				{
					$c_order = get_order_id_by_sn($m_orderid, "true");
				}
				else
				{
					$c_order = get_order_id_by_sn($m_orderid);
				}
				if ($State == 2)
					{

						//echo $c_order;
						//echo "===========";
						order_paid($c_order);/* 改变订单状态 */
						//echo "===========---------------";
						return true;

					}
					else
					{
						return false;
					}

		   } else{
				return false;
    	   }
		/*智付接收处理结束*/

    }
}

?>