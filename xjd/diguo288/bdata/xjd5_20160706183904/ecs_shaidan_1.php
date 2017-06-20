<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan`;");
E_C("CREATE TABLE `ecs_shaidan` (
  `shaidan_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `rec_id` mediumint(9) NOT NULL DEFAULT '0',
  `goods_id` mediumint(9) NOT NULL DEFAULT '0',
  `user_id` mediumint(9) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `add_time` int(10) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `hide_username` tinyint(1) NOT NULL DEFAULT '0',
  `pay_points` int(10) NOT NULL DEFAULT '0',
  `is_points` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shaidan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shaidan` values('1','18','232','15','111111111','<img src=\"http://www.xjd.test/includes/kindeditor/plugins/emoticons/images/0.gif\" alt=\"\" border=\"0\" />','1438054415','1','1','100','1');");
E_D("replace into `ecs_shaidan` values('2','161','232','6','dfs','sdf sdf&nbsp;','1456193814','1','0','100','1');");

require("../../inc/footer.php");
?>