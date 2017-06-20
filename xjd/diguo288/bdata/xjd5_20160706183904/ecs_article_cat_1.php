<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article_cat`;");
E_C("CREATE TABLE `ecs_article_cat` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `cat_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article_cat` values('1','系统分类','2','','系统保留分类','50','0','0','');");
E_D("replace into `ecs_article_cat` values('2','网店信息','3','','网店信息分类','50','0','1','');");
E_D("replace into `ecs_article_cat` values('3','网店帮助分类','4','','网店帮助分类','50','0','1','');");
E_D("replace into `ecs_article_cat` values('4','开店必备','1','','','6','0','0','');");
E_D("replace into `ecs_article_cat` values('5','新手上路 ','5','','','50','0','3','');");
E_D("replace into `ecs_article_cat` values('14','今日聚焦','1','','','2','0','0','');");
E_D("replace into `ecs_article_cat` values('7','配送方式 ','5','','配送与支付 ','50','0','3','');");
E_D("replace into `ecs_article_cat` values('8','售后服务','5','','','50','0','3','');");
E_D("replace into `ecs_article_cat` values('9','关于我们 ','5','','联系我们 ','50','0','3','');");
E_D("replace into `ecs_article_cat` values('10','购物指南','5','','','50','0','3','');");
E_D("replace into `ecs_article_cat` values('11','手机促销','1','','','50','0','0','');");
E_D("replace into `ecs_article_cat` values('12','站内快讯','1','','','5','0','0','');");
E_D("replace into `ecs_article_cat` values('13','生活百科','1','','','4','0','0','');");
E_D("replace into `ecs_article_cat` values('16','公司动态','1','','','1','0','0','');");
E_D("replace into `ecs_article_cat` values('17','广告1210*100','1','','','50','0','0','');");
E_D("replace into `ecs_article_cat` values('18','行业聚焦','1','','','3','0','0','');");
E_D("replace into `ecs_article_cat` values('19','供货商通知文章','99','','','50','0','0','');");
E_D("replace into `ecs_article_cat` values('20','广告354*454','1','','','50','0','0','');");
E_D("replace into `ecs_article_cat` values('21','测试分类','1','','','50','0','16','');");
E_D("replace into `ecs_article_cat` values('22','测试分类2','1','','','50','0','12','');");

require("../../inc/footer.php");
?>