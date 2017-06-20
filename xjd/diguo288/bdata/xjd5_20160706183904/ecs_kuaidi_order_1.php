<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kuaidi_order`;");
E_C("CREATE TABLE `ecs_kuaidi_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(250) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `send_name` varchar(100) NOT NULL,
  `send_tel` varchar(50) NOT NULL,
  `send_region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `send_address` varchar(150) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  `to_tel` varchar(50) NOT NULL,
  `to_region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `to_address` varchar(150) NOT NULL,
  `goods_weight` decimal(5,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `goods_name` varchar(200) NOT NULL,
  `package_num` int(5) unsigned NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `money` decimal(5,2) unsigned NOT NULL DEFAULT '0.00',
  `remark` varchar(255) NOT NULL,
  `postman_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL,
  `finish_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kuaidi_order` values('1','','5','','','0','','111111','13111111111','1194','111111','0.00','1','26','1','0','0','0.00','','0','1','1442276362','0');");
E_D("replace into `ecs_kuaidi_order` values('2','','5','','','0','','111111','13111111111','1194','111111','0.00','1','27','1','0','0','0.00','','0','1','1442276376','0');");
E_D("replace into `ecs_kuaidi_order` values('3','','5','','','0','','111111','13111111111','1194','111111','0.00','1','28','1','0','0','0.00','','0','1','1442276419','0');");
E_D("replace into `ecs_kuaidi_order` values('4','','6','','','0','','sdf','13245855555','1194','sdf dsf 考虑到进水阀链接咖啡机','0.00','1','36','1','0','0','0.00','','0','1','1456212632','0');");
E_D("replace into `ecs_kuaidi_order` values('5','','6','','','0','','sdf','13245855555','1194','sdf dsf 考虑到进水阀链接咖啡机','0.00','1','37','1','0','0','0.00','','0','1','1456212640','0');");
E_D("replace into `ecs_kuaidi_order` values('6','','6','','','0','','sdf','13245855555','1194','sdf dsf 考虑到进水阀链接咖啡机','0.00','1','38','1','0','0','0.00','','0','1','1456212674','0');");
E_D("replace into `ecs_kuaidi_order` values('7','','6','','','0','','sdf','13245855555','1194','sdf dsf 考虑到进水阀链接咖啡机','0.00','1','39','1','0','0','0.00','','0','1','1456212684','0');");
E_D("replace into `ecs_kuaidi_order` values('8','','0','1','13333333333','2334','dfg','1','13333333333','2334','333','1.00','1','','1','0','0','0.00','','0','1','1456447344','0');");
E_D("replace into `ecs_kuaidi_order` values('9','','0','1','13333333333','2334','123','1','13333333333','2336','333','1.00','1','','1','0','0','0.00','','0','1','1456447552','0');");
E_D("replace into `ecs_kuaidi_order` values('16','','47','','','0','','小小','18029989828','758','虾村七组','0.00','1','49','1','0','0','0.00','','0','1','1458287547','0');");

require("../../inc/footer.php");
?>