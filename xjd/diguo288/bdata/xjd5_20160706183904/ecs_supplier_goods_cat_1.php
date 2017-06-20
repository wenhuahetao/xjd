<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_goods_cat`;");
E_C("CREATE TABLE `ecs_supplier_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `supplier_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_goods_cat` values('1','4','1');");
E_D("replace into `ecs_supplier_goods_cat` values('2','4','1');");
E_D("replace into `ecs_supplier_goods_cat` values('3','5','1');");
E_D("replace into `ecs_supplier_goods_cat` values('4','5','1');");
E_D("replace into `ecs_supplier_goods_cat` values('5','8','1');");
E_D("replace into `ecs_supplier_goods_cat` values('6','8','1');");
E_D("replace into `ecs_supplier_goods_cat` values('7','6','1');");
E_D("replace into `ecs_supplier_goods_cat` values('8','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('9','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('10','7','1');");
E_D("replace into `ecs_supplier_goods_cat` values('11','7','1');");
E_D("replace into `ecs_supplier_goods_cat` values('12','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('13','7','1');");
E_D("replace into `ecs_supplier_goods_cat` values('14','7','1');");
E_D("replace into `ecs_supplier_goods_cat` values('15','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('16','4','1');");
E_D("replace into `ecs_supplier_goods_cat` values('17','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('18','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('19','12','2');");
E_D("replace into `ecs_supplier_goods_cat` values('20','4','1');");
E_D("replace into `ecs_supplier_goods_cat` values('21','12','2');");
E_D("replace into `ecs_supplier_goods_cat` values('22','5','1');");
E_D("replace into `ecs_supplier_goods_cat` values('23','5','1');");
E_D("replace into `ecs_supplier_goods_cat` values('24','8','1');");
E_D("replace into `ecs_supplier_goods_cat` values('25','8','1');");
E_D("replace into `ecs_supplier_goods_cat` values('33','26','5');");
E_D("replace into `ecs_supplier_goods_cat` values('34','26','5');");
E_D("replace into `ecs_supplier_goods_cat` values('35','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('36','26','5');");
E_D("replace into `ecs_supplier_goods_cat` values('37','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('38','26','5');");
E_D("replace into `ecs_supplier_goods_cat` values('39','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('40','35','5');");
E_D("replace into `ecs_supplier_goods_cat` values('41','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('42','35','5');");
E_D("replace into `ecs_supplier_goods_cat` values('43','12','2');");
E_D("replace into `ecs_supplier_goods_cat` values('44','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('45','35','5');");
E_D("replace into `ecs_supplier_goods_cat` values('46','35','5');");
E_D("replace into `ecs_supplier_goods_cat` values('47','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('48','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('49','10','2');");
E_D("replace into `ecs_supplier_goods_cat` values('49','82','2');");
E_D("replace into `ecs_supplier_goods_cat` values('64','63','6');");
E_D("replace into `ecs_supplier_goods_cat` values('73','121','6');");
E_D("replace into `ecs_supplier_goods_cat` values('77','65','6');");
E_D("replace into `ecs_supplier_goods_cat` values('84','60','6');");
E_D("replace into `ecs_supplier_goods_cat` values('87','60','6');");
E_D("replace into `ecs_supplier_goods_cat` values('98','121','6');");
E_D("replace into `ecs_supplier_goods_cat` values('104','53','6');");
E_D("replace into `ecs_supplier_goods_cat` values('108','65','6');");
E_D("replace into `ecs_supplier_goods_cat` values('111','58','6');");
E_D("replace into `ecs_supplier_goods_cat` values('119','91','7');");
E_D("replace into `ecs_supplier_goods_cat` values('120','91','7');");
E_D("replace into `ecs_supplier_goods_cat` values('129','91','7');");
E_D("replace into `ecs_supplier_goods_cat` values('130','91','7');");
E_D("replace into `ecs_supplier_goods_cat` values('131','91','7');");
E_D("replace into `ecs_supplier_goods_cat` values('132','65','6');");
E_D("replace into `ecs_supplier_goods_cat` values('133','68','6');");
E_D("replace into `ecs_supplier_goods_cat` values('134','77','6');");
E_D("replace into `ecs_supplier_goods_cat` values('135','77','6');");
E_D("replace into `ecs_supplier_goods_cat` values('136','56','6');");
E_D("replace into `ecs_supplier_goods_cat` values('137','97','7');");
E_D("replace into `ecs_supplier_goods_cat` values('138','60','6');");
E_D("replace into `ecs_supplier_goods_cat` values('138','62','6');");
E_D("replace into `ecs_supplier_goods_cat` values('139','97','7');");
E_D("replace into `ecs_supplier_goods_cat` values('140','97','7');");
E_D("replace into `ecs_supplier_goods_cat` values('141','121','6');");
E_D("replace into `ecs_supplier_goods_cat` values('141','53','6');");
E_D("replace into `ecs_supplier_goods_cat` values('141','58','6');");
E_D("replace into `ecs_supplier_goods_cat` values('141','60','6');");
E_D("replace into `ecs_supplier_goods_cat` values('141','65','6');");
E_D("replace into `ecs_supplier_goods_cat` values('142','68','6');");
E_D("replace into `ecs_supplier_goods_cat` values('144','77','6');");
E_D("replace into `ecs_supplier_goods_cat` values('145','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('146','54','6');");
E_D("replace into `ecs_supplier_goods_cat` values('149','76','6');");
E_D("replace into `ecs_supplier_goods_cat` values('152','56','6');");
E_D("replace into `ecs_supplier_goods_cat` values('152','57','6');");
E_D("replace into `ecs_supplier_goods_cat` values('152','76','6');");
E_D("replace into `ecs_supplier_goods_cat` values('152','78','6');");
E_D("replace into `ecs_supplier_goods_cat` values('153','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('158','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('161','54','6');");
E_D("replace into `ecs_supplier_goods_cat` values('161','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('163','54','6');");
E_D("replace into `ecs_supplier_goods_cat` values('163','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('164','54','6');");
E_D("replace into `ecs_supplier_goods_cat` values('164','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('166','81','6');");
E_D("replace into `ecs_supplier_goods_cat` values('169','77','6');");
E_D("replace into `ecs_supplier_goods_cat` values('173','77','6');");
E_D("replace into `ecs_supplier_goods_cat` values('234','14','2');");
E_D("replace into `ecs_supplier_goods_cat` values('242','26','5');");
E_D("replace into `ecs_supplier_goods_cat` values('248','121','6');");
E_D("replace into `ecs_supplier_goods_cat` values('248','53','6');");
E_D("replace into `ecs_supplier_goods_cat` values('249','24','5');");
E_D("replace into `ecs_supplier_goods_cat` values('249','25','5');");
E_D("replace into `ecs_supplier_goods_cat` values('284','141','18');");
E_D("replace into `ecs_supplier_goods_cat` values('285','141','18');");
E_D("replace into `ecs_supplier_goods_cat` values('286','141','18');");
E_D("replace into `ecs_supplier_goods_cat` values('287','141','18');");
E_D("replace into `ecs_supplier_goods_cat` values('291','144','21');");

require("../../inc/footer.php");
?>