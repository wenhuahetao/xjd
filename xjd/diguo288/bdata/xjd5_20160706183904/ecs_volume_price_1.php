<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_volume_price`;");
E_C("CREATE TABLE `ecs_volume_price` (
  `price_type` tinyint(1) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `volume_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `volume_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`price_type`,`goods_id`,`volume_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_volume_price` values('1','231','5','65.00');");
E_D("replace into `ecs_volume_price` values('1','231','4','70.00');");
E_D("replace into `ecs_volume_price` values('1','231','3','75.00');");
E_D("replace into `ecs_volume_price` values('1','231','2','80.00');");
E_D("replace into `ecs_volume_price` values('1','230','2','30.00');");
E_D("replace into `ecs_volume_price` values('1','230','3','25.00');");
E_D("replace into `ecs_volume_price` values('1','230','4','20.00');");
E_D("replace into `ecs_volume_price` values('1','46','10','199.00');");
E_D("replace into `ecs_volume_price` values('1','283','5','2.20');");
E_D("replace into `ecs_volume_price` values('1','283','8','2.00');");
E_D("replace into `ecs_volume_price` values('1','283','10','1.70');");
E_D("replace into `ecs_volume_price` values('1','289','10','78.00');");
E_D("replace into `ecs_volume_price` values('1','290','2','50.00');");

require("../../inc/footer.php");
?>