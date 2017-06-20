<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_article`;");
E_C("CREATE TABLE `ecs_ecsmart_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_article` values('45','13','关于我们','<p><img alt=\"\" width=\"150\" height=\"150\" src=\"/mobile/images/upload/Image/9_thumb_G_1241511871555 (1)(1).jpg\" /></p>','fdsfd','3223@adsf.com','323232','1','1','1429048760','data/article/1429048760071673773.jpg','2','','323323232');");
E_D("replace into `ecs_ecsmart_article` values('44','13','ggggg','<p>ghfhg</p>','','','','0','1','1426275199','','0','http://','');");
E_D("replace into `ecs_ecsmart_article` values('43','13','测试68','<p>&nbsp;外墙的第三次</p>','www','','','0','1','1426188372','','0','http://','');");

require("../../inc/footer.php");
?>