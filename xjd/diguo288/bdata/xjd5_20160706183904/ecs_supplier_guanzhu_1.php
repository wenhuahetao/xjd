<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_guanzhu`;");
E_C("CREATE TABLE `ecs_supplier_guanzhu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `supplierid` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`,`supplierid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_guanzhu` values('1','6','6','1457358326');");
E_D("replace into `ecs_supplier_guanzhu` values('2','5','5','1448869182');");
E_D("replace into `ecs_supplier_guanzhu` values('3','5','1','1448869185');");
E_D("replace into `ecs_supplier_guanzhu` values('4','5','7','1448869187');");
E_D("replace into `ecs_supplier_guanzhu` values('5','5','6','1448869189');");
E_D("replace into `ecs_supplier_guanzhu` values('6','6','5','1457359033');");
E_D("replace into `ecs_supplier_guanzhu` values('7','6','1','1457358601');");
E_D("replace into `ecs_supplier_guanzhu` values('8','6','11','1456383609');");
E_D("replace into `ecs_supplier_guanzhu` values('9','6','7','1457358329');");
E_D("replace into `ecs_supplier_guanzhu` values('10','49','7','1458289253');");

require("../../inc/footer.php");
?>