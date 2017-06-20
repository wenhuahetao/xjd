<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cat_recommend`;");
E_C("CREATE TABLE `ecs_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cat_recommend` values('5','1');");
E_D("replace into `ecs_cat_recommend` values('5','2');");
E_D("replace into `ecs_cat_recommend` values('5','3');");
E_D("replace into `ecs_cat_recommend` values('17','3');");
E_D("replace into `ecs_cat_recommend` values('21','3');");
E_D("replace into `ecs_cat_recommend` values('25','3');");
E_D("replace into `ecs_cat_recommend` values('26','3');");
E_D("replace into `ecs_cat_recommend` values('27','3');");
E_D("replace into `ecs_cat_recommend` values('28','3');");
E_D("replace into `ecs_cat_recommend` values('30','3');");
E_D("replace into `ecs_cat_recommend` values('46','3');");
E_D("replace into `ecs_cat_recommend` values('47','3');");
E_D("replace into `ecs_cat_recommend` values('61','3');");
E_D("replace into `ecs_cat_recommend` values('62','3');");
E_D("replace into `ecs_cat_recommend` values('67','3');");
E_D("replace into `ecs_cat_recommend` values('80','3');");
E_D("replace into `ecs_cat_recommend` values('84','3');");
E_D("replace into `ecs_cat_recommend` values('89','3');");
E_D("replace into `ecs_cat_recommend` values('92','3');");
E_D("replace into `ecs_cat_recommend` values('95','3');");
E_D("replace into `ecs_cat_recommend` values('107','3');");
E_D("replace into `ecs_cat_recommend` values('125','3');");
E_D("replace into `ecs_cat_recommend` values('126','3');");
E_D("replace into `ecs_cat_recommend` values('127','3');");
E_D("replace into `ecs_cat_recommend` values('128','3');");
E_D("replace into `ecs_cat_recommend` values('136','3');");
E_D("replace into `ecs_cat_recommend` values('137','3');");
E_D("replace into `ecs_cat_recommend` values('138','3');");
E_D("replace into `ecs_cat_recommend` values('139','3');");
E_D("replace into `ecs_cat_recommend` values('140','3');");
E_D("replace into `ecs_cat_recommend` values('149','3');");
E_D("replace into `ecs_cat_recommend` values('153','3');");
E_D("replace into `ecs_cat_recommend` values('154','3');");
E_D("replace into `ecs_cat_recommend` values('156','3');");
E_D("replace into `ecs_cat_recommend` values('162','1');");
E_D("replace into `ecs_cat_recommend` values('164','3');");
E_D("replace into `ecs_cat_recommend` values('165','1');");
E_D("replace into `ecs_cat_recommend` values('165','3');");
E_D("replace into `ecs_cat_recommend` values('166','3');");
E_D("replace into `ecs_cat_recommend` values('168','3');");
E_D("replace into `ecs_cat_recommend` values('169','3');");
E_D("replace into `ecs_cat_recommend` values('181','2');");
E_D("replace into `ecs_cat_recommend` values('182','1');");
E_D("replace into `ecs_cat_recommend` values('191','3');");
E_D("replace into `ecs_cat_recommend` values('192','3');");
E_D("replace into `ecs_cat_recommend` values('193','3');");
E_D("replace into `ecs_cat_recommend` values('194','3');");
E_D("replace into `ecs_cat_recommend` values('196','3');");
E_D("replace into `ecs_cat_recommend` values('197','1');");
E_D("replace into `ecs_cat_recommend` values('197','3');");
E_D("replace into `ecs_cat_recommend` values('199','3');");
E_D("replace into `ecs_cat_recommend` values('200','1');");
E_D("replace into `ecs_cat_recommend` values('201','3');");
E_D("replace into `ecs_cat_recommend` values('203','3');");
E_D("replace into `ecs_cat_recommend` values('204','1');");
E_D("replace into `ecs_cat_recommend` values('207','1');");
E_D("replace into `ecs_cat_recommend` values('212','1');");
E_D("replace into `ecs_cat_recommend` values('215','1');");
E_D("replace into `ecs_cat_recommend` values('216','1');");
E_D("replace into `ecs_cat_recommend` values('217','1');");
E_D("replace into `ecs_cat_recommend` values('218','1');");
E_D("replace into `ecs_cat_recommend` values('218','3');");
E_D("replace into `ecs_cat_recommend` values('219','1');");
E_D("replace into `ecs_cat_recommend` values('220','1');");
E_D("replace into `ecs_cat_recommend` values('227','3');");
E_D("replace into `ecs_cat_recommend` values('242','3');");
E_D("replace into `ecs_cat_recommend` values('243','3');");
E_D("replace into `ecs_cat_recommend` values('245','3');");
E_D("replace into `ecs_cat_recommend` values('246','3');");
E_D("replace into `ecs_cat_recommend` values('247','3');");
E_D("replace into `ecs_cat_recommend` values('250','3');");
E_D("replace into `ecs_cat_recommend` values('252','3');");
E_D("replace into `ecs_cat_recommend` values('253','3');");
E_D("replace into `ecs_cat_recommend` values('276','3');");
E_D("replace into `ecs_cat_recommend` values('277','3');");
E_D("replace into `ecs_cat_recommend` values('280','3');");
E_D("replace into `ecs_cat_recommend` values('282','3');");
E_D("replace into `ecs_cat_recommend` values('285','3');");
E_D("replace into `ecs_cat_recommend` values('286','3');");
E_D("replace into `ecs_cat_recommend` values('287','3');");
E_D("replace into `ecs_cat_recommend` values('288','3');");
E_D("replace into `ecs_cat_recommend` values('297','3');");
E_D("replace into `ecs_cat_recommend` values('306','1');");
E_D("replace into `ecs_cat_recommend` values('312','3');");
E_D("replace into `ecs_cat_recommend` values('313','3');");
E_D("replace into `ecs_cat_recommend` values('332','3');");
E_D("replace into `ecs_cat_recommend` values('337','3');");
E_D("replace into `ecs_cat_recommend` values('340','3');");
E_D("replace into `ecs_cat_recommend` values('341','1');");
E_D("replace into `ecs_cat_recommend` values('350','3');");
E_D("replace into `ecs_cat_recommend` values('351','3');");
E_D("replace into `ecs_cat_recommend` values('352','3');");
E_D("replace into `ecs_cat_recommend` values('355','3');");

require("../../inc/footer.php");
?>