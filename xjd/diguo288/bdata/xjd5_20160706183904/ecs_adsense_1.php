<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('1','本站','6');");
E_D("replace into `ecs_adsense` values('2','本站','8');");
E_D("replace into `ecs_adsense` values('58','本站','2');");
E_D("replace into `ecs_adsense` values('56','本站','2');");
E_D("replace into `ecs_adsense` values('59','本站','1');");
E_D("replace into `ecs_adsense` values('3','本站','1');");
E_D("replace into `ecs_adsense` values('4','本站','2');");
E_D("replace into `ecs_adsense` values('5','本站','2');");
E_D("replace into `ecs_adsense` values('8','本站','5');");
E_D("replace into `ecs_adsense` values('43','本站','1');");
E_D("replace into `ecs_adsense` values('19','本站','1');");
E_D("replace into `ecs_adsense` values('64','本站','2');");
E_D("replace into `ecs_adsense` values('10','本站','3');");
E_D("replace into `ecs_adsense` values('16','本站','1');");
E_D("replace into `ecs_adsense` values('44','本站','1');");
E_D("replace into `ecs_adsense` values('67','本站','1');");
E_D("replace into `ecs_adsense` values('81','本站','2');");
E_D("replace into `ecs_adsense` values('9','本站','7');");
E_D("replace into `ecs_adsense` values('84','本站','3');");
E_D("replace into `ecs_adsense` values('85','本站','6');");
E_D("replace into `ecs_adsense` values('6','本站','4');");
E_D("replace into `ecs_adsense` values('70','本站','1');");
E_D("replace into `ecs_adsense` values('74','本站','1');");
E_D("replace into `ecs_adsense` values('15','本站','4');");
E_D("replace into `ecs_adsense` values('86','本站','11');");
E_D("replace into `ecs_adsense` values('88','本站','2');");
E_D("replace into `ecs_adsense` values('87','本站','2');");
E_D("replace into `ecs_adsense` values('73','本站','1');");
E_D("replace into `ecs_adsense` values('62','本站','3');");
E_D("replace into `ecs_adsense` values('39','本站','1');");
E_D("replace into `ecs_adsense` values('37','本站','1');");
E_D("replace into `ecs_adsense` values('79','本站','1');");
E_D("replace into `ecs_adsense` values('42','本站','9');");
E_D("replace into `ecs_adsense` values('63','本站','2');");
E_D("replace into `ecs_adsense` values('30','本站','1');");
E_D("replace into `ecs_adsense` values('207','本站','1');");
E_D("replace into `ecs_adsense` values('208','本站','1');");
E_D("replace into `ecs_adsense` values('209','本站','1');");
E_D("replace into `ecs_adsense` values('213','本站','1');");
E_D("replace into `ecs_adsense` values('227','本站','1');");
E_D("replace into `ecs_adsense` values('228','本站','1');");
E_D("replace into `ecs_adsense` values('72','本站','2');");
E_D("replace into `ecs_adsense` values('25','本站','1');");
E_D("replace into `ecs_adsense` values('29','本站','5');");
E_D("replace into `ecs_adsense` values('66','本站','1');");
E_D("replace into `ecs_adsense` values('77','本站','2');");
E_D("replace into `ecs_adsense` values('17','本站','1');");

require("../../inc/footer.php");
?>