<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_actlog`;");
E_C("CREATE TABLE `ecs_weixin_actlog` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `createymd` date NOT NULL,
  `createtime` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `issend` tinyint(4) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `uid` (`uid`,`createymd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>