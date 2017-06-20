<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_signconf`;");
E_C("CREATE TABLE `ecs_weixin_signconf` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `startymd` date NOT NULL,
  `endymd` date NOT NULL,
  `num` int(11) NOT NULL,
  `bignum` int(11) NOT NULL,
  `addnum` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_signconf` values('1','2014-06-14','2025-06-28','10','50','5');");

require("../../inc/footer.php");
?>