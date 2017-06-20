<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_dianpu`;");
E_C("CREATE TABLE `ecs_dianpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dianpu_name` varchar(255) NOT NULL,
  `dianpu_desc` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_dianpu` values('1','苹果专卖店','小店专卖苹果','18608133523','info_221','113549093','北京大东国际13号','58');");
E_D("replace into `ecs_dianpu` values('2','家乐惠超市','测微信微店','13800138000','dyyh888','39035000','四川','60');");

require("../../inc/footer.php");
?>