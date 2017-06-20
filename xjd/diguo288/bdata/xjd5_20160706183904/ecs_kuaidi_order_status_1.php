<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kuaidi_order_status`;");
E_C("CREATE TABLE `ecs_kuaidi_order_status` (
  `rec_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `status_id` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `status_name` varchar(50) NOT NULL DEFAULT '待确认',
  `status_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kuaidi_order_status` values('1','1','1','待确认','0','1','1443032431');");
E_D("replace into `ecs_kuaidi_order_status` values('2','1','2','已确认未揽收','0','1','1443032637');");
E_D("replace into `ecs_kuaidi_order_status` values('3','1','3','已确认已揽收','0','1','1443032431');");
E_D("replace into `ecs_kuaidi_order_status` values('4','1','4','已签收','1','1','1443032791');");
E_D("replace into `ecs_kuaidi_order_status` values('5','1','5','拒收','2','0','1443032872');");
E_D("replace into `ecs_kuaidi_order_status` values('6','1','6','拒收已退回','2','0','1443032431');");
E_D("replace into `ecs_kuaidi_order_status` values('7','1','7','已取消','3','0','1443032431');");
E_D("replace into `ecs_kuaidi_order_status` values('8','2','1','待确认','0','1','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('9','2','2','已确认未揽收','0','0','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('10','2','3','已确认已揽收','0','0','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('11','2','4','已签收','1','0','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('12','2','5','拒收','2','0','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('13','2','6','拒收已退回','2','0','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('14','2','7','已取消','3','0','1443045585');");
E_D("replace into `ecs_kuaidi_order_status` values('15','3','1','待确认','0','1','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('16','3','2','已确认未揽收','0','0','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('17','3','3','已确认已揽收','0','0','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('18','3','4','已签收','1','0','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('19','3','5','拒收','2','0','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('20','3','6','拒收已退回','2','0','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('21','3','7','已取消','3','0','1443123577');");
E_D("replace into `ecs_kuaidi_order_status` values('22','4','1','待确认','0','1','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('23','4','2','已确认未揽收','0','0','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('24','4','3','已确认已揽收','0','0','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('25','4','4','已签收','1','0','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('26','4','5','拒收','2','0','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('27','4','6','拒收已退回','2','0','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('28','4','7','已取消','3','0','1443134849');");
E_D("replace into `ecs_kuaidi_order_status` values('29','5','1','待确认','0','1','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('30','5','2','已确认未揽收','0','0','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('31','5','3','已确认已揽收','0','0','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('32','5','4','已签收','1','0','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('33','5','5','拒收','2','0','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('34','5','6','拒收已退回','2','0','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('35','5','7','已取消','3','0','1443135291');");
E_D("replace into `ecs_kuaidi_order_status` values('36','6','1','待确认','0','1','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('37','6','2','已确认未揽收','0','0','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('38','6','3','已确认已揽收','0','0','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('39','6','4','已签收','1','0','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('40','6','5','拒收','2','0','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('41','6','6','拒收已退回','2','0','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('42','6','7','已取消','3','0','1443399408');");
E_D("replace into `ecs_kuaidi_order_status` values('43','7','1','待确认','0','1','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('44','7','2','已确认未揽收','0','0','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('45','7','3','已确认已揽收','0','0','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('46','7','4','已签收','1','0','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('47','7','5','拒收','2','0','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('48','7','6','拒收已退回','2','0','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('49','7','7','已取消','3','0','1444861949');");
E_D("replace into `ecs_kuaidi_order_status` values('50','8','1','待确认','0','1','1444951631');");
E_D("replace into `ecs_kuaidi_order_status` values('51','8','2','已确认未揽收','0','1','1444951993');");
E_D("replace into `ecs_kuaidi_order_status` values('52','8','3','已确认已揽收','0','0','1444952002');");
E_D("replace into `ecs_kuaidi_order_status` values('53','8','4','已签收','1','0','1444951631');");
E_D("replace into `ecs_kuaidi_order_status` values('54','8','5','拒收','2','0','1444951631');");
E_D("replace into `ecs_kuaidi_order_status` values('55','8','6','拒收已退回','2','0','1444951631');");
E_D("replace into `ecs_kuaidi_order_status` values('56','8','7','已取消','3','0','1444951631');");
E_D("replace into `ecs_kuaidi_order_status` values('57','9','1','待确认','0','1','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('58','9','2','已确认未揽收','0','0','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('59','9','3','已确认已揽收','0','0','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('60','9','4','已签收','1','0','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('61','9','5','拒收','2','0','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('62','9','6','拒收已退回','2','0','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('63','9','7','已取消','3','0','1446074071');");
E_D("replace into `ecs_kuaidi_order_status` values('106','9','1','待确认','0','1','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('107','9','2','已确认未揽收','0','0','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('108','9','3','已确认已揽收','0','0','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('109','9','4','已签收','1','0','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('110','9','5','拒收','2','0','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('111','9','6','拒收已退回','2','0','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('112','9','7','已取消','3','0','1456447552');");
E_D("replace into `ecs_kuaidi_order_status` values('161','16','7','已取消','3','0','1458287547');");
E_D("replace into `ecs_kuaidi_order_status` values('160','16','6','拒收已退回','2','0','1458287547');");
E_D("replace into `ecs_kuaidi_order_status` values('159','16','5','拒收','2','0','1458287547');");
E_D("replace into `ecs_kuaidi_order_status` values('158','16','4','已签收','1','0','1458287547');");
E_D("replace into `ecs_kuaidi_order_status` values('157','16','3','已确认已揽收','0','0','1458287547');");
E_D("replace into `ecs_kuaidi_order_status` values('156','16','2','已确认未揽收','0','0','1458287547');");
E_D("replace into `ecs_kuaidi_order_status` values('155','16','1','待确认','0','1','1458287547');");

require("../../inc/footer.php");
?>