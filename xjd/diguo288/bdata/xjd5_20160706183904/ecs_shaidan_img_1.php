<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan_img`;");
E_C("CREATE TABLE `ecs_shaidan_img` (
  `img_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `shaidan_id` mediumint(8) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shaidan_img` values('1','1','','images/image/201507/20150728113328_65316.jpg','images/201507/1438054415033723744.jpg');");
E_D("replace into `ecs_shaidan_img` values('2','2','','images/image/201602/20160223021616_49866.jpg','images/201602/1456193814464751149.jpg');");
E_D("replace into `ecs_shaidan_img` values('3','2','','images/image/201602/20160223021617_76401.jpg','images/201602/1456193814298248095.jpg');");
E_D("replace into `ecs_shaidan_img` values('4','2','','images/image/201602/20160223021617_10304.jpg','images/201602/1456193814067778002.jpg');");
E_D("replace into `ecs_shaidan_img` values('5','2','','images/image/201602/20160223021617_44793.jpg','images/201602/1456193815713220375.jpg');");
E_D("replace into `ecs_shaidan_img` values('6','2','','images/image/201602/20160223021617_14155.jpg','images/201602/1456193815740600286.jpg');");

require("../../inc/footer.php");
?>