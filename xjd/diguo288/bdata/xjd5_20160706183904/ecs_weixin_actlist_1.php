<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_actlist`;");
E_C("CREATE TABLE `ecs_weixin_actlist` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `awardname` varchar(200) NOT NULL,
  `randnum` decimal(6,2) NOT NULL,
  `num` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `isopen` tinyint(1) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_actlist` values('1','1','一等奖','ipad air','0.50','1','0','1');");
E_D("replace into `ecs_weixin_actlist` values('2','1','二等奖','ipad mini','10.00','5','3','1');");
E_D("replace into `ecs_weixin_actlist` values('3','1','三等奖','itouch','20.00','10','10','1');");
E_D("replace into `ecs_weixin_actlist` values('4','2','一等奖','500元优惠券','1.00','1','0','1');");
E_D("replace into `ecs_weixin_actlist` values('5','2','二等奖','20元优惠券','20.00','300','3','1');");
E_D("replace into `ecs_weixin_actlist` values('6','2','三等奖','5元优惠券','79.00','10','5','1');");
E_D("replace into `ecs_weixin_actlist` values('7','3','一等奖','500元红包','1.00','10','0','1');");
E_D("replace into `ecs_weixin_actlist` values('8','3','二等奖','20元抵用券','20.00','2000','2','1');");
E_D("replace into `ecs_weixin_actlist` values('9','3','三等奖','5元优惠券','79.00','30000','30','1');");

require("../../inc/footer.php");
?>