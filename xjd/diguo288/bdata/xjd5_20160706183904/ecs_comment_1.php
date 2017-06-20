<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rec_id` mediumint(8) NOT NULL DEFAULT '0',
  `comment_tag` varchar(255) NOT NULL,
  `buy_time` int(10) NOT NULL DEFAULT '0',
  `good_num` mediumint(8) NOT NULL DEFAULT '0',
  `hide_username` tinyint(1) NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('143','0','','100','cuibo@68ecshop.com','cbtest','                            1111','5','1439503361','127.0.0.1','1','0','10','33','5','1439502871','0','0','33');");
E_D("replace into `ecs_comment` values('144','0','','100','cuibo@68ecshop.com','cbtest','                            11','3','1439505300','127.0.0.1','1','0','10','39','5','1439505152','0','0','39');");
E_D("replace into `ecs_comment` values('145','0','','20','11@qq.qq','111','       111                     ','5','1440185940','127.0.0.1','1','0','24','42','6','1440185893','0','0','42');");
E_D("replace into `ecs_comment` values('146','0','','191','2691111111@qq.com','leilei','正品正品正品正品正品正品正品正品正品正品正品正品正品正品','4','1449162448','127.0.0.1','0','0','5','135','7','1448956843','0','0','124');");
E_D("replace into `ecs_comment` values('147','0','','183','2691111111@qq.com','leilei','正品正品正品正品正品正品正品正品正品正品','4','1449162505','127.0.0.1','1','0','5','134','','1448956498','0','0','123');");
E_D("replace into `ecs_comment` values('148','0','','232','3490134@qq.com','yiren','sdf ','5','1455944918','127.0.0.1','1','0','6','161','4','1455933975','0','0','137');");

require("../../inc/footer.php");
?>