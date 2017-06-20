<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','5','111','111@qq.com','1','2','52','500','111','11111','--','15032361111','','');");
E_D("replace into `ecs_user_address` values('2','','2','羊羊羊','22@qq.com','1','10','145','1194','河北大街西段666号','066000','--','13933528316','','');");
E_D("replace into `ecs_user_address` values('16','','1','anan','cuibo@68ecshop.com','1','10','145','1194','森林逸城B区','','--','18630360371','','');");
E_D("replace into `ecs_user_address` values('15','','2','喵喵','33@qq.com','1','2','52','500','河北大街','','--','13912345678','','');");
E_D("replace into `ecs_user_address` values('17','','9','test','d@163.com','1','2','52','500','asdfasdf','','--','13555555555','','');");
E_D("replace into `ecs_user_address` values('18','','10','cbtest','357577995@qq.com','1','10','145','1194','森林逸城','','--','18360360371','','');");
E_D("replace into `ecs_user_address` values('19','','15','liang','1471085298@qq.com','1','2','52','506','马家堡西路29号','','--','15032369431','','');");
E_D("replace into `ecs_user_address` values('20','','20','sdgj','24@qq.com','1','2','52','501','djgkdjg','','--','13245678909','','');");
E_D("replace into `ecs_user_address` values('24','','21','2222','22@22.com','1','2','52','500','22222222','','--','13681231210','','');");
E_D("replace into `ecs_user_address` values('22','','23','adfsd','admin999@qq.com','1','2','52','500','adsffad','','--','13200000000','','');");
E_D("replace into `ecs_user_address` values('23','','22','sdafd','adminsdfadf@qq.com','1','2','52','500','afdasdf','','--','18233582461','','');");
E_D("replace into `ecs_user_address` values('25','','24','111','11@qq.qq','1','3','38','417','111','','--','13333333333','','');");
E_D("replace into `ecs_user_address` values('26','','26','1112121','1212121@qq.qq','1','10','142','1156','121212121','','--','13333333333','','');");
E_D("replace into `ecs_user_address` values('27','','5','111111','1111111@qq.com','1','10','145','1194','111111','066000','--','13111111111','','');");
E_D("replace into `ecs_user_address` values('50','','6','sdf','','1','10','145','1194','sdf ','','-','13245855555','','');");
E_D("replace into `ecs_user_address` values('51','','30','张三','','1','2','52','508','三里屯20号','','-','12345678965','','');");
E_D("replace into `ecs_user_address` values('52','','32','test','','1','10','145','1194','test','','','13333333333','','');");
E_D("replace into `ecs_user_address` values('53','','38','小刘','12345678@qq.com','1','3','37','411','红旗街道12号','','-','15612341234','','');");
E_D("replace into `ecs_user_address` values('54','','40','徐','','1','4','57','558','天天','','-','13860914444','','');");
E_D("replace into `ecs_user_address` values('55','','45','王雪冰','','1','2','52','500','西区','','-','15590489687','','');");
E_D("replace into `ecs_user_address` values('56','','47','小小','','1','6','82','758','虾村七组','','','18029989828','','');");
E_D("replace into `ecs_user_address` values('57','','51','何淼','252571015@qq.com','1','2','52','515','中华大街','000000','010-32653652','13775564663','','');");
E_D("replace into `ecs_user_address` values('59','','54','xxx','','1','2','52','500','fghfghfghfgh','','-','18029989828','','');");
E_D("replace into `ecs_user_address` values('60','','54','新疆','','1','29','351','3004','啊啊啊啊啊啊','','-','18029989828','','');");
E_D("replace into `ecs_user_address` values('61','','58','周辉','','1','2','52','500','大东国际13号','','-','18608133523','','');");
E_D("replace into `ecs_user_address` values('62','','60','李先生','39035000@qq.com','1','26','322','2722','测试一下吧','','','13800013800','','');");
E_D("replace into `ecs_user_address` values('63','','59','测试','','1','3','36','399','测试阿达','','-','13900139000','','');");
E_D("replace into `ecs_user_address` values('64','','61','测试','107565@qq.com','1','2','52','500','测试','','','13689101859','','');");
E_D("replace into `ecs_user_address` values('65','','62','咯的','876188625@qq.com','1','4','56','552','V5流量卡','','','15536663636','','');");
E_D("replace into `ecs_user_address` values('66','','68','根本不','123456@qq.com','1','5','65','629','逼逼逼逼逼','','','13252586589','','');");
E_D("replace into `ecs_user_address` values('67','','68','根本不','123456@qq.com','1','5','65','629','逼逼逼逼逼','','','13252586589','','');");
E_D("replace into `ecs_user_address` values('68','','74','女婿','dfgkjc@163.com','1','2','52','500','Gjjdfh','','','13885096280','','');");
E_D("replace into `ecs_user_address` values('69','','77','李生','','1','6','76','693','长兴路30','','','13535019047','','');");
E_D("replace into `ecs_user_address` values('70','','80','陈伟雄','6989844@qq.com','1','4','55','541','多少的速度','','-','15889574585','','');");
E_D("replace into `ecs_user_address` values('71','','81','接口','11@123.com','1','6','79','717','dd','','','15668033682','','');");
E_D("replace into `ecs_user_address` values('72','','84','孟','5744@qq.com','1','22','297','2446','幸福','264000','-','13031621111','','');");
E_D("replace into `ecs_user_address` values('73','','85','笨笨','au@jsi.com','1','4','54','532','吉利路','','','18888888888','','');");
E_D("replace into `ecs_user_address` values('74','','94','好','sji@ndi.com','1','2','52','500','技嘉路','','','18288888888','','');");
E_D("replace into `ecs_user_address` values('75','','97','li','903336506@qq.com','1','4','57','560','qqqqqqq','','','13382773149','','');");
E_D("replace into `ecs_user_address` values('76','','98','1111','','1','2','52','501','111111111111','','-','13382773149','','');");
E_D("replace into `ecs_user_address` values('77','','101','呵呵','','1','2','52','501','件蝴蝶结款','','-','13131113211','','');");

require("../../inc/footer.php");
?>