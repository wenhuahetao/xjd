-- ecshop v2.x SQL Dump Program
-- http://www.0838g.com
-- 
-- DATE : 2016-07-01 05:00:34
-- MYSQL SERVER VERSION : 5.1.65-community
-- PHP VERSION : 5.3.27
-- ECShop VERSION : v5_0
-- Vol : 1
DROP TABLE IF EXISTS `ecs_supplier_cat_recommend`;
CREATE TABLE `ecs_supplier_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('8', '1', '1');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('10', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('10', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('10', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('11', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('11', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('11', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('12', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('12', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('12', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('13', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('13', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('13', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('14', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('14', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('14', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('15', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('15', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('15', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('16', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('16', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('16', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('17', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('17', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('17', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('7', '2', '1');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('18', '1', '5');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('26', '1', '5');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('26', '2', '5');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('26', '3', '5');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('35', '1', '5');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('35', '3', '5');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('82', '1', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('82', '2', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('82', '3', '2');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('91', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('91', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('91', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('92', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('92', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('92', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('93', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('93', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('93', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('94', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('94', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('94', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('95', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('95', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('95', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('96', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('96', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('96', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('97', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('97', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('97', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('98', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('98', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('98', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('100', '1', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('100', '2', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('100', '3', '7');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('77', '2', '6');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('65', '1', '6');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('81', '3', '6');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('4', '3', '1');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('5', '3', '1');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('140', '1', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('140', '2', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('140', '3', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('141', '1', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('141', '2', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('141', '3', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('142', '1', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('142', '2', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('142', '3', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('143', '1', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('143', '2', '18');
INSERT INTO `ecs_supplier_cat_recommend` ( `cat_id`, `recommend_type`, `supplier_id` ) VALUES  ('143', '3', '18');
-- END ecshop v2.x SQL Dump Program 