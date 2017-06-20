<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_corn`;");
E_C("CREATE TABLE `ecs_weixin_corn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `createtime` int(11) NOT NULL,
  `sendtime` int(11) NOT NULL,
  `issend` tinyint(4) NOT NULL COMMENT '0未发送1成功2失败',
  `ecuid` int(11) NOT NULL COMMENT '系统用户ID',
  `sendtype` tinyint(1) NOT NULL COMMENT '0单人1所有',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_corn` values('1','a:3:{s:6:\"touser\";s:28:\"oYTrKtxndrT2WnUUutzoJlYb3QsU\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463442794','1463442794','0','60','0');");
E_D("replace into `ecs_weixin_corn` values('2','a:3:{s:6:\"touser\";s:28:\"oYTrKtxndrT2WnUUutzoJlYb3QsU\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463443593','1463443593','0','60','0');");
E_D("replace into `ecs_weixin_corn` values('3','a:3:{s:6:\"touser\";s:28:\"oYTrKt3AXVaEXcHhrGriq9n2TykA\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463541516','1463541516','0','61','0');");
E_D("replace into `ecs_weixin_corn` values('4','a:3:{s:6:\"touser\";s:28:\"oYTrKtwX_mVL4r5Qo1hycf75h1LM\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463641618','1463641618','0','68','0');");
E_D("replace into `ecs_weixin_corn` values('5','a:3:{s:6:\"touser\";s:28:\"oYTrKt2BbnDHcWq2sA_0dYktrsKw\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467221631','1467221631','0','74','0');");
E_D("replace into `ecs_weixin_corn` values('6','a:3:{s:6:\"touser\";s:28:\"oYTrKt8vDLH0dp-jOlz8mlxIyYbM\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467259783','1467259783','0','77','0');");
E_D("replace into `ecs_weixin_corn` values('7','a:3:{s:6:\"touser\";s:28:\"oYTrKt8vDLH0dp-jOlz8mlxIyYbM\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467259892','1467259892','0','77','0');");
E_D("replace into `ecs_weixin_corn` values('8','a:3:{s:6:\"touser\";s:28:\"oYTrKt2yW6i7bMwtV9w0-qykvy1U\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467596727','1467596727','0','81','0');");
E_D("replace into `ecs_weixin_corn` values('9','a:3:{s:6:\"touser\";s:28:\"oYTrKt2yW6i7bMwtV9w0-qykvy1U\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:1:\"1\";}}','1467598755','1467598755','2','83','0');");
E_D("replace into `ecs_weixin_corn` values('10','a:3:{s:6:\"touser\";s:28:\"oYTrKt6pYlgSuvBSWZEOPZJTMrHg\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467610642','1467610642','0','85','0');");
E_D("replace into `ecs_weixin_corn` values('11','a:3:{s:6:\"touser\";s:28:\"oYTrKt6pYlgSuvBSWZEOPZJTMrHg\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467640546','1467640546','0','85','0');");
E_D("replace into `ecs_weixin_corn` values('12','a:3:{s:6:\"touser\";s:28:\"oYTrKtxlwKflrvozQ0MCpUNVgnE0\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467702553','1467702553','0','97','0');");
E_D("replace into `ecs_weixin_corn` values('13','a:3:{s:6:\"touser\";s:28:\"oYTrKtxlwKflrvozQ0MCpUNVgnE0\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1467702763','1467702763','0','97','0');");

require("../../inc/footer.php");
?>