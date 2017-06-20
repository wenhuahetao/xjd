<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pickup_point`;");
E_C("CREATE TABLE `ecs_pickup_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `supplier_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺标识',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pickup_point` values('1','云海超市','河北大街西段','15216766661','倪庆洋','10','145','1194','0');");
E_D("replace into `ecs_pickup_point` values('2','逸城超市','111','13211111111','李先生','10','145','1194','0');");
E_D("replace into `ecs_pickup_point` values('3','11111111','11111','123 ','1111111','10','145','1197','0');");
E_D("replace into `ecs_pickup_point` values('4','额发生大','的撒','大杀四方','大','10','145','1195','0');");
E_D("replace into `ecs_pickup_point` values('5','第三方','第三方','第三方','第三方','10','145','1195','0');");
E_D("replace into `ecs_pickup_point` values('6','第三方','圣达菲','圣达菲','圣达菲','10','145','1197','0');");
E_D("replace into `ecs_pickup_point` values('7','圣达菲','第三方','圣达菲','第三方','10','145','1196','0');");
E_D("replace into `ecs_pickup_point` values('8','圣达菲','圣达菲','圣达菲','是的发','10','145','1194','0');");

require("../../inc/footer.php");
?>