<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_tag`;");
E_C("CREATE TABLE `ecs_supplier_tag` (
  `tag_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(30) NOT NULL DEFAULT '',
  `is_groom` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '是否首页热门店铺推荐',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_tag` values('1','热门店铺','1','50');");
E_D("replace into `ecs_supplier_tag` values('2','今日大牌','1','50');");

require("../../inc/footer.php");
?>