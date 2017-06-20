<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_user`;");
E_C("CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
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
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_user` values('1','admin','admin@68ecshop.com','2b42a5d5098e22b04a67de29c3ab4aaa','2897','1416555690','1467699047','139.205.2.22','all','','','0','0','','0');");
E_D("replace into `ecs_admin_user` values('4','68ecshopxjd_cus','68ecshop@ceshi.com','0192023a7bbd73250516f069df18b500','','1458095653','1458359713','113.118.246.91','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,virualcard,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto,feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage,template_manage,agency_manage,suppliers_manage,shop_config,ship_manage,payment,shiparea_manage,area_manage,friendlink,flash_manage,navigator,cron,affiliate,affiliate_ck,sitemap,file_priv,file_check,reg_fields,shop_authorized,webcollect_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage,topic_manage,ad_manage,gift_manage,bonus_manage,auction,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order,attention_list,email_list,magazine_list,view_sendlist,send_mail,mail_template,sms_send,supplier_manage,supplier_rank,supplier_rebate,supplier_tag,weixin_config,weixin_addconfig,weixin_menu,weixin_notice,weixin_keywords,weixin_fans,weixin_news,weixin_addqcode,weixin_qcode,weixin_reg,pickup_point_manage,pickup_point_batch','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0','','0');");
E_D("replace into `ecs_admin_user` values('7','admin888','admin888@qq.com','a5a16f6ec2850a31b0d906f9a2f3a9da','778','1463537948','1467789948','113.128.133.252','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto,feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage,template_manage,admin_manage,admin_drop,allot_priv,logs_manage,logs_drop,agency_manage,suppliers_manage,role_manage,shop_config,ship_manage,payment,shiparea_manage,area_manage,friendlink,db_backup,db_renew,flash_manage,navigator,cron,affiliate,affiliate_ck,sitemap,file_priv,file_check,reg_fields,shop_authorized,webcollect_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage,topic_manage,ad_manage,gift_manage,bonus_manage,auction,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order,attention_list,email_list,magazine_list,view_sendlist,send_mail,library_manage,lang_edit,backup_setting,mail_template,db_backup,db_renew,db_optimize,sql_query,convert,sms_send,supplier_manage,supplier_rank,supplier_rebate,supplier_tag,weixin_config,weixin_addconfig,weixin_menu,weixin_notice,weixin_keywords,weixin_fans,weixin_news,weixin_addqcode,weixin_qcode,weixin_reg,pickup_point_manage,pickup_point_batch','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,'0');");

require("../../inc/footer.php");
?>