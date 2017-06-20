<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_verifycode`;");
E_C("CREATE TABLE `ecs_verifycode` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` char(12) NOT NULL,
  `getip` char(15) NOT NULL,
  `verifycode` char(6) NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `reguid` mediumint(8) unsigned DEFAULT '0',
  `regdateline` int(10) unsigned DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_verifycode` values('12','13933528316','192.168.1.162','573747','1438050106','0','0','1');");
E_D("replace into `ecs_verifycode` values('6','11111111111','192.168.1.162','927644','1438047419','0','0','1');");
E_D("replace into `ecs_verifycode` values('14','15032369431','192.168.1.162','852717','1438051578','0','0','1');");
E_D("replace into `ecs_verifycode` values('15','15652190983','192.168.1.116','532049','1438059313','0','0','1');");

require("../../inc/footer.php");
?>