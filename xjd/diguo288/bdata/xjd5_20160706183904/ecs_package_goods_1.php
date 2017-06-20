<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_package_goods`;");
E_C("CREATE TABLE `ecs_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_package_goods` values('3','219','0','1','1');");
E_D("replace into `ecs_package_goods` values('3','218','0','1','1');");
E_D("replace into `ecs_package_goods` values('3','216','0','1','1');");
E_D("replace into `ecs_package_goods` values('3','221','0','1','1');");
E_D("replace into `ecs_package_goods` values('3','150','0','1','1');");
E_D("replace into `ecs_package_goods` values('14','101','0','1','1');");
E_D("replace into `ecs_package_goods` values('14','230','0','1','1');");
E_D("replace into `ecs_package_goods` values('13','127','0','1','1');");
E_D("replace into `ecs_package_goods` values('13','117','0','1','1');");
E_D("replace into `ecs_package_goods` values('13','112','0','1','1');");
E_D("replace into `ecs_package_goods` values('13','106','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','122','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','91','0','1','1');");
E_D("replace into `ecs_package_goods` values('13','110','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','86','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','123','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','125','0','1','1');");
E_D("replace into `ecs_package_goods` values('4','197','0','1','1');");
E_D("replace into `ecs_package_goods` values('4','185','0','1','1');");
E_D("replace into `ecs_package_goods` values('4','192','0','1','1');");
E_D("replace into `ecs_package_goods` values('4','199','0','1','1');");
E_D("replace into `ecs_package_goods` values('4','147','32','1','1');");
E_D("replace into `ecs_package_goods` values('14','229','0','1','1');");
E_D("replace into `ecs_package_goods` values('14','225','0','1','1');");

require("../../inc/footer.php");
?>