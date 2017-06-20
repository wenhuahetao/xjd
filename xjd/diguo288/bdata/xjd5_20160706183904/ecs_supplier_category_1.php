<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_category`;");
E_C("CREATE TABLE `ecs_supplier_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_show_cat_pic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cat_pic` varchar(255) NOT NULL DEFAULT '',
  `cat_pic_url` varchar(100) NOT NULL DEFAULT '',
  `cat_goods_limit` smallint(3) unsigned NOT NULL DEFAULT '4',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`,`supplier_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_category` values('1','进口鲜果','','','0','50','','','1','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('2','国产时令','','','0','50','','','1','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('3','海鲜肉类','','','0','50','','','1','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('4','奇异果','','','1','50','','','0','','1','0','','1','1','','','4');");
E_D("replace into `ecs_supplier_category` values('5','车厘子','','','1','50','','','0','','1','0','','1','1','','','4');");
E_D("replace into `ecs_supplier_category` values('6','苹果','','','2','50','','','0','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('7','火龙果','','','2','50','','','0','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('8','尝鲜包装','','','3','50','','','0','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('9','家庭套餐','','','3','50','','','0','','1','0','','1','0','','','8');");
E_D("replace into `ecs_supplier_category` values('10','童装童鞋','','','0','50','','','1','','1','4','27,22,15','2','1','../data/supplier/category/2c1437531055.jpg','','6');");
E_D("replace into `ecs_supplier_category` values('17','车床玩具','','','0','50','','','1','','1','0','33,29','2','0','','','8');");
E_D("replace into `ecs_supplier_category` values('12','孕婴用品','','','0','50','','','1','','1','0','','2','0','','','8');");
E_D("replace into `ecs_supplier_category` values('13','宝宝营养','','','0','50','','','1','','1','0','','2','0','','','8');");
E_D("replace into `ecs_supplier_category` values('14','童装','','','10','50','','','0','','1','0','','2','0','','','8');");
E_D("replace into `ecs_supplier_category` values('15','亲子装','','','10','50','','','0','','1','0','','2','0','','','8');");
E_D("replace into `ecs_supplier_category` values('16','学步鞋','','','10','50','','','0','','1','0','','2','0','','','8');");
E_D("replace into `ecs_supplier_category` values('18','裙装','','','0','50','','','0','','1','10','15,16','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('19','上装','','','0','50','','','1','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('20','下装','','','0','50','','','1','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('21','鞋子','','','0','50','','','1','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('22','配件','','','0','50','','','1','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('23','小饰品','','','0','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('24','半身裙','','','18','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('25','及膝裙','','','18','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('26','连衣裙','','','18','50','','','1','','1','0','','5','1','../data/supplier/category/5c1437545705.jpg','','8');");
E_D("replace into `ecs_supplier_category` values('27','公主裙','','','18','50','','','1','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('28','休闲裤','','','20','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('29','牛仔裤','','','20','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('30','短裤','','','20','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('31','七分裤','','','20','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('32','衬衫','','','19','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('33','T恤','','','19','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('34','针织衫','','','19','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('35','小西装','','','19','50','','','1','','1','0','','5','1','','','8');");
E_D("replace into `ecs_supplier_category` values('36','帽子','','','22','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('37','腰带','','','22','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('38','手套','','','22','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('39','耳钉','','','23','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('40','发卡','','','23','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('41','项链','','','23','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('42','戒指','','','22','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('43','高跟鞋','','','21','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('44','平底鞋','','','21','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('45','坡跟鞋','','','21','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('46','鱼嘴鞋','','','21','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('48','面部护肤','','','0','50','','','1','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('49','身体护肤','','','0','50','','','1','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('121','眼霜','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('51','香水彩妆','','','0','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('52','洗发护发','','','0','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('53','洁面乳','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('54','护发','','','52','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('55','底妆','','','51','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('56','唇部','','','51','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('57','眼部','','','51','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('58','面霜','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('59','乳液','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('60','爽肤水','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('61','喷雾','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('62','精华','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('63','防晒/隔离','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('64','凝露啫喱','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('65','护肤套装','','','48','50','','','1','','1','0','','6','1','','','8');");
E_D("replace into `ecs_supplier_category` values('66','卸妆','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('67','沐浴','','','49','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('68','面膜','','','48','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('69','颈部','','','49','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('70','纤体塑身','','','49','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('71','补水收缩','','','49','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('76','套装','','','51','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('77','香水','','','51','50','','','0','','1','0','','6','1','','','8');");
E_D("replace into `ecs_supplier_category` values('78','腮红','','','51','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('79','染发','','','52','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('80','造型','','','52','50','','','0','','1','0','','6','0','','','8');");
E_D("replace into `ecs_supplier_category` values('81','洗发','','','52','50','','','1','','1','0','','6','1','','','8');");
E_D("replace into `ecs_supplier_category` values('82','孕妈装','','','12','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('83','奶瓶水杯','','','12','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('84','宝宝洗护','','','12','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('85','婴儿玩具','','','17','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('86','早教益智','','','17','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('87','爬行健身','','','17','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('88','婴儿奶粉','','','13','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('89','宝宝辅食','','','13','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('90','宝宝零食','','','13','50','','','0','','1','0','','2','0','','','6');");
E_D("replace into `ecs_supplier_category` values('91','卧室家具','','','0','50','','','1','','1','3','','7','1','','','5');");
E_D("replace into `ecs_supplier_category` values('92','客厅家具','','','0','50','','','1','','1','0','','7','0','','','6');");
E_D("replace into `ecs_supplier_category` values('93','精品厨具','','','0','50','','','1','','1','0','','7','0','','','6');");
E_D("replace into `ecs_supplier_category` values('94','床品套件','','','0','50','','','1','','1','0','','7','0','','','6');");
E_D("replace into `ecs_supplier_category` values('95','窗帘布艺','','','0','50','','','1','','1','0','','7','0','','','6');");
E_D("replace into `ecs_supplier_category` values('96','日用清洁','','','0','50','','','1','','1','0','','7','0','','','6');");
E_D("replace into `ecs_supplier_category` values('97','床头柜','','','91','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('98','衣柜','','','91','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('99','梳妆台','','','91','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('100','实木床','','','91','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('101','沙发床','','','92','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('102','边桌/茶几','','','92','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('103','鞋柜','','','92','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('104','功能沙发','','','92','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('105','烹饪锅具','','','93','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('106','厨房配件','','','93','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('107','餐具','','','93','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('108','茶具/咖啡杯','','','93','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('109','床品套件','','','94','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('110','床单床垫','','','94','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('111','纯棉四件套','','','94','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('112','记忆枕','','','94','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('113','欧式系类','','','95','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('114','田园系列','','','95','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('115','韩式系列','','','95','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('116','简约现代','','','95','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('117','浴室用品','','','96','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('118','净化除味','','','96','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('119','厨房清洁','','','96','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('120','驱虫用品','','','96','50','','','0','','1','0','','7','0','','','8');");
E_D("replace into `ecs_supplier_category` values('139','食品生鲜','','','0','50','','','0','','1','0','','5','0','','','8');");
E_D("replace into `ecs_supplier_category` values('140','铁观音','','','0','50','','','1','','1','0','','18','0','','','8');");
E_D("replace into `ecs_supplier_category` values('141','饮料','','','0','50','','','1','','1','0','','18','0','','','8');");
E_D("replace into `ecs_supplier_category` values('142','酒水','','','0','50','','','1','','1','0','','18','0','','','8');");
E_D("replace into `ecs_supplier_category` values('143','茗茶','','','0','50','','','1','','1','0','','18','0','','','8');");
E_D("replace into `ecs_supplier_category` values('144','女装','','','0','50','','','0','','1','0','','21','0','','','8');");

require("../../inc/footer.php");
?>