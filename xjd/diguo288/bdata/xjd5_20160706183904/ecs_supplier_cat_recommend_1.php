<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_cat_recommend`;");
E_C("CREATE TABLE `ecs_supplier_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_cat_recommend` values('8','1','1');");
E_D("replace into `ecs_supplier_cat_recommend` values('10','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('10','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('10','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('11','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('11','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('11','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('12','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('12','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('12','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('13','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('13','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('13','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('14','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('14','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('14','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('15','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('15','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('15','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('16','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('16','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('16','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('17','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('17','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('17','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('7','2','1');");
E_D("replace into `ecs_supplier_cat_recommend` values('18','1','5');");
E_D("replace into `ecs_supplier_cat_recommend` values('26','1','5');");
E_D("replace into `ecs_supplier_cat_recommend` values('26','2','5');");
E_D("replace into `ecs_supplier_cat_recommend` values('26','3','5');");
E_D("replace into `ecs_supplier_cat_recommend` values('35','1','5');");
E_D("replace into `ecs_supplier_cat_recommend` values('35','3','5');");
E_D("replace into `ecs_supplier_cat_recommend` values('82','1','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('82','2','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('82','3','2');");
E_D("replace into `ecs_supplier_cat_recommend` values('91','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('91','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('91','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('92','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('92','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('92','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('93','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('93','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('93','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('94','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('94','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('94','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('95','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('95','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('95','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('96','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('96','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('96','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('97','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('97','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('97','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('98','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('98','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('98','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('100','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('100','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('100','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('77','2','6');");
E_D("replace into `ecs_supplier_cat_recommend` values('65','1','6');");
E_D("replace into `ecs_supplier_cat_recommend` values('81','3','6');");
E_D("replace into `ecs_supplier_cat_recommend` values('4','3','1');");
E_D("replace into `ecs_supplier_cat_recommend` values('5','3','1');");
E_D("replace into `ecs_supplier_cat_recommend` values('140','1','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('140','2','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('140','3','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('141','1','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('141','2','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('141','3','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('142','1','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('142','2','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('142','3','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('143','1','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('143','2','18');");
E_D("replace into `ecs_supplier_cat_recommend` values('143','3','18');");

require("../../inc/footer.php");
?>