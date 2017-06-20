<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_admin_action`;");
E_C("CREATE TABLE `ecs_supplier_admin_action` (
  `action_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `action_code` varchar(20) NOT NULL DEFAULT '',
  `relevance` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`action_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_admin_action` values('1','0','goods','');");
E_D("replace into `ecs_supplier_admin_action` values('2','0','suppliers_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('3','0','order_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('4','0','sys_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('5','0','priv_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('21','1','goods_list','');");
E_D("replace into `ecs_supplier_admin_action` values('22','1','category_list','');");
E_D("replace into `ecs_supplier_admin_action` values('23','1','comment_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('24','1','goods_trash','');");
E_D("replace into `ecs_supplier_admin_action` values('25','1','goods_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('26','1','remove_back','');");
E_D("replace into `ecs_supplier_admin_action` values('27','1','cat_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('28','1','cat_drop','');");
E_D("replace into `ecs_supplier_admin_action` values('41','2','rebate_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('61','3','order_list','');");
E_D("replace into `ecs_supplier_admin_action` values('62','3','order_query','');");
E_D("replace into `ecs_supplier_admin_action` values('63','3','merge_order','');");
E_D("replace into `ecs_supplier_admin_action` values('64','3','edit_order_print','');");
E_D("replace into `ecs_supplier_admin_action` values('65','3','delivery_order','');");
E_D("replace into `ecs_supplier_admin_action` values('66','3','back_order','');");
E_D("replace into `ecs_supplier_admin_action` values('67','3','order_os_edit','');");
E_D("replace into `ecs_supplier_admin_action` values('68','3','order_ps_edit','');");
E_D("replace into `ecs_supplier_admin_action` values('69','3','order_ss_edit','');");
E_D("replace into `ecs_supplier_admin_action` values('70','3','order_edit','');");
E_D("replace into `ecs_supplier_admin_action` values('81','4','shop_base','');");
E_D("replace into `ecs_supplier_admin_action` values('82','4','shop_menu','');");
E_D("replace into `ecs_supplier_admin_action` values('83','4','shop_guanggao','');");
E_D("replace into `ecs_supplier_admin_action` values('84','4','shop_article','');");
E_D("replace into `ecs_supplier_admin_action` values('85','4','shop_header','');");
E_D("replace into `ecs_supplier_admin_action` values('86','4','shop_templates','');");
E_D("replace into `ecs_supplier_admin_action` values('101','5','admin_list','');");
E_D("replace into `ecs_supplier_admin_action` values('102','5','admin_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('103','5','admin_drop','');");
E_D("replace into `ecs_supplier_admin_action` values('104','5','allot_priv','');");
E_D("replace into `ecs_supplier_admin_action` values('6','0','promotion','');");
E_D("replace into `ecs_supplier_admin_action` values('121','6','bonus_manage','');");
E_D("replace into `ecs_supplier_admin_action` values('122','6','group_by','');");
E_D("replace into `ecs_supplier_admin_action` values('123','6','favourable','');");
E_D("replace into `ecs_supplier_admin_action` values('71','3','booking','');");
E_D("replace into `ecs_supplier_admin_action` values('124','6','auction','');");
E_D("replace into `ecs_supplier_admin_action` values('125','1','order_comment_priv','');");

require("../../inc/footer.php");
?>