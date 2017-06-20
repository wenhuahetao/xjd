<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_shop_config`;");
E_C("CREATE TABLE `ecs_ecsmart_shop_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=922 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_shop_config` values('1','0','shop_info','group','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('2','0','basic','group','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('3','0','display','group','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('4','0','shopping_flow','group','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('5','0','smtp','group','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('6','0','hidden','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('909','3','pc_url','text','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('9','0','wap','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('101','1','shop_name','text','','','家乐惠超市','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('102','1','shop_title','text','','','小京东5.0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('103','1','shop_desc','text','','','小京东5.0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('104','1','shop_keywords','text','','','网上购物,网上商城,手机,笔记本,电脑,MP3,CD,VCD,DV,相机,数码,配件,手表,存储卡,京东','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('115','1','service_phone','text','','','13800138000','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('921','911','distrib_style','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('919','911','is_add_distrib','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('920','911','search_goods_count','text','','','50','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('918','911','reserve_money','text','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('201','2','lang','manual','','','zh_cn','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('209','2','rewrite','select','0,1,2','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('218','2','stats_code','textarea','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('220','2','register_points','text','','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('227','2','comment_factor','select','0,1,2,3','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('236','2','message_board','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('239','2','certificate_id','hidden','','','1943912836','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('240','2','token','hidden','','','07364f89d098428bcfd159ab4605002e7d6ac5ab0fd3f69c517bf24a7f4e7cab','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('241','2','certi','hidden','','','http://service.shopex.cn/openapi/api.php','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('301','3','date_format','hidden','','','Y-m-d','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('314','3','comments_number','text','','','5','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('303','3','currency_format','hidden','','','%s','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('318','3','price_format','select','0,1,2,3,4,5','','5','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('319','3','page_size','text','','','10','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('320','3','sort_order_type','select','0,1,2','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('321','3','sort_order_method','select','0,1','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('322','3','show_order_type','select','0,1','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('324','3','goods_gallery_number','text','','','5','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('330','3','search_keywords','text','','','兰芝,雅漾,雪肌精,雅诗兰黛,DHC,女装,男装,T恤,时尚,流行元素','0');");
E_D("replace into `ecs_ecsmart_shop_config` values('334','3','article_page_size','text','','','10','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('337','3','index_ad','hidden','','','sys','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('403','4','use_bonus','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('404','4','use_surplus','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('405','4','use_how_oos','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('420','4','min_goods_amount','text','','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('501','5','smtp_host','text','','','SMTP.qq.com','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('502','5','smtp_port','text','','','25','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('503','5','smtp_user','text','','','39035000@qq.com','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('504','5','smtp_pass','password','','','isnzgwgetwjtbhge','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('505','5','smtp_mail','text','','','39035000@qq.com','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('506','5','mail_charset','select','UTF8,GB2312,BIG5','','UTF8','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('507','5','mail_service','select','0,1','','1','0');");
E_D("replace into `ecs_ecsmart_shop_config` values('508','5','smtp_ssl','select','0,1','','0','0');");
E_D("replace into `ecs_ecsmart_shop_config` values('601','6','integrate_code','hidden','','','ecshop','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('602','6','integrate_config','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('603','6','hash_code','hidden','','','31693422540744c0a6b6da635b7a5a93','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('604','6','template','hidden','','','68ecshopcom_mobile','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('605','6','install_date','hidden','','','1291604919','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('606','6','ecs_version','hidden','','','v2.7.3','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('607','6','sms_user_name','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('608','6','sms_password','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('609','6','sms_auth_str','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('610','6','sms_domain','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('611','6','sms_count','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('612','6','sms_total_money','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('613','6','sms_balance','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('614','6','sms_last_request','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('616','6','affiliate','hidden','','','a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:3:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}}s:2:\"on\";i:1;}','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('617','6','captcha','hidden','','','0','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('618','6','captcha_width','hidden','','','100','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('619','6','captcha_height','hidden','','','20','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('620','6','sitemap','hidden','','','a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}','0');");
E_D("replace into `ecs_ecsmart_shop_config` values('621','6','points_rule','hidden','','','','0');");
E_D("replace into `ecs_ecsmart_shop_config` values('622','6','flash_theme','hidden','','','redfocus','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('623','6','stylename','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('917','911','deposit_least_money','text','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('916','911','distrib_percent','text','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('915','911','distrib_type','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('914','911','is_distrib','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('913','911','call_username','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('910','3','simgnum','text','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('911','0','distrib','group','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('912','911','distrib_rank','manual','','','-1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('901','9','wap_config','select','1,0','','1','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('902','9','wap_logo','file','','../images/','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('905','2','ent_id','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('906','2','ent_ac','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('907','2','ent_sign','hidden','','','','1');");
E_D("replace into `ecs_ecsmart_shop_config` values('908','2','ent_email','hidden','','','','1');");

require("../../inc/footer.php");
?>