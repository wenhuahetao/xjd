<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_article_cat`;");
E_C("CREATE TABLE `ecs_supplier_article_cat` (
  `cat_id` int(10) NOT NULL DEFAULT '0' COMMENT '入驻商的店铺id',
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `cat_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_article_cat` values('6','yiren','2','','入驻商的店铺文章分类','50','0','0');");
E_D("replace into `ecs_supplier_article_cat` values('2','68ecshopyy','2','','入驻商的店铺文章分类','50','0','0');");
E_D("replace into `ecs_supplier_article_cat` values('7','liuyu','2','','入驻商的店铺文章分类','50','0','0');");
E_D("replace into `ecs_supplier_article_cat` values('5','leilei','2','','入驻商的店铺文章分类','50','0','0');");
E_D("replace into `ecs_supplier_article_cat` values('1','anan','2','','入驻商的店铺文章分类','50','0','0');");
E_D("replace into `ecs_supplier_article_cat` values('18','yy','2','','入驻商的店铺文章分类','50','0','0');");
E_D("replace into `ecs_supplier_article_cat` values('21','u180GDQD9828','2','','入驻商的店铺文章分类','50','0','0');");

require("../../inc/footer.php");
?>