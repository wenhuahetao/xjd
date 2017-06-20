<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_login`;");
E_C("CREATE TABLE `ecs_weixin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createtime` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_login` values('1','1467196683','0','gQEP8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2EwejNXX1RsT2sxRFhmVlg1bUtsAAIEDaVzVwMEWAIAAA==','139.205.49.88','966839514');");
E_D("replace into `ecs_weixin_login` values('2','1467196956','0','gQHS7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2pFd2M3bi1sb2szYmxCS1JEV0tsAAIEHqZzVwMEWAIAAA==','118.113.49.96','969563540');");
E_D("replace into `ecs_weixin_login` values('3','1467205130','0','gQGe8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzhVd0g3RTdsMVUyczJtLS1GbUtsAAIEDMZzVwMEWAIAAA==','58.16.162.51','51305690');");
E_D("replace into `ecs_weixin_login` values('4','1467205567','0','gQF78DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3VFd1I2VEhsMTAydTZTYnVBR0tsAAIEv8dzVwMEWAIAAA==','58.16.162.51','55678537');");
E_D("replace into `ecs_weixin_login` values('5','1467212727','0','gQFZ8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1cwdzM4WkhsOGsyTHNzWDFKbUtsAAIEuONzVwMEWAIAAA==','69.197.163.195','127273398');");
E_D("replace into `ecs_weixin_login` values('6','1467621553','0','gQH37zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzhVemVLZ1BsWTAwYVVXOVd6MktsAAIEuCB6VwMEWAIAAA==','175.22.13.22','215533008');");
E_D("replace into `ecs_weixin_login` values('7','1467635805','0','gQE17zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2sweTZaNXJsZkUwRjV3MWdxMktsAAIEX1h6VwMEWAIAAA==','58.222.142.10','358058049');");
E_D("replace into `ecs_weixin_login` values('8','1467635948','90','gQFd7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzBrelNiM0hsRjAxdVJVeHJ3MktsAAIE71h6VwMEWAIAAA==','58.222.142.10','359483827');");
E_D("replace into `ecs_weixin_login` values('9','1467643272','93','gQFR7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3kwemNpYkRsR2sxamUxV096V0tsAAIEinV6VwMEWAIAAA==','101.80.29.108','432726638');");
E_D("replace into `ecs_weixin_login` values('10','1467643336','93','gQFU7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2lVeUVLMG5sUEUxRlloZFNsV0tsAAIEynV6VwMEWAIAAA==','101.80.29.108','433369872');");
E_D("replace into `ecs_weixin_login` values('11','1467644261','0','gQFX7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL01VekcwUTNsQ2sxelpLLWMxMktsAAIEZ3l6VwMEWAIAAA==','101.80.29.108','442619095');");
E_D("replace into `ecs_weixin_login` values('12','1467645539','0','gQFR7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzZVejBPRXpsVFUwMEZIZEE1V0tsAAIEZX56VwMEWAIAAA==','111.254.69.120','455393390');");
E_D("replace into `ecs_weixin_login` values('13','1467702184','0','gQFs7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2FVd09TSlhseVUyd1BmZE9IMktsAAIErFt7VwMEWAIAAA==','125.86.94.194','21843887');");
E_D("replace into `ecs_weixin_login` values('14','1467703066','0','gQEg7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FremU1MzNsWjAwZXVUU2Z6MktsAAIEHF97VwMEWAIAAA==','112.64.235.254','30668423');");
E_D("replace into `ecs_weixin_login` values('15','1467703066','97','gQFL7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0JVeTJpTjdsYlUwVTJwdVNwMktsAAIEHF97VwMEWAIAAA==','117.87.37.177','30667068');");
E_D("replace into `ecs_weixin_login` values('16','1467703076','0','gQG47joAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2NVemZqa3JsRDAxMlBPX2Z6bUtsAAIEJl97VwMEWAIAAA==','101.226.66.181','30769482');");
E_D("replace into `ecs_weixin_login` values('17','1467703095','0','gQEC7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2xVel9OcTNsTjAxT2h3c183MktsAAIEOV97VwMEWAIAAA==','117.87.37.177','30953776');");
E_D("replace into `ecs_weixin_login` values('18','1467703834','97','gQEi7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3BFeXlBOEhsZVUwQTd6b0pvMktsAAIEHGJ7VwMEWAIAAA==','117.87.37.177','38346315');");
E_D("replace into `ecs_weixin_login` values('19','1467704565','0','gQFe7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0RFd2IzM2psdDAzT0lwS3lDbUtsAAIE92R7VwMEWAIAAA==','123.15.216.164','45653384');");
E_D("replace into `ecs_weixin_login` values('20','1467704565','0','gQGf7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3dFeklhMmpsRDAxMlNsNXQyV0tsAAIE92R7VwMEWAIAAA==','101.226.89.123','45655586');");
E_D("replace into `ecs_weixin_login` values('21','1467704570','0','gQHx7joAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0preWY1OXZsWDAwbWs3am1qbUtsAAIE/GR7VwMEWAIAAA==','180.153.163.210','45702257');");
E_D("replace into `ecs_weixin_login` values('22','1467729747','0','gQHl7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2JVemlELUxsS2sxVEdmTUc4MktsAAIEVcd7VwMEWAIAAA==','123.138.244.201','297476917');");
E_D("replace into `ecs_weixin_login` values('23','1467737777','0','gQGV7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1Ywd3JrNHpsN2syWHdjbVhPbUtsAAIEtOZ7VwMEWAIAAA==','120.33.38.196','377779605');");
E_D("replace into `ecs_weixin_login` values('24','1467769569','102','gQEU7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1BreTk3cHZsRGsxM3dxQ2NyR0tsAAIE42J8VwMEWAIAAA==','60.221.245.214','695695149');");
E_D("replace into `ecs_weixin_login` values('25','1467773837','0','gQFN7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2premt0aXpsS0UxUm5SQzc5V0tsAAIEj3N8VwMEWAIAAA==','130.193.51.55','738377707');");
E_D("replace into `ecs_weixin_login` values('26','1467779142','0','gQFq7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2dreU5RT3psVEUwMXB4eEFuR0tsAAIESIh8VwMEWAIAAA==','112.237.106.226','791421535');");
E_D("replace into `ecs_weixin_login` values('27','1467779657','0','gQHI7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0Mwd3A5Z0hsbFUzc2RaV0xPR0tsAAIES4p8VwMEWAIAAA==','113.128.133.252','796576891');");
E_D("replace into `ecs_weixin_login` values('28','1467779690','83','gQEl7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3RrelozQ0RsYkUwVnd5aW95R0tsAAIEbIp8VwMEWAIAAA==','113.128.133.252','796904145');");

require("../../inc/footer.php");
?>