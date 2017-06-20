<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_street`;");
E_C("CREATE TABLE `ecs_supplier_street` (
  `supplier_id` mediumint(8) unsigned NOT NULL COMMENT '店铺id',
  `supplier_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '店铺类型',
  `supplier_name` varchar(255) NOT NULL COMMENT '店铺名称',
  `supplier_title` varchar(255) NOT NULL COMMENT '店铺标题',
  `supplier_desc` text NOT NULL COMMENT '店铺描述',
  `supplier_tags` varchar(255) NOT NULL COMMENT '店铺标签',
  `logo` varchar(255) NOT NULL COMMENT '店铺图标',
  `is_groom` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否显示',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50' COMMENT '排列顺序',
  `supplier_notice` text NOT NULL COMMENT '审核通知',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '申请添加时间',
  UNIQUE KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_street` values('1','7','天天果园','天天果园','每天都给您一点新鲜','生态','','1','1','50','已经通过审核！','1','1437698700');");
E_D("replace into `ecs_supplier_street` values('7','4','金星家纺','平分秋色','色彩与艺术','高端','/data/street_logo/supplier7/original7_220x220.jpg','1','1','50','已经通过审核！','1','1437698892');");
E_D("replace into `ecs_supplier_street` values('5','2','L&amp;L','色彩与艺术','色彩与艺术','时尚','/data/street_logo/supplier5/original5_220x220.jpg','1','1','10','已经通过审核！','1','1437698932');");
E_D("replace into `ecs_supplier_street` values('6','6','伊人化妆','伊人化妆','色彩与艺术','色彩','/data/street_logo/supplier6/original6_220x220.jpg','1','1','50','已经通过审核！','1','1437699102');");
E_D("replace into `ecs_supplier_street` values('2','5','小金蛋','遇见春天的你','遇见春天的你','甜美','/data/street_logo/supplier2/original2_220x220.jpg','1','1','50','已经通过审核！','1','1437699506');");

require("../../inc/footer.php");
?>