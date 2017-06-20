<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_goods`;");
E_C("CREATE TABLE `ecs_back_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  `back_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL,
  `back_goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `back_goods_number` smallint(5) unsigned NOT NULL,
  `status_back` tinyint(1) NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `back_id` (`back_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_goods` values('1','1','55','0','','嘉云糖 300g玻璃罐装 水果硬糖 喜糖 德国进口','','ECS000055','0','0','','4','0','0.00','1','3','1');");
E_D("replace into `ecs_back_goods` values('2','2','14','0','','哥伦比亚金燕窝果 新鲜进口水果 麒麟果 黄色白心火龙果 4只','','ECS000014','0','0','','0','0','114.95','1','8','0');");
E_D("replace into `ecs_back_goods` values('3','3','183','0','','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','','ECS000183','0','0','','4','0','18.90','1','7','0');");
E_D("replace into `ecs_back_goods` values('4','4','183','0','','幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶','','ECS000183','0','0','','0','0','18.90','1','7','0');");
E_D("replace into `ecs_back_goods` values('5','5','49','19','','安琦诺 夏装新品孕妇装 韩版休闲外出服喂奶衣套装','','ECS000049','0','0','颜色:白色 \r\n尺码:M \r\n','4','0','121.60','1','7','0');");
E_D("replace into `ecs_back_goods` values('6','6','51','24','','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','','ECS000051','0','0','颜色:银色 \r\n尺码:XL \r\n','0','0','169.15','1','7','0');");
E_D("replace into `ecs_back_goods` values('7','7','231','0','','可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','','ECS000231','0','0','','0','0','99.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('8','8','200','0','','爱度AY800蓝牙音箱手机电脑迷你音响无线便携插卡低音炮 带蓝牙自拍 土豪金','','ECS000200','0','0','','4','0','83.30','1','7','0');");
E_D("replace into `ecs_back_goods` values('9','9','278','0','','西门子开关插座面板 悦动白墙壁二位双控带荧光开关','','ECS000278','0','0','','0','0','21.60','1','8','0');");

require("../../inc/footer.php");
?>