<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_ad`;");
E_C("CREATE TABLE `ecs_ecsmart_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_ad` values('37','20','0','手机端首页广告3-4','','1438855151899952329.jpg','1438185600','1440777600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('42','25','0','品牌街广告1','','1461550494828509479.jpg','1436198400','1630857600','','','','9','1');");
E_D("replace into `ecs_ecsmart_ad` values('35','16','0','手机端首页广告1-3','','1438220618449870578.jpg','1438185600','1440777600','','','','1','1');");
E_D("replace into `ecs_ecsmart_ad` values('36','19','0','手机端首页广告2-3','','1438220200413429876.jpg','1438185600','1440777600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('32','17','0','手机端首页广告2-1','','1438220132359334491.jpg','1438185600','1440777600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('33','15','0','手机端首页广告1-2','','1438220153717571565.jpg','1438185600','1440777600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('34','18','0','手机端首页广告2-2','','1438220176798482650.jpg','1438185600','1440777600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('29','3','0','wap首页幻灯广告2','','1461550476770626389.jpg','1438185600','1661702400','','','','11','1');");
E_D("replace into `ecs_ecsmart_ad` values('30','3','0','wap首页幻灯广告1','','1461550450976297313.jpg','1438185600','1661702400','','','','5','1');");
E_D("replace into `ecs_ecsmart_ad` values('31','14','0','手机端首页广告1-1','','1461550529924414460.jpg','1438185600','1661702400','','','','2','1');");
E_D("replace into `ecs_ecsmart_ad` values('43','26','0','静佳JPLUS全场疯抢，赶快下手！','','1461550728091868202.jpg','1439308800','1663603200','3.1折扣起','全场满128赠249','','1','1');");
E_D("replace into `ecs_ecsmart_ad` values('25','3','0','wap首页幻灯广告3','','1461550567599490669.jpg','1435507200','1661616000','','','','3','1');");
E_D("replace into `ecs_ecsmart_ad` values('38','21','0','手机端首页广告3-3','','1438855141786517330.jpg','1438185600','1440777600','','','','1','1');");
E_D("replace into `ecs_ecsmart_ad` values('39','22','0','手机端首页广告3-2','','1438855175161100804.jpg','1438185600','1440777600','','','','2','1');");
E_D("replace into `ecs_ecsmart_ad` values('47','26','0','国际品牌百图女装专卖场','','1439367674108823978.jpg','1439308800','1441900800','8.9折','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('50','100','0','app首页banner1','http://www.68ecshop.com/','appbanner1.jpg','1378627200','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('51','100','0','app首页banner2','http://www.68ecshop.com/','appbanner2.jpg','1378627200','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('52','100','0','app首页banner3','http://www.68ecshop.com/','appbanner3.jpg','1378886400','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('53','100','0','app首页banner4','http://www.68ecshop.com/','appbanner4.jpg','1378886400','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('54','101','0','app首页3张广告1','http://www.68ecshop.com/','appad31.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('55','101','0','app首页3张广告2','goods/15','appad32.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('56','101','0','app首页3张广告3','article/13','appad33.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('57','102','0','app首页通栏广告1_1','article/10','appadtong11.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('58','102','0','app首页通栏广告1_2','article/10','appadtong12.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('59','102','0','app首页通栏广告1_3','article/10','appadtong13.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('60','103','0','app首页通栏广告2_1','article/10','appadtong21.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('61','103','0','app首页通栏广告2_2','article/10','appadtong22.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('62','103','0','app首页通栏广告2_3','article/10','appadtong23.jpg','1388649600','1484640000','','','','0','1');");

require("../../inc/footer.php");
?>