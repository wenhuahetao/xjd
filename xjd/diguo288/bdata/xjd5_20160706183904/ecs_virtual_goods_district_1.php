<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_virtual_goods_district`;");
E_C("CREATE TABLE `ecs_virtual_goods_district` (
  `district_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` varchar(255) DEFAULT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `province` smallint(5) unsigned DEFAULT NULL,
  `city` smallint(5) unsigned DEFAULT NULL,
  `county` smallint(5) unsigned DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL COMMENT '排序',
  `is_show` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3466 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_virtual_goods_district` values('3423','','西城区商圈','2','52','501','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3424','','东环路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3425','','海阳路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3426','','秦皇小区','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3427','','秦皇东大街','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3428','','人民广场','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3429','','东山浴场','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3430','','迎宾路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3431','','道南','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3432','','建国路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3433','','文化路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3434','','燕山大街','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3435','','和平大街','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3436','','建设大街','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3437','','金三角','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3438','','红旗路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3439','','民族路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3440','','友谊路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3441','','西港路','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3442','','秦皇西大街','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3443','','河北大街东段','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3444','','河北大街西段','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3445','','河北大街中段','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3446','','山海关火车站','10','145','1195','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3447','','北戴河','10','145','1194','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3448','','家惠购物中心','10','145','1197','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3449','','迎宾路','10','145','1198','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3450','','卢龙','10','145','1199','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3451','','青龙','10','145','1200','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3452','','南戴河','10','145','3409','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3453','','测试商圈','4','54','532','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3454','','测试商圈','9','120','1054','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3455','','鼓楼','4','53','518','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3456','','城关','5','62','605','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3457','','测试商圈','13','182','1559','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3458','','测试商圈','14','199','1662','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3459','','测试商圈','6','78','713','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3460','','测试商圈','16','220','1835','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3461','','测试商圈','3','38','417','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3462','','测试商圈','3','39','421','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3463','','测试商圈','10','140','1129','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3464','','测试商圈','29','356','3035','1','1');");
E_D("replace into `ecs_virtual_goods_district` values('3465','','测试商圈','28','346','2947','1','1');");

require("../../inc/footer.php");
?>