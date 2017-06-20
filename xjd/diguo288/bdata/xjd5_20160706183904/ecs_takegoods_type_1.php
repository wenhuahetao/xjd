<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods_type`;");
E_C("CREATE TABLE `ecs_takegoods_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` int(10) unsigned NOT NULL DEFAULT '0',
  `type_money_count` int(10) unsigned NOT NULL DEFAULT '0',
  `use_start_date` int(10) NOT NULL DEFAULT '0',
  `use_end_date` int(10) NOT NULL DEFAULT '0',
  `send_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_takegoods_type` values('1','提货券002','200','3','1437897600','1443513600','0');");
E_D("replace into `ecs_takegoods_type` values('2','111','100','2','1437984000','1438156800','0');");
E_D("replace into `ecs_takegoods_type` values('3','提货券','11111','100','1437840000','1501171200','0');");

require("../../inc/footer.php");
?>