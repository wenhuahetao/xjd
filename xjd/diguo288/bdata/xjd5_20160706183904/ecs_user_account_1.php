<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('2','1','admin','-200.00','1437432722','1437432722','','支付宝账号：123456789\r\n姓名：788','1','','0');");
E_D("replace into `ecs_user_account` values('3','10','','100.00','1438049762','1438049762','','储值卡充值','0','储值卡号：15072832440295','1');");
E_D("replace into `ecs_user_account` values('4','5','','100.00','1448923199','1448923199','','储值卡充值','0','储值卡号：15120152848970','1');");
E_D("replace into `ecs_user_account` values('5','6','admin','11111.00','1456290702','1456290702','','','0','','1');");
E_D("replace into `ecs_user_account` values('6','28','','0.01','1458094101','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('7','1','','123123.00','1458105895','0','','123123','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('8','1','','-111.00','1458106151','0','','123123adsdasd','1','','0');");
E_D("replace into `ecs_user_account` values('9','1','','11.00','1458106175','0','','12312asdas','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('10','1','','123123.00','1458106198','0','','123123','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('11','43','','1.00','1458207850','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('12','2','68ecshopxjd_cus','-15.00','1458284995','0','订单退款：2015072862934','范德萨','1','','0');");
E_D("replace into `ecs_user_account` values('13','60','','10.00','1463442357','0','','','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('14','79','','1000.00','1467579075','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('15','79','','1000.00','1467579078','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('16','97','','1.00','1467703361','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('17','94','','10.00','1467737718','0','','lkihlics','0','银联在线','0');");

require("../../inc/footer.php");
?>