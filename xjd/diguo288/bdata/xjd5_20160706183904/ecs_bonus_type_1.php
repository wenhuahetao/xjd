<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_bonus_type`;");
E_C("CREATE TABLE `ecs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `supplier_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺id',
  `bonus_code` varchar(200) DEFAULT 'NULL',
  `user_bonus_max` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_bonus_type` values('1','商品红包5元','5.00','1','50.00','0.00','1437465600','1454140800','1437552000','1454140800','50.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('2','用户红包10元','10.00','0','90.00','0.00','1437552000','1440230400','1437552000','1472544000','80.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('3','天天果园满200元送20元红包','20.00','2','200.00','0.00','1437552000','1472544000','1437552000','1472544000','100.00','1',NULL,'1');");
E_D("replace into `ecs_bonus_type` values('5','777','777.00','0','0.00','0.00','1438588800','1441267200','1438588800','1441267200','7777.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('6','111','1.00','2','100.00','0.00','1438588800','1441267200','1438588800','1441267200','11.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('7','aaaaaaaaaa','11.00','5','0.00','0.00','1440144000','1442822400','1440144000','1442822400','1.00','0','','0');");
E_D("replace into `ecs_bonus_type` values('14','线上领取3','10.00','4','0.00','0.00','1453478400','1456156800','1451577600','1487779200','79.00','0','1453516719065110577.jpg','1');");
E_D("replace into `ecs_bonus_type` values('12','线上领取1','5.00','4','0.00','0.00','1453478400','1456156800','1451577600','1487779200','39.00','0','1453516662189370277.jpg','2');");
E_D("replace into `ecs_bonus_type` values('13','线上领取2','8.00','4','0.00','0.00','1453478400','1456156800','1451577600','1487779200','59.00','0','1453516695759303755.jpg','1');");
E_D("replace into `ecs_bonus_type` values('11','线上领取4','20.00','4','0.00','0.00','1453478400','1456156800','1451577600','1487779200','99.00','0','1453516095908124723.jpg','1');");
E_D("replace into `ecs_bonus_type` values('16','线上领取5','20.00','4','0.00','0.00','1453478400','1456156800','1451577600','1487779200','169.00','0','1454471174936098777.jpg','4');");
E_D("replace into `ecs_bonus_type` values('17','线上领取红包111','666.00','4','0.00','0.00','1454428800','1456934400','1454428800','1585497600','1666.00','0','','1');");
E_D("replace into `ecs_bonus_type` values('18','线上领取红包2222','19.00','4','0.00','0.00','1454428800','1456934400','1454428800','1583251200','111.00','0','','123');");
E_D("replace into `ecs_bonus_type` values('19','红包测试','100.00','0','0.00','0.00','1458230400','1460908800','1456761600','1460908800','50.00','0','','2');");
E_D("replace into `ecs_bonus_type` values('20','注册红包10','10.00','5','0.00','0.00','1458230400','1460908800','1458144000','1460908800','100.00','0','','1');");
E_D("replace into `ecs_bonus_type` values('21','注册红包5','5.00','5','0.00','0.00','1458230400','1460908800','1458144000','1460908800','50.00','0','','10');");
E_D("replace into `ecs_bonus_type` values('22','注册红包 10','10.00','5','0.00','0.00','1458230400','1460908800','1458144000','1460908800','100.00','0','','1');");
E_D("replace into `ecs_bonus_type` values('23','注册红包15','15.00','5','0.00','0.00','1458230400','1460908800','1458144000','1460908800','150.00','0','','1');");
E_D("replace into `ecs_bonus_type` values('24','注册红包20','20.00','5','0.00','0.00','1458230400','1460908800','1458144000','1460908800','200.00','0','','1');");
E_D("replace into `ecs_bonus_type` values('25','在线领红包50','50.00','4','0.00','0.00','1458144000','1492444800','1458316800','1460908800','500.00','0','','2');");
E_D("replace into `ecs_bonus_type` values('26','用户红包20','20.00','0','0.00','0.00','1458316800','1460908800','1458230400','1460908800','100.00','21',NULL,'1');");

require("../../inc/footer.php");
?>