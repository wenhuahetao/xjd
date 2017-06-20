<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_tag`;");
E_C("CREATE TABLE `ecs_goods_tag` (
  `tag_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) NOT NULL DEFAULT '0',
  `tag_name` varchar(100) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `is_user` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_tag` values('1','1','好吃','1','0');");
E_D("replace into `ecs_goods_tag` values('2','1','新鲜','1','0');");
E_D("replace into `ecs_goods_tag` values('3','1','量足','1','0');");
E_D("replace into `ecs_goods_tag` values('4','232','漂亮','1','1');");
E_D("replace into `ecs_goods_tag` values('5','100','11','1','1');");
E_D("replace into `ecs_goods_tag` values('6','20','11','1','1');");
E_D("replace into `ecs_goods_tag` values('7','191','正品','1','1');");
E_D("replace into `ecs_goods_tag` values('8','290','打折','1','0');");

require("../../inc/footer.php");
?>