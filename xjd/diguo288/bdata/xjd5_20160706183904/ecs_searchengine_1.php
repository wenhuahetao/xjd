<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2016-03-16','SOGOU','31');");
E_D("replace into `ecs_searchengine` values('2016-03-17','SOGOU','20');");
E_D("replace into `ecs_searchengine` values('2016-03-18','SOGOU','8');");
E_D("replace into `ecs_searchengine` values('2016-03-18','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-03-19','SOGOU','21');");
E_D("replace into `ecs_searchengine` values('2016-03-19','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-05-17','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2016-05-18','GOOGLE','65');");
E_D("replace into `ecs_searchengine` values('2016-05-18','YAHOO','5');");
E_D("replace into `ecs_searchengine` values('2016-05-18','SOGOU','2727');");
E_D("replace into `ecs_searchengine` values('2016-05-19','SOGOU','611');");
E_D("replace into `ecs_searchengine` values('2016-05-19','GOOGLE','151');");
E_D("replace into `ecs_searchengine` values('2016-05-19','YAHOO','3');");
E_D("replace into `ecs_searchengine` values('2016-06-29','SOGOU','1126');");
E_D("replace into `ecs_searchengine` values('2016-06-29','GOOGLE','80');");
E_D("replace into `ecs_searchengine` values('2016-06-29','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-06-30','SOGOU','1334');");
E_D("replace into `ecs_searchengine` values('2016-06-30','GOOGLE','372');");
E_D("replace into `ecs_searchengine` values('2016-06-30','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-06-30','MSN','1');");
E_D("replace into `ecs_searchengine` values('2016-07-03','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-07-04','SOGOU','2418');");
E_D("replace into `ecs_searchengine` values('2016-07-04','GOOGLE','310');");
E_D("replace into `ecs_searchengine` values('2016-07-04','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-07-04','MSN','1');");
E_D("replace into `ecs_searchengine` values('2016-07-05','SOGOU','2030');");
E_D("replace into `ecs_searchengine` values('2016-07-05','GOOGLE','530');");
E_D("replace into `ecs_searchengine` values('2016-07-05','YAHOO','4');");
E_D("replace into `ecs_searchengine` values('2016-07-06','GOOGLE','203');");
E_D("replace into `ecs_searchengine` values('2016-07-06','SOGOU','1009');");
E_D("replace into `ecs_searchengine` values('2016-07-06','YAHOO','1');");

require("../../inc/footer.php");
?>