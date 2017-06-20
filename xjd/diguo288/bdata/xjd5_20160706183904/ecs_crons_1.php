<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_crons`;");
E_C("CREATE TABLE `ecs_crons` (
  `cron_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cron_code` varchar(20) NOT NULL,
  `cron_name` varchar(120) NOT NULL,
  `cron_desc` text,
  `cron_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cron_config` text NOT NULL,
  `thistime` int(10) NOT NULL DEFAULT '0',
  `nextime` int(10) NOT NULL,
  `day` tinyint(2) NOT NULL,
  `week` varchar(1) NOT NULL,
  `hour` varchar(2) NOT NULL,
  `minute` varchar(255) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `run_once` tinyint(1) NOT NULL DEFAULT '0',
  `allow_ip` varchar(100) NOT NULL DEFAULT '',
  `alow_files` varchar(255) NOT NULL,
  PRIMARY KEY (`cron_id`),
  KEY `nextime` (`nextime`),
  KEY `enable` (`enable`),
  KEY `cron_code` (`cron_code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_crons` values('1','clear_file','定期自动清除缓存','ECSHOP定期自动清除缓存插件','0','a:0:{}','1451520321','1451520321','0','','0','','0','1','','');");
E_D("replace into `ecs_crons` values('2','order_del','自动取消未付款订单','ECSHOP自动取消或删除N天前未付款的无效订单','0','a:2:{i:0;a:3:{s:4:\"name\";s:30:\"order_del_www_ecshop68_com_day\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"1\";}i:1;a:3:{s:4:\"name\";s:33:\"order_del_www_ecshop68_com_action\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:6:\"cancel\";}}','1467801496','1467801496','0','','0','','1','0','','');");

require("../../inc/footer.php");
?>