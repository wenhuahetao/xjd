<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_cat`;");
E_C("CREATE TABLE `ecs_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_cat` values('43','223');");
E_D("replace into `ecs_goods_cat` values('49','223');");
E_D("replace into `ecs_goods_cat` values('50','10');");
E_D("replace into `ecs_goods_cat` values('119','307');");
E_D("replace into `ecs_goods_cat` values('120','307');");
E_D("replace into `ecs_goods_cat` values('130','307');");
E_D("replace into `ecs_goods_cat` values('131','307');");
E_D("replace into `ecs_goods_cat` values('137','307');");
E_D("replace into `ecs_goods_cat` values('208','222');");
E_D("replace into `ecs_goods_cat` values('209','222');");
E_D("replace into `ecs_goods_cat` values('210','222');");
E_D("replace into `ecs_goods_cat` values('211','222');");
E_D("replace into `ecs_goods_cat` values('212','222');");

require("../../inc/footer.php");
?>