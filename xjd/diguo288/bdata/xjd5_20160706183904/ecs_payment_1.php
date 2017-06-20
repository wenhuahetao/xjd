<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_payment`;");
E_C("CREATE TABLE `ecs_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_pickup` tinyint(1) NOT NULL,
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_payment` values('1','alipay','支付宝','0','支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，<font color=\"red\"><b>零预付，免年费</b></font>，单笔阶梯费率，无流量限制。<br/><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=alipay\" target=\"_blank\"><font color=\"red\">立即在线申请</font></a>','0','a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:18:\"dyyh888@vip.qq.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"4nvvggau72fhp2op4compkid8vonsth8\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:16:\"2088302554300466\";}i:3;a:3:{s:4:\"name\";s:17:\"alipay_pay_method\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"1\";}}','1','0','1','0');");
E_D("replace into `ecs_payment` values('2','tenpay','财付通','0','<b>财付通（www.tenpay.com） - 腾讯旗下在线支付平台，通过国家权威安全认证，支持各大银行网上支付，免支付手续费。</b><br /><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=tenpay&par=1202822001\" target=\"_blank\">立即免费申请：单笔费率1%</a><br /><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=tenpay&par=1442037873\" target=\"_blank\">立即购买包量套餐：折算后单笔费率0.6-1%</a>','0','a:3:{i:0;a:3:{s:4:\"name\";s:14:\"tenpay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:10:\"tenpay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:12:\"magic_string\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}','0','0','1','0');");
E_D("replace into `ecs_payment` values('3','alipay_bank','支付宝-网银直连','0','支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，<font color=\"red\"><b>零预付，免年费</b></font>，单笔阶梯费率，无流量限制。<br/><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=alipay\" target=\"_blank\"><font color=\"red\">立即在线申请</font></a>','0','a:3:{i:0;a:3:{s:4:\"name\";s:22:\"alipay_account_www_com\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:20:\"zzl_1314@foxmail.com\";}i:1;a:3:{s:4:\"name\";s:18:\"alipay_key_www_com\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"apxi0gnpq4nje54e2afuqs6s2274e3dx\";}i:2;a:3:{s:4:\"name\";s:22:\"alipay_partner_www_com\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:16:\"2088302200781582\";}}','1','0','1','0');");
E_D("replace into `ecs_payment` values('4','balance','余额支付','0','使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。','0','a:0:{}','1','0','1','0');");
E_D("replace into `ecs_payment` values('5','ChinaPay','银联在线','0','银联在线支付是中国银联推出的网上支付平台，支持多家发卡银行，涵盖借记卡和信用卡等，包含认证支付、快捷支付和网银支付多种方式，其中认证和快捷支付无需开通网银，仅需一张银行卡，即可享受安全、快捷的网上支付服务！','0','a:3:{i:0;a:3:{s:4:\"name\";s:16:\"chinapay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:12:\"商户帐号\";}i:1;a:3:{s:4:\"name\";s:20:\"chinapay_merkey_file\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:50:\"includes/modules/payment/chinapay/私有密钥.key\";}i:2;a:3:{s:4:\"name\";s:20:\"chinapay_pubkey_file\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:50:\"includes/modules/payment/chinapay/公共密钥.key\";}}','1','0','1','0');");
E_D("replace into `ecs_payment` values('6','cod','货到付款','0','开通城市：×××\r\n货到付款区域：×××','0','a:0:{}','1','1','0','0');");
E_D("replace into `ecs_payment` values('7','weixin','微信支付','0','微信支付 for ecshop by 68ecshop','0','a:4:{i:0;a:3:{s:4:\"name\";s:5:\"appId\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:18:\"wxae0bd054857e02d5\";}i:1;a:3:{s:4:\"name\";s:9:\"appSecret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"dee03aaf9076eae98ef6add3d1d5092d\";}i:2;a:3:{s:4:\"name\";s:9:\"partnerId\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:10:\"1280747401\";}i:3;a:3:{s:4:\"name\";s:10:\"partnerKey\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"812e6034b7e0a695d2dfd3e784f8dc3v\";}}','1','0','1','0');");

require("../../inc/footer.php");
?>