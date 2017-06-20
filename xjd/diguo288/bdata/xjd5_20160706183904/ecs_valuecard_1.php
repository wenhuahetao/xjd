<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_valuecard`;");
E_C("CREATE TABLE `ecs_valuecard` (
  `vc_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `vc_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `vc_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `vc_pwd` varchar(20) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`vc_id`),
  KEY `vc_sn` (`vc_sn`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_valuecard` values('1','1','15072895047271','x1o1l4x8s7t3d5s7','0','0','1438049368');");
E_D("replace into `ecs_valuecard` values('2','1','15072859383926','u9w7e3p4x9t4q2w8','0','0','1438049368');");
E_D("replace into `ecs_valuecard` values('3','1','15072852405108','d6n4k8f4t7k1o1o0','0','0','1438049368');");
E_D("replace into `ecs_valuecard` values('4','1','15072873278552','b6l6y1f7g2r2f3j8','0','0','1438049368');");
E_D("replace into `ecs_valuecard` values('5','1','15072832440295','x3n6c1k6v7d8o8y0','10','1438049762','1438049368');");
E_D("replace into `ecs_valuecard` values('6','1','15120160014464','k0k6k1m0t7v4s8s8','0','0','1448923187');");
E_D("replace into `ecs_valuecard` values('7','1','15120152848970','j7o4p5a1b4n6r7l5','5','1448923199','1448923187');");

require("../../inc/footer.php");
?>