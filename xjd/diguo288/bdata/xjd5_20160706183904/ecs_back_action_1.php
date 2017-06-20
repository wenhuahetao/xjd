<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_action`;");
E_C("CREATE TABLE `ecs_back_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `status_back` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `back_id` (`back_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_action` values('1','1','admin','5','0','','1438058917');");
E_D("replace into `ecs_back_action` values('2','2','admin','5','0','','1438060058');");
E_D("replace into `ecs_back_action` values('3','1','admin','4','1','f','1442972673');");
E_D("replace into `ecs_back_action` values('4','1','admin','3','1','','1442972677');");
E_D("replace into `ecs_back_action` values('5','3','admin','5','0','','1442973173');");
E_D("replace into `ecs_back_action` values('6','4','admin','5','0','','1442973274');");
E_D("replace into `ecs_back_action` values('7','4','admin','1','0','','1442973278');");
E_D("replace into `ecs_back_action` values('8','1','68ecshopxjd_cus','3','1','[售后] 45415','1458109727');");
E_D("replace into `ecs_back_action` values('9','1','68ecshopxjd_cus','3','1','[售后] 56656','1458109743');");
E_D("replace into `ecs_back_action` values('10','1','68ecshopxjd_cus','3','1','[售后] 范德萨发','1458357866');");
E_D("replace into `ecs_back_action` values('11','8','68ecshopxjd_cus','0','0','方式','1458357907');");

require("../../inc/footer.php");
?>