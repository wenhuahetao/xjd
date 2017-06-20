<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_distrib_goods`;");
E_C("CREATE TABLE `ecs_ecsmart_distrib_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `distrib_time` int(2) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `distrib_money` decimal(10,2) NOT NULL,
  `distrib_type` int(2) NOT NULL,
  `goods_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_distrib_goods` values('1','0','1458432000','1458691200','0.00','1','7');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('2','0','1458432000','1458691200','0.00','1','100');");

require("../../inc/footer.php");
?>