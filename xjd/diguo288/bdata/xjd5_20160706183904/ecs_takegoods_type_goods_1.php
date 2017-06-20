<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods_type_goods`;");
E_C("CREATE TABLE `ecs_takegoods_type_goods` (
  `tg_type_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_ids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`tg_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_takegoods_type_goods` values('1','26,28,27,29,30,31,32,50');");
E_D("replace into `ecs_takegoods_type_goods` values('2','26,26,28,27,29,30,31,32,50,51,52,53,54,55,56,60,62,63,67,68,69,70,71,72,74,75,78,79,81,82,85,86,88,89,90,91,92,93,94,95,96,97,99,100,101,102,103,105,106,107,110');");
E_D("replace into `ecs_takegoods_type_goods` values('3','26,28,27,29,30,31,32,50,51,52,53,54,55,56,60,62,63,67,68,69,70,71,72,74,75,78,79,81,82,85,86,88,89,90,91,92,93,94,95,96,97,99,100,101,102,103,105,106,107,110');");

require("../../inc/footer.php");
?>