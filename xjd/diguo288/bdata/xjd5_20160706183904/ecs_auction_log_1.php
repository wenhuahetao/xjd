<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_auction_log`;");
E_C("CREATE TABLE `ecs_auction_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_id` mediumint(8) unsigned NOT NULL,
  `bid_user` mediumint(8) unsigned NOT NULL,
  `bid_price` decimal(10,2) unsigned NOT NULL,
  `bid_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `act_id` (`act_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_auction_log` values('1','1','1','550.00','1437586960');");
E_D("replace into `ecs_auction_log` values('2','2','1','55.00','1437588105');");
E_D("replace into `ecs_auction_log` values('3','34','20','345.00','1438059595');");
E_D("replace into `ecs_auction_log` values('4','33','20','30.00','1438059776');");
E_D("replace into `ecs_auction_log` values('5','33','2','33.00','1438059841');");
E_D("replace into `ecs_auction_log` values('6','33','20','36.00','1438059865');");
E_D("replace into `ecs_auction_log` values('7','33','20','99.00','1438061117');");

require("../../inc/footer.php");
?>