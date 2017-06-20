<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_virtual_goods_card`;");
E_C("CREATE TABLE `ecs_virtual_goods_card` (
  `card_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `card_sn` varchar(60) NOT NULL DEFAULT '',
  `add_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `is_saled` tinyint(1) NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `is_verification` int(11) DEFAULT '0',
  `supplier_id` int(11) DEFAULT NULL,
  `buy_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`card_id`),
  KEY `goods_id` (`goods_id`),
  KEY `car_sn` (`card_sn`),
  KEY `is_saled` (`is_saled`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_virtual_goods_card` values('103','239','207901444605027','1444605027','1446105600','1','2015101251748','0','0','0');");
E_D("replace into `ecs_virtual_goods_card` values('104','248','974101456406445','1456406445','1550332800','1','2016022538549','0','6','0');");

require("../../inc/footer.php");
?>