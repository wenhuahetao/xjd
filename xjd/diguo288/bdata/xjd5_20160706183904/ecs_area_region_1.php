<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('23','10');");
E_D("replace into `ecs_area_region` values('24','10');");
E_D("replace into `ecs_area_region` values('87','1');");
E_D("replace into `ecs_area_region` values('88','1');");
E_D("replace into `ecs_area_region` values('89','1');");
E_D("replace into `ecs_area_region` values('90','1');");
E_D("replace into `ecs_area_region` values('91','1');");
E_D("replace into `ecs_area_region` values('92','1');");
E_D("replace into `ecs_area_region` values('93','1');");
E_D("replace into `ecs_area_region` values('206','2');");
E_D("replace into `ecs_area_region` values('206','3');");
E_D("replace into `ecs_area_region` values('206','4');");
E_D("replace into `ecs_area_region` values('206','5');");
E_D("replace into `ecs_area_region` values('206','6');");
E_D("replace into `ecs_area_region` values('206','7');");
E_D("replace into `ecs_area_region` values('206','8');");
E_D("replace into `ecs_area_region` values('206','9');");
E_D("replace into `ecs_area_region` values('206','10');");
E_D("replace into `ecs_area_region` values('206','11');");
E_D("replace into `ecs_area_region` values('206','12');");
E_D("replace into `ecs_area_region` values('206','13');");
E_D("replace into `ecs_area_region` values('206','14');");
E_D("replace into `ecs_area_region` values('206','15');");
E_D("replace into `ecs_area_region` values('206','16');");
E_D("replace into `ecs_area_region` values('206','17');");
E_D("replace into `ecs_area_region` values('206','18');");
E_D("replace into `ecs_area_region` values('206','19');");
E_D("replace into `ecs_area_region` values('206','20');");
E_D("replace into `ecs_area_region` values('206','21');");
E_D("replace into `ecs_area_region` values('206','22');");
E_D("replace into `ecs_area_region` values('206','23');");
E_D("replace into `ecs_area_region` values('206','24');");
E_D("replace into `ecs_area_region` values('206','25');");
E_D("replace into `ecs_area_region` values('206','26');");
E_D("replace into `ecs_area_region` values('206','27');");
E_D("replace into `ecs_area_region` values('206','30');");
E_D("replace into `ecs_area_region` values('206','31');");
E_D("replace into `ecs_area_region` values('206','32');");
E_D("replace into `ecs_area_region` values('207','28');");
E_D("replace into `ecs_area_region` values('207','29');");
E_D("replace into `ecs_area_region` values('209','1');");
E_D("replace into `ecs_area_region` values('217','1');");
E_D("replace into `ecs_area_region` values('218','1');");
E_D("replace into `ecs_area_region` values('219','1');");
E_D("replace into `ecs_area_region` values('220','1');");
E_D("replace into `ecs_area_region` values('221','1');");
E_D("replace into `ecs_area_region` values('222','1');");
E_D("replace into `ecs_area_region` values('223','1');");
E_D("replace into `ecs_area_region` values('224','1');");
E_D("replace into `ecs_area_region` values('225','1');");

require("../../inc/footer.php");
?>