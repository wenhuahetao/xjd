<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword`;");
E_C("CREATE TABLE `ecs_keyword` (
  `w_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `word` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `total_search` int(10) unsigned NOT NULL DEFAULT '0',
  `month_search` int(10) unsigned NOT NULL DEFAULT '0',
  `week_search` int(10) unsigned NOT NULL DEFAULT '0',
  `today_search` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `keyword_cat` varchar(255) NOT NULL,
  `keyword_cat_url` varchar(255) NOT NULL,
  `keyword_cat_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`w_id`),
  KEY `searchengine` (`searchengine`),
  KEY `word` (`word`),
  KEY `letter` (`letter`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword` values('1','ecshop','三星','三星','sanxing','3','1437586690','1','1','1','1','1','手机、数码、通信','search.php?category=4&keywords=小米','2');");
E_D("replace into `ecs_keyword` values('2','ecshop','女','女','nv','23','1453271859','5','2','2','2','1','家用电器','search.php?category=5&keywords=格力电暖器','2');");
E_D("replace into `ecs_keyword` values('3','ecshop','冰箱','冰箱','bingxiang','2','1438048806','15','15','15','15','1','酒类饮料','search.php?category=7&keywords=白酒','3');");
E_D("replace into `ecs_keyword` values('4','ecshop','冰箱电视','冰箱电视','bingxiangdianshi','2','1438047967','1','1','1','1','1','家用电器','search.php?category=5&keywords=冰箱电视','2');");
E_D("replace into `ecs_keyword` values('5','ecshop','手机','手机','shouji','25','1463642804','8','1','1','1','1','手机、数码、通信','search.php?category=4&keywords=手机','25');");
E_D("replace into `ecs_keyword` values('6','ecshop','手机冰箱','手机冰箱','shoujibingxiang','20','1438047990','1','1','1','1','1','手机数码','search.php?category=4&keywords=手机冰箱','25');");
E_D("replace into `ecs_keyword` values('7','ecshop','海鲜','海鲜','haixian','4','1438048097','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=海鲜','4');");
E_D("replace into `ecs_keyword` values('8','ecshop','半壳','半壳','banke','2','1438048125','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=半壳','2');");
E_D("replace into `ecs_keyword` values('9','ecshop','半','半','ban','2','1438048144','1','1','1','1','1','食品生鲜','search.php?category=1&keywords=半','2');");
E_D("replace into `ecs_keyword` values('10','ecshop','联通','联通','liantong','8','1438048178','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('11','ecshop','小米苹果','小米苹果','xiaomipingguo','1','1438048198','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('13','ecshop','苹果','苹果','pingguo','29','1458115856','3','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('12','ecshop','小米','小米','xiaomi','2','1458189670','4','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('14','ecshop','苹果小米','苹果小米','pingguoxiaomi','1','1438048248','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('16','ecshop','酒','酒','jiu','11','1438048345','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('15','ecshop','蓝牙','蓝牙','lanya','5','1438048277','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('17','ecshop','雅诚德','雅诚德','yachengde','8','1441673925','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('18','ecshop','雅诚','雅诚','yacheng','1','1441673931','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('19','ecshop','雪奈儿','雪奈儿','xuenaier','21','1441673977','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('20','ecshop','宽松欧根纱背心裙','宽松欧根纱背心裙','kuansongougenshabeixinqun','15','1444582976','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('21','ecshop','宽松欧根纱背心裙','宽松欧根纱背心裙','kuansongougenshabeixinqun','15','1444582976','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('22','ecshop','高端','高端','gaoduan','3','1447893411','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('23','ecshop','大概个梵蒂冈','大概个梵蒂冈','dagaigedigang','11','1455447544','2','2','2','2','1','','','0');");
E_D("replace into `ecs_keyword` values('24','ecshop','乳液','乳液','ruye','1','1456276118','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('25','ecshop','格力电暖器','格力电暖器','gelidiannuanqi','2','1467728080','4','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('26','ecshop','水果','水果','shuiguo','22','1458114592','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('27','ecshop','水壶','水壶','shuihu','1','1458114734','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('28','ecshop','西门子','西门子','ximenzi','4','1458338367','4','4','4','4','1','','','0');");
E_D("replace into `ecs_keyword` values('29','ecshop','iphone','iphone','iphone','4','1463635255','3','2','2','2','1','','','0');");
E_D("replace into `ecs_keyword` values('30','ecshop','好丽友','好丽友','haoliyou','1','1463621647','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('31','ecshop','德阳红酱油','德阳红酱油','deyanghongjiangyou','16','1467620947','2','2','2','2','1','','','0');");
E_D("replace into `ecs_keyword` values('37','ecshop','伊利','伊利','yili','4','1467762989','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('32','ecshop','?1','?1','?1','144','1467737608','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('33','ecshop','?1','?1','?1','144','1467737608','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('34','ecshop','?1','?1','?1','144','1467737615','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('35','ecshop','?1','?1','?1','144','1467737623','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('36','ecshop','白酒','白酒','baijiu','3','1467763098','2','2','2','2','1','','','0');");

require("../../inc/footer.php");
?>