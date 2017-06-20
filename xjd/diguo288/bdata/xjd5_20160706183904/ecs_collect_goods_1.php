<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('1','6','32','1437594198','0');");
E_D("replace into `ecs_collect_goods` values('2','5','183','1441823778','0');");
E_D("replace into `ecs_collect_goods` values('3','5','191','1441823779','0');");
E_D("replace into `ecs_collect_goods` values('5','5','200','1441823781','0');");
E_D("replace into `ecs_collect_goods` values('6','5','155','1441824217','0');");
E_D("replace into `ecs_collect_goods` values('7','5','162','1441824218','0');");
E_D("replace into `ecs_collect_goods` values('8','5','168','1441824219','1');");
E_D("replace into `ecs_collect_goods` values('9','6','88','1454489255','0');");
E_D("replace into `ecs_collect_goods` values('10','6','91','1454489258','0');");
E_D("replace into `ecs_collect_goods` values('11','6','97','1454489278','0');");
E_D("replace into `ecs_collect_goods` values('12','6','86','1454489333','0');");
E_D("replace into `ecs_collect_goods` values('13','6','103','1454489344','0');");
E_D("replace into `ecs_collect_goods` values('14','6','101','1454489722','0');");
E_D("replace into `ecs_collect_goods` values('15','6','106','1454489724','0');");
E_D("replace into `ecs_collect_goods` values('16','6','112','1454489726','0');");
E_D("replace into `ecs_collect_goods` values('17','6','125','1454490357','0');");
E_D("replace into `ecs_collect_goods` values('18','24','114','1454503689','0');");
E_D("replace into `ecs_collect_goods` values('19','5','202','1454553892','0');");
E_D("replace into `ecs_collect_goods` values('20','6','69','1455502880','0');");
E_D("replace into `ecs_collect_goods` values('21','6','52','1455504502','0');");
E_D("replace into `ecs_collect_goods` values('22','6','127','1455506238','0');");
E_D("replace into `ecs_collect_goods` values('23','6','117','1455506785','0');");
E_D("replace into `ecs_collect_goods` values('24','6','54','1455506903','0');");
E_D("replace into `ecs_collect_goods` values('25','6','31','1455507227','0');");
E_D("replace into `ecs_collect_goods` values('26','6','84','1455586559','0');");
E_D("replace into `ecs_collect_goods` values('27','6','77','1455586571','0');");
E_D("replace into `ecs_collect_goods` values('28','6','73','1455588041','0');");
E_D("replace into `ecs_collect_goods` values('29','5','86','1455762707','0');");
E_D("replace into `ecs_collect_goods` values('30','6','50','1455779651','0');");
E_D("replace into `ecs_collect_goods` values('31','6','115','1455783837','0');");
E_D("replace into `ecs_collect_goods` values('32','6','98','1455939773','0');");
E_D("replace into `ecs_collect_goods` values('33','6','133','1455939789','0');");
E_D("replace into `ecs_collect_goods` values('34','6','132','1455939791','0');");
E_D("replace into `ecs_collect_goods` values('35','6','188','1456113467','0');");
E_D("replace into `ecs_collect_goods` values('36','6','34','1456199961','0');");
E_D("replace into `ecs_collect_goods` values('37','6','51','1456199963','0');");
E_D("replace into `ecs_collect_goods` values('38','6','143','1456216464','0');");
E_D("replace into `ecs_collect_goods` values('39','6','113','1456216465','0');");
E_D("replace into `ecs_collect_goods` values('40','6','155','1456216480','0');");
E_D("replace into `ecs_collect_goods` values('41','6','1','1456279933','0');");
E_D("replace into `ecs_collect_goods` values('42','6','22','1456405211','0');");
E_D("replace into `ecs_collect_goods` values('43','6','23','1456405220','1');");
E_D("replace into `ecs_collect_goods` values('44','6','20','1456405281','0');");
E_D("replace into `ecs_collect_goods` values('45','6','4','1456405317','0');");
E_D("replace into `ecs_collect_goods` values('46','6','3','1456405342','0');");
E_D("replace into `ecs_collect_goods` values('47','6','74','1456456467','0');");
E_D("replace into `ecs_collect_goods` values('48','6','198','1457322070','0');");
E_D("replace into `ecs_collect_goods` values('49','6','183','1457322098','0');");
E_D("replace into `ecs_collect_goods` values('50','2','121','1457747812','0');");
E_D("replace into `ecs_collect_goods` values('51','2','94','1457747813','0');");
E_D("replace into `ecs_collect_goods` values('52','2','93','1457747814','0');");
E_D("replace into `ecs_collect_goods` values('53','2','123','1457747816','0');");
E_D("replace into `ecs_collect_goods` values('54','2','140','1457747818','0');");
E_D("replace into `ecs_collect_goods` values('55','2','134','1457747821','0');");
E_D("replace into `ecs_collect_goods` values('56','2','131','1457747827','0');");
E_D("replace into `ecs_collect_goods` values('57','2','120','1457747828','0');");
E_D("replace into `ecs_collect_goods` values('58','29','86','1458112907','0');");
E_D("replace into `ecs_collect_goods` values('59','29','88','1458112914','1');");
E_D("replace into `ecs_collect_goods` values('60','50','284','1458288114','0');");

require("../../inc/footer.php");
?>