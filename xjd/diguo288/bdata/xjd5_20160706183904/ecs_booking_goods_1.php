<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_booking_goods`;");
E_C("CREATE TABLE `ecs_booking_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_desc` varchar(255) NOT NULL DEFAULT '',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `booking_time` int(10) unsigned NOT NULL DEFAULT '0',
  `is_dispose` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dispose_user` varchar(30) NOT NULL DEFAULT '',
  `dispose_time` int(10) unsigned NOT NULL DEFAULT '0',
  `dispose_note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_booking_goods` values('1','15','1471085298@qq.com','liangtest','15032369431','236','','10','1438080969','2','','0','');");
E_D("replace into `ecs_booking_goods` values('2','15','1471085298@qq.com','liangtest','15032369431','233','','5','1438081301','2','','0','');");
E_D("replace into `ecs_booking_goods` values('3','24','cuibo@68ecshop.com','111','18630360371','233','','1','1438141797','2','','0','');");
E_D("replace into `ecs_booking_goods` values('4','24','cuibo@68ecshop.com','111','18630360371','230','','1','1438142152','1','','0','');");
E_D("replace into `ecs_booking_goods` values('5','10','cuibo@68ecshop.com','cbtest','18630360371','179','','11','1438240105','2','','0','');");
E_D("replace into `ecs_booking_goods` values('7','24','11@qq.qq','111','18630360371','230','','1','1440194033','0','','0','');");
E_D("replace into `ecs_booking_goods` values('8','0','sdf@qq.com','','18704444444','0','','1','1455778392','2','','0','');");
E_D("replace into `ecs_booking_goods` values('9','0','sdf@qq.com','','18704444444','0','','1','1455778402','2','','0','');");
E_D("replace into `ecs_booking_goods` values('10','0','111@qq.com','','18701232924','0','','0','1455778696','2','','0','');");
E_D("replace into `ecs_booking_goods` values('11','0','111@qq.com','','18701232924','0','','0','1455778940','2','','0','');");
E_D("replace into `ecs_booking_goods` values('12','0','111@qq.com','','18709888888','0','','1','1455779549','2','','0','');");
E_D("replace into `ecs_booking_goods` values('13','0','1@qq.com','','18798887432','0','','1','1455780129','2','','0','');");
E_D("replace into `ecs_booking_goods` values('14','0','1@qq.com','','18609878976','0','','1','1455780431','2','','0','');");
E_D("replace into `ecs_booking_goods` values('15','0','123@qq.com','','18797763333','0','','1','1455781447','2','','0','');");
E_D("replace into `ecs_booking_goods` values('16','0','123@qq.com','','18797763333','0','','1','1455781448','2','','0','');");
E_D("replace into `ecs_booking_goods` values('17','0','111@qq.com','','18798776677','0','','1','1455781528','2','','0','');");
E_D("replace into `ecs_booking_goods` values('18','0','1878@qq.com','','18701232924','0','','1','1455781612','2','','0','');");
E_D("replace into `ecs_booking_goods` values('19','0','stu111@qq.com','','18799999999','0','','1','1455781714','2','','0','');");
E_D("replace into `ecs_booking_goods` values('20','0','stu111@qq.com','','18999999999','0','','1','1455781779','2','','0','');");
E_D("replace into `ecs_booking_goods` values('21','0','stu@qq.com','','18701232924','0','','1','1455782034','2','','0','');");
E_D("replace into `ecs_booking_goods` values('22','0','stu@qq.com','','18793333333','0','','1','1455782094','2','','0','');");
E_D("replace into `ecs_booking_goods` values('23','0','stu@qq.com','','13333333333','0','','1','1455782156','2','','0','');");
E_D("replace into `ecs_booking_goods` values('24','0','1@qq.com','','13333333333','0','','1','1455782762','2','','0','');");
E_D("replace into `ecs_booking_goods` values('25','0','11@qq.com','','13333333333','0','','1','1455782822','2','','0','');");
E_D("replace into `ecs_booking_goods` values('26','0','1@qq.com','','13333333333','0','','1','1455846733','2','','0','');");
E_D("replace into `ecs_booking_goods` values('27','6','3490134@qq.com','yiren','18097249373','204','','1','1456125072','0','','0','');");
E_D("replace into `ecs_booking_goods` values('28','6','1@qq.com','yiren','18097249373','247','','1','1456295409','0','','0','');");
E_D("replace into `ecs_booking_goods` values('29','6','111@qq.com','yiren','18798888888','198','','1','1456295523','0','','0','');");
E_D("replace into `ecs_booking_goods` values('30','6','1@qq.com','yiren','15097249373','197','','1','1456295645','0','','0','');");
E_D("replace into `ecs_booking_goods` values('31','6','43@qq.com','yiren','15097249373','230','','1','1456295727','0','','0','');");
E_D("replace into `ecs_booking_goods` values('32','0','111@qq.com','','18999999999','185','','1','1456298576','0','','0','');");
E_D("replace into `ecs_booking_goods` values('33','0','sd@qq.com','','13333333333','185','','1','1456298617','0','','0','');");
E_D("replace into `ecs_booking_goods` values('34','0','1@qq.com','','13333333333','185','','1','1456298735','0','','0','');");
E_D("replace into `ecs_booking_goods` values('35','0','1@11.com','','13333333333','185','','1','1456298786','0','','0','');");
E_D("replace into `ecs_booking_goods` values('36','0','1@11.com','','13333333333','185','','1','1456298872','0','','0','');");
E_D("replace into `ecs_booking_goods` values('37','6','11@qq.com','yiren','18097249373','0','','1','1456301989','2','','0','');");
E_D("replace into `ecs_booking_goods` values('38','6','11@qq.com','yiren','15097249373','233','','1','1456302047','0','','0','');");
E_D("replace into `ecs_booking_goods` values('39','6','1@qq.com','yiren','18777777777','0','','1','1456392021','2','','0','');");

require("../../inc/footer.php");
?>