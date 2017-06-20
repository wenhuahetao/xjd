-- ecshop v2.x SQL Dump Program
-- http://www.0838g.com
-- 
-- DATE : 2016-06-23 14:33:38
-- MYSQL SERVER VERSION : 5.1.65-community
-- PHP VERSION : 5.3.27
-- ECShop VERSION : v5_0
-- Vol : 1
DROP TABLE IF EXISTS `ecs_supplier_goods_cat`;
CREATE TABLE `ecs_supplier_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `supplier_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('1', '4', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('2', '4', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('3', '5', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('4', '5', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('5', '8', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('6', '8', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('7', '6', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('8', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('9', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('10', '7', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('11', '7', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('12', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('13', '7', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('14', '7', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('15', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('16', '4', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('17', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('18', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('19', '12', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('20', '4', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('21', '12', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('22', '5', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('23', '5', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('24', '8', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('25', '8', '1');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('33', '26', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('34', '26', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('35', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('36', '26', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('37', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('38', '26', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('39', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('40', '35', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('41', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('42', '35', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('43', '12', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('44', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('45', '35', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('46', '35', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('47', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('48', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('49', '10', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('49', '82', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('64', '63', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('73', '121', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('77', '65', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('84', '60', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('87', '60', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('98', '121', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('104', '53', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('108', '65', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('111', '58', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('119', '91', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('120', '91', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('129', '91', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('130', '91', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('131', '91', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('132', '65', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('133', '68', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('134', '77', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('135', '77', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('136', '56', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('137', '97', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('138', '60', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('138', '62', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('139', '97', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('140', '97', '7');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('141', '121', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('141', '53', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('141', '58', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('141', '60', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('141', '65', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('142', '68', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('144', '77', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('145', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('146', '54', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('149', '76', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('152', '56', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('152', '57', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('152', '76', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('152', '78', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('153', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('158', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('161', '54', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('161', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('163', '54', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('163', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('164', '54', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('164', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('166', '81', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('169', '77', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('173', '77', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('234', '14', '2');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('242', '26', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('248', '121', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('248', '53', '6');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('249', '24', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('249', '25', '5');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('284', '141', '18');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('285', '141', '18');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('286', '141', '18');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('287', '141', '18');
INSERT INTO `ecs_supplier_goods_cat` ( `goods_id`, `cat_id`, `supplier_id` ) VALUES  ('291', '144', '21');
-- END ecshop v2.x SQL Dump Program 