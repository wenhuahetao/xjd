<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_virtual_district`;");
E_C("CREATE TABLE `ecs_virtual_district` (
  `district_id` int(6) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_virtual_district` values('3423','239','0');");
E_D("replace into `ecs_virtual_district` values('3426','243','0');");
E_D("replace into `ecs_virtual_district` values('3425','243','0');");
E_D("replace into `ecs_virtual_district` values('3424','243','0');");
E_D("replace into `ecs_virtual_district` values('3427','243','0');");
E_D("replace into `ecs_virtual_district` values('3429','243','0');");
E_D("replace into `ecs_virtual_district` values('3431','243','0');");
E_D("replace into `ecs_virtual_district` values('3424','244','0');");
E_D("replace into `ecs_virtual_district` values('3424','245','0');");
E_D("replace into `ecs_virtual_district` values('3425','245','0');");
E_D("replace into `ecs_virtual_district` values('3426','245','0');");
E_D("replace into `ecs_virtual_district` values('3427','245','0');");
E_D("replace into `ecs_virtual_district` values('3428','245','0');");
E_D("replace into `ecs_virtual_district` values('3429','245','0');");
E_D("replace into `ecs_virtual_district` values('3430','245','0');");
E_D("replace into `ecs_virtual_district` values('3424','246','0');");
E_D("replace into `ecs_virtual_district` values('3425','246','0');");
E_D("replace into `ecs_virtual_district` values('3427','246','0');");
E_D("replace into `ecs_virtual_district` values('3428','246','0');");
E_D("replace into `ecs_virtual_district` values('3429','246','0');");
E_D("replace into `ecs_virtual_district` values('3430','246','0');");
E_D("replace into `ecs_virtual_district` values('3428','247','0');");
E_D("replace into `ecs_virtual_district` values('3431','247','0');");
E_D("replace into `ecs_virtual_district` values('3429','247','0');");
E_D("replace into `ecs_virtual_district` values('3427','247','0');");
E_D("replace into `ecs_virtual_district` values('3426','247','0');");
E_D("replace into `ecs_virtual_district` values('3425','247','0');");
E_D("replace into `ecs_virtual_district` values('3423','248','6');");
E_D("replace into `ecs_virtual_district` values('3424','248','6');");
E_D("replace into `ecs_virtual_district` values('3425','248','6');");
E_D("replace into `ecs_virtual_district` values('3427','248','6');");
E_D("replace into `ecs_virtual_district` values('3429','248','6');");
E_D("replace into `ecs_virtual_district` values('3430','248','6');");
E_D("replace into `ecs_virtual_district` values('3424','249','5');");
E_D("replace into `ecs_virtual_district` values('3425','249','5');");
E_D("replace into `ecs_virtual_district` values('3427','249','5');");
E_D("replace into `ecs_virtual_district` values('3428','249','5');");
E_D("replace into `ecs_virtual_district` values('3429','249','5');");

require("../../inc/footer.php");
?>