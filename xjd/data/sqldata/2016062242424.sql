-- ecshop v2.x SQL Dump Program
-- http://www.0838g.com
-- 
-- DATE : 2016-06-22 04:54:48
-- MYSQL SERVER VERSION : 5.1.65-community
-- PHP VERSION : 5.3.27
-- ECShop VERSION : v5_0
-- Vol : 1
DROP TABLE IF EXISTS `ecs_supplier_admin_user`;
CREATE TABLE `ecs_supplier_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '存放users表中的user_id',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `supplier_id` int(10) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  `checked` tinyint(2) NOT NULL DEFAULT '0' COMMENT '-1:审核未通过,0:未审核,1审核通过',
  `mobile_phone` varchar(20) NOT NULL COMMENT '手机号',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('1', '1', 'test888', 'anan@68ecshop.com', '99489552f035cf5344ef90b20a204792', '2487', '1437497970', '1466407609', '1.204.113.158', 'all', '', '', '0', '1', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('2', '2', '68ecshopyy', '285188787@qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1437500040', '1458358127', '122.6.99.91', 'all', '', '', '0', '2', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('4', '5', 'leilei', '2691111111@qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1437502269', '1457587245', '127.0.0.1', 'all', '', '', '0', '5', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('6', '6', 'yiren', '3490134@qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1437503705', '1458358489', '112.192.201.232', 'all', '', '', '0', '6', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('7', '7', 'liuyu', '33342@qq.com', 'eb79ce69f98465cf2b196494faa35494', '7866', '1437520761', '1448928249', '127.0.0.1', 'all', '', '', '0', '7', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('11', '10', 'cbtest', 'cuibo@68ecshop.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1438050954', '1438050954', '192.168.1.164', 'all', '', '', '0', '11', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('12', '16', 'yy', '435345@qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1442367633', '1457589241', '127.0.0.1', 'all', '', '', '0', '18', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('13', '47', 'xiaoxiao', '', '66a70008d4b89bbf036fc924deefb9a4', '', '1458285749', '1458323564', '113.83.186.49', 'all', '', '', '0', '21', '', '0', '1', '18029989821');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('14', '0', 'xiaoxiao1', 'xiao@qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1458306305', '0', '', 'order_list,order_query,delivery_order,back_order,booking', '', '', '0', '21', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('15', '55', '123', 'qhjs@vip.qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1458316829', '1458317235', '1.31.58.224', 'all', '', '', '0', '22', '', '0', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('16', '145', 'u766QDCN6924', '1559241633@qq.com', '8a1148a74ba479fcaca5e34f5de73d45', '', '1466160055', '1466215536', '180.136.145.48', 'all', '', '', '0', '28', '', '', '1', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('17', '27', 'stu111', 'stu111@qq.com', '66a70008d4b89bbf036fc924deefb9a4', '', '1455674644', '1455674644', '127.0.0.1', 'all', '', '', '0', '19', '', '', '0', '');
INSERT INTO `ecs_supplier_admin_user` ( `user_id`, `uid`, `user_name`, `email`, `password`, `ec_salt`, `add_time`, `last_login`, `last_ip`, `action_list`, `nav_list`, `lang_type`, `agency_id`, `supplier_id`, `todolist`, `role_id`, `checked`, `mobile_phone` ) VALUES  ('18', '169', 'u149VEG5517', '1290573999@qq.com', '21498b158105d4b4d7d420c8d7c8d692', '4423', '1466407799', '1466407880', '223.104.175.101', 'all', '', '', '0', '29', '', '', '1', '');
-- END ecshop v2.x SQL Dump Program 