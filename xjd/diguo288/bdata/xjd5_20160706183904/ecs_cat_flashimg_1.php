<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cat_flashimg`;");
E_C("CREATE TABLE `ecs_cat_flashimg` (
  `img_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `href_url` varchar(255) NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`img_id`),
  KEY `show_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cat_flashimg` values('2','2','','','1437583534135188137.jpg','http://','50');");
E_D("replace into `ecs_cat_flashimg` values('3','1','','','1437583973984265131.jpg','http://','1');");
E_D("replace into `ecs_cat_flashimg` values('4','1','','','1437583986427105351.jpg','http://','2');");
E_D("replace into `ecs_cat_flashimg` values('5','1','','','1437583997134881148.jpg','http://','3');");

require("../../inc/footer.php");
?>