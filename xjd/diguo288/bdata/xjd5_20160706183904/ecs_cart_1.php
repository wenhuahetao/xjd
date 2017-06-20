<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cart`;");
E_C("CREATE TABLE `ecs_cart` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `split_money` decimal(10,2) NOT NULL,
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rec_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_handsel` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL,
  `package_attr_id` varchar(100) NOT NULL,
  `cost_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `exclusive` varchar(255) NOT NULL DEFAULT '-1' COMMENT '手机专享价格',
  PRIMARY KEY (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=816 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cart` values('803','0','71e544a6a1fcd237ae98eb1cec3463bc','49','ECS000049','22','安琦诺 夏装新品孕妇装 韩版休闲外出服喂奶衣套装','153.60','128.00','0.00','1','颜色:白色 \n尺码:S \n','1','','0','0','0','0','0','63,66','1467708057','','0.00','0.00','-1');");
E_D("replace into `ecs_cart` values('795','0','9b4fa84519a9fd6feb432422c3c3c294','220','ECS000220','0','润本（RUNBEN）驱蚊手环 植物精油驱蚊贴3条装','16.20','11.90','0.00','1','','1','','0','0','0','0','0','','1467645219','','0.00','11.90','-1');");
E_D("replace into `ecs_cart` values('797','0','4c3faa916a733e2ce3adca855723b94a','225','ECS000225','0','樱之歌 52头 紫玉情缘 餐具套装','286.80','199.00','0.00','1','','1','','0','0','0','0','0','','1467679311','','0.00','199.00','-1');");
E_D("replace into `ecs_cart` values('804','0','98422623cebfe34d613f4babbc61a74e','231','ECS000231','0','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','118.80','99.00','0.00','1','','1','','0','0','0','0','0','','1467723078','','0.00','99.00','-1');");
E_D("replace into `ecs_cart` values('805','0','98422623cebfe34d613f4babbc61a74e','283','ECS000283','61','微信支付测试','0.12','0.10','0.00','1','颜色:粉色 \n尺码:40.5 \n','1','','0','0','0','0','0','327,328','1467723083','','0.00','0.00','-1');");
E_D("replace into `ecs_cart` values('808','0','53ec23f11391cd94442b7086c7da711b','39','ECS000039','0','斯乃纳至悦精品中童鞋 女童皮鞋高跟蝴蝶结公主鞋','478.79','399.00','0.00','1','','1','','0','0','0','0','0','','1467726927','','0.00','0.00','-1');");
E_D("replace into `ecs_cart` values('809','0','36a25c55e915143e73d775287f8fa1a8','231','ECS000231','0','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','118.80','99.00','0.00','1','','1','','0','0','0','0','0','','1467728371','','0.00','0.00','-1');");
E_D("replace into `ecs_cart` values('810','100','a1e89a9747c221bd05600d0f95cfb79d','283','ECS000283','61','微信支付测试','0.12','0.10','0.00','1','颜色:粉色 \n尺码:40.5 \n','1','','0','0','0','0','0','327,328','1467730687','','0.00','0.00','-1');");
E_D("replace into `ecs_cart` values('814','0','7ccf79f9d3f8e0b08b21ff22ad52742b','86','ECS000086','0','海尔HGS-2164手持蒸汽挂烫机家用挂式电熨斗熨烫机正品全国联保','600.00','500.00','0.00','1','','1','','0','0','0','0','0','','1467777313','','0.00','0.00','-1');");
E_D("replace into `ecs_cart` values('815','103','eab7fd26f77ef85af2b75927710436af','225','ECS000225','0','樱之歌 52头 紫玉情缘 餐具套装','286.80','199.00','0.00','1','','1','','0','0','0','0','0','','1467795150','','0.00','199.00','-1');");

require("../../inc/footer.php");
?>