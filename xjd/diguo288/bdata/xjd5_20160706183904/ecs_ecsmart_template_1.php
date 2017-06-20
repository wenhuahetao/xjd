<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_template`;");
E_C("CREATE TABLE `ecs_ecsmart_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_template` values('brand_list','品牌街广告','/library/ad_position.lbi','0','25','0','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('brand_list','','/library/recommend_promotion.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('brand_list','','/library/recommend_best.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','手机端首页广告1','/library/ad_position.lbi','0','14','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页品牌左侧广告','/library/ad_position.lbi','0','25','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('article','','/library/recommend_best.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('article','','/library/recommend_hot.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('article','','/library/recommend_promotion.lbi','0','0','3','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('article','头部广告','/library/ad_position.lbi','0','1','1','4','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页商城热点','/library/cat_articles.lbi','0','16','10','3','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页楼层商品分类','/library/cat_goods.lbi','0','5','9','1','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页推荐品牌','/library/brands.lbi','0','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页促销模块','/library/recommend_promotion.lbi','0','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页推荐模块','/library/recommend_hot.lbi','1','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','首页推荐模块','/library/recommend_new.lbi','0','0','6','0','68ecshopcom_mobile','');");
E_D("replace into `ecs_ecsmart_template` values('index','','/library/recommend_best.lbi','0','0','6','0','68ecshopcom_mobile','');");

require("../../inc/footer.php");
?>