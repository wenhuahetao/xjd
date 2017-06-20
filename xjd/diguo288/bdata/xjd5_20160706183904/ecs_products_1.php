<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('1','34','8|11','ECS000034g_p1','100');");
E_D("replace into `ecs_products` values('2','34','8|12','ECS000034g_p2','99');");
E_D("replace into `ecs_products` values('3','34','9|10','ECS000034g_p3','100');");
E_D("replace into `ecs_products` values('4','34','9|12','ECS000034g_p4','79');");
E_D("replace into `ecs_products` values('5','34','8|10','ECS000034g_p5','0');");
E_D("replace into `ecs_products` values('6','36','20|22','ECS000036g_p6','99');");
E_D("replace into `ecs_products` values('7','36','21|22','ECS000036g_p7','59');");
E_D("replace into `ecs_products` values('8','36','21|23','ECS000036g_p8','99');");
E_D("replace into `ecs_products` values('9','36','20|23','ECS000036g_p9','168');");
E_D("replace into `ecs_products` values('10','38','32|33','ECS000038g_p10','688');");
E_D("replace into `ecs_products` values('11','38','31|33','ECS000038g_p11','899');");
E_D("replace into `ecs_products` values('12','40','37|39','ECS000040g_p12','100');");
E_D("replace into `ecs_products` values('13','40','37|38','ECS000040g_p13','99');");
E_D("replace into `ecs_products` values('14','42','44|45','ECS000042g_p14','289');");
E_D("replace into `ecs_products` values('15','45','49|51','ECS000045g_p15','199');");
E_D("replace into `ecs_products` values('16','45','49|50','ECS000045g_p16','99');");
E_D("replace into `ecs_products` values('17','46','55|57','ECS000046g_p17','188');");
E_D("replace into `ecs_products` values('18','46','55|56','ECS000046g_p18','100');");
E_D("replace into `ecs_products` values('19','49','63|67','ECS000049g_p19','998');");
E_D("replace into `ecs_products` values('20','49','64|66','ECS000049g_p20','1000');");
E_D("replace into `ecs_products` values('21','49','64|67','ECS000049g_p21','999');");
E_D("replace into `ecs_products` values('22','49','63|66','ECS000049g_p22','1000');");
E_D("replace into `ecs_products` values('23','48','73','ECS000048g_p23','1545');");
E_D("replace into `ecs_products` values('24','51','85|86','ECS000051g_p24','185');");
E_D("replace into `ecs_products` values('25','56','90|91','ECS000056g_p25','1000');");
E_D("replace into `ecs_products` values('26','100','115','ECS000100g_p26','110');");
E_D("replace into `ecs_products` values('27','100','114','ECS000100g_p27','1489');");
E_D("replace into `ecs_products` values('28','113','129','ECS000113g_p28','2499');");
E_D("replace into `ecs_products` values('29','113','130','ECS000113g_p29','1499');");
E_D("replace into `ecs_products` values('48','143','156|147','ECS000143g_p48','2');");
E_D("replace into `ecs_products` values('32','147','186','ECS000147g_p32','0');");
E_D("replace into `ecs_products` values('33','147','187','ECS000147g_p33','3000');");
E_D("replace into `ecs_products` values('34','155','221','ECS000155g_p34','1000');");
E_D("replace into `ecs_products` values('35','155','220','ECS000155g_p35','1497');");
E_D("replace into `ecs_products` values('36','162','233','ECS000162g_p36','499');");
E_D("replace into `ecs_products` values('37','162','234','ECS000162g_p37','2500');");
E_D("replace into `ecs_products` values('38','179','261','ECS000179g_p38','0');");
E_D("replace into `ecs_products` values('39','179','262','ECS000179g_p39','2000');");
E_D("replace into `ecs_products` values('49','143','155|147','ECS000143g_p49','100');");
E_D("replace into `ecs_products` values('43','232','310|311','ECS000232g_p43','0');");
E_D("replace into `ecs_products` values('44','232','309|312','ECS000232g_p44','1777');");
E_D("replace into `ecs_products` values('45','232','309|311','ECS000232g_p45','0');");
E_D("replace into `ecs_products` values('46','232','310|312','ECS000232g_p46','999');");
E_D("replace into `ecs_products` values('47','147','186|180','ECS000147g_p47','0');");
E_D("replace into `ecs_products` values('50','247','317','ECS000247g_p50','0');");
E_D("replace into `ecs_products` values('51','247','316','ECS000247g_p51','0');");
E_D("replace into `ecs_products` values('52','51','318|86','ECS000051g_p52','553');");
E_D("replace into `ecs_products` values('53','51','318|319','ECS000051g_p53','555');");
E_D("replace into `ecs_products` values('54','51','85|319','ECS000051g_p54','555');");
E_D("replace into `ecs_products` values('55','291','339','ED23188167g_p55','100');");
E_D("replace into `ecs_products` values('56','291','340','ED23188167g_p56','100');");
E_D("replace into `ecs_products` values('57','291','341','ED23188167g_p57','100');");
E_D("replace into `ecs_products` values('61','283','327|328','ECS000283g_p61','993');");

require("../../inc/footer.php");
?>