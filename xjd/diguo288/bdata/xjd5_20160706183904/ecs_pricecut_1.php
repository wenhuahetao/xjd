<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pricecut`;");
E_C("CREATE TABLE `ecs_pricecut` (
  `pricecut_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pricecut_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pricecut` values('1','3','27.00','18630360371','357577995@qq.com','','1438043751','1');");
E_D("replace into `ecs_pricecut` values('2','14','111.00','18630360371','357577995@qq.com','','1438044070','1');");
E_D("replace into `ecs_pricecut` values('3','14','22.00','18630360371','357577995@qq.com','','1438044088','1');");
E_D("replace into `ecs_pricecut` values('4','14','12.00','18630360371','357577995@qq.com','','1438044098','1');");
E_D("replace into `ecs_pricecut` values('5','14','11111.00','18630360371','357577995@qq.com','','1438044242','1');");
E_D("replace into `ecs_pricecut` values('6','0','0.00','','','','1467742331','0');");

require("../../inc/footer.php");
?>