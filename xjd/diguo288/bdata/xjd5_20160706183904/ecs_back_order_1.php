<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_order`;");
E_C("CREATE TABLE `ecs_back_order` (
  `back_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `return_time` int(10) unsigned DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  `refund_type` tinyint(1) NOT NULL DEFAULT '0',
  `refund_desc` varchar(255) NOT NULL,
  `refund_money_1` decimal(10,2) NOT NULL DEFAULT '0.00',
  `refund_money_2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `back_reason` varchar(255) NOT NULL DEFAULT '',
  `goods_id` int(10) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL DEFAULT '',
  `status_back` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:审核通过,1:收到寄回商品,2:换回商品已寄出,3:完成退货/返修,4:退款(无需退货),5:审核中,6:申请被拒绝,7:管理员取消,8:用户自己取消',
  `status_refund` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:未退款,1:已退款',
  `imgs` text NOT NULL,
  `back_pay` tinyint(1) NOT NULL DEFAULT '0',
  `back_type` varchar(1) NOT NULL DEFAULT '0',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`back_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_order` values('1','','2015072862934','18','','1438058906','0','','2','','喵喵','河北大街','1','2','52','500','','','','','13912345678','','','','0.00','15.00','0','0','0','0','0','2','','0.00','0.00','','55','嘉云糖 300g玻璃罐装 水果硬糖 喜糖 德国进口','3','1','','1','4','0');");
E_D("replace into `ecs_back_order` values('2','','2015072807789','27','','1438060014','0','','2','','羊羊羊','河北大街西段666号','1','10','145','1194','','','066000','','13933528316','','','','0.00','15.00','0','0','0','0','0','0','','114.95','0.00','说等发达的','14','哥伦比亚金燕窝果 新鲜进口水果 麒麟果 黄色白心火龙果 4只','8','0','/images/image/201507/20150728130642_34150.jpg','1','1','1');");
E_D("replace into `ecs_back_order` values('3','','2015092380127','111','','1442972840','0','','5','','111111','111111','1','10','145','1194','','','066000','','13111111111','','','','0.00','0.00','0','0','0','0','0','0','','18.90','0.00','qwer','183','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','7','0','','2','4','0');");
E_D("replace into `ecs_back_order` values('4','','2015092308424','112','','1442973266','0','','5','','111111','111111','1','10','145','1194','','','066000','','13111111111','','','','0.00','0.00','0','0','0','0','0','0','','18.90','0.00','jhgfds','183','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','7','0','','2','1','0');");
E_D("replace into `ecs_back_order` values('5','','2015092481561','113','','1443029893','0','','5','','111','111','1','2','52','500','','','11111','','15032361111','','','','0.00','15.00','0','0','0','0','0','0','','121.60','0.00','ytrds','49','安琦诺 夏装新品孕妇装 韩版休闲外出服喂奶衣套装','7','0','','2','4','2');");
E_D("replace into `ecs_back_order` values('6','','2016022451812','140','','1456291348','0','','6','','sdf','sdf dsf 考虑到进水阀链接咖啡机','1','10','145','1194','','','123556','','13245855555','','','','0.00','0.00','0','0','0','0','0','0','','169.15','0.00','圣达菲','51','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','7','0','','2','1','0');");
E_D("replace into `ecs_back_order` values('7','','2016022097688','136','','1456291400','0','','6','','sdf','sdf dsf 考虑到进水阀链接咖啡机','1','10','145','1194','','','123556','','13245855555','','','','0.00','0.00','0','0','0','0','0','0','','99.00','0.00','','231','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','7','0','','2','1','0');");
E_D("replace into `ecs_back_order` values('8','','2016022590434','151','','1456406966','0','','6','','123','圣达菲','1','3','37','410','','','','','13245855555','','','','0.00','15.00','0','0','0','0','0','0','','0.00','0.00','','0','','7','0','','2','4','0');");
E_D("replace into `ecs_back_order` values('9','','2016031897028','169','471751235695','1458299355','3','顺丰速运','54','','xxx','fghfghfghfgh','1','2','52','500','','','','','18029989828','','','','0.00','15.00','0','0','0','0','0','0','','21.60','0.00','++++','278','西门子开关插座面板 悦动白墙壁二位双控带荧光开关','8','0','','2','1','0');");

require("../../inc/footer.php");
?>