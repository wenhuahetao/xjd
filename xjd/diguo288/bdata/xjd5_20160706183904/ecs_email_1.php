<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email`;");
E_C("CREATE TABLE `ecs_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `add_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email` values('2','28517990380@qq.com','iym8b3fuyod6efwy','1421898583','0');");
E_D("replace into `ecs_email` values('3','285139038@qq.com','uvmbtch4s1ovf3nv','1421898639','0');");
E_D("replace into `ecs_email` values('4','2851723438@qq.com','lpi6gtzcm65fq431','1421898923','0');");
E_D("replace into `ecs_email` values('5','28519038@qq.com','3sl2hi27tmcatbgz','1421899027','0');");
E_D("replace into `ecs_email` values('6','285038@qq.com','qwr82fxdixkwpkac','1421899189','0');");
E_D("replace into `ecs_email` values('7','285038@qq.com','gdf90k7fe4s6mg5h','1421899262','0');");
E_D("replace into `ecs_email` values('8','2851798@qq.com','ilz9ucspnl7y5zr9','1421899443','0');");
E_D("replace into `ecs_email` values('9','2851798@qq.com','366d3sr5wcpypnvf','1421899458','0');");
E_D("replace into `ecs_email` values('10','28517038@qq.com','c89coq80dv4omdkb','1421899563','0');");
E_D("replace into `ecs_email` values('11','28517938@qq.com','3yrvva9njser62wz','1421899598','0');");
E_D("replace into `ecs_email` values('12','2697138630@qq.com','478f7zyuemde87fz','1438073408','0');");
E_D("replace into `ecs_email` values('13','2697138630@qq.com','d8uwyl2rtclbolk6','1438073538','0');");
E_D("replace into `ecs_email` values('24','1471085298@qq.com','bfved3g9b6k40ket','1438079165','15');");

require("../../inc/footer.php");
?>