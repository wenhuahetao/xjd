<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1','','0','店铺街','1','3','0','stores.php','middle');");
E_D("replace into `ecs_nav` values('2','','0','预售','1','7','0','pre_sale.php','middle');");
E_D("replace into `ecs_nav` values('3','','0','拍卖','1','9','0','auction.php','middle');");
E_D("replace into `ecs_nav` values('4','','0','团购','1','5','0','pro_search.php?intro=promotion','middle');");
E_D("replace into `ecs_nav` values('5','c','1','食品生鲜','1','1','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('6','','0','礼包','1','11','0','package.php','middle');");
E_D("replace into `ecs_nav` values('7','','0','积分商城','1','13','0','exchange.php','middle');");
E_D("replace into `ecs_nav` values('8','','0','售后流程','1','1','0','help.php?id=9','top');");
E_D("replace into `ecs_nav` values('9','','0','智能扫货','1','15','0','scan.php','middle');");
E_D("replace into `ecs_nav` values('10','','0','购物流程','1','2','0','help.php?id=10','top');");
E_D("replace into `ecs_nav` values('11','','0','文章资讯','1','17','0','article_list.php','middle');");
E_D("replace into `ecs_nav` values('12','','0','订购方式','1','3','0','help.php?id=11','top');");
E_D("replace into `ecs_nav` values('13','','0','常见问题','1','4','0','help.php?id=18','top');");
E_D("replace into `ecs_nav` values('14','','0','优惠活动','1','14','0','activity.php','middle');");
E_D("replace into `ecs_nav` values('15','','0','关于我们','1','1','1','http://www.68ecshop.com/ecshop_topic/company/','bottom');");
E_D("replace into `ecs_nav` values('16','','0','联系我们','1','2','1','http://www.68ecshop.com/article-4.html','bottom');");
E_D("replace into `ecs_nav` values('17','','0','商家入驻','1','3','0','apply_index.php','bottom');");
E_D("replace into `ecs_nav` values('18','','0','友情链接','1','4','0','#','bottom');");
E_D("replace into `ecs_nav` values('19','','0','站点地图','1','5','0','http://www.68ecshop.com/sitemap.xml','bottom');");
E_D("replace into `ecs_nav` values('20','','0','手机商城','1','6','0','#','bottom');");
E_D("replace into `ecs_nav` values('21','','0','销售联盟','1','7','0','#','bottom');");
E_D("replace into `ecs_nav` values('22','','0','商城社区','1','8','0','#','bottom');");
E_D("replace into `ecs_nav` values('23','','0','企业文化','1','9','0','#','bottom');");
E_D("replace into `ecs_nav` values('24','','0','帮助中心','1','10','0','help.php','bottom');");
E_D("replace into `ecs_nav` values('25','','0','留言板','1','11','0','message.php','bottom');");
E_D("replace into `ecs_nav` values('26','c','5','家用电器','1','19','0','category.php?id=5','middle');");

require("../../inc/footer.php");
?>