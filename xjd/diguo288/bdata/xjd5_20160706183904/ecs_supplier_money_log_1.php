<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_money_log`;");
E_C("CREATE TABLE `ecs_supplier_money_log` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `rebateid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '佣金id',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:订单分佣,2:撤销分佣,3:佣金提现',
  `reason` varchar(60) NOT NULL COMMENT '日志变动原因',
  `supplier_money` decimal(10,2) NOT NULL COMMENT '资金时刻记录',
  `doman` varchar(30) NOT NULL COMMENT '操作人',
  `supplier_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商id',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_money_log` values('1','1','0','1','佣金10000001转帐：42.30','42.30','平台方:admin','1');");

require("../../inc/footer.php");
?>