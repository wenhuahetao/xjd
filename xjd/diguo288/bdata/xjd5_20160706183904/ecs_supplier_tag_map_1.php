<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_tag_map`;");
E_C("CREATE TABLE `ecs_supplier_tag_map` (
  `tag_id` int(11) unsigned NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tag_id`,`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_tag_map` values('1','1');");
E_D("replace into `ecs_supplier_tag_map` values('1','5');");
E_D("replace into `ecs_supplier_tag_map` values('1','7');");
E_D("replace into `ecs_supplier_tag_map` values('2','1');");
E_D("replace into `ecs_supplier_tag_map` values('2','2');");
E_D("replace into `ecs_supplier_tag_map` values('2','6');");
E_D("replace into `ecs_supplier_tag_map` values('2','7');");

require("../../inc/footer.php");
?>