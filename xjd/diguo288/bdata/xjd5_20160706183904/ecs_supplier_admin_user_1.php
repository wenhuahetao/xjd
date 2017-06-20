<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_admin_user`;");
E_C("CREATE TABLE `ecs_supplier_admin_user` (
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_admin_user` values('1','1','test888','anan@68ecshop.com','e2e31a427d2e8c4851b53f7eeb9fff95',NULL,'1437497970','1467601139','27.213.1.176','all','','','0','1','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('2','2','68ecshopyy','285188787@qq.com','66a70008d4b89bbf036fc924deefb9a4','','1437500040','1458358127','122.6.99.91','all','','','0','2','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('4','5','leilei','2691111111@qq.com','66a70008d4b89bbf036fc924deefb9a4','','1437502269','1457587245','127.0.0.1','all','','','0','5','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('6','6','yiren','3490134@qq.com','66a70008d4b89bbf036fc924deefb9a4','','1437503705','1458358489','112.192.201.232','all','','','0','6','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('7','7','liuyu','33342@qq.com','07f5b22890ae77150a177ad921f320f2','4890','1437520761','1448928249','127.0.0.1','all','','','0','7','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('11','10','cbtest','cuibo@68ecshop.com','66a70008d4b89bbf036fc924deefb9a4','','1438050954','1438050954','192.168.1.164','all','','','0','11','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('12','16','yy','435345@qq.com','66a70008d4b89bbf036fc924deefb9a4','','1442367633','1457589241','127.0.0.1','all','','','0','18','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('13','47','xiaoxiao','','66a70008d4b89bbf036fc924deefb9a4','','1458285749','1458323564','113.83.186.49','all','','','0','21','','0','1','18029989821');");
E_D("replace into `ecs_supplier_admin_user` values('14','0','xiaoxiao1','xiao@qq.com','66a70008d4b89bbf036fc924deefb9a4','','1458306305','0','','order_list,order_query,delivery_order,back_order,booking','','','0','21','','0','1','');");
E_D("replace into `ecs_supplier_admin_user` values('15','55','123','qhjs@vip.qq.com','66a70008d4b89bbf036fc924deefb9a4','','1458316829','1458317235','1.31.58.224','all','','','0','22','','0','1','');");

require("../../inc/footer.php");
?>