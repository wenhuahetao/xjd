<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_street_category`;");
E_C("CREATE TABLE `ecs_street_category` (
  `str_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `str_name` varchar(90) NOT NULL DEFAULT '' COMMENT '分类名',
  `str_style` varchar(90) NOT NULL DEFAULT '0' COMMENT '样式类名',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50' COMMENT '排列顺序',
  `is_groom` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`str_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_street_category` values('1','精选','0','50','0','1');");
E_D("replace into `ecs_street_category` values('2','女人','ft-woman','50','1','1');");
E_D("replace into `ecs_street_category` values('3','男人','ft-man','50','1','1');");
E_D("replace into `ecs_street_category` values('4','家装','ft-electric','50','1','1');");
E_D("replace into `ecs_street_category` values('5','母婴','ft-mami','50','1','1');");
E_D("replace into `ecs_street_category` values('6','美妆','ft-makeup','50','1','1');");
E_D("replace into `ecs_street_category` values('7','美食','ft-sport','50','1','1');");
E_D("replace into `ecs_street_category` values('8','数码','ft-life','50','1','1');");

require("../../inc/footer.php");
?>