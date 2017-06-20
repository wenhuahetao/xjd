<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods_order`;");
E_C("CREATE TABLE `ecs_takegoods_order` (
  `rec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tg_id` int(10) unsigned NOT NULL DEFAULT '0',
  `tg_sn` varchar(20) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `country` int(10) unsigned NOT NULL DEFAULT '0',
  `province` int(10) unsigned NOT NULL DEFAULT '0',
  `city` int(10) unsigned NOT NULL DEFAULT '0',
  `district` int(10) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `consignee` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `shipping_id` varchar(50) NOT NULL,
  `shipping_sender` varchar(50) NOT NULL,
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `paisong_name` varchar(100) NOT NULL,
  `paisong_tel` varchar(50) NOT NULL,
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order_remark` varchar(255) NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `vc_sn` (`tg_sn`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_takegoods_order` values('1','5','5e1t0d0s10005','1','27','Ferrero/费列罗 意大利进口威化榛果巧克力30粒礼盒装 生日礼物送女友情人节','1','2','52','500','等发送到发送到发送到','11231','18712345678','23456@qq.ukj','','','0','','','0','','1438034147');");
E_D("replace into `ecs_takegoods_order` values('2','10','6y7t0n6k20005','10','26','韩国进口X-5花生夹心巧克力棒盒装（24根）864g','1','2','52','500','111111','111','18630360371','cuibo@68ecshop.com','','','0','','','0','','1438047489');");
E_D("replace into `ecs_takegoods_order` values('3','10','6y7t0n6k20005','10','100','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','1','2','52','500','森林逸城','cbtest','18630360371','357577995@qq.com','','','0','','','0','','1438048372');");
E_D("replace into `ecs_takegoods_order` values('4','9','9i8y8i5i20004','10','100','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','1','2','52','500','森林逸城','cbtest','18630360371','357577995@qq.com','','','0','','','0','','1438048846');");
E_D("replace into `ecs_takegoods_order` values('5','26','10253308','6','28','进口费列罗巧克力礼盒DIY心形27粒【顺丰包邮】【代写贺卡】七夕礼物生日创意礼品','1','3','38','417','sdsdf','sdf','13333333333','11@qq.com','','','0','','','0','','1456281632');");
E_D("replace into `ecs_takegoods_order` values('6','25','55377474','6','31','台湾进口 百年老店糖之坊夏威夷果牛轧糖奶糖（蔓越莓味）120克','0','0','0','0','','','','','','','0','','','0','','1456284339');");
E_D("replace into `ecs_takegoods_order` values('7','24','21965656','6','28','进口费列罗巧克力礼盒DIY心形27粒【顺丰包邮】【代写贺卡】七夕礼物生日创意礼品','0','0','0','0','','','','','','','0','','','0','','1456284368');");
E_D("replace into `ecs_takegoods_order` values('8','20','73682899','6','27','Ferrero/费列罗 意大利进口威化榛果巧克力30粒礼盒装 生日礼物送女友情人节','1','3','37','410','圣达菲','圣达菲','13333333333','11@qq.com','','','0','','','0','','1456290362');");
E_D("replace into `ecs_takegoods_order` values('9','20','73682899','6','27','Ferrero/费列罗 意大利进口威化榛果巧克力30粒礼盒装 生日礼物送女友情人节','1','3','37','410','圣达菲','圣达菲','13333333333','11@qq.com','','','0','','','0','','1456290364');");

require("../../inc/footer.php");
?>