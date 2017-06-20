<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods_goods`;");
E_C("CREATE TABLE `ecs_takegoods_goods` (
  `tg_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_ids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>