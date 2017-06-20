<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_grade`;");
E_C("CREATE TABLE `ecs_shop_grade` (
  `grade_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `server` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `send` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL,
  `is_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`grade_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_grade` values('22','10','cbtest','1439503361','0','4','4','5','33','2015081442374','1');");
E_D("replace into `ecs_shop_grade` values('23','10','cbtest','1439505300','0','3','3','3','39','2015081459952','1');");
E_D("replace into `ecs_shop_grade` values('24','24','111','1440185940','0','5','5','5','42','2015082252907','1');");
E_D("replace into `ecs_shop_grade` values('25','5','leilei','1449162448','0','5','5','4','124','2015120153558','1');");
E_D("replace into `ecs_shop_grade` values('26','5','leilei','1449162505','0','4','3','3','123','2015120141721','1');");
E_D("replace into `ecs_shop_grade` values('27','6','yiren','1455944918','0','5','5','5','137','2016022072517','1');");

require("../../inc/footer.php");
?>