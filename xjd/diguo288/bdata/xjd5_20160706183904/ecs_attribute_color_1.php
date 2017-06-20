<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute_color`;");
E_C("CREATE TABLE `ecs_attribute_color` (
  `attr_color_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `attr_id` mediumint(8) unsigned NOT NULL,
  `color_name` varchar(30) NOT NULL,
  `color_code` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`attr_color_id`),
  KEY `act_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute_color` values('48','1','紫色','C403FF','');");
E_D("replace into `ecs_attribute_color` values('47','1','粉色','FFA1DC','');");
E_D("replace into `ecs_attribute_color` values('46','1','绿色','00FF00','');");
E_D("replace into `ecs_attribute_color` values('45','1','红色','FF0000','');");
E_D("replace into `ecs_attribute_color` values('44','1','橙黄','FFA012','');");
E_D("replace into `ecs_attribute_color` values('43','1','灰色','DDDDDD','');");
E_D("replace into `ecs_attribute_color` values('42','1','宝石蓝','2617FF','');");
E_D("replace into `ecs_attribute_color` values('41','1','金色','D5C47E','');");
E_D("replace into `ecs_attribute_color` values('40','1','银色','EDEDED','');");
E_D("replace into `ecs_attribute_color` values('39','1','黑色','000000','');");
E_D("replace into `ecs_attribute_color` values('38','1','白色','FFFFFF','');");
E_D("replace into `ecs_attribute_color` values('13','15','白色','FFFFFF','');");
E_D("replace into `ecs_attribute_color` values('14','15','黑色','000000','');");
E_D("replace into `ecs_attribute_color` values('15','15','粉色','FFA1DC','');");
E_D("replace into `ecs_attribute_color` values('16','15','红色','FF0000','');");
E_D("replace into `ecs_attribute_color` values('17','15','灰色','DDDDDD','');");
E_D("replace into `ecs_attribute_color` values('18','15','棕色','944806','');");
E_D("replace into `ecs_attribute_color` values('19','15','蓝色','2617FF','');");
E_D("replace into `ecs_attribute_color` values('20','15','米色','FFEC70','');");
E_D("replace into `ecs_attribute_color` values('21','15','黄色','FFFF08','');");
E_D("replace into `ecs_attribute_color` values('22','15','玫红','FF245E','');");
E_D("replace into `ecs_attribute_color` values('23','15','金色','D5C47E','');");
E_D("replace into `ecs_attribute_color` values('24','15','银色','EDEDED','');");
E_D("replace into `ecs_attribute_color` values('25','15','紫色','C403FF','');");
E_D("replace into `ecs_attribute_color` values('26','15','月色','FFFFFF','');");

require("../../inc/footer.php");
?>