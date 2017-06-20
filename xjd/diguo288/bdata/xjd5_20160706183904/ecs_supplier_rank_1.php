<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_rank`;");
E_C("CREATE TABLE `ecs_supplier_rank` (
  `rank_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(30) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_rank` values('1','初级店铺','50');");
E_D("replace into `ecs_supplier_rank` values('2','中级店铺','40');");
E_D("replace into `ecs_supplier_rank` values('3','高级店铺','30');");

require("../../inc/footer.php");
?>