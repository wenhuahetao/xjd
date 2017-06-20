-- ecshop v2.x SQL Dump Program
-- http://www.0838g.com
-- 
-- DATE : 2016-06-20 01:36:29
-- MYSQL SERVER VERSION : 5.1.65-community
-- PHP VERSION : 5.3.27
-- ECShop VERSION : v5_0
-- Vol : 1
DROP TABLE IF EXISTS `ecs_supplier_rebate_log`;
CREATE TABLE `ecs_supplier_rebate_log` (
  `rebate_log_id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '订单id',
  `order_sn` varchar(20) NOT NULL DEFAULT '' COMMENT '订单sn',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商id',
  `all_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '计算佣金的钱',
  `rebate_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金(平台方)钱',
  `result_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '入驻商钱',
  `pay_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '支付方式',
  `pay_name` varchar(120) NOT NULL DEFAULT '' COMMENT '支付名称',
  `texts` text NOT NULL COMMENT '变动原因',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '变动时间',
  PRIMARY KEY (`rebate_log_id`),
  UNIQUE KEY `order_id` (`order_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- END ecshop v2.x SQL Dump Program 