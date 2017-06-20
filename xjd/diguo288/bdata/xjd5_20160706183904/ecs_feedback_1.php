<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_feedback`;");
E_C("CREATE TABLE `ecs_feedback` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `user_email` varchar(60) NOT NULL DEFAULT '',
  `msg_title` varchar(200) NOT NULL DEFAULT '',
  `msg_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_content` text NOT NULL,
  `msg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `message_img` varchar(255) NOT NULL DEFAULT '0',
  `order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `msg_area` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_feedback` values('1','0','5','leilei','2691111111@qq.com','1234567','0','1','广东甘化阿来得及辛苦辛苦女学才开学啊啊了贷款','1448923482','','0','0');");
E_D("replace into `ecs_feedback` values('2','0','5','leilei','2691111111@qq.com','1234567890','1','1','广东甘化阿来得及辛苦辛苦女学才开学啊啊了贷款 广东甘化阿来得及辛苦辛苦女学才开学啊啊了贷款 广东甘化阿来得及辛苦辛苦女学才开学啊啊了贷款 广东甘化阿来得及辛苦辛苦女学才开学啊啊了贷款','1448923539','','0','0');");
E_D("replace into `ecs_feedback` values('3','0','6','yiren','3490134@qq.com','1','0','1','sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf','1456408140','','0','0');");
E_D("replace into `ecs_feedback` values('4','0','6','yiren','3490134@qq.com','圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达菲圣达','0','1','是','1456408560','','0','0');");
E_D("replace into `ecs_feedback` values('5','0','6','yiren','3490134@qq.com','圣达菲圣达菲圣达圣达','0','1','是否圣达菲','1456408612','','0','0');");
E_D("replace into `ecs_feedback` values('6','0','29','u218GDU8421','zhiweili@live.com','zvdfdsfds','0','0','sfsdfdsfdsf','1458096625','29_20160316qtcyap.jpg','0','0');");
E_D("replace into `ecs_feedback` values('7','0','29','u218GDU8421','zhiweili@live.com','看着不错','4','0','界面很美','1458096836','29_20160316xowsmv.jpg','0','0');");

require("../../inc/footer.php");
?>