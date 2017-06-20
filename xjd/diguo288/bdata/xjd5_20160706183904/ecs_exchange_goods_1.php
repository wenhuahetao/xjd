<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_exchange_goods`;");
E_C("CREATE TABLE `ecs_exchange_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `exchange_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `is_exchange` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_exchange_goods` values('97','14990','1','0');");
E_D("replace into `ecs_exchange_goods` values('100','180000','1','1');");
E_D("replace into `ecs_exchange_goods` values('81','1990','1','1');");
E_D("replace into `ecs_exchange_goods` values('102','1560','1','1');");
E_D("replace into `ecs_exchange_goods` values('110','999','1','1');");
E_D("replace into `ecs_exchange_goods` values('56','3999','1','0');");
E_D("replace into `ecs_exchange_goods` values('29','1299','1','0');");
E_D("replace into `ecs_exchange_goods` values('86','1099','1','0');");
E_D("replace into `ecs_exchange_goods` values('31','500','1','0');");
E_D("replace into `ecs_exchange_goods` values('55','499','1','0');");
E_D("replace into `ecs_exchange_goods` values('52','499','1','0');");
E_D("replace into `ecs_exchange_goods` values('62','999','1','0');");
E_D("replace into `ecs_exchange_goods` values('91','1699','1','0');");
E_D("replace into `ecs_exchange_goods` values('79','799','1','0');");
E_D("replace into `ecs_exchange_goods` values('101','1500','1','0');");
E_D("replace into `ecs_exchange_goods` values('92','700','1','0');");
E_D("replace into `ecs_exchange_goods` values('85','2600','1','0');");
E_D("replace into `ecs_exchange_goods` values('30','699','1','0');");
E_D("replace into `ecs_exchange_goods` values('94','2000','1','0');");
E_D("replace into `ecs_exchange_goods` values('105','1200','1','0');");
E_D("replace into `ecs_exchange_goods` values('26','100','1','1');");

require("../../inc/footer.php");
?>