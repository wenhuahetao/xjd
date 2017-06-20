<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_act`;");
E_C("CREATE TABLE `ecs_weixin_act` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `isopen` tinyint(1) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1 每日 2合计',
  `num` int(11) NOT NULL,
  `tpl` tinyint(4) NOT NULL,
  `overymd` date NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_act` values('1','砸金蛋','砸金蛋了哦亲！','1','2','100','1','2015-03-26');");
E_D("replace into `ecs_weixin_act` values('2','刮刮卡','刮刮卡！','1','2','100','2','2015-12-01');");
E_D("replace into `ecs_weixin_act` values('3','大转盘','大转盘大转盘','1','2','100','3','2015-03-26');");

require("../../inc/footer.php");
?>