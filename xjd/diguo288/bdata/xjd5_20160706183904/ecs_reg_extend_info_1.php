<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_reg_extend_info`;");
E_C("CREATE TABLE `ecs_reg_extend_info` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reg_field_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_reg_extend_info` values('1','10','1','18630360371');");
E_D("replace into `ecs_reg_extend_info` values('2','14','7','18630360371');");
E_D("replace into `ecs_reg_extend_info` values('3','15','7','15032369431');");
E_D("replace into `ecs_reg_extend_info` values('4','17','7','18630360371');");
E_D("replace into `ecs_reg_extend_info` values('5','18','7','18630360371');");

require("../../inc/footer.php");
?>