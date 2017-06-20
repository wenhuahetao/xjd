<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_valuecard_type`;");
E_C("CREATE TABLE `ecs_valuecard_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` int(10) unsigned NOT NULL DEFAULT '0',
  `use_start_date` int(10) NOT NULL DEFAULT '0',
  `use_end_date` int(10) NOT NULL DEFAULT '0',
  `send_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_valuecard_type` values('1','储值卡','100','1437897600','1501228800','0');");

require("../../inc/footer.php");
?>