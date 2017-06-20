<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_rebate`;");
E_C("CREATE TABLE `ecs_supplier_rebate` (
  `rebate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rebate_paytime_start` int(10) unsigned NOT NULL,
  `rebate_paytime_end` int(10) unsigned NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL,
  `is_pay_ok` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_type` varchar(100) NOT NULL DEFAULT '',
  `pay_time` int(10) unsigned NOT NULL,
  `remark` varchar(255) NOT NULL DEFAULT '',
  `admin_user` varchar(100) NOT NULL,
  `rebate_all` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '调整的货款',
  `rebate_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '调整的佣金',
  `payable_price` decimal(10,2) DEFAULT '0.00' COMMENT '应付货款',
  `rebate_img` varchar(255) NOT NULL DEFAULT '' COMMENT '汇款凭证图片路径',
  `status` tinyint(2) DEFAULT '0' COMMENT '状态(0:冻结,1:可结算佣金,2:等待入驻商确认,3:等待付款,4:结算完成)',
  PRIMARY KEY (`rebate_id`),
  KEY `cat_type` (`rebate_paytime_end`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_rebate` values('1','1437724800','1438329599','1','1','','1438056331','','','45.00','2.70','42.30','data/rebate/20150728/1/1438056331532183550.jpg','4');");
E_D("replace into `ecs_supplier_rebate` values('2','1437724800','1438329599','2','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('3','1437984000','1438329599','1','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('4','1437984000','1438329599','5','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('5','1437984000','1451548799','6','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('6','1438329600','1441007999','1','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('7','1438329600','1441007999','5','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('8','1441008000','1443599999','5','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('9','1441008000','1443599999','1','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('10','1438329600','1441007999','2','0','','0','','','0.00','0.00','0.00','','0');");
E_D("replace into `ecs_supplier_rebate` values('11','1441008000','1443599999','2','0','','0','','','0.00','0.00','0.00','','0');");

require("../../inc/footer.php");
?>